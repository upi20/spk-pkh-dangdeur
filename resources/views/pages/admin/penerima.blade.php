@extends('layouts.admin.master')

@section('content')
    @php
        $can_insert = auth_can(h_prefix('insert'));
        $can_update = auth_can(h_prefix('update'));
        $can_delete = auth_can(h_prefix('delete'));
        $can_set_status = auth_can(h_prefix('set_status'));
        $is_admin = is_admin();
    @endphp

    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <h6 class="mt-2">Tabel {{ $page_attr['title'] }}</h6>
                <div>
                    @if ($can_delete)
                        <button type="button" class="btn btn-rounded btn-danger btn-sm me-1" data-toggle="tooltip"
                            title="Hapus Data Yang Dipilih" id="btnCheckboxDelete" style="display: none"
                            onclick="checkBoxActionDelete()">
                            <i class="fas fa-trash"></i> Hapus Data</button>
                        <button type="button" class="btn btn-rounded btn-primary btn-sm" data-bs-effect="effect-scale"
                            data-bs-toggle="modal" href="#modal-default" onclick="addFunc()" data-target="#modal-default">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    @endif
                </div>
            </div>
            <hr class="mt-1 mb-0" />
            <div class="accordion accordion-flush" id="accordionOption">
                <div class="accordion-item">
                    <h6 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterData" aria-expanded="false" aria-controls="filterData">
                            Filter Data
                        </button>
                    </h6>
                    <div id="filterData" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionOption">
                        <div class="accordion-body">
                            <form action="javascript:void(0)" class="ml-md-3 mb-md-3" id="FilterForm">
                                <div class="form-group float-start me-2">
                                    <label for="filter_status">Status</label>
                                    <select class="form-control" id="filter_status" name="filter_status"
                                        style="max-width: 200px">
                                        <option value="">Semua</option>
                                        <option value="0">Diproses</option>
                                        <option value="1">Sesuai</option>
                                        <option value="2">Tidak Sesuai</option>
                                    </select>
                                </div>
                            </form>
                            <div style="clear: both"></div>
                            <button type="submit" form="FilterForm" class="btn btn-rounded btn-sm btn-secondary mt-2"
                                data-toggle="tooltip" title="Refresh Filter Table">
                                <i class="fas fa-sync-alt me-1"></i> Terapkan filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover w-100" id="tbl_main">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="checkboxAll" onclick="checkBoxSetAll(this)"
                                class="form-check-input position-relative ms-1">
                        </th>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Penerima</th>
                        <th>Penghasilan</th>
                        <th>Aset</th>
                        <th>Kepemilikan Rumah</th>
                        <th>Kondisi Dinding Rumah</th>
                        <th>Kondisi Lantai Rumah</th>
                        <th>Syarat Khusus</th>
                        <th>Status</th>
                        {!! $can_delete || $can_update ? '<th>Aksi</th>' : '' !!}
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-default-title"></h6><button aria-label="Tutup" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="MainForm" name="MainForm" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nik">Nomor Induk Kependudukan</label>
                                    <input type="number" class="form-control" id="nik" name="nik"
                                        placeholder="Nomor Induk Kependudukan" required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="c1">Penghasilan</label>
                                    <input type="number" class="form-control" id="c1" name="c1"
                                        placeholder="Penghasilan" min="0" max="3500000" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="c2">Aset</label>
                                    <input type="number" class="form-control" id="c2" name="c2"
                                        placeholder="Aset" min="0" max="40000000" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="c3">Kepemilikan Rumah</label>
                                    <select class="form-control" id="c3" name="c3" required>
                                        @for ($i = 10; $i <= 100; $i += 10)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="c4">Kondisi Dinding Rumah</label>
                                    <select class="form-control" id="c4" name="c4" required>
                                        @for ($i = 10; $i <= 100; $i += 10)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="c5">Kondisi Lantai Rumah</label>
                                    <select class="form-control" id="c5" name="c5" required>
                                        @for ($i = 10; $i <= 100; $i += 10)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="c6">Syarat Khusus</label>
                                    <select class="form-control" id="c6" name="c6" required>
                                        <option value="1">Ada</option>
                                        <option value="0">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-save" form="MainForm">
                        <li class="fas fa-save mr-1"></li> Simpan Perubahan
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i> Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset_admin('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'can_update' => $can_update ? 'true' : 'false',
                'can_delete' => $can_delete ? 'true' : 'false',
                'can_set_status' => $can_set_status ? 'true' : 'false',
                'is_admin' => $is_admin ? 'true' : 'false',
            ],
        );
    @endphp

    <script src="{{ $resource }}"></script>
@endsection

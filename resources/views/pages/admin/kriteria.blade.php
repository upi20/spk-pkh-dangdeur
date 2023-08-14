@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mt-2 text-uppercase">Kriteria Penghasilan</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nilai</th>
                                <th>Kategori</th>
                                <th>Penghasilan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rendah</td>
                                <td>Rp 0 - Rp 2.000.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sedang</td>
                                <td>Rp 1.500.000 - Rp 2.500.000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tinggi</td>
                                <td>Rp 2.500.000 - Rp 3.500.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mt-2 text-uppercase">Kriteria Aset</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nilai</th>
                                <th>Kategori</th>
                                <th>Aset</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rendah</td>
                                <td>Rp 0 - Rp 20.000.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sedang</td>
                                <td>Rp 10.000.000 - Rp 30.000.000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tinggi</td>
                                <td>Rp 20.000.000 - Rp 40.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mt-2 text-uppercase">Kriteria Kepemilikan Rumah</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nilai</th>
                                <th>Kategori</th>
                                <th>Kepemilikan Rumah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Numpang</td>
                                <td>0-40</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sewa</td>
                                <td>35-85</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Milik Sendiri</td>
                                <td>80-100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mt-2 text-uppercase">Kriteria Kondisi Dinding Rumah</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nilai</th>
                                <th>Kategori</th>
                                <th>Kondisi Dinding Rumah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kayu</td>
                                <td>0-40</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Setengah Kayu</td>
                                <td>35-85</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Bata</td>
                                <td>80-100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mt-2 text-uppercase">Kriteria Kondisi Lantai Rumah</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nilai</th>
                                <th>Kategori</th>
                                <th>Kondisi Lantai Rumah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tanah</td>
                                <td>0-40</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Semen</td>
                                <td>35-85</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Keramik</td>
                                <td>80-100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mt-2 text-uppercase">Kriteria Syarat Khusus</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nilai</th>
                                <th>Kategori</th>
                                <th>Syarat Khusus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ada</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tidak Ada</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

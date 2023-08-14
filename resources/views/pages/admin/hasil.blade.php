@extends('layouts.admin.master')

@section('content')
    @php $nilais = $penerimas[4]; @endphp
    <div class="card mt-3">
        <div class="card-header">
            <h6 class="mt-2">Penerima Layak Mendapakan PKH</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Peneirma</th>
                        @foreach ($headers as $k => $header)
                            <th>{{ $header }}</th>
                        @endforeach
                        <th>Total</th>
                        <th>Layak</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nilais as $nilai)
                        <tr>
                            <td></td>
                            <td>{{ $nilai->nama }}</td>
                            @foreach ($headers as $k => $header)
                                <td data-toggle="tooltip" title="{{ $nilai->{$k} }}">
                                    {{ $nilai->{"{$k}_nilai_skor"} }}
                                </td>
                            @endforeach
                            <td data-toggle="tooltip" title="{{ $nilai->totals_str }}">
                                {{ $nilai->totals }}
                            </td>
                            <td>
                                <i class="fas fa-circle me-1 text-{{ $nilai->layak_class }}"></i>
                                {{ $nilai->layak }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset_admin('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(() => {
            $('.datatable').each((i, e) => {
                const table_html = $(e);
                const new_table = $(e).DataTable({
                    scrollX: true,
                    language: {
                        url: datatable_indonesia_language_url
                    },
                    columnDefs: [{
                        orderable: false,
                        targets: [0]
                    }],
                });

                new_table.on('draw.dt', function() {
                    tooltip_refresh();
                    var PageInfo = table_html.DataTable().page.info();
                    new_table.column(0, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1 + PageInfo.start;
                    });
                });
            });
        })
    </script>
@endsection

const can_update = "{{ $can_update == 'true' ? 'true' : 'false' }}" === "true";
const can_delete = "{{ $can_delete == 'true' ? 'true' : 'false' }}" === "true";
const can_set_status = "{{ $can_set_status == 'true' ? 'true' : 'false' }}" === "true";
const is_admin = "{{ $is_admin == 'true' ? 'true' : 'false' }}" === "true";
const page_title = "{{ $page_title }}";

const table_html = $('#tbl_main');
let isEdit = true;
$(document).ready(function () {
    // insertForm ===================================================================================
    $('#MainForm').submit(function (e) {
        e.preventDefault();
        resetErrorAfterInput();
        var formData = new FormData(this);
        setBtnLoading('#btn-save', 'Simpan');
        const route = ($('#id').val() == '') ?
            "{{ route(l_prefix($hpu, 'insert')) }}" :
            "{{ route(l_prefix($hpu, 'update')) }}";
        $.ajax({
            type: "POST",
            url: route,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                $("#modal-default").modal('hide');
                getTable();
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 1500
                })

            },
            error: function (data) {
                const res = data.responseJSON ?? {};
                errorAfterInput = [];
                for (const property in res.errors) {
                    errorAfterInput.push(property);
                    setErrorAfterInput(res.errors[property], `#${property}`);
                }
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: res.message ?? 'Something went wrong',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            complete: function () {
                setBtnLoading('#btn-save',
                    '<li class="fas fa-save mr-1"></li> Simpan',
                    false);
            }
        });
    });
});

function addFunc() {
    const render = (data) => {
        $('#id').val('');
        $('#nik').val('');
        $('#nama').val('');
        $('#alamat').val('');
        const conteiner = $('#myForm');
        let html = '';

        data.forEach(e => {
            html += `<div class="col-md-6"><div class="form-group">
                <label class="form-label mb-1" for="nilai${e.id}" title="nilai${e.kode}">${e.nama}<span class="text-danger">*</span> </label>
                <input type="number" step="any" class="form-control" id="nilai${e.id}" name="nilais[${e.id}]" placeholder="${e.keterangan}" required="" />
                <small>${e.keterangan}</small>
            </div></div>`;
        });

        conteiner.html(html);

        $('#MainForm').trigger("reset");
        $('#modal-default').modal('show');
        $('#modal-default-title').html("Tambah");
    };

    $.LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: `{{ url(l_prefix_uri($hpu,'kriteria')) }}`,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: (data) => {
            render(data);
        },
        error: function (data) {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Something went wrong',
                showConfirmButton: false,
                timer: 1500
            })
        },
        complete: function () {
            $.LoadingOverlay("hide");
        }
    });
}

function editFunc(id) {
    const render = (datas) => {
        $('#id').val(datas.id);
        $('#nama').val(datas.nama);
        $('#nik').val(datas.nik);
        $('#alamat').val(datas.alamat);
        const conteiner = $('#myForm');
        let html = '';

        datas.kriterias.forEach(e => {
            const values = e.nilais.length ? e.nilais[0].nilai : '';
            html += `<div class="col-md-6"><div class="form-group">
                <label class="form-label mb-1" for="nilai${e.id}" title="nilai${e.kode}">${e.nama}<span class="text-danger">*</span> </label>
                <input type="number" step="any" class="form-control" id="nilai${e.id}" name="nilais[${e.id}]" placeholder="${e.keterangan}" required="" value="${values}"  />
                <small>${e.keterangan}</small>
            </div></div>`;
        });

        conteiner.html(html);

        $('#modal-default').modal('show');
        $('#modal-default-title').html("Ubah");
    };

    $.LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: `{{ route(l_prefix($hpu, 'find')) }}`,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id
        },
        success: (data) => {
            $('#modal-default-title').html("Ubah {{ $page_title }}");
            $('#modal-default').modal('show');
            render(data);
        },
        error: function (data) {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Something went wrong',
                showConfirmButton: false,
                timer: 1500
            })
        },
        complete: function () {
            $.LoadingOverlay("hide");
        }
    });

}

function deleteFunc(id) {
    swal.fire({
        title: 'Are you sure?',
        text: "Are you sure you want to proceed ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: `{{ url(l_prefix_uri($hpu)) }}/${id}`,
                type: 'DELETE',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    swal.fire({
                        title: 'Please Wait..!',
                        text: 'Is working..',
                        onOpen: function () {
                            Swal.showLoading()
                        }
                    })
                },
                success: function (data) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '{{ $page_title }} deleted successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    getTable();
                },
                complete: function () {
                    swal.hideLoading();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swal.hideLoading();
                    swal.fire("!Opps ", "Something went wrong, try again later", "error");
                }
            });
        }
    });
}

// render table ====================================================
function renderTable(element_table, cari = '') {
    const tableUser = $(element_table).DataTable({
        columnDefs: [{
            orderable: false,
            targets: [0]
        }],
        scrollX: true,
        aAutoWidth: true,
        bAutoWidth: true,
        order: [
            [2, 'asc']
        ],
        language: {
            url: datatable_indonesia_language_url
        },
        search: {
            search: cari
        }
    });
    tableUser.on('draw.dt', function () {
        tooltip_refresh();
        var PageInfo = $(element_table).DataTable().page.info();
        tableUser.column(0, {
            page: 'current'
        }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}

function setStatus(id, status) {
    swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda akan mengubah status penduduk ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                method: 'POST',
                url: `{{ route(l_prefix($hpu,'set_status')) }}`,
                data: {
                    id, status
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    swal.fire({
                        title: 'Please Wait..!',
                        text: 'Is working..',
                        onOpen: function () {
                            Swal.showLoading()
                        }
                    })
                },
                success: function (data) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data saved successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    getTable();
                },
                complete: function () {
                    swal.hideLoading();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swal.hideLoading();
                    swal.fire("!Opps ", "Something went wrong, try again later", "error");
                }
            });
        }
    });
}

function getTable() {
    const renderTabelCalon = (datas) => {
        // return;
        const element_table = $('#tbl_main');
        const table_body = element_table.find('tbody');
        const table_head = element_table.find('thead');
        const element_table_id = element_table.attr('id');
        const searchValue = $(`input[aria-controls=${element_table_id}`).val();

        const set_status = can_set_status || is_admin;
        const btn_action = can_update || can_delete || set_status;
        $(element_table).dataTable().fnDestroy();
        if ($.fn.DataTable.isDataTable(element_table)) {
            element_table.DataTable().destroy();
        }
        table_body.html('');
        table_head.html('');

        // generate table header
        let table_head_html_item = '';
        datas.header.forEach((e, i) => {
            table_head_html_item += ` <th  data-toggle="tooltip" title="${e.kode}" >${e.nama}</th>`;
        });

        const btn_html = btn_action ? `<th style="min-width: 80px;">Aksi</th>` : '';
        let table_head_html = `<tr>
                <th>No</th>
                <th>NIK</th>
                <th>${page_title}</th>
                ${table_head_html_item}
                <th>Status</th>
                ${btn_html}
            </tr>`;

        // generate table body
        let table_body_html = '';
        datas.body.forEach(e => {
            let table_body_html_item = '';
            e.nilais.forEach((j, i) => {
                table_body_html_item += ` <td>${j ? format_rupiah(j.nilai) : ''}</td> `;
            });

            const status_class = e.status == 1 ? 'success' : (e.status == 0 ? 'primary' : 'danger');
            const status_text = e.status == 1 ? 'Sesuai' : (e.status == 0 ? 'Diproses' : 'Tidak Sesuai');
            const status = `<i class="fas fa-circle me-2 text-${status_class}"></i>${status_text}`;

            const id = e.id
            const btn_sesuai = (can_set_status && e.status == 0) || is_admin ? `<button type="button" class="btn btn-rounded btn-success btn-sm me-1 mt-1" data-toggle="tooltip" title="Set Data Sesuai" onClick="setStatus('${id}', 1)">
            <i class="fas fa-check"></i>` : '';

            const btn_tidak = (can_set_status && e.status == 0) || is_admin ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1 mt-1" data-toggle="tooltip" title="Set Data Tidak Sesuai" onClick="setStatus('${id}',2)">
            <i class="fas fa-times"></i>` : '';

            const btn_update = can_update ? `<button type="button" class="btn btn-rounded btn-primary btn-sm me-1 mt-1" data-toggle="tooltip" title="Ubah Data" onClick="editFunc('${id}')">
            <i class="fas fa-edit"></i></button>` : '';

            const btn_delete = can_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1 mt-1" data-toggle="tooltip" title="Hapus Data" onClick="deleteFunc('${id}')">
            <i class="fas fa-trash"></i></button>` : '';

            const btn = btn_sesuai + btn_tidak + btn_update + btn_delete;

            const btn_html = btn_action ? `<td style="min-width: 80px;">${btn}</td>` : '';
            table_body_html += `<tr>
                <td></td>
                <td>${e.nik}</td>
                <td>
                    <span class="text-nowrap">${e.nama}</span><br>
                    <small>${e.alamat}</small>
                </td>
                ${table_body_html_item}
                <td class="text-nowrap">${status}</td>
                ${btn_html}
            </tr>`;
        });

        // render table
        table_head.html(table_head_html);
        table_body.html(table_body_html);
        renderTable(element_table, searchValue);
    }

    $.ajax({
        method: 'get',
        url: `{{ route(l_prefix($hpu,'datatable')) }}`,
        data: {
            status: $('#filter_status').val()
        }
    }).done((data) => {
        renderTabelCalon(data);
    }).fail(($xhr) => {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Something went wrong, try again later',
            showConfirmButton: false,
            timer: 3500
        })
    })
}

getTable();

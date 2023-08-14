const can_update = "{{ $can_update == 'true' ? 'true' : 'false' }}" === "true";
const can_delete = "{{ $can_delete == 'true' ? 'true' : 'false' }}" === "true";
const can_set_status = "{{ $can_set_status == 'true' ? 'true' : 'false' }}" === "true";
const is_admin = "{{ $is_admin == 'true' ? 'true' : 'false' }}" === "true";
let isEdit = true;
const table_html = $('#tbl_main');
let dt_checkbox = new Map();
const btn_checkbox_list = [
    '#btnCheckboxDelete',
];

$(document).ready(function () {
    // datatable ====================================================================================
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    const new_table = table_html.DataTable({
        searchDelay: 500,
        processing: true,
        serverSide: true,
        scrollX: true,
        aAutoWidth: false,
        bAutoWidth: false,
        pageLength: 100,
        type: 'GET',
        ajax: {
            url: "{{ route(l_prefix($hpu)) }}",
            data: function (d) {
                d['filter[status]'] = $('#filter_status').val();
            },
            complete: function (data) {
                data.responseJSON.data.forEach(e => {
                    const id = String(e.id);
                    if (dt_checkbox.get(id) == undefined) {
                        dt_checkbox.set(id, false);
                    }
                    checkBoxRefresh();
                });
            }
        },
        columns: [{
            data: 'id',
            name: 'id',
            orderable: false,
            render(data, type, full, meta) {
                return `<input type="checkbox" id="checkbox-${data}" data-id="${data}" class="form-check-input position-relative ms-1" class="checkbox-bulk" onclick="checkBoxSet(this)">`;
            },
        },
        {
            data: null,
            name: 'id'
        },
        {
            data: 'nik',
            name: 'nik'
        },
        {
            data: 'nama',
            name: 'nama',
            render(data, type, full, meta) {
                return `${data}<br><small>${full.alamat}</small>`;
            },
        },
        {
            data: 'c1',
            name: 'c1'
        },
        {
            data: 'c2',
            name: 'c2'
        },
        {
            data: 'c3',
            name: 'c3'
        },
        {
            data: 'c4',
            name: 'c4'
        },
        {
            data: 'c5',
            name: 'c5'
        },
        {
            data: 'c6',
            name: 'c6',
            render(data, type, full, meta) {
                return `<i class="fas fa-circle text-${data ? 'success' : 'warning'} ms-0 me-2"></i> ${data ? 'Ada' : 'Tidak Ada'}`;
            },
        },
        {
            data: 'c6',
            name: 'c6',
            render(data, type, full, meta) {
                const status_class = full.status == 1 ? 'success' : (full.status == 0 ? 'primary' : 'danger');
                const status_text = full.status == 1 ? 'Sesuai' : (full.status == 0 ? 'Diproses' : 'Tidak Sesuai');
                const status = `<i class="fas fa-circle me-2 text-${status_class}"></i>${status_text}`;
                return status;
            },
        },
        ...(can_update || can_delete ? [{
            data: 'id',
            name: 'id',
            render(data, type, full, meta) {
                const btn_sesuai = (can_set_status && full.status == 0) || is_admin ? `<button type="button" class="btn btn-rounded btn-success btn-sm me-1 mt-1" data-toggle="tooltip" title="Set Data Sesuai" onClick="setStatus('${data}', 1)">
                <i class="fas fa-check"></i>` : '';

                const btn_tidak = (can_set_status && full.status == 0) || is_admin ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1 mt-1" data-toggle="tooltip" title="Set Data Tidak Sesuai" onClick="setStatus('${data}',2)">
                <i class="fas fa-times"></i>` : '';

                const btn_update = can_update ? `<button type="button" class="btn btn-rounded btn-primary btn-sm me-1 mt-1" data-toggle="tooltip" title="Ubah Data" onClick="editFunc('${data}')">
                        <i class="fas fa-edit"></i></button>` : '';
                const btn_delete = can_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1 mt-1" data-toggle="tooltip" title="Hapus Data" onClick="deleteFunc('${data}')">
                        <i class="fas fa-trash"></i></button>` : '';

                return btn_sesuai + btn_tidak + btn_update + btn_delete;
            },
            orderable: false
        }] : []),
        ],
        language: { url: datatable_indonesia_language_url },
        order: [
            [3, 'asc']
        ],
    });

    new_table.on('draw.dt', function () {
        tooltip_refresh();
        var PageInfo = table_html.DataTable().page.info();
        new_table.column(1, {
            page: 'current'
        }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

    $('#FilterForm').submit(function (e) {
        e.preventDefault();
        checkBoxBtnReset();
        var oTable = table_html.dataTable();
        oTable.fnDraw(false);
    });


    // insertForm ===================================================================================
    $('#MainForm').submit(function (e) {
        e.preventDefault();
        resetErrorAfterInput();
        const formData = new FormData(this);
        setBtnLoading('#btn-save', 'Simpan Perubahan');
        const route = ($('#id').val() == '') ?
            "{{ route(l_prefix($hpu,'insert')) }}" :
            "{{ route(l_prefix($hpu,'update')) }}";
        $.ajax({
            type: "POST",
            url: route,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                $("#modal-default").modal('hide');
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
                Swal.fire({ position: 'center', icon: 'success', title: 'Data saved successfully', showConfirmButton: false, timer: 1500 });
                isEdit = true;

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
                    '<li class="fas fa-save mr-1"></li> Simpan Perubahan',
                    false);
            }
        });
    });
});


function addFunc() {
    if (!isEdit) return false;
    $('#MainForm').trigger("reset");
    $('#modal-default-title').html("Tambah");
    $('#modal-default').modal('show');
    $('#id').val('');
    resetErrorAfterInput();
    isEdit = false;
    return true;
}

function editFunc(id) {
    $.LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: `{{ route(l_prefix($hpu,'find')) }}`,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: { id },
        success: (data) => {
            isEdit = true;
            $('#modal-default-title').html("Ubah");
            $('#modal-default').modal('show');
            $('#id').val(data.id);
            $('#nik').val(data.nik);
            $('#nama').val(data.nama);
            $('#alamat').val(data.alamat);
            $('#status').val(data.status);
            $('#c1').val(data.c1);
            $('#c2').val(data.c2);
            $('#c3').val(data.c3);
            $('#c4').val(data.c4);
            $('#c5').val(data.c5);
            $('#c6').val(data.c6);
        },
        error: function (data) {
            Swal.fire({ position: 'center', icon: 'error', title: 'Something went wrong', showConfirmButton: false, timer: 1500 })
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
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                beforeSend: function () {
                    swal.fire({ title: 'Please Wait..!', text: 'Is working..', onOpen: function () { Swal.showLoading() } });
                },
                success: function (data) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data deleted successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    var oTable = table_html.dataTable();
                    oTable.fnDraw(false);
                    checkBoxBtnReset();
                },
                complete: function () {
                    swal.hideLoading();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swal.hideLoading();
                    const res = jqXHR.responseJSON ?? {};
                    Swal.fire({ position: 'center', icon: 'error', text: res.message ?? 'Something went wrong', showConfirmButton: true, })
                }
            });
        }
    });
}


// Datatable Checkbox =================================================================================================
function checkBoxSet(element) {
    const id = element.dataset.id;
    const checked = element.checked;
    dt_checkbox.set(String(id), checked);
    checkBoxRefresh(id);
}

function checkBoxRefresh(except = 0) {
    let all = true;
    let btn_show = false;
    for (const [key, value] of dt_checkbox) {
        if (value == false) all = false;
        if (value) btn_show = true;
        if (key == except) continue;
        $(`#checkbox-${key}`).prop("checked", value);
    }
    $('#checkboxAll').prop("checked", all);
    checkBoxBtn(btn_show);
}

function checkBoxSetAll(element) {
    const checked = element.checked;
    for (const [key, value] of dt_checkbox) {
        $(`#checkbox-${key}`).prop("checked", checked);
        dt_checkbox.set(key, checked);
    }
    checkBoxBtn(checked);
}

function checkBoxBtn(show) {
    btn_checkbox_list.forEach(e => {
        const el = $(e);
        if (show && dt_checkbox.size > 0) {
            el.fadeIn();
        } else {
            el.fadeOut();
        }
    });
}

function checkBoxBtnReset() {
    dt_checkbox = new Map();
    checkBoxBtn(false);
}

// Datatable Checkbox Action ==========================================================================================
function checkBoxActionDelete() {
    const form = new FormData();
    let jml_data = 0;
    // preproces
    for (const [key, value] of dt_checkbox) {
        if (value == false) continue;
        form.append('ids[]', key);
        jml_data++;
    }

    swal.fire({
        title: 'Are you sure?',
        text: `Are you sure you want to delete ${jml_data} data?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: `{{ route(l_prefix($hpu, 'delete_bulk')) }}`,
                type: 'POST',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                beforeSend: function () {
                    swal.fire({ title: 'Please Wait..!', text: 'Is working..', onOpen: function () { Swal.showLoading() } });
                },
                success: function (data) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data deleted successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    checkBoxBtnReset();
                    var oTable = table_html.dataTable();
                    oTable.fnDraw(false);
                },
                complete: function () {
                    swal.hideLoading();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swal.hideLoading();
                    const res = jqXHR.responseJSON ?? {};
                    Swal.fire({ position: 'center', icon: 'error', text: res.message ?? 'Something went wrong', showConfirmButton: true, })
                }
            });
        }
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
                    var oTable = table_html.dataTable();
                    oTable.fnDraw(false);
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

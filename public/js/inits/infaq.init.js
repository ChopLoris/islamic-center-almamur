$(document).ready(function () {

    $('#save_btn').click(function () {
        var form = $('#form_infaq');

        Swal.fire({
            title: 'Apakah anda sudah yakin?',
            text: 'Mohon periksa kembali jika anda belum yakin.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin, Edit sekarang!'
        }).then((result) => {
            if(result.isConfirmed) {
                form.submit();
                Swal.fire(
                    'Berhasil!',
                    'Anda berhasil menambahkan data laporan infaq terbaru.',
                    'success'
                )
            }
        })
    })

    $('#btn-save-modal').click(function () {
        var dataPost = {
            infaq_id: $('#infaq_id').val(),
            perihal: $('#perihal').val(),
            tanggal: $('#tanggal_edit').val(),
            total: $('#total').val(),
            jenis_modal: $('#jenis_modal').val(),
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/administrator/infaq/edit',
            type: 'POST',
            data: dataPost,
            success: function (response) {
                if(response.status == 'ok') {
                    Swal.fire(
                        'Berhasil!',
                        response.message,
                        'success'
                    )
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                } else {
                    Swal.fire(
                        'Tidak Berhasil!',
                        response.message,
                        'success'
                    )
                }
                $('#modalEdit').modal('toggle');
            }
        })
    })

    $('.btn-edit').click(function () {
        var dataID = $(this).data('id');

        $.ajax({
            url: '/administrator/infaq/info/'+dataID,
            type: 'GET',
            success: function (response) {
                $('#perihal').val(response.perihal);
                $('#infaq_id').val(response.id);
                $('#tanggal_edit').val(response.tanggal);
                $('#total').val(response.total);
                $('#jenis_modal option[value='+response.jenis+']').attr('selected', 'selected');
                $('#modalEdit').modal('toggle');
            }
        })

        console.log(dataID);
    })

    $('.btn-delete').click(function () {
        var dataID = $(this).data('id');
        var form = $('#form-delete-'+dataID);

        Swal.fire({
            title: 'Apakah anda sudah yakin?',
            text: 'Anda ingin menghapus data laporan infaq ini!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin, Hapus sekarang!'
        }).then((result) => {
            if(result.isConfirmed) {
                Swal.fire(
                    'Berhasil!',
                    'Artikel berhasil di hapus dan tidak dapat di kemablikan kembali.',
                    'success'
                );
                form.submit();
            }
        })
    })
})

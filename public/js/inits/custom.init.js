$(document).ready(function() {
    $('#save_btn').click(function () {
        var form = $('#form_users');

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
                    'Anda berhasil menambahkan User terbaru.',
                    'success'
                )
            }
        })
    })

    $('.btn-edit').click(function () {
        var dataID = $(this).data('id');

        $.ajax({
            url: '/administrator/list-users/info/'+dataID,
            type: 'GET',
            success: function (response) {
                $('#name').val(response.name);
                $('#user_id').val(response.id);
                $('#username').val(response.username);
                $('#level_edit option[value='+response.isAdmin+']').attr('selected', 'selected');
                $('#modalEdit').modal('toggle');
            }
        })
    })

    $('.btn-delete').click(function () {
        var dataID = $(this).data('id');
        var form = $('#form-delete-'+dataID);

        Swal.fire({
            title: 'Apakah anda sudah yakin?',
            text: 'Anda ingin menghapus data user ini!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin, Hapus sekarang!'
        }).then((result) => {
            if(result.isConfirmed) {
                Swal.fire(
                    'Berhasil!',
                    'User berhasil di hapus dan tidak dapat di kemablikan kembali.',
                    'success'
                );
                form.submit();
            }
        })
    })
})

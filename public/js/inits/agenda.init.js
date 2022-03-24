$(document).ready(function() {


    $('.btn-delete').click(function () {
        var dataID = $(this).data('id');
        var form = $('#form-delete-'+dataID);

        Swal.fire({
            title: 'Apakah anda sudah yakin?',
            text: 'Anda ingin menghapus data ini!',
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

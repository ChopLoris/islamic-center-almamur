$(document).ready(function () {

    $('#save_btn').click(function () {
        var form = $('#form_edit');

        Swal.fire({
            title: 'Apakah anda sudah yakin?',
            text: 'Anda ingin mengubah data artikel ini.',
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
                    'Artikel berhasil di edit periksa kembali untuk mengedit ulang.',
                    'success'
                )
            }
        })
    })

    $('#btn_delete').click(function () {
        var form = $('#form_delete');

        Swal.fire({
            title: 'Apakah anda sudah yakin?',
            text: 'Anda ingin menghapus artikel ini dan tidak dapat di kembalikan kembali!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin, Hapus sekarang!'
        }).then((result) => {
            if(result.isConfirmed) {
                form.submit();
                Swal.fire(
                    'Berhasil!',
                    'Artikel berhasil di hapus dan tidak dapat di kemablikan kembali.',
                    'success'
                )
            }
        })

    })

})

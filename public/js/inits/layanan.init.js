$(document).ready(function () {

    $('#save_btn').click(function () {
        var form = $('#form_layanan');

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

    $('.btn-edit').click(function () {
        var dataID = $(this).data('id');

        $.ajax({
            url: '/administrator/layanan/info/'+dataID,
            type: 'GET',
            success: function (response) {
                $('#name').val(response.name);
                $('#layanan_id').val(response.id);
                $('#nama_kontak').val(response.kontak_nama);
                $('#no_tlp').val(response.no_telepon);
                $('#modalEdit').modal('toggle');
            }
        });
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
                    'Gallery berhasil di hapus dan tidak dapat di kemablikan kembali.',
                    'success'
                );
                form.submit();
            }
        })
    })
})


const toastPlacementExample = document.querySelector('.toast-placement-ex'),
toastPlacementBtn = document.querySelector('#showToastPlacement'),
titleToast = document.querySelector('#title-toast'),
bodyToast = document.querySelector('#toast-body');
const positition = 'top-0 end-0';
let toastPlacement, typeToast;

Dropzone.autoDiscover = false;

$(document).ready(function () {
    var myDropzone = new Dropzone('#kt_dropzonejs_example_1', {
        url: '/administrator/gallery/upload',
        maxFilesize : 5000,
        parallelUploads: 20,
        maxFiles: 20,
        acceptedFiles : ".jpg,.png",
        autoProcessQueue: false,
        uploadMultiple: true,
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        init: function () {
            this.on("queuecomplete", function () {
                this.options.autoProcessQueue = false;
                setTimeout(() => {
                    location.reload();
                }, 1500);
            });

            this.on("processing", function () {
                this.options.autoProcessQueue = true;
            });
        },
        error : function(file, message, xhr) {
            if (xhr == null) this.removeFile(file); // perhaps not remove on xhr errors
        },
        success: function () {
            myDropzone.options.autoProcessQueue = false;
            setTimeout(() => {
                myDropzone.removeAllFiles();
            }, 1000);
            sendToast(true, 'Berhasil Terupload!', 'Anda berhasil menambahkan gallery terbaru');
        },
    })

    $('.btn-delete').click(function () {
        var dataID = $(this).data('id');
        var form = $('#form-delete-'+dataID);

        Swal.fire({
            title: 'Apakah anda sudah yakin?',
            text: 'Anda ingin menghapus foto ini!',
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

    $('.btn_simpan').click(function () {
        myDropzone.processQueue();
    })

    function toastDispose(toast) {
        if (toast && toast._element !== null) {
          if (toastPlacementExample) {
            toastPlacementExample.classList.remove('bg-primary');
            DOMTokenList.prototype.remove.apply(toastPlacementExample.classList, positition.split(' '));
          }
          toast.dispose();
        }
    }

    function sendToast(type, title, pesan) {
        if(type) {
            if (toastPlacement) {
                toastDispose(toastPlacement);
            }
            typeToast = 'bg-success';
            toastPlacementExample.classList.add(typeToast);
            DOMTokenList.prototype.add.apply(toastPlacementExample.classList, positition.split(' '));
            toastPlacement = new bootstrap.Toast(toastPlacementExample);
            titleToast.innerHTML = title;
            bodyToast.innerHTML = pesan;
            toastPlacement.show();
        } else {
            if (toastPlacement) {
                toastDispose(toastPlacement);
            }
            typeToast = 'bg-danger';
            toastPlacementExample.classList.add(typeToast);
            DOMTokenList.prototype.add.apply(toastPlacementExample.classList, positition.split(' '));
            toastPlacement = new bootstrap.Toast(toastPlacementExample);
            titleToast.innerHTML = title;
            bodyToast.innerHTML = pesan;
            toastPlacement.show();
        }
    }

})

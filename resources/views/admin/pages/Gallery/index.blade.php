@extends('admin.layouts.master')
@section('custom-css')
@trixassets
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('js/plugins/DataTables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/dropzone/dropzone.min.css') }}">
<style>
    .trix-content {
        height: 356px !important;
        max-height: 356px !important;
        overflow-y: auto !important;
    }
</style>
@endsection

@section('title', "Dashboard Administrator | Masjid Jami Al-Mamur")

@section('content')

<div class="container-xxl flex-grow-1 container-p-y" x-data="{ isOpen : false }">
    <div class="bs-toast toast toast-placement-ex m-2" role="alert" aria-live="assertive" aria-atomic="true"
        data-delay="2000">
        <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold" id='title-toast'>Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" id="toast-body">Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.</div>
    </div>
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Gallery /</span> List Gallery
        <button class="btn btn-primary float-end" @click.prevent="isOpen = !isOpen"><i class="bx bx-plus"></i> Tambah</button>
    </h4>

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
    @elseif (session()->has('failed'))
        <div class="alert alert-danger" role="alert">{{ session('failed') }}</div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="compose-content" x-show="isOpen">
                <label class="form-label" for="sifat">Upload Foto
                    <span class="text-danger">*</span>
                </label>
                <form class="form" action="#" method="post">
                    <!--begin::Input group-->
                    <div class="fv-row">
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="kt_dropzonejs_example_1">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                <!--end::Icon-->

                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.
                                    </h3>
                                    <span class="fs-7 fw-bold text-gray-400">Upload up to 10 files</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
                </form>
                <!--end::Form-->
                <button class="btn btn-primary mt-3 float-end btn_simpan">Simpan</button>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="card overflow-hidden">
                <div class="d-flex justify-content-between">
                    <h5 class="card-header">List Gallery</h5>
                </div>
                <div class="table-responsive text-nowrap px-3 py-3">
                    <table id="table_infaq_list" class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Images</th>
                                <th>Filename</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($galleryList as $gallery)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img style="width: 90px" src="{{ asset('images/gallery/')."/".$gallery->filename }}" alt=""></td>
                                <td>{{ $gallery->filename }}</td>
                                <td>{{ $gallery->created_at }}</td>
                                <td>
                                    <form action="{{ route('gallery_delete') }}" id="form-delete-{{ $gallery->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
                                        <button type="button" data-id="{{ $gallery->id }}" class="btn btn-danger btn-delete">
                                            <i class="bx bx-trash me-1"></i> Delete
                                         </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
@section('custom-js')
<script src="{{ asset('js/plugins/alpinejs.min.js') }}"></script>
<script src="{{ asset('js/plugins/SweetAlert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/ui-toasts.js') }}"></script>
<script src="{{ asset('js/plugins/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('js/plugins/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('js/inits/datatables.init.js') }}"></script>
<script src="{{ asset('js/inits/gallery.init.js') }}"></script>
@endsection

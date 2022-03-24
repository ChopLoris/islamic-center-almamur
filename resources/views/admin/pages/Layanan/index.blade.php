@extends('admin.layouts.master')
@section('custom-css')
    @trixassets
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/DataTables/datatables.min.css') }}">
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

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Informasi Kontak /</span> Layanan
      </h4>

      @if(session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @elseif (session()->has('failed'))
            <div class="alert alert-danger" role="alert">{{ session('failed') }}</div>
        @endif

      <div class="card overflow-hidden mb-4">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Tambah Layanan</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('layanan_post') }}" id="form_layanan" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Layanan yang diberikan</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Nama Kontak</label>
                        <input class="form-control @error('nama_kontak') is-invalid @enderror" type="text" name="nama_kontak" required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Nomor Telepon</label>
                        <input class="form-control @error('no_tlp') is-invalid @enderror" type="text" name="no_tlp" required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Foto Layanan</label>
                        <input type="file" class="form-control @error('image_content') is-invalid @enderror" accept="image/png, image/jpeg" name="image_content" id="image_content" required />
                        <div class="invalid-feedback">
                            Anda diharuskan memberikan sebuah gambar.
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" id="save_btn" class="btn btn-primary mt-3">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
      </div>

      <div class="card overflow-hidden">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">List Layanan</h5>
        </div>
        <div class="table-responsive text-nowrap px-3 py-3">
            <table id="table_infaq_list" class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Layanan</th>
                        <th>Nama Kontak</th>
                        <th>Nomor Telepon</th>
                        <th>Pembuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($listLayanan as $layanan)
                    <tr>
                        <td><strong>{{ $loop->iteration }}</strong></td>
                        <td>
                            <img style="width: 90px" src="{{ asset('images/layanan/')."/".$layanan->filename_images }}" alt="">
                        </td>
                        <td>{{ $layanan->name }}</td>
                        <td>{{ $layanan->kontak_nama }}</td>
                        <td>{{ $layanan->no_telepon }}</td>
                        <td><span class="text-primary">{{ $layanan->user->name }}</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button
                                    type="button"
                                    class="dropdown-item btn-edit"
                                    data-id="{{ $layanan->id }}"
                                    >
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                    </button>
                                  <form action="{{ route('layanan_delete') }}" id="form-delete-{{ $layanan->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="layanan_id" value="{{ $layanan->id }}">
                                    <button type="button" data-id="{{ $layanan->id }}" class="btn-delete dropdown-item">
                                        <i class="bx bx-trash me-1"></i> Delete
                                     </button>
                                  </form>
                                </div>
                              </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


{{-- MODAL --}}
<div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Edit Laporan Infaq</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <form action="{{ route('layanan_edit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="layanan_id" id="layanan_id">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <label class="form-label" for="">Layanan yang diberikan</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <label class="form-label" for="">Nama Kontak</label>
                        <input class="form-control @error('nama_kontak') is-invalid @enderror" type="text" name="nama_kontak" id="nama_kontak" required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <label class="form-label" for="">Nomor Telepon</label>
                        <input class="form-control @error('no_tlp') is-invalid @enderror" type="text" name="no_tlp" id="no_tlp" required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <label class="form-label" for="">Foto Layanan</label>
                        <input type="file" class="form-control" accept="image/png, image/jpeg" name="image_content" id="image_content"/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@section('custom-js')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('js/inits/datatables.init.js') }}"></script>
<script src="{{ asset('js/plugins/SweetAlert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/inits/layanan.init.js') }}"></script>
@endsection

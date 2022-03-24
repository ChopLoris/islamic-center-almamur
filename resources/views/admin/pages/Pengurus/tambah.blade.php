@extends('admin.layouts.master')
@section('custom-css')
    @trixassets
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
        <span class="text-muted fw-light">Pengurus Masjid /</span> Tambah
      </h4>

      <div class="row">
        <div class="col-12">
            <div class="card overflow-hidden">
                <h5 class="card-header">Tambah Pengurus Masjid</h5>
                <div class="card-body">
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                    @elseif (session()->has('failed'))
                        <div class="alert alert-danger" role="alert">{{ session('failed') }}</div>
                    @endif
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="" class="form-label">Nama Pengurus</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required>
                                <div class="invalid-feedback">
                                    Anda harus mengisi Nama Pengurus.
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="" class="form-label">Organisasi</label>
                                <input type="text" class="form-control @error('pengurus') is-invalid @enderror" name="organisasi" id="organisasi" required>
                                <div class="invalid-feedback">
                                    Anda harus mengisi Organisasi Pengurus.
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">Keterangan Pengurus</label>
                                <input type="hidden" class="@error('content') is-invalid @enderror" name="content" id="content">
                                @trix(\App\Artikel::class, 'content', ['hideTools' => ['file-tools'], 'id' => 'content' ])
                                <div class="invalid-feedback">
                                    Anda harus mengisi keterangan Pengurus.
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">Foto Pengurus</label>
                                <input type="file" class="form-control @error('image_content') is-invalid @enderror" name="image_content" id="image_content" required />
                                <div class="invalid-feedback">
                                    Anda diharuskan memberikan sebuah foto.
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
</div>

@endsection

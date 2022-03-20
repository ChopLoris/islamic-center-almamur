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
        <span class="text-muted fw-light">Artikel /</span> Edit Artikel
      </h4>

      <div class="row">
        <div class="col-12">
            <div class="card overflow-hidden">
                <h5 class="card-header">Edit Artikel</h5>
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
                                <label for="" class="form-label">Judul</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $dataArtikel->title) }}" name="title" id="title" required>
                                <div class="invalid-feedback">
                                    Anda harus mengisi Judul artikel.
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="" class="form-label">Jenis Artikel</label>
                                <select class="form-select @error('jenis') is-invalid @enderror" name="jenis" id="jenis" required>
                                    <option selected="">Choose...</option>
                                    @foreach ($kategoriArtikel as $kategori)
                                        <option value="{{ $kategori->id }}" @if($kategori->id == $dataArtikel->kategori_id) selected @endif>{{ $kategori->name }}</option>
                                    @endforeach
                                  </select>
                                  <div class="invalid-feedback">
                                    Anda harus mengisi Jenis artikel.
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">Isi Artikel</label>
                                <input type="hidden" class="@error('content') is-invalid @enderror" value="{{ old('content', $dataArtikel->content) }}" name="content" id="content">
                                @trix(\App\Artikel::class, 'content', ['hideTools' => ['file-tools'], 'id' => 'content' ])
                                <div class="invalid-feedback">
                                    Anda harus mengisi isi artikel.
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">Images</label>
                                <input type="file" class="form-control @error('image_content') is-invalid @enderror" name="image_content" id="image_content" required />
                                <div class="invalid-feedback">
                                    Anda diharuskan memberikan sebuah gambar pada artikel.
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

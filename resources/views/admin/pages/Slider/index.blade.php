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
        <span class="text-muted fw-light">Slider /</span> Edit Slider
      </h4>

      @if(session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @elseif (session()->has('failed'))
            <div class="alert alert-danger" role="alert">{{ session('failed') }}</div>
        @endif
        <div class="col-xl">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Slider</h5>
              </div>
              <div class="card-body">
                <form action="{{ route('slider_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($Images as $foto)
                    <div class="row">
                        <div class="d-flex align-items-center flex-column col-lg-3 col-md-12">
                            <label for="" class="form-label text-center">Slider 1</label>
                            <img style="width: 200px" class="m-auto rounded-pill" src="{{ asset('images/slider/') }}/{{ !empty($foto->slider_1) ? $foto->slider_1 : 'no-image.jpg' }}" alt="">
                            @if (!empty($foto->slider_1))
                            <a href="{{ route('delete_slide', 'slider_1') }}">Delete</a>
                            @endif
                            <input type="file" class="form-control mt-3 @error('image_content') is-invalid @enderror" name="slider1" id="slider1" />
                        </div>
                        <div class="d-flex align-items-center flex-column col-lg-3 col-md-12">
                            <label for="" class="form-label text-center">Slider 2</label>
                            <img style="width: 200px" class="m-auto rounded-pill" src="{{ asset('images/slider/') }}/{{ !empty($foto->slider_2) ? $foto->slider_2 : 'no-image.jpg' }}" alt="">
                            @if (!empty($foto->slider_2))
                            <a href="{{ route('delete_slide', 'slider_2') }}">Delete</a>
                            @endif
                            <input type="file" class="form-control mt-3 @error('image_content') is-invalid @enderror" name="slider2" id="slider2" />
                        </div>
                        <div class="d-flex align-items-center flex-column col-lg-3 col-md-12">
                            <label for="" class="form-label text-center">Slider 3</label>
                            <img style="width: 200px" class="m-auto rounded-pill" src="{{ asset('images/slider/') }}/{{ !empty($foto->slider_3) ? $foto->slider_3 : 'no-image.jpg' }}" alt="">
                            @if (!empty($foto->slider_3))
                            <a href="{{ route('delete_slide', 'slider_3') }}">Delete</a>
                            @endif
                            <input type="file" class="form-control mt-3 @error('image_content') is-invalid @enderror" name="slider3" id="slider3" />
                        </div>
                        <div class="d-flex align-items-center flex-column col-lg-3 col-md-12">
                            <label for="" class="form-label text-center">Slider 4</label>
                            <img style="width: 200px" class="m-auto rounded-pill" src="{{ asset('images/slider/') }}/{{ !empty($foto->slider_4) ? $foto->slider_4 : 'no-image.jpg' }}" alt="">
                            @if (!empty($foto->slider_4))
                            <a href="{{ route('delete_slide', 'slider_4') }}">Delete</a>
                            @endif
                            <input type="file" class="form-control mt-3 @error('image_content') is-invalid @enderror" name="slider4" id="slider4" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 float-end">Simpan</button>
                    @endforeach
                </form>
              </div>
            </div>
          </div>
</div>

@endsection

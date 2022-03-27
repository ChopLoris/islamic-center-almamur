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
        <span class="text-muted fw-light">Informasi Kontak /</span> Social Media
      </h4>

      @if(session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @elseif (session()->has('failed'))
            <div class="alert alert-danger" role="alert">{{ session('failed') }}</div>
        @endif
        <div class="col-xl">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Informasi Social Media</h5>
              </div>
              <div class="card-body">
                <form action="{{ route('sosmed_post') }}" method="POST">
                    @csrf
                    @foreach ($sosmedList as $sosmed)
                    <div class="mb-3">
                        <label class="form-label" for="youtube">Youtube</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class="bx bxl-youtube"></i
                          ></span>
                          <input
                            type="text"
                            class="form-control"
                            name="youtube"
                            value="{{ !empty($sosmed->youtube) ? $sosmed->youtube : '' }}"
                            id="basic-icon-default-fullname"
                            placeholder="https://youtube.com/name-channel"
                            aria-describedby="basic-icon-default-fullname2"
                          />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Facebook</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text"
                            ><i class="bx bxl-facebook"></i
                          ></span>
                          <input
                            type="text"
                            id="basic-icon-default-company"
                            name="facebook"
                            value="{{ !empty($sosmed->facebook) ? $sosmed->facebook : '' }}"
                            class="form-control"
                            placeholder="https://facebook.com/username"
                            aria-describedby="basic-icon-default-company2"
                          />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-email">Instagram</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bxl-instagram"></i></span>
                          <input
                            type="text"
                            id="basic-icon-default-email"
                            class="form-control"
                            value="{{ !empty($sosmed->instagram) ? $sosmed->instagram : '' }}"
                            name="instagram"
                            placeholder="@username"
                            aria-describedby="basic-icon-default-email2"
                          />
                          <span id="basic-icon-default-email2" class="input-group-text">@example</span>
                        </div>
                      </div>
                    @endforeach
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
              </div>
            </div>
          </div>
</div>

@endsection

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
        <span class="text-muted fw-light">Akun /</span> Setting
      </h4>

      @if(session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @elseif (session()->has('failed'))
            <div class="alert alert-danger" role="alert">{{ session('failed') }}</div>
        @endif
        <div class="col-xl">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Informasi Akun Anda</h5>
              </div>
              <div class="card-body">
                <form action="{{ route('users_edit') }}" id="form-settings" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                  <div class="mb-3">
                    <label class="form-label" for="youtube">Name</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="basic-icon-default-fullname"
                        aria-describedby="basic-icon-default-fullname2"
                        required
                        value="{{ auth()->user()->name }}"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-company">Username</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="text"
                        id="basic-icon-default-company"
                        name="username"
                        class="form-control"
                        aria-describedby="basic-icon-default-company2"
                        required
                        value="{{ auth()->user()->username }}"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        aria-describedby="password2"
                        required
                      />
                      <div class="invalid-feedback">
                        Password dan Confirm Password tidak sama.
                    </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="password">Confirm Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="confirm-pass"
                        class="form-control"
                        name="confirm-pass"
                        aria-describedby="password"
                        required
                      />
                      <div class="invalid-feedback">
                        Password dan Confirm Password tidak sama.
                    </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary btn-save">Simpan</button>
                </form>
              </div>
            </div>
          </div>
</div>

@endsection

@section('custom-js')
<script>
    $(document).ready(function() {
        var checkpass = false;

        $('.btn-save').click(function() {
            if(checkpass) {
                $('#form-settings').submit();
            }
        })

        $('#password, #confirm-pass').on('keyup', function () {
        if ($('#password').val() == $('#confirm-pass').val()) {
            checkpass = true;
            $('#password').removeClass('is-invalid');
        } else
            checkpass = false;
            $('#password').addClass('is-invalid');
        });
    })
</script>
@endsection

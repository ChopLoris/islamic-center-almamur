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
        <span class="text-muted fw-light">Infaq /</span> List Infaq
      </h4>

      @if(session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @elseif (session()->has('failed'))
            <div class="alert alert-danger" role="alert">{{ session('failed') }}</div>
        @endif

      <div class="card overflow-hidden mb-4">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Tambah Laporan Saldo Infaq</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('infaq_post') }}" id="form_infaq" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Dari</label>
                        <input class="form-control @error('perihal') is-invalid @enderror" type="text" name="perihal" required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Total</label>
                        <input class="form-control @error('total') is-invalid @enderror" type="number" name="total" required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Tanggal</label>
                        <input class="form-control" name="tanggal" type="date" value="" id="html5-date-input" required />
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Jenis</label>
                        <select class="form-select" name="jenis" id="jenis" required>
                            <option value="">--Pilih--</option>
                            @if ($totalData > 0)
                            <option value="0">Pengeluaran</option>
                            @endif
                            <option value="1">Pemasukkan</option>
                        </select>
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
            <h5 class="card-header">List Laporan</h5>
        </div>
        <div class="table-responsive text-nowrap px-3 py-3">
            <table id="table_infaq_list" class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Dari</th>
                        <th>Total</th>
                        <th>Jenis</th>
                        <th>Tanggal</th>
                        <th>Pembuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($listInfaq as $infaq)
                    <tr>
                        <td><strong>{{ $loop->iteration }}</strong></td>
                        <td>{{ $infaq->perihal }}</td>
                        <td>Rp. {{ number_format($infaq->total) }}</td>
                        <td>{{ $infaq->jenis == 1 ? 'Pemasukkan' : 'Pengeluaran' }}</td>
                        <td>{{ $infaq->tanggal }}</td>
                        <td><span class="text-primary">{{ $infaq->user->name }}</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button
                                    type="button"
                                    class="dropdown-item btn-edit"
                                    data-id="{{ $infaq->id }}"
                                    >
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                    </button>
                                  <form action="{{ route('infaq_delete') }}" id="form-delete-{{ $infaq->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="infaq_id" value="{{ $infaq->id }}">
                                    <button type="button" data-id="{{ $infaq->id }}" class="btn-delete dropdown-item">
                                        <i class="bx bx-trash me-1"></i> Delete
                                     </button>
                                  </form>
                                </div>
                              </div>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td class="fw-bold">Total Saldo</td>
                        <td colspan="5" align="center"></td>
                        <td style="display: none"></td>
                        <td style="display: none"></td>
                        <td style="display: none"></td>
                        <td style="display: none"></td>
                        <td class="fw-bold">Rp. {{ number_format($totalSaldo) }}</td>
                    </tr>
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
        <div class="modal-body">
            <input type="hidden" id="infaq_id">
          <div class="row">
            <div class="col mb-3">
              <label for="perihal" class="form-label">Dari</label>
              <input type="text" id="perihal" class="form-control" />
            </div>
            <div class="col mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input class="form-control" name="tanggal_edit" id="tanggal_edit" type="date" value="" required />
            </div>
          </div>
          <div class="row g-2">
            <div class="col mb-0">
              <label for="total" class="form-label">Total</label>
              <input type="text" id="total" class="form-control" />
            </div>
            <div class="col mb-0">
              <label for="dobBasic" class="form-label">Jenis</label>
              <select class="form-select" name="jenis_modal" id="jenis_modal" required>
                <option value="">--Pilih--</option>
                <option value="0">Pengeluaran</option>
                <option value="1">Pemasukkan</option>
                </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" id="btn-save-modal" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('custom-js')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('js/inits/datatables.init.js') }}"></script>
<script src="{{ asset('js/plugins/SweetAlert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/inits/infaq.init.js') }}"></script>
@endsection

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
        <span class="text-muted fw-light">Update /</span> Agenda Jum'at
    </h4>

    <div class="row">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @elseif (session()->has('failed'))
            <div class="alert alert-danger" role="alert">{{ session('failed') }}</div>
        @endif
        <div class="d-flex flex-column col-md-12 col-lg-12 mb-3" x-data="{ isOpen : false }">
            <div class="mb-3">
                <button type="button" class="btn btn-primary float-end" @click.prevent="isOpen = !isOpen"><i class='bx bx-plus'></i> Tambah Agenda Jum'at</button>
            </div>
            <div class="card" x-show="isOpen">
                <h5 class="card-header">Tambah Agenda Jum'at</h5>
                <div class="card-body">
                    <form action="{{ route('agenda_post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-lg-6 mb-3">
                                <label for="form-label">Nama Imam</label>
                                <input class="form-control" name="imam" type="text" required>
                            </div>
                            <div class="col-md-12 col-lg-6 mb-3">
                                <label for="form-label">Nama Khatib</label>
                                <input class="form-control" name="khatib" type="text">
                            </div>
                            <div class="col-md-12 col-lg-6 mb-3">
                                <label for="form-label">Nama Muadzin</label>
                                <input class="form-control" name="muadzin" type="text">
                            </div>
                            <div class="col-md-12 col-lg-6 mb-3">
                                <label for="form-label">Nama Bilal</label>
                                <input class="form-control" name="bilal" type="text">
                            </div>
                            <div class="col-md-12 col-lg-6 mb-3">
                                <label for="form-label">Tanggal Mulai</label>
                                <input class="form-control" name="tanggal_mulai" type="date" value="" id="html5-date-input" required />
                            </div>
                            <div class="col-md-12 col-lg-6 mb-3">
                                <label for="" class="form-label">Foto Imam <span class="text-danger">( Optional )</span></label>
                                <input type="file" class="form-control @error('image_content') is-invalid @enderror" name="image_content" id="image_content" />
                                <div class="invalid-feedback">
                                    Anda diharuskan memberikan sebuah gambar pada artikel.
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 mb-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <h5 class="card-header">List Agenda Jum'at</h5>
                <div class="table-responsive text-nowrap px-3 py-3">
                    <table id="table_agenda" class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Imam</th>
                                <th>Khatib</th>
                                <th>Muadzin</th>
                                <th>Bilal</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($agendaList as $agenda)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $agenda->imam }}</td>
                                    <td>{{ $agenda->khatib }}</td>
                                    <td>{{ $agenda->muadzin }}</td>
                                    <td>{{ $agenda->bilal }}</td>
                                    <td>{{ $agenda->tanggal_mulai }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                              <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                              <form action="{{ route('agenda_delete') }}" id="form-delete-{{ $agenda->id }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="agenda_id" value="{{ $agenda->id }}">
                                                <button type="button" data-id="{{ $agenda->id }}" class="btn-delete dropdown-item">
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
    </div>


</div>

@endsection
@section('custom-js')
<script src="{{ asset('js/plugins/alpinejs.min.js') }}"></script>
<script src="{{ asset('js/plugins/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('js/plugins/SweetAlert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/inits/datatables.init.js') }}"></script>
<script src="{{ asset('js/inits/agenda.init.js') }}"></script>
@endsection

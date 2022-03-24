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
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="icons bg-primary rounded">
                            <i style="font-size: 50px;" class='bx bxs-bank p-2 text-white'></i>
                        </div>
                        <div class="d-flex flex-column mt-2 align-items-center gap-1">
                            <h5 class="mb-2">Rp. {{ number_format($totalSaldo) }}</h5>
                            <span>Saldo Infaq Tersimpan</span>
                          </div>
                        <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="cardOpt3"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="icons bg-primary rounded">
                            <i style="font-size: 50px;" class='bx bx-edit p-2 text-white'></i>
                        </div>
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">{{ $countArtikel }}</h2>
                            <span>Total Artikel</span>
                          </div>
                        <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="cardOpt3"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="icons bg-primary rounded">
                            <i style="font-size: 50px;" class='bx bx-user-pin p-2 text-white'></i>
                        </div>
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">{{ $countPengurus }}</h2>
                            <span>Total Pengurus</span>
                          </div>
                        <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="cardOpt3"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="icons bg-primary rounded">
                            <i style="font-size: 50px;" class='bx bx-user-plus p-2 text-white'></i>
                        </div>
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">{{ $countUser }}</h2>
                            <span>Total Users</span>
                          </div>
                        <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="cardOpt3"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-3">
            <div class="card d-flex flex-column align-items-center py-5">
                <h4 class="card-header">Jadwal Jum'at</h4>
                <div class="card-body d-flex flex-column align-items-center">
                    <img style="width: 150px" class="rounded-pill mb-3" src="{{ asset('assets/img/avatars/5.png') }}" alt="">
                    <h4 class="fs-3">Nama Imam</h4>
                    <span class="bg-primary fs-5 px-4 rounded-pill text-white">25 Maret 2022</span>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <h4 class="card-header">Laporan Akhir Infaq</h4>
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
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($listInfaq as $infaq)
                                <tr>
                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                    <td>{{ $infaq->perihal }}</strong></td>
                                    <td>Rp. {{ number_format($infaq->total) }}</td>
                                    <td>{{ $infaq->jenis == 1 ? 'Pemasukkan' : 'Pengeluaran' }}</td>
                                    <td>{{ $infaq->created_at }}</td>
                                    <td><span class="text-primary">{{ $infaq->user->name }}</span></td>
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
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('js/inits/datatables.init.js') }}"></script>
<script src="{{ asset('js/plugins/SweetAlert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/inits/infaq.init.js') }}"></script>
@endsection

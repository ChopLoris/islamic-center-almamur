@extends('admin.layouts.master')
@section('custom-css')
    @trixassets
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
        <span class="text-muted fw-light">Artikel /</span> List Artikel
      </h4>

      <div class="card overflow-hidden">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">List Artikel</h5>
            <div class="d-flex align-items-center mx-3">
                <i class='bx bx-md mx-2 bx-search-alt-2'></i>
                <input type="text" class="form-control" name="search_artikel" id="search_artikel">
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table id="table_artikel_list" class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal Publish</th>
                        <th>Pembuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($listArtikel as $artikel)
                    <tr>
                        <td><strong>{{ $loop->iteration }}</strong></td>
                        <td>{{ $artikel->title }}</td>
                        <td>{{ $artikel->kategori->name }}</td>
                        <td>{{ $artikel->created_at }}</td>
                        <td><span class="text-primary">{{ $artikel->user->name }}</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                  >
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                  >
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

@endsection

@section('custom-js')
<script src="{{ asset('js/plugins/DataTables/datatables.min.js') }}"></script>
<script>
    $(document).ready(function () {
        var dtArtikel = $('#table_artikel_list').DataTable({
            searching: true,
            paging: false,
            info: false,
            sDom: 'lrtip'
        });

        dtArtikel.columns().every(function () {
            var that = this;

            $('#search_artikel').on('keyup change', function () {
                if(that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            })
        })
    })
</script>
@endsection

@extends('home.layouts.master')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('js/plugins/DataTables/datatables.min.css') }}">
@endsection

@section('content')

    <section class="lg:pt-44 pt-52">
        <div class="mx-auto flex justify-center mb-5">
            <h4 class="font-semibold font-poppins text-2xl">Infaq / Semua Laporan Infaq</h4>
        </div>
        <div class="container mx-auto lg:px-16 px-3">
            <div class="w-full my-5 bg-white rounded-lg">
                <table id="table-infaq" class="w-full">
                    <thead>
                        <tr class="bg-blue-500">
                            <th class="px-3 py-3 text-white font-poppins font-semibold text-left rounded-tl-lg">#</th>
                            <th class="px-3 py-3 text-white font-poppins font-semibold text-left">Dari</th>
                            <th class="px-3 py-3 text-white font-poppins font-semibold text-left">Tanggal</th>
                            <th class="px-3 py-3 text-white font-poppins font-semibold text-left">Tipe</th>
                            <th class="px-3 py-3 text-white font-poppins font-semibold text-left rounded-tr-lg">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b-2 bg-[#F9FAFB]">
                            <td class="px-3 py-3 text-black font-poppins border-r-2 text-base">1</td>
                            <td class="px-3 py-3 text-black font-poppins border-r-2 text-base">Infaq Parkir Kendaraan Bulanan Juli 2021</td>
                            <td class="px-3 py-3 text-black font-poppins border-r-2 text-base">12 Januari 2022</td>
                            <td class="px-3 py-3 text-black font-poppins border-r-2 text-base">
                                <span class="px-3 py-2 bg-lime-300 rounded-full">Pemasukkan</span>
                            </td>
                            <td class="px-3 py-3 text-black font-poppins text-base">Rp. 300.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection

@section('custom-js')
    <script src="{{ asset('js/plugins/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#table-infaq').DataTable();
        })
    </script>
@endsection

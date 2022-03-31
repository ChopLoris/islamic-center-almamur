@extends('home.layouts.master')


@section('content')

    <section class="lg:pt-44 pt-52">
        <div class="mx-auto flex justify-center">
            <h4 class="font-semibold font-poppins text-2xl">Artikel / Semua Kategori</h4>
        </div>
        <div class="container mx-auto lg:px-16 px-3">
            <div class="w-full flex flex-wrap py-10 -m-4">
                @foreach ($artikel as $item)
                    <div class="lg:w-3/12 md:w-1/2 w-full p-4">
                        <div class="h-full w-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="h-32 w-full object-cover object-center" src="{{ asset('images/artikel/') }}/{{ $item->filename_images }}" alt="content-images">
                            <div class="px-5 py-3 hover:bg-blue-400 hover:text-white transition duration-300 ease-in">
                                <h2 class="text-sm font-medium text-black-50 mb-1 font-poppins">October, 29, 2021</h2>
                                <h1 class="text-xl font-poppins font-semibold mb-3">{{ $item->title }}</h1>
                                <p class="leading-relaxed font-poppins mb-3">
                                    {{ $item->content }}
                                </p>
                                <div class="flex items-center text-blue-700 flex-wrap">
                                    <a href="/artikel/content/{{ $item->slug }}" class="text-black-50 inline-flex font-poppins items-center md:mb-2 lg:mb-0">Lihat Selengkapnya</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black-50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                      </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $artikel->links('vendor.pagination.custom') }}
        </div>
    </section>

@endsection

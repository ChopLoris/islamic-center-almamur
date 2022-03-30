@extends('home.layouts.master')
        @section('content')

        <div class="splide-navbar z-10">
            <div class="splide__track">
                <ul class="splide__list">
                    @if(!empty($slider->slider_1) || !empty($slider->slider_2) || !empty($slider->slider_3) || !empty($slider->slider_4))
                        @if(!empty($slider->slider_1))
                        <li class="splide__slide">
                            <img class="w-screen h-[70vh] object-cover" src="{{ asset('images/slider/') }}/{{ $slider->slider_1 }}" />
                        </li>
                        @endif
                        @if(!empty($slider->slider_2))
                        <li class="splide__slide">
                            <img class="w-screen h-[70vh] object-cover" src="{{ asset('images/slider/') }}/{{ $slider->slider_2 }}" />
                        </li>
                        @endif
                        @if(!empty($slider->slider_3))
                        <li class="splide__slide">
                            <img class="w-screen h-[70vh] object-cover" src="{{ asset('images/slider/') }}/{{ $slider->slider_3 }}" />
                        </li>
                        @endif
                    @else
                    <li class="splide__slide">
                        <img class="w-screen h-[70vh] object-cover" src="{{ asset('images/slider/no-image.jpg') }}" />
                    </li>
                    @endif
                </ul>
            </div>
        </div>

        <div class="w-full lg:absolute flex z-20 top-[64%]">
            <div class="bg-[#0F4C75] xl:w-8/12 lg:w-10/12 w-full flex lg:flex-row flex-col lg:items-start items-center lg:mx-auto mx-0 lg:rounded-lg rounded-none shadow-xl">
                <div class="lg:w-1/3 md:w-1/2 w-full flex lg:flex-row flex-col lg:text-left text-center p-3">
                    <div class="lg:w-4/12 w-full flex lg:justify-start justify-center text-white">
                        <div class="lg:w-24 w-14">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                        </div>
                    </div>
                    <div class="lg:w-8/12 w-full text-white">
                        <h3 class="2xl:text-sm text-xs font-bold font-poppins">Masjid Al Jamie Ma'mur Bekasi</h3>
                        <p class="font-poppins 2xl:text-sm text-xs mt-2">Jl. Raya Kp. Setu No.3, RT.001/RW.002, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136</p>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/2 w-full">
                    <div class="slider-petugas">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @if($pengurus->isNotEmpty())
                                    @foreach ($pengurus as $data)
                                    <li class="splide__slide flex py-2 pr-5">
                                        <div class="w-3/12 overflow-hidden pr-4">
                                            <img class="h-24 w-24 bg-cover" src="{{ asset('assets/img/avatars/1.png') }}" alt="">
                                        </div>
                                        <div class="w-9/12 flex flex-col justify-between mx-auto">
                                            <h2 class="font-semibold font-poppins 2xl:text-sm text-xs text-white">{{ $data->title }}</h2>
                                            <p class="font-semibold font-poppins 2xl:text-sm text-xs text-gray-300">{{ $data->organisasi }}</p>
                                            <a href="{{ $data->slug }}" class="flex justify-between items-center font-semibold 2xl:text-sm text-xs lg:w-1/2 text-white font-poppins rounded-lg lg:px-5 lg:py-2 px-3 bg-blue-500">
                                                <span>Profile</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/2 w-full flex py-3">
                    <div class="w-4/12 text-white">
                        <div class="w-20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                              </svg>
                        </div>
                    </div>
                    <div class="w-8/12 text-white">
                        <h3 class="2xl:text-sm text-xs font-bold font-poppins">PUSAT INFORMASI</h3>
                        <p class="font-poppins 2xl:text-sm text-xs my-2">(+62) 8688-8888-8888</p>
                        <ul class="flex">
                            <li class="text-white">
                                <a href="{{ !$socialmedia ? '#' : $socialmedia->youtube }}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="3" y="5" width="18" height="14" rx="4"></rect>
                                    <path d="M10 9l5 3l-5 3z"></path>
                                 </svg></a>
                            </li>
                            <li>
                                <a href="{{ !$socialmedia ? '#' : $socialmedia->facebook }}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                                 </svg></a>
                            </li>
                            <li>
                                <a href="{{ !$socialmedia ? '#' : $socialmedia->instagram }}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                 </svg></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section class="flex flex-col lg:mt-28 mt-10 lg:px-20 px-5">

            <div class="mb-10 lg:flex hidden">
                <div class="lg:w-8/12 w-full flex flex-col mx-auto">
                    <div class="flex justify-between">
                        <span class="font-semibold px-5 py-3 rounded text-black font-poppins xl:text-xl md:text-lg text-[10px]">Jadwal Sholat Bekasi</span>
                        <span class="font-semibold px-5 py-3 rounded font-poppins xl:text-xl md:text-lg text-[10px]">{{ $time }}</span>
                    </div>
                    <div class="flex shadow-xl rounded-xl bg-[#0F4C75]">
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white md:text-lg text-[10px] font-semibold">SUBUH</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold md:text-base text-[10px]">{{ $waktuSholat['subuh']}}</p>
                        </div>
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white md:text-lg text-[10px] font-semibold">TERBIT</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold md:text-base text-[10px]">{{ $waktuSholat['terbit']}}</p>
                        </div>
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white md:text-lg text-[10px] font-semibold">DZUHUR</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold md:text-base text-[10px]">{{ $waktuSholat['dhuhr']}}</p>
                        </div>
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white md:text-lg text-[10px] font-semibold">ASHAR</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold md:text-base text-[10px]">{{ $waktuSholat['asr']}}</p>
                        </div>
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white md:text-lg text-[10px] font-semibold">MAGHRIB</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold md:text-base text-[10px]">{{ $waktuSholat['maghrib']}}</p>
                        </div>
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white md:text-lg text-[10px] font-semibold">ISYA</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold md:text-base text-[10px]">{{ $waktuSholat['isha']}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex lg:flex-row flex-col">
                <div class="lg:w-4/12 w-full lg:mb-0 mb-5">
                    <h1 class="text-4xl font-bold text-[#232528] font-poppins">Mari Berinfaq !</h1>
                </div>
                <div class="lg:w-8/12 w-full">
                    <p class="text-sm text-[#5E646D] leading-relaxed font-semibold lg:pl-36">Abu Malik Al-Harits bin ‘Ashim Al-Asy’ari RA berkata bahwa Rasulullah SAW bersabda, “Kesucian itu sebagian dari iman, dan kalimat alhamdulillah memenuhi timbangan. Kalimat subhanallah dan alhamdulillah memenuhi ruang yang ada di antara langit dan bumi. Shalat itu cahaya, sedekah itu bukti, sabar itu cerminan, Al-Qur’an itu hujjah yang akan membela atau menuntutmu. Setiap manusia bekerja. Ada yang menjual dirinya, ada yang membebaskan dirinya, dan ada pula yang menghancurkan dirinya.” (HR. Muslim).</p>
                </div>
            </div>
            <div class="flex lg:flex-nowrap flex-wrap mt-5">
                <div class="lg:w-7/12 w-full">
                    <div class="w-full pb-10">
                        <div class="title-card">
                            <h3 class="text-lg px-5 py-3 rounded-t-xl border-2 text-black font-poppins font-semibold">Laporan Infaq</h3>
                        </div>
                        <div class="body-card shadow-lg w-full h-80 overflow-x-auto overflow-y-auto border-x-2 border-b-2 rounded-b-xl">
                            <div class="px-5 py-5">
                                <table class="w-full">
                                    <thead class="bg-[#F9FAFB]">
                                        <tr>
                                            <th class="w-3/12 text-left px-3 py-3">Jumlah</th>
                                            <th class="w-3/12 text-left px-3 py-3">Tanggal</th>
                                            <th class="w-6/12 text-left px-3 py-3">Dari</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($infaqList as $infaq)
                                        <tr class="border-b-2">
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <div class="flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 stroke-lime-500 w-6 @if($infaq->jenis == 1) rotate-180 @endif" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                                    </svg>
                                                    <p class="font-poppins text-sm font-semibold">Rp. {{ number_format($infaq->total) }}</p>
                                                </div>
                                            </td>
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">{{ $infaq->created_at }}</p>
                                            </td>
                                            <td class="w-6/12 flex-wrap text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">{{ $infaq->perihal }}</p>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-5/12 w-full lg:ml-3 mt-5 lg:mt-0">
                    <div class="title-card">
                        <h3 class="text-lg px-5 py-3 rounded-t-xl border-2 text-[#232528] font-poppins font-semibold">Laporan Saldo Dana Infaq</h3>
                    </div>
                    <div class="body-card">
                        <div class="px-5 py-6 border-x-2 border-b-2 flex justify-between">
                            <span class="2xl:text-4xl xl:text-3xl font-poppins text-[#232528] font-semibold">Saldo :</span>
                            <span class="2xl:text-4xl xl:text-3xl font-poppins text-[#232528] font-semibold">Rp. {{ number_format($totalSaldo) }}</span>
                        </div>
                        <div class="px-5 py-3 border-x-2 border-b-2 rounded-b-xl shadow-lg">
                            <p class="text-base font-medium font-poppins text-[#232528]">Salurkan infaq Anda melalui rekening berikut :</p>
                            <div class="flex flex-col px-5 py-9 mt-2 rounded-xl text-center bg-[#0F4C75]">
                                <p class="xl:text-base text-sm font-medium font-poppins text-white">Rekening Peduli Mesjid, Bank BRI</p>
                                <span class="xl:text-3xl text-xl px-2 py-2 font-bold font-poppins text-white">1272 01 006322 505</span>
                                <p class="text-base font-medium font-poppins text-white">A/N : Nurhadi Jaya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-[#EDF5F4] py-10">
            <div class="flex flex-col lg:px-20 px-5">
                <div class="flex flex-col justify-center items-center mx-autos">
                    <h1 class="font-bold font-poppins text-2xl">Artikel Terbaru</h1>
                    <p class="font-sm font-poppins text-center text-gray-600">Berikut adalah beberapa artikel kegiatan Masjid Jami Al-Ma'mur</p>
                </div>
                <div class="splide-content mt-10">
                    <div class="splide__track">
                        <ul class="splide__list lg:-mx-4">
                            @foreach ($artikel as $items)
                            <li class="splide__slide 2xl:w-3/12 xl:w-4/12 md:w-6/12 w-full h-[540px] shadow-lg mx-4">
                                <div class="flex flex-col h-full">
                                    <div class="img bg-black h-1/2 rounded-t-xl">
                                        <img class="rounded-t-xl h-full w-full opacity-50" src="{{ asset('images/gallery/1.png') }}" alt="">
                                    </div>
                                    <div class="tag absolute top-[240px] bg-blue-500 px-5 py-3"><h3 class="text-white font-semibold font-base font-poppins">{{ $items->kategori->name }}</h3></div>
                                    <div class="body h-1/2 bg-white flex flex-col p-10 rounded-b-xl">
                                        <h2 class="font-bold font-poppins text-xl mb-5">{{ $items->title }}</h2>
                                        <p>{{ $items->content }}.</p>
                                        <div class="flex justify-between mt-5 p-5 bg-[#F4F7F6]">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-blue-500 mr-2 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                <span class="text-xs font-poppins">{{$items->user->username}}</span>
                                            </div>
                                            <div>
                                                <button class="flex text-xs text-blue-500 font-poppins">
                                                    <span>Selengkapnya</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10">
            <div class="flex w-full flex-col lg:px-20 px-5">
                <div class="flex 2xl:flex-nowrap flex-wrap lg:space-x-10">
                    <div class="2xl:w-4/12 w-full flex flex-col 2xl:items-start items-center">
                        <h1 class="text-4xl font-bold font-poppins ">Visi & Misi</h1>
                        <p class="text-base font-poppins text-gray-600 mt-10">Terwujudnya Masjid Jami Al-Ma'mur sebagai Pusat Ibadah dan Pengembangan Pendidikan Berbasis Islam serta membentuk masyarakat yang berilmu, beriman dan beramal soleh dan menjunjung tinggi tradisi, santun dalam bersikap dan meraih kemuliaan hidup dalam kebahagiaan dunia dan akhirat</p>
                        <button class="flex mt-5 px-5 py-3 2xl:w-1/2 justify-between bg-blue-500 rounded-full text-white">
                            <span>Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex lg:flex-row flex-col lg:space-x-10 2xl:w-8/12 w-full mt-5">
                        @if($petugas)
                        <div class="flex lg:w-4/12 w-full shadow-lg p-10 rounded border-2">
                            <div class="flex flex-col items-center justify-center">
                                <h3 class="text-xl font-bold font-poppins text-black-50">Petugas Jum'at</h3>
                                <div class="lg:w-full flex justify-center md:w-1/3">
                                    <img class="2xl:w-32 md:w-2/3 w-1/2 rounded-full my-5" src="{{ asset('/images/ustadz.jpg') }}" alt="">
                                </div>
                                <span class="font-semibold font-poppins text-center">{{ $petugas->imam }}</span>
                                <p class="font-medium text-center text-gray-400 font-poppins">Dijadwalkan pada tanggal :</p>
                                <span class="font-bold px-10 py-5 bg-blue-500 text-sm text-white rounded-full mt-5">{{ $petugas->tanggal_mulai }}</span>
                            </div>
                        </div>
                        @else
                        <div class="flex flex-col lg:w-4/12 w-full items-center justify-between shadow-lg p-10 rounded border-2">
                            <div class="title">
                                <h3 class="text-xl font-bold font-poppins text-black-50">Petugas Jum'at</h3>
                            </div>
                            <div class="body">
                                <span class="text-xl text-gray-500 font-poppins">Belum Ada Jadwal</span>
                            </div>
                            <div class="footer">

                            </div>
                        </div>
                        @endif
                        <div class="flex lg:w-4/12 w-full shadow-lg justify-center rounded border-2">
                            <h2 class="absolute text-white font-semibold z-20 font-poppins mt-10 border-2 px-5 py-3 rounded-full">Agenda</h2>
                            <div class="slider-agenda z-10 w-full">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @if (!count($agenda) > 0)
                                        <li class="splide__slide sm:w-1/2 md:w-1/2 xl:w-1/4">
                                            <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                                <div class="bg-black opacity-50 flex justify-center h-full">
                                                    <div class="title h-[470px] flex items-center">
                                                        <h5 class="text-white font-bold font-poppins">Belum Ada Agenda</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        @else
                                            @foreach ($agenda as $items)
                                            <li class="splide__slide sm:w-1/2 md:w-1/2 xl:w-1/4">
                                                <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                                    <div class="relative pb-48 bg-black overflow-hidden">
                                                        <img class="absolute inset-0 opacity-50 h-full w-full object-cover" src="{{ asset('images/artikel/') }}/{{ $items->filename_images }}" alt="">
                                                    </div>
                                                    <div class="p-4">
                                                        <h2 class="mt-2 mb-2 font-poppins font-bold">{{ $items->title }}</h2>
                                                        <p class="font-poppins text-black-50 text-sm">{{ $items->content }}</p>
                                                    </div>
                                                    <div class="p-4 border-t border-b text-xs text-gray-700">
                                                        <button class="flex items-center py-3 px-5 text-center bg-blue-500 rounded-full">
                                                            <span class="text-white font-poppins font-semibold">Details</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 text-white h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                              </svg>
                                                        </button>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex lg:w-4/12 w-full shadow-lg justify-center rounded border-2">
                            <h2 class="absolute text-white font-semibold z-20 font-poppins mt-10 border-2 px-5 py-3 rounded-full">Pengumuman</h2>
                            <div class="w-full slider-pengumuman relative z-10">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @if (!count($pengumuman) > 0)
                                        <li class="splide__slide sm:w-1/2 md:w-1/2 xl:w-1/4">
                                            <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                                <div class="bg-black opacity-50 flex justify-center h-full">
                                                    <div class="title h-[470px] flex items-center">
                                                        <h5 class="text-white font-bold font-poppins">Belum Ada Pengumuman</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        @else
                                            @foreach ($pengumuman as $items)
                                            <li class="splide__slide sm:w-1/2 md:w-1/2 xl:w-1/4">
                                                <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                                    <div class="relative pb-48 bg-black overflow-hidden">
                                                        <img class="absolute inset-0 opacity-50 h-full w-full object-cover" src="{{ asset('images/artikel/') }}/{{ $items->filename_images }}" alt="">
                                                    </div>
                                                    <div class="p-4">
                                                        <h2 class="mt-2 mb-2 font-poppins font-bold">{{ $items->title }}</h2>
                                                        <p class="font-poppins text-black-50 text-sm">{{ $items->content }}</p>
                                                    </div>
                                                    <div class="p-4 border-t border-b text-xs text-gray-700">
                                                        <button class="flex items-center py-3 px-5 text-center bg-blue-500 rounded-full">
                                                            <span class="text-white font-poppins font-semibold">Details</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 text-white h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                              </svg>
                                                        </button>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                        @endif
                                        <li class="splide__slide sm:w-1/2 md:w-1/2 xl:w-1/4">
                                            <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                                <div class="bg-black opacity-50 flex justify-center h-full">
                                                    <div class="title h-[470px] flex items-center">
                                                        <h5 class="text-white font-bold font-poppins">Belum Ada Agenda</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#EDF5F4]">
            <div class="w-full py-5 text-center">
                <h1 class="font-poppins font-bold text-2xl">Layanan</h1>
                <p class="font-sm font-poppins text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ducimus.</p>
            </div>
            <div class="container md:px-20 mx-auto">
                <div class="flex item justify-center flex-wrap py-10">
                    @if ($layanan->isNotEmpty())
                        @foreach ($layanan as $item)
                            <div class="sm:w-1/2 md:w-1/2 xl:w-1/4 w-full p-4">
                                <div class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                    <div class="relative pb-48 overflow-hidden">
                                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('images/layanan') }}/{{ $item->filename_images }}" alt="">
                                    </div>
                                    <div class="p-4">
                                        <h2 class="mt-2 mb-2 font-poppins font-bold">{{ $item->name }}</h2>
                                    </div>
                                    <div class="p-4 border-t border-b text-xs text-gray-700">
                                        <span class="flex items-center mb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                            <span class="font-bold font-poppins ml-2">{{ $item->no_telepon }}</span>
                                        </span>
                                        <span class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            <span class="font-bold font-poppins ml-2">{{ $item->kontak_nama }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section>
            <div class="flex flex-col lg:px-20 py-10">
                <div class="w-full py-5 flex flex-col items-center justify-center">
                    <h1 class="font-poppins font-bold text-2xl">Gallery</h1>
                    <p class="font-sm font-poppins text-center text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ducimus.</p>
                </div>
                <div class="w-full">
                    <div class="md:w-8/12 w-full px-3 mx-auto rounded-xl">
                        <div id="main-slider" class="splide shadow-xl mx-auto">
                            <div class="splide__track">
                              <ul class="splide__list">
                                  @foreach ($gallery as $items)
                                  <li class="splide__slide">
                                    <img class="rounded-xl" src="{{ asset('images/gallery') }}/{{ $items->filename }}" />
                                  </li>
                                  @endforeach
                              </ul>
                            </div>
                          </div>

                          <ul id="thumbnails" class="flex justify-center space-x-3 mt-5 thumbnails">
                            @foreach ($gallery as $itemss)
                            <li class="w-[70px] overflow-hidden list-none cursor-pointer bg-black">
                              <img class="thumbnail object-cover opacity-30" src="{{ asset('images/gallery') }}/{{ $itemss->filename }}" />
                            </li>
                            @endforeach
                          </ul>
                    </div>
                </div>
            </div>
        </section>
        @endsection
        @section('custom-js')
        <script type="text/javascript" src="{{ asset('/js/inits/slider.init.js') }}"></script>
        @endsection

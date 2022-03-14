<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>


    {{-- Home --}}
    <div class="bg-hero h-[512px]">
        <div id="home" class="container mx-auto 2xl:px-32 lg:px-24 px-5">
            <div class="flex md:flex-wrap lg:flex-nowrap items-center">
                <div class="w-3/12">
                    <img src="{{ asset('images/logo.png') }}" alt="logo">
                </div>
                <div class="w-6/12 hidden md:block">
                    <ul class="navbar flex justify-center space-x-5 font-poppins">
                        <li class="current"><a href="#home" class="text-white font-semibold font-poppins text-lg">Beranda</a></li>
                        <li><a href="#jadwal-sholat" class="text-white font-semibold font-poppins text-lg">Jadwal Sholat</a></li>
                        <li><a href="#artikel" class="text-white font-semibold font-poppins text-lg">Artikel</a></li>
                        <li><a href="#gallery" class="text-white font-semibold font-poppins text-lg">Gallery</a></li>
                        <li><a href="" class="text-white font-semibold font-poppins text-lg">Kontak</a></li>
                    </ul>
                </div>
                <div class="w-3/12 hidden md:block text-right">
                    <button
                        id="kirim"
                        class="text-white font-semibold font-poppins text-lg bg-blue-500 px-6 py-3 rounded-full">Kirim
                        Infaq</button>
                </div>
                <div data-target="#navigation" class="w-9/12 button-nav md:hidden text-right text-white z-20">
                    <button data-target="#navigation" class="p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="navigation" class="fixed nav-menu bg-white z-10 right-0 p-10 text-center top-0 h-full w-full hidden">
                <ul class="flex nav-items items-center justify-center h-screen flex-col space-y-6 m-auto">
                    <li><a href="#home" class="text-[#232528] font-semibold font-poppins text-lg">Beranda</a></li>
                    <li><a href="#jadwal-sholat" class="text-[#232528] font-semibold font-poppins text-lg">Jadwal Sholat</a></li>
                    <li><a href="#artikel" class="text-[#232528] font-semibold font-poppins text-lg">Artikel</a></li>
                    <li><a href="#gallery" class="text-[#232528] font-semibold font-poppins text-lg">Gallery</a></li>
                    <li><a href="" class="text-[#232528] font-semibold font-poppins text-lg">Kontak</a></li>
                    <li><button
                        class="text-white font-semibold font-poppins text-lg bg-blue-500 px-6 py-3 rounded-full">Kirim
                        Infaq</button></li>
                </ul>
            </div>
            <div class="text-center mt-32">
                <h1 class="text-white text-5xl font-semibold font-poppins lg:w-8/12 sm:w-full mx-auto leading-relaxed">Masjid Jamie
                    Al-Ma’mur</h1>
                <span
                    class="text-base text-white bg-[#009FFD] bg-opacity-70 px-3 py-1 w-4/12 font-poppins rounded-full mx-auto leading-relaxed">Jl.
                    Raya Kp. Setu No. 22, RT 001 RW 002</span>
            </div>
        </div>
    </div>

    {{-- JADWAL SHOLAT --}}
    <section id="jadwal-sholat" class="bg-[#EAF6FF]">
        <div class="container mx-auto py-10 xl:px-32 lg:px-24 px-5">
            <div class="flex flex-wrap">
                <div class="lg:w-3/12 w-full">
                    <h1 class="text-4xl font-bold text-[#232528] font-poppins">Jadwal Waktu Sholat</h1>
                </div>
                <div class="lg:w-9/12 w-full">
                    <p class="text-lg text-[#5E646D] leading-relaxed font-semibold lg:pl-36 md:mt-5">Seorang sahabat pernah
                        bertanya kepada Rasulullah SAW, 'Amalan apa yang paling baik di sisi Allah wahai Rasulullah?'
                        Beliau menjawab, 'Ialah salat tepat pada waktunya'.</p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="lg:w-6/12 w-full">
                    <div class="flex flex-wrap py-5 space-x-1">
                        <span class="text-[#232528] text-lg font-semibold">Kamis, 10 Maret 2022</span>
                        <span class="text-lg font-semibold text-[#4CB6F4]">( 7 Sya'ban 1443 H )</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12">
                    <div class="flex">
                        <div class="bg-white px-5 py-5 w-full rounded-lg shadow-lg">
                            <div class="flex justify-between items-center bg-[#FFA400] w-full px-5 py-3 rounded-lg">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-left stroke-white mr-3 h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[#232528] text-2xl font-semibold font-poppins">Cerah</span>
                                </div>
                                <span class="text-[#232528] text-2xl font-semibold font-poppins">5 : 38 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex py-5">
                        <div class="bg-white px-5 py-5 w-full rounded-lg shadow-lg">
                            <div class="flex justify-between items-center border-2 w-full px-5 py-3 rounded-lg">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-left stroke-[#009FFD] mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[#232528] text-2xl font-semibold font-poppins">SUBUH</span>
                                </div>
                                <span class="text-[#232528] text-2xl font-semibold font-poppins">5 : 38 AM</span>
                            </div>
                            <div class="flex justify-between items-center border-2 w-full px-5 py-3 rounded-lg mt-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-left stroke-[#009FFD] mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[#232528] text-2xl font-semibold font-poppins">DZUHUR</span>
                                </div>
                                <span class="text-[#232528] text-2xl font-semibold font-poppins">5 : 38 AM</span>
                            </div>
                            <div class="flex justify-between items-center border-2 w-full px-5 py-3 rounded-lg mt-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-left stroke-[#009FFD] mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[#232528] text-2xl font-semibold font-poppins">ASHAR</span>
                                </div>
                                <span class="text-[#232528] text-2xl font-semibold font-poppins">5 : 38 AM</span>
                            </div>
                            <div class="flex justify-between items-center border-2 w-full px-5 py-3 rounded-lg mt-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-left stroke-[#009FFD] mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[#232528] text-2xl font-semibold font-poppins">MAGRIB</span>
                                </div>
                                <span class="text-[#232528] text-2xl font-semibold font-poppins">5 : 38 AM</span>
                            </div>
                            <div class="flex justify-between items-center border-2 w-full px-5 py-3 rounded-lg mt-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-left stroke-[#009FFD] mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[#232528] text-2xl font-semibold font-poppins">ISYA</span>
                                </div>
                                <span class="text-[#232528] text-2xl font-semibold font-poppins">5 : 38 AM</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-6/12">
                    <div class="flex shadow-lg flex-col w-full bg-white lg:mx-5 rounded-lg">
                        <div class="flex flex-col text-center justify-center items-center">
                            <h1 class="text-3xl text-[#232528] font-semibold font-poppins pt-5"> Petugas Jum'at</h1>
                            <img class="rounded-full my-5 w-48 h-48" src="{{ asset('/images/ustadz.jpg') }}" alt="petugas-jumat">
                            <h2 class="text-2xl font-bold font-poppins text-[#232528]">Faizal Faiz</h2>
                            <span class="text-xl font-semibold text-[#939393]">Ketua Masjid Jami Al-Ma’mur</span>
                        </div>
                        <div class="flex flex-col mx-6 my-5 border-2">
                            <h3 class="text-center font-semibold font-poppins xl:text-2xl text-xl text-[#009FFD] py-2">Waktu Khudba Sholat Jum'at</h3>
                            <span class="text-2xl rounded-lg font-semibold font-poppins text-center 2xl:mx-40 mx-10 py-2 mb-4 bg-[#232528] text-white">12 : 15 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container mx-auto py-10 px-5 lg:px-24">
            <div class="flex flex-wrap">
                <div class="lg:w-3/12 sm:w-full">
                    <h1 class="text-4xl font-bold text-[#232528] font-poppins">Mari Berinfaq !</h1>
                </div>
                <div class="lg:w-9/12 sm:w-full">
                    <p class="text-sm text-[#5E646D] leading-relaxed font-semibold lg:pl-36 mt-5 lg:mt-0">Abu Malik Al-Harits bin ‘Ashim Al-Asy’ari RA berkata bahwa Rasulullah SAW bersabda, “Kesucian itu sebagian dari iman, dan kalimat alhamdulillah memenuhi timbangan. Kalimat subhanallah dan alhamdulillah memenuhi ruang yang ada di antara langit dan bumi. Shalat itu cahaya, sedekah itu bukti, sabar itu cerminan, Al-Qur’an itu hujjah yang akan membela atau menuntutmu. Setiap manusia bekerja. Ada yang menjual dirinya, ada yang membebaskan dirinya, dan ada pula yang menghancurkan dirinya.” (HR. Muslim).</p>
                </div>
            </div>
            <div class="flex lg:flex-nowrap flex-wrap mt-5">
                <div class="lg:w-7/12 w-full">
                    <div class="w-full">
                        <div class="title-card">
                            <h3 class="text-lg px-5 py-3 rounded-t-xl border-2 text-black font-poppins font-semibold">Laporan Infaq</h3>
                        </div>
                        <div class="body-card shadow-lg w-full h-80 border-x-2 border-b-2 rounded-b-xl">
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
                                        <tr class="border-b-2">
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <div class="flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 stroke-red-500 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                                      </svg>
                                                    <p class="font-poppins text-sm font-semibold">Rp. 1.361.000</p>
                                                </div>
                                            </td>
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">03 Maret 2022</p>
                                            </td>
                                            <td class="w-6/12 flex-wrap text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">Pembangunan Masjid Jami Al Ma’mur.</p>
                                            </td>
                                        </tr>
                                        <tr class="border-b-2">
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <div class="flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 stroke-red-500 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                                      </svg>
                                                    <p class="font-poppins text-sm font-semibold">Rp. 1.361.000</p>
                                                </div>
                                            </td>
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">03 Maret 2022</p>
                                            </td>
                                            <td class="w-6/12 flex-wrap text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">Pembangunan Masjid Jami Al Ma’mur.</p>
                                            </td>
                                        </tr>
                                        <tr class="border-b-2">
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <div class="flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 stroke-red-500 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                                      </svg>
                                                    <p class="font-poppins text-sm font-semibold">Rp. 1.361.000</p>
                                                </div>
                                            </td>
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">03 Maret 2022</p>
                                            </td>
                                            <td class="w-6/12 flex-wrap text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">Pembangunan Masjid Jami Al Ma’mur.</p>
                                            </td>
                                        </tr>
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
                            <span class="2xl:text-4xl xl:text-3xl font-poppins text-[#232528] font-semibold">Rp. 20.450.000</span>
                        </div>
                        <div class="px-5 py-3 border-x-2 border-b-2 rounded-b-xl shadow-lg">
                            <p class="text-base font-medium font-poppins text-[#232528]">Salurkan infaq Anda melalui rekening berikut :</p>
                            <div class="flex flex-col px-5 py-9 mt-2 rounded-xl text-center bg-[#009FFD]">
                                <p class="xl:text-base text-sm font-medium font-poppins text-white">Rekening Peduli Mesjid, Bank BRI</p>
                                <span class="xl:text-3xl text-xl px-2 py-2 font-bold font-poppins text-white">1272 01 006322 505</span>
                                <p class="text-base font-medium font-poppins text-white">A/N : Nurhadi Jaya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="artikel" class="bg-[#FFA400]">
        <div class="container mx-auto py-10 2xl:px-32 lg:px-24 sm:px-5">
            <div class="flex items-center">
                <div class="w-full">
                    <h1 class="text-center font-bold text-2xl text-white font-poppins">Artikel Tebaru</h1>
                    <p class="text-center text-white font-poppins text-sm">Berikut adalah kegiatan terakhir Masjid Jami Al-Ma'mur</p>
                </div>
            </div>
            <div class="grid md:grid-cols-1 2xl:grid-cols-3 lg:grid-cols-2 mt-5">
                <div class="rounded overflow-hidden shadow-lg mx-4 md:mt-5">
                    <img class="w-full" src="{{ asset('images/berita.png') }}" alt="Sunset in the mountains">
                    <div class="bg-white px-6 py-4">
                        <div class="font-bold text-xl mb-2">Lorem, ipsum dolor.</div>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nostrum itaque obcaecati at autem pariatur et. Itaque quas ratione doloribus.</p>
                    </div>
                    <div class="bg-white px-6 pt-4 pb-2 text-right">
                        <button class="inline-block bg-[#009FFD] rounded-full px-3 py-1 text-sm font-poppins text-white font-semibold mr-2 mb-2">Lihat selengkapnya</button>
                    </div>
                </div>
                <div class="rounded overflow-hidden shadow-lg mx-4 md:mt-5">
                    <img class="w-full" src="{{ asset('images/berita.png') }}" alt="Sunset in the mountains">
                    <div class="bg-white px-6 py-4">
                        <div class="font-bold text-xl mb-2">Lorem, ipsum dolor.</div>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nostrum itaque obcaecati at autem pariatur et. Itaque quas ratione doloribus.</p>
                    </div>
                    <div class="bg-white px-6 pt-4 pb-2 text-right">
                        <button class="inline-block bg-[#009FFD] rounded-full px-3 py-1 text-sm font-poppins text-white font-semibold mr-2 mb-2">Lihat selengkapnya</button>
                    </div>
                </div>
                <div class="rounded overflow-hidden shadow-lg mx-4 md:mt-5">
                    <img class="w-full" src="{{ asset('images/berita.png') }}" alt="Sunset in the mountains">
                    <div class="bg-white px-6 py-4">
                        <div class="font-bold text-xl mb-2">Lorem, ipsum dolor.</div>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nostrum itaque obcaecati at autem pariatur et. Itaque quas ratione doloribus.</p>
                    </div>
                    <div class="bg-white px-6 pt-4 pb-2 text-right">
                        <button class="inline-block bg-[#009FFD] rounded-full px-3 py-1 text-sm font-poppins text-white font-semibold mr-2 mb-2">Lihat selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- GALLERY --}}
    <section id="gallery" class="overflow-hidden text-gray-700">
        <div class="container mx-auto py-10 lg:px-32">
            <div class="flex items-center">
                <div class="w-full">
                    <h1 class="text-center font-bold text-2xl text-[##232528] font-poppins">Gallery</h1>
                </div>
            </div>
            <div class="py-2 mx-auto">
                <div class="flex flex-wrap -m-1 mt-5">
                    <div class="flex flex-wrap w-full lg:w-1/2">
                        <div class="w-1/2 p-1">
                            <img class="block object-cover object-center w-full h-full rounded-lg" src="{{ asset('/images/gallery/1.png') }}" alt="gallery 1">
                        </div>
                        <div class="w-1/2 p-1">
                            <img class="block object-cover object-center w-full h-full rounded-lg" src="{{ asset('/images/gallery/2.png') }}" alt="gallery 1">
                        </div>
                        <div class="w-full p-1">
                            <img class="block object-cover object-center w-full h-full rounded-lg" src="{{ asset('/images/gallery/3.png') }}" alt="gallery 1">
                        </div>
                    </div>
                    <div class="flex flex-wrap w-full lg:w-1/2">
                        <div class="w-full p-1">
                            <img class="block object-cover object-center w-full h-full rounded-lg" src="{{ asset('/images/gallery/4.png') }}" alt="gallery 1">
                        </div>
                        <div class="w-1/2 p-1">
                            <img class="block object-cover object-center w-full h-full rounded-lg" src="{{ asset('/images/gallery/5.png') }}" alt="gallery 1">
                        </div>
                        <div class="w-1/2 p-1">
                            <img class="block object-cover object-center w-full h-full rounded-lg" src="{{ asset('/images/gallery/6.png') }}" alt="gallery 1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="text-center p-6 bg-gray-200">
            <span>© 2021 Copyright:</span>
            <span class="text-gray-600 font-semibold">Masjid Jami Al-Ma'mur</span>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/jquery-nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/inits/app.init.js') }}"></script>
</body>

</html>

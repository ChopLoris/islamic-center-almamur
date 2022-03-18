    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="icon" href="{{ asset('/images/logo.png') }}">
            <title>Masjid Jamie Al-Ma'mur - Islamic Center</title>
            <link
                href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Poppins:wght@400;500;600;700&display=swap"
                rel="stylesheet">
                <link rel="stylesheet" href="{{ asset('css/splide-3.6.12/css/splide.min.css') }}">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
    <body class="w-full">
        <div class="lg:fixed hidden w-full z-30 top-0 bg-white shadow-lg">
            <div class="flex p-3 bg-blue-500">
                <span class="w-36 text-white 2xl:text-base lg:text-sm font-semibold font-poppins">SEKILAS INFO</span>
                <marquee class="font-poppins text-white text-sm font-semibold" behavior="" direction="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga laborum sit ex voluptatum iure accusantium?</marquee>
                <span class="w-40 ml-5 text-white 2xl:text-base lg:text-sm font-semibold font-poppins">WAKTU 15:03:22</span>
            </div>
            <div class="container flex justify-between mx-auto 2xl:px-16 lg:px-5">
                <div class="flex lg:w-6/12 items-center logo">
                    <div class="image">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                    <div class="ml-2">
                        <h1 class="xl:text-2xl lg:text-xl font-semibold font-poppins">Masjid Jamie Al-Ma'mur</h1>
                        <p class="xl:text-sm lg:text-sm font-semibold font-poppins text-gray-500">Pusat Perubahan Menuju Muslim Yang Rahmatan Lil'alamin</p>
                    </div>
                </div>
                <div class="flex lg:w-6/12 2xl:space-x-10 lg:space-x-5 items-center">
                    <ul class="flex 2xl:space-x-10 lg:space-x-5">
                        <li><a class="2xl:text-base lg:text-xs font-semibold font-poppins" href="#">Beranda</a></li>
                        <li><a class="2xl:text-base lg:text-xs font-semibold font-poppins" href="#">Artikel</a></li>
                        <li><a class="2xl:text-base lg:text-xs font-semibold font-poppins" href="#">Laporan Keuangan</a></li>
                        <li><a class="2xl:text-base lg:text-xs font-semibold font-poppins" href="#">Informasi</a></li>
                        <li><a class="2xl:text-base lg:text-xs font-semibold font-poppins" href="#">Galeri</a></li>
                    </ul>
                    <button class="bg-[#EDF5F3] rounded-full px-3 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="2xl:h-6 2xl:w-6 lg:w-4 lg:h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap w-full">
            <div class="splide-navbar w-full relative z-10">
                <div class="splide__track w-full h-[620px]">
                    <ul class="splide__list">
                        <li class="splide__slide bg-slider1">
                            <div class="flex bg-black/50 w-full h-full"></div>
                        </li>
                        <li class="splide__slide bg-slider2">
                            <div class="flex bg-black/50 w-full h-full"></div>
                        </li>
                        <li class="splide__slide bg-slider3">
                            <div class="flex bg-black/50 w-full h-full"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <div class="w-8/12 absolute left-1/2 flex h-36 bg-[#0F4C75] rounded-xl shadow-xl">
                    <div class="flex w-5/12 py-4">
                        <div class="w-2/12 mx-4 mt-3 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                        </div>
                        <div class="w-10/12 flex flex-col justify-between mx-auto">
                            <h2 class="font-semibold font-poppins text-base text-white">Masjid Jamie Al-Ma'mur Bekasi</h2>
                            <p class="font-semibold w-8/12 font-poppins text-sm text-gray-300">Jl. Raya Kp. Setu No.3, RT.001/RW.002, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136</p>
                        </div>
                    </div>
                    <div class="flex 5/12">
                        <div class="slider-petugas">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide flex py-2  ">
                                        <div class="overflow-hidden pr-4">
                                            <img class="h-32 w-32 bg-cover" src="{{ asset('assets/img/avatars/1.png') }}" alt="">
                                        </div>
                                        <div class="w-10/12 flex flex-col justify-between mx-auto">
                                            <h2 class="font-semibold font-poppins text-base text-white">Jaja Miharja</h2>
                                            <p class="font-semibold font-poppins text-sm text-gray-300">Ketua DKM Masjid Jamie Al-Ma'mur</p>
                                            <a class="flex justify-between items-center font-semibold text-sm w-1/2 text-white font-poppins rounded px-5 py-2 bg-blue-500">
                                                <span>Profile</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-4/12 py-4">
                        <div class="w-2/12 mx-4 mt-3 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                              </svg>
                        </div>
                        <div class="w-10/12 flex flex-col justify-between mx-auto">
                            <h2 class="font-semibold font-poppins text-base text-white">Layanan Informasi</h2>
                            <p class="font-semibold font-poppins text-sm text-gray-300">(+62) 8888-8888-88888</p>
                            <ul class="flex justify-center">
                                <li>
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <rect x="3" y="5" width="18" height="14" rx="4" />
                                        <path d="M10 9l5 3l-5 3z" />
                                      </svg></a>
                                </li>
                                <li>
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                      </svg></a>
                                </li>
                                <li>
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <rect x="4" y="4" width="16" height="16" rx="4" />
                                        <circle cx="12" cy="12" r="3" />
                                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                                      </svg></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="flex flex-col lg:mt-24 mt-10 lg:px-20 px-5">

            <div class="md:flex hidden mb-10">
                <div class="w-8/12 flex flex-col mx-auto">
                    <div class="flex justify-between">
                        <span class="font-semibold px-5 py-3 rounded text-black font-poppins text-xl">Jadwal Sholat Bekasi</span>
                        <span class="font-semibold px-5 py-3 rounded font-poppins text-xl">Jum'at, 18 Maret 2022</span>
                    </div>
                    <div class="flex shadow-xl rounded-xl bg-[#0F4C75]">
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white font-semibold">SUBUH</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold text-base">13:00</p>
                        </div>
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white font-semibold">TERBIT</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold text-base">13:00</p>
                        </div>
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white font-semibold">DZUHUR</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold text-base">13:00</p>
                        </div>
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white font-semibold">ASHAR</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold text-base">13:00</p>
                        </div>
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white font-semibold">MAGHRIB</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold text-base">13:00</p>
                        </div>
                        <div class="w-2/12 px-2 py-2">
                            <h3 class="text-center text-white font-semibold">ISYA</h3>
                            <p class="text-center text-[#BBE1FA] font-semibold text-base">13:00</p>
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
                                        <tr class="border-b-2">
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <div class="flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 stroke-lime-500 w-6 rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                                    </svg>
                                                    <p class="font-poppins text-sm font-semibold">Rp. 1.361.000</p>
                                                </div>
                                            </td>
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">03 Maret 2022</p>
                                            </td>
                                            <td class="w-6/12 flex-wrap text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">Infaq Jama’ah (Sholat Fardhu, Parkir, Penitipan, dan Standby)</p>
                                            </td>
                                        </tr>
                                        <tr class="border-b-2">
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <div class="flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 stroke-lime-500 w-6 rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                                    </svg>
                                                    <p class="font-poppins text-sm font-semibold">Rp. 1.361.000</p>
                                                </div>
                                            </td>
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">03 Maret 2022</p>
                                            </td>
                                            <td class="w-6/12 flex-wrap text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">Infaq Jama’ah (Sholat Fardhu, Parkir, Penitipan, dan Standby)</p>
                                            </td>
                                        </tr>
                                        <tr class="border-b-2">
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <div class="flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 stroke-lime-500 w-6 rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                                    </svg>
                                                    <p class="font-poppins text-sm font-semibold">Rp. 1.361.000</p>
                                                </div>
                                            </td>
                                            <td class="w-3/12 text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">03 Maret 2022</p>
                                            </td>
                                            <td class="w-6/12 flex-wrap text-left px-3 py-3">
                                                <p class="font-poppins text-sm font-semibold">Infaq Jama’ah (Sholat Fardhu, Parkir, Penitipan, dan Standby)</p>
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
                            <li class="splide__slide 2xl:w-3/12 xl:w-4/12 md:w-6/12 w-full h-[540px] shadow-lg mx-4">
                                <div class="flex flex-col h-full">
                                    <div class="img bg-black h-1/2 rounded-t-xl">
                                        <img class="rounded-t-xl h-full w-full opacity-50" src="{{ asset('images/gallery/1.png') }}" alt="">
                                    </div>
                                    <div class="tag absolute top-[240px] bg-blue-500 px-5 py-3"><h3 class="text-white font-semibold font-base font-poppins">Tag Artikel</h3></div>
                                    <div class="body h-1/2 bg-white flex flex-col p-10 rounded-b-xl">
                                        <h2 class="font-bold font-poppins text-xl mb-5">Title Artikel</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sunt illum ipsa optio dolorum ad.</p>
                                        <div class="flex justify-between mt-5 p-5 bg-[#F4F7F6]">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-blue-500 mr-2 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                <span class="text-xs font-poppins">Administrator</span>
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
                            <li class="splide__slide 2xl:w-3/12 xl:w-4/12 md:w-6/12 w-full h-[540px] shadow-lg mx-4">
                                <div class="flex flex-col h-full">
                                    <div class="img bg-black h-1/2 rounded-t-xl">
                                        <img class="rounded-t-xl h-full w-full opacity-50" src="{{ asset('images/gallery/1.png') }}" alt="">
                                    </div>
                                    <div class="tag absolute top-[240px] bg-blue-500 px-5 py-3"><h3 class="text-white font-semibold font-base font-poppins">Tag Artikel</h3></div>
                                    <div class="body h-1/2 bg-white flex flex-col p-10 rounded-b-xl">
                                        <h2 class="font-bold font-poppins text-xl mb-5">Title Artikel</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sunt illum ipsa optio dolorum ad.</p>
                                        <div class="flex justify-between mt-5 p-5 bg-[#F4F7F6]">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-blue-500 mr-2 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                <span class="text-xs font-poppins">Administrator</span>
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
                            <li class="splide__slide 2xl:w-3/12 xl:w-4/12 md:w-6/12 w-full h-[540px] shadow-lg mx-4">
                                <div class="flex flex-col h-full">
                                    <div class="img bg-black h-1/2 rounded-t-xl">
                                        <img class="rounded-t-xl h-full w-full opacity-50" src="{{ asset('images/gallery/1.png') }}" alt="">
                                    </div>
                                    <div class="tag absolute top-[240px] bg-blue-500 px-5 py-3"><h3 class="text-white font-semibold font-base font-poppins">Tag Artikel</h3></div>
                                    <div class="body h-1/2 bg-white flex flex-col p-10 rounded-b-xl">
                                        <h2 class="font-bold font-poppins text-xl mb-5">Title Artikel</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sunt illum ipsa optio dolorum ad.</p>
                                        <div class="flex justify-between mt-5 p-5 bg-[#F4F7F6]">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-blue-500 mr-2 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                <span class="text-xs font-poppins">Administrator</span>
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
                            <li class="splide__slide 2xl:w-3/12 xl:w-4/12 md:w-6/12 w-full h-[540px] shadow-lg mx-4">
                                <div class="flex flex-col h-full">
                                    <div class="img bg-black h-1/2 rounded-t-xl">
                                        <img class="rounded-t-xl h-full w-full opacity-50" src="{{ asset('images/gallery/1.png') }}" alt="">
                                    </div>
                                    <div class="tag absolute top-[240px] bg-blue-500 px-5 py-3"><h3 class="text-white font-semibold font-base font-poppins">Tag Artikel</h3></div>
                                    <div class="body h-1/2 bg-white flex flex-col p-10 rounded-b-xl">
                                        <h2 class="font-bold font-poppins text-xl mb-5">Title Artikel</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sunt illum ipsa optio dolorum ad.</p>
                                        <div class="flex justify-between mt-5 p-5 bg-[#F4F7F6]">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-blue-500 mr-2 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                <span class="text-xs font-poppins">Administrator</span>
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
                        <div class="flex lg:w-4/12 w-full shadow-lg p-10 rounded border-2">
                            <div class="flex flex-col items-center justify-center">
                                <h3 class="text-xl font-bold font-poppins text-black-50">Petugas Jum'at</h3>
                                <img class="rounded-full 2xl:w-32 xl:w-full md:w-1/3 my-5" src="{{ asset('/images/ustadz.jpg') }}" alt="">
                                <span class="font-semibold font-poppins">Nama Ustadz</span>
                                <p class="font-medium text-center text-gray-400 font-poppins">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                <span class="font-bold px-10 py-5 bg-blue-500 text-sm text-white rounded-full mt-5">12, Maret 2022</span>
                            </div>
                        </div>
                        <div class="flex lg:w-4/12 w-full shadow-lg justify-center rounded border-2">
                            <h2 class="absolute text-white font-semibold z-20 font-poppins mt-10 border-2 px-5 py-3 rounded-full">Agenda</h2>
                            <div class="slider-agenda z-10 w-full">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide sm:w-1/2 md:w-1/2 xl:w-1/4">
                                            <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                                <div class="relative pb-48 bg-black overflow-hidden">
                                                    <img class="absolute inset-0 opacity-50 h-full w-full object-cover" src="{{ asset('images/ustadz.jpg') }}" alt="">
                                                </div>
                                                <div class="p-4">
                                                    <h2 class="mt-2 mb-2 font-poppins font-bold">Judul Agenda</h2>
                                                    <p class="font-poppins text-black-50 text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, aliquid voluptatibus saepe ratione nulla perspiciatis maxime rem earum debitis veniam.</p>
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex lg:w-4/12 w-full shadow-lg justify-center rounded border-2">
                            <h2 class="absolute text-white font-semibold z-20 font-poppins mt-10 border-2 px-5 py-3 rounded-full">Pengumuman</h2>
                            <div class="slider-pengumuman relative z-10">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide sm:w-1/2 md:w-1/2 xl:w-1/4">
                                            <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                                <div class="relative pb-48 bg-black overflow-hidden">
                                                    <img class="absolute inset-0 opacity-50 h-full w-full object-cover" src="{{ asset('images/ustadz.jpg') }}" alt="">
                                                </div>
                                                <div class="p-4">
                                                    <h2 class="mt-2 mb-2 font-poppins font-bold">Judul Agenda</h2>
                                                    <p class="font-poppins text-black-50 text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet corrupti quisquam dignissimos quasi sequi aliquam rem corporis fuga esse aut dolore repellat quia assumenda reiciendis aliquid suscipit facere, quibusdam laudantium.</p>
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
                <div class="flex flex-wrap py-10">
                    <div class="sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                        <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative pb-48 overflow-hidden">
                                <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('images/gallery/1.png') }}" alt="">
                            </div>
                            <div class="p-4">
                                <h2 class="mt-2 mb-2 font-poppins font-bold">Pusat Kajian Islam & Penerbitan</h2>
                            </div>
                            <div class="p-4 border-t border-b text-xs text-gray-700">
                                <span class="flex items-center mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="font-bold font-poppins ml-2">(+62) 888 8888 9999</span>
                                </span>
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="font-bold font-poppins ml-2">Jaja Miharja (Sekretaris Mesjid)</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                        <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative pb-48 overflow-hidden">
                                <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('images/gallery/1.png') }}" alt="">
                            </div>
                            <div class="p-4">
                                <h2 class="mt-2 mb-2 font-poppins font-bold">Pusat Kajian Islam & Penerbitan</h2>
                            </div>
                            <div class="p-4 border-t border-b text-xs text-gray-700">
                                <span class="flex items-center mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="font-bold font-poppins ml-2">(+62) 888 8888 9999</span>
                                </span>
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="font-bold font-poppins ml-2">Jaja Miharja (Sekretaris Mesjid)</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                        <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative pb-48 overflow-hidden">
                                <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('images/gallery/1.png') }}" alt="">
                            </div>
                            <div class="p-4">
                                <h2 class="mt-2 mb-2 font-poppins font-bold">Pusat Kajian Islam & Penerbitan</h2>
                            </div>
                            <div class="p-4 border-t border-b text-xs text-gray-700">
                                <span class="flex items-center mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="font-bold font-poppins ml-2">(+62) 888 8888 9999</span>
                                </span>
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="font-bold font-poppins ml-2">Jaja Miharja (Sekretaris Mesjid)</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                        <a href="#" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative pb-48 overflow-hidden">
                                <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('images/gallery/1.png') }}" alt="">
                            </div>
                            <div class="p-4">
                                <h2 class="mt-2 mb-2 font-poppins font-bold">Pusat Kajian Islam & Penerbitan</h2>
                            </div>
                            <div class="p-4 border-t border-b text-xs text-gray-700">
                                <span class="flex items-center mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="font-bold font-poppins ml-2">(+62) 888 8888 9999</span>
                                </span>
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="font-bold font-poppins ml-2">Jaja Miharja (Sekretaris Mesjid)</span>
                                </span>
                            </div>
                        </a>
                    </div>
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
                                <li class="splide__slide">
                                  <img class="rounded-xl" src="{{ asset('images/gallery/1.png') }}" />
                                </li>
                                <li class="splide__slide">
                                  <img class="rounded-xl" src="{{ asset('images/gallery/2.png') }}" />
                                </li>
                                <li class="splide__slide">
                                  <img class="rounded-xl" src="{{ asset('images/gallery/3.png') }}" />
                                </li>
                              </ul>
                            </div>
                          </div>

                          <ul id="thumbnails" class="flex justify-center space-x-3 mt-5 thumbnails">
                            <li class="w-[70px] overflow-hidden list-none cursor-pointer bg-black">
                              <img class="thumbnail object-cover opacity-30" src="{{ asset('images/gallery/1.png') }}" />
                            </li>
                            <li class="w-[70px] overflow-hidden list-none cursor-pointer bg-black">
                              <img class="thumbnail opacity-30" src="{{ asset('images/gallery/2.png') }}" />
                            </li>
                            <li class="w-[70px] overflow-hidden list-none cursor-pointer bg-black">
                              <img class="thumbnail opacity-30" src="{{ asset('images/gallery/3.png') }}" />
                            </li>
                          </ul>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="text-center p-6 bg-[#EAF6FF]">
                <span>© 2022 Copyright:</span>
                <span class="text-gray-600 font-semibold">Masjid Jami Al-Ma'mur</span>
            </div>
        </footer>


        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/plugins/splide-3.6.12/js/splide.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/plugins/jquery-nav.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/inits/app.init.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/inits/slider.init.js') }}"></script>
    </body>
    </html>

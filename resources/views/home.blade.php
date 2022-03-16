<!doctype html>
<html>

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
                        <li><a href="#kontak-kami" class="text-white font-semibold font-poppins text-lg">Kontak</a></li>
                    </ul>
                </div>
                <div class="w-3/12 hidden md:block text-right">
                    <a
                        href="#infaq"
                        class="text-white font-semibold font-poppins text-lg bg-blue-500 px-6 py-3 rounded-full">Kirim
                        Infaq</a>
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
                    <li><a href="#kontak-kami" class="text-[#232528] font-semibold font-poppins text-lg">Kontak</a></li>
                    <li><a
                        href="#infaq"
                        class="text-white font-semibold font-poppins text-lg bg-blue-500 px-6 py-3 rounded-full">Kirim
                        Infaq</a></li>
                </ul>
            </div>
            <div class="text-center mt-32">
                <h1 class="text-white md:text-5xl text-2xl font-semibold font-poppins lg:w-8/12 sm:w-full mx-auto leading-relaxed">Masjid Jamie
                    Al-Ma’mur</h1>
                <span
                    class="md:text-base text-sm text-white bg-[#009FFD] bg-opacity-70 px-3 py-1 w-4/12 font-poppins rounded-full mx-auto leading-relaxed">Jl.
                    Raya Kp. Setu No. 22, RT 001 RW 002</span>
                    <ul class="flex space-x-4 mt-5 justify-center">
                        <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            class="h-10 w-10 text-white"
                            viewBox="0 0 48 48"
                            style=" fill:#FFFFFF;"><path d="M 16.5 5 C 10.16639 5 5 10.16639 5 16.5 L 5 31.5 C 5 37.832757 10.166209 43 16.5 43 L 31.5 43 C 37.832938 43 43 37.832938 43 31.5 L 43 16.5 C 43 10.166209 37.832757 5 31.5 5 L 16.5 5 z M 16.5 8 L 31.5 8 C 36.211243 8 40 11.787791 40 16.5 L 40 31.5 C 40 36.211062 36.211062 40 31.5 40 L 16.5 40 C 11.787791 40 8 36.211243 8 31.5 L 8 16.5 C 8 11.78761 11.78761 8 16.5 8 z M 34 12 C 32.895 12 32 12.895 32 14 C 32 15.105 32.895 16 34 16 C 35.105 16 36 15.105 36 14 C 36 12.895 35.105 12 34 12 z M 24 14 C 18.495178 14 14 18.495178 14 24 C 14 29.504822 18.495178 34 24 34 C 29.504822 34 34 29.504822 34 24 C 34 18.495178 29.504822 14 24 14 z M 24 17 C 27.883178 17 31 20.116822 31 24 C 31 27.883178 27.883178 31 24 31 C 20.116822 31 17 27.883178 17 24 C 17 20.116822 20.116822 17 24 17 z"></path></svg></a>
                        </li>
                        <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                class="h-10 w-10 text-white"
                                viewBox="0 0 48 48"
                                style=" fill:#FFFFFF;"><path d="M 11.5 6 C 8.4802259 6 6 8.4802259 6 11.5 L 6 36.5 C 6 39.519774 8.4802259 42 11.5 42 L 36.5 42 C 39.519774 42 42 39.519774 42 36.5 L 42 11.5 C 42 8.4802259 39.519774 6 36.5 6 L 11.5 6 z M 11.5 9 L 36.5 9 C 37.898226 9 39 10.101774 39 11.5 L 39 36.5 C 39 37.898226 37.898226 39 36.5 39 L 30 39 L 30 29 L 33.625 29 C 34.129 29 34.555187 28.623047 34.617188 28.123047 L 34.992188 25.123047 C 35.028188 24.839047 34.938047 24.553891 34.748047 24.337891 C 34.559047 24.122891 34.287 24 34 24 L 30 24 L 30 20.5 C 30 19.397 30.897 18.5 32 18.5 L 34 18.5 C 34.552 18.5 35 18.053 35 17.5 L 35 14.125 C 35 13.607 34.604844 13.174906 34.089844 13.128906 C 34.030844 13.123906 32.619984 13 30.833984 13 C 26.426984 13 24 15.616187 24 20.367188 L 24 24 L 20 24 C 19.448 24 19 24.447 19 25 L 19 28 C 19 28.553 19.448 29 20 29 L 24 29 L 24 39 L 11.5 39 C 10.101774 39 9 37.898226 9 36.5 L 9 11.5 C 9 10.101774 10.101774 9 11.5 9 z"></path></svg></a>
                        </li>
                        <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                class="h-10 w-10 text-white"
                                viewBox="0 0 48 48"
                                style=" fill:#FFFFFF;"><path d="M 23.857422 8.5 C 17.504717 8.5 11.602344 8.9526234 8.234375 9.65625 A 1.50015 1.50015 0 0 0 8.2128906 9.6621094 C 5.6754768 10.230693 3.2861897 12.048234 2.7832031 14.894531 A 1.50015 1.50015 0 0 0 2.78125 14.90625 C 2.394836 17.200265 2 20.190694 2 24.5 C 2 28.801151 2.3961903 31.712324 2.8847656 34.126953 C 3.4000756 36.889296 5.7342165 38.761817 8.3105469 39.337891 A 1.50015 1.50015 0 0 0 8.3476562 39.347656 C 11.86271 40.040284 17.598467 40.5 23.951172 40.5 C 30.303877 40.5 36.042686 40.04028 39.558594 39.347656 A 1.50015 1.50015 0 0 0 39.595703 39.337891 C 42.133117 38.769306 44.522404 36.951766 45.025391 34.105469 A 1.50015 1.50015 0 0 0 45.029297 34.083984 C 45.409789 31.743169 45.902812 28.755621 46 24.439453 A 1.50015 1.50015 0 0 0 46 24.40625 C 46 20.087697 45.50571 17.078675 45.023438 14.695312 C 44.512192 11.927074 42.175378 10.049478 39.595703 9.4726562 A 1.50015 1.50015 0 0 0 39.476562 9.4511719 C 36.0464 8.9689502 30.211115 8.5 23.857422 8.5 z M 23.857422 11.5 C 30.017774 11.5 35.726167 11.961361 38.966797 12.412109 C 40.559483 12.778239 41.824973 13.890643 42.074219 15.240234 A 1.50015 1.50015 0 0 0 42.078125 15.265625 C 42.543492 17.56209 42.996187 20.292628 42.998047 24.384766 C 42.904597 28.49001 42.450899 31.244675 42.070312 33.585938 C 41.810413 35.044446 40.592 36.034419 38.953125 36.40625 C 35.805209 37.023818 30.142051 37.5 23.951172 37.5 C 17.759247 37.5 12.097629 37.021978 8.9511719 36.404297 C 7.3525116 36.041193 6.081938 34.925434 5.8320312 33.572266 A 1.50015 1.50015 0 0 0 5.8261719 33.546875 C 5.3660305 31.276194 5 28.628694 5 24.5 C 5 20.378688 5.3654221 17.62199 5.7363281 15.417969 C 5.9947549 13.955585 7.2164425 12.963194 8.859375 12.591797 C 11.774266 11.984227 17.659955 11.5 23.857422 11.5 z M 20.460938 16.023438 C 18.668395 16.081606 17 17.525347 17 19.486328 L 17 28.515625 C 17 31.130266 19.966455 32.825862 22.238281 31.542969 A 1.50015 1.50015 0 0 0 22.238281 31.541016 L 30.228516 27.027344 C 32.516764 25.734577 32.516764 22.265423 30.228516 20.972656 L 22.238281 16.458984 C 21.670325 16.138261 21.058451 16.004047 20.460938 16.023438 z M 20.472656 18.980469 C 20.562791 18.985356 20.661175 19.013538 20.761719 19.070312 L 28.751953 23.585938 C 29.157705 23.815171 29.157705 24.186783 28.751953 24.416016 L 20.761719 28.929688 C 20.359545 29.156793 20 28.944984 20 28.515625 L 20 19.486328 C 20 19.271649 20.09013 19.111638 20.230469 19.033203 C 20.300636 18.993988 20.382521 18.975581 20.472656 18.980469 z"></path></svg></a>
                        </li>
                    </ul>
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
                                    <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">Cerah</span>
                                </div>
                                <span id="timeNow" class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins"></span>
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
                                    <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">SUBUH</span>
                                </div>
                                <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">{{ $waktuSholat['subuh'] }}</span>
                            </div>
                            <div class="flex justify-between items-center border-2 w-full px-5 py-3 rounded-lg mt-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-left stroke-[#009FFD] mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">DZUHUR</span>
                                </div>
                                <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">{{ $waktuSholat['dhuhr'] }}</span>
                            </div>
                            <div class="flex justify-between items-center border-2 w-full px-5 py-3 rounded-lg mt-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-left stroke-[#009FFD] mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">ASHAR</span>
                                </div>
                                <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">{{ $waktuSholat['asr'] }}</span>
                            </div>
                            <div class="flex justify-between items-center border-2 w-full px-5 py-3 rounded-lg mt-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-left stroke-[#009FFD] mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">MAGHRIB</span>
                                </div>
                                <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">{{ $waktuSholat['maghrib'] }}</span>
                            </div>
                            <div class="flex justify-between items-center border-2 w-full px-5 py-3 rounded-lg mt-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-left stroke-[#009FFD] mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">ISHA</span>
                                </div>
                                <span class="text-[#232528] md:text-2xl text-sm font-semibold font-poppins">{{ $waktuSholat['isha'] }}</span>
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


    <section id="infaq">
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
                    <h1 class="text-center font-bold text-2xl text-[#232528] font-poppins">Gallery</h1>
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

    {{-- SECTION KONTAK --}}
    <section id="kontak-kami" class="bg-[#EAF6FF]">
        <div class="container mx-auto py-10 lg:px32">
            <div class="flex flex-wrap lg:flex-nowrap item-center justify-center w-full">
                <div class="2xl:w-4/12 lg:w-6/12 sm:w-full">
                    <div class="bg-blue-500 rounded p-10 shadow-lg">
                        <h3 class="text-white font-bold font-poppins text-2xl">Kontak Informasi</h3>
                        <p class="mt-5 text-white font-medium font-poppins">Untuk konfirmasi dan informasi lebih lanjut silahkan menghubungi pengurus atau datang kelokasi.</p>
                        <div class="flex mt-10 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 3h5m0 0v5m0-5l-6 6M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                            </svg>
                            <p class="text-white font-poppins text-medium ml-5">(+62) 817-9842-325 / (+62) 889-1464-191</p>
                        </div>
                        <div class="flex mt-5 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <p class="text-white font-poppins text-medium ml-5">info@masjidjamialmamur.com</p>
                        </div>
                        <div class="flex flex-col my-10 text-white">
                            <p class="text-white font-poppins text-medium ml-5">JL. Raya Kp.Setu No.22 RT/RW 001/002</p>
                            <p class="text-white font-poppins text-medium ml-5">Bintara Jaya, Kecamatan Bekasi Barat</p>
                            <p class="text-white font-poppins text-medium ml-5">Kota Bekasi, Jawa Barat</p>
                        </div>
                        <div class="flex flex-col my-10 text-white items-center">
                            <ul class="flex space-x-4">
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    class="h-10 w-10 text-white"
                                    viewBox="0 0 48 48"
                                    style=" fill:#FFFFFF;"><path d="M 16.5 5 C 10.16639 5 5 10.16639 5 16.5 L 5 31.5 C 5 37.832757 10.166209 43 16.5 43 L 31.5 43 C 37.832938 43 43 37.832938 43 31.5 L 43 16.5 C 43 10.166209 37.832757 5 31.5 5 L 16.5 5 z M 16.5 8 L 31.5 8 C 36.211243 8 40 11.787791 40 16.5 L 40 31.5 C 40 36.211062 36.211062 40 31.5 40 L 16.5 40 C 11.787791 40 8 36.211243 8 31.5 L 8 16.5 C 8 11.78761 11.78761 8 16.5 8 z M 34 12 C 32.895 12 32 12.895 32 14 C 32 15.105 32.895 16 34 16 C 35.105 16 36 15.105 36 14 C 36 12.895 35.105 12 34 12 z M 24 14 C 18.495178 14 14 18.495178 14 24 C 14 29.504822 18.495178 34 24 34 C 29.504822 34 34 29.504822 34 24 C 34 18.495178 29.504822 14 24 14 z M 24 17 C 27.883178 17 31 20.116822 31 24 C 31 27.883178 27.883178 31 24 31 C 20.116822 31 17 27.883178 17 24 C 17 20.116822 20.116822 17 24 17 z"></path></svg></a>
                                </li>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        class="h-10 w-10 text-white"
                                        viewBox="0 0 48 48"
                                        style=" fill:#FFFFFF;"><path d="M 11.5 6 C 8.4802259 6 6 8.4802259 6 11.5 L 6 36.5 C 6 39.519774 8.4802259 42 11.5 42 L 36.5 42 C 39.519774 42 42 39.519774 42 36.5 L 42 11.5 C 42 8.4802259 39.519774 6 36.5 6 L 11.5 6 z M 11.5 9 L 36.5 9 C 37.898226 9 39 10.101774 39 11.5 L 39 36.5 C 39 37.898226 37.898226 39 36.5 39 L 30 39 L 30 29 L 33.625 29 C 34.129 29 34.555187 28.623047 34.617188 28.123047 L 34.992188 25.123047 C 35.028188 24.839047 34.938047 24.553891 34.748047 24.337891 C 34.559047 24.122891 34.287 24 34 24 L 30 24 L 30 20.5 C 30 19.397 30.897 18.5 32 18.5 L 34 18.5 C 34.552 18.5 35 18.053 35 17.5 L 35 14.125 C 35 13.607 34.604844 13.174906 34.089844 13.128906 C 34.030844 13.123906 32.619984 13 30.833984 13 C 26.426984 13 24 15.616187 24 20.367188 L 24 24 L 20 24 C 19.448 24 19 24.447 19 25 L 19 28 C 19 28.553 19.448 29 20 29 L 24 29 L 24 39 L 11.5 39 C 10.101774 39 9 37.898226 9 36.5 L 9 11.5 C 9 10.101774 10.101774 9 11.5 9 z"></path></svg></a>
                                </li>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        class="h-10 w-10 text-white"
                                        viewBox="0 0 48 48"
                                        style=" fill:#FFFFFF;"><path d="M 23.857422 8.5 C 17.504717 8.5 11.602344 8.9526234 8.234375 9.65625 A 1.50015 1.50015 0 0 0 8.2128906 9.6621094 C 5.6754768 10.230693 3.2861897 12.048234 2.7832031 14.894531 A 1.50015 1.50015 0 0 0 2.78125 14.90625 C 2.394836 17.200265 2 20.190694 2 24.5 C 2 28.801151 2.3961903 31.712324 2.8847656 34.126953 C 3.4000756 36.889296 5.7342165 38.761817 8.3105469 39.337891 A 1.50015 1.50015 0 0 0 8.3476562 39.347656 C 11.86271 40.040284 17.598467 40.5 23.951172 40.5 C 30.303877 40.5 36.042686 40.04028 39.558594 39.347656 A 1.50015 1.50015 0 0 0 39.595703 39.337891 C 42.133117 38.769306 44.522404 36.951766 45.025391 34.105469 A 1.50015 1.50015 0 0 0 45.029297 34.083984 C 45.409789 31.743169 45.902812 28.755621 46 24.439453 A 1.50015 1.50015 0 0 0 46 24.40625 C 46 20.087697 45.50571 17.078675 45.023438 14.695312 C 44.512192 11.927074 42.175378 10.049478 39.595703 9.4726562 A 1.50015 1.50015 0 0 0 39.476562 9.4511719 C 36.0464 8.9689502 30.211115 8.5 23.857422 8.5 z M 23.857422 11.5 C 30.017774 11.5 35.726167 11.961361 38.966797 12.412109 C 40.559483 12.778239 41.824973 13.890643 42.074219 15.240234 A 1.50015 1.50015 0 0 0 42.078125 15.265625 C 42.543492 17.56209 42.996187 20.292628 42.998047 24.384766 C 42.904597 28.49001 42.450899 31.244675 42.070312 33.585938 C 41.810413 35.044446 40.592 36.034419 38.953125 36.40625 C 35.805209 37.023818 30.142051 37.5 23.951172 37.5 C 17.759247 37.5 12.097629 37.021978 8.9511719 36.404297 C 7.3525116 36.041193 6.081938 34.925434 5.8320312 33.572266 A 1.50015 1.50015 0 0 0 5.8261719 33.546875 C 5.3660305 31.276194 5 28.628694 5 24.5 C 5 20.378688 5.3654221 17.62199 5.7363281 15.417969 C 5.9947549 13.955585 7.2164425 12.963194 8.859375 12.591797 C 11.774266 11.984227 17.659955 11.5 23.857422 11.5 z M 20.460938 16.023438 C 18.668395 16.081606 17 17.525347 17 19.486328 L 17 28.515625 C 17 31.130266 19.966455 32.825862 22.238281 31.542969 A 1.50015 1.50015 0 0 0 22.238281 31.541016 L 30.228516 27.027344 C 32.516764 25.734577 32.516764 22.265423 30.228516 20.972656 L 22.238281 16.458984 C 21.670325 16.138261 21.058451 16.004047 20.460938 16.023438 z M 20.472656 18.980469 C 20.562791 18.985356 20.661175 19.013538 20.761719 19.070312 L 28.751953 23.585938 C 29.157705 23.815171 29.157705 24.186783 28.751953 24.416016 L 20.761719 28.929688 C 20.359545 29.156793 20 28.944984 20 28.515625 L 20 19.486328 C 20 19.271649 20.09013 19.111638 20.230469 19.033203 C 20.300636 18.993988 20.382521 18.975581 20.472656 18.980469 z"></path></svg></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="xl:w-8/12 lg:w-6/12 xl:py-7 lg:py-6 w-full">
                    <div class="bg-white rounded p-10 shadow-lg">
                        <form action="">
                            <div class="md:flex md:space-x-5 sm:py-5">
                                <div class="md:w-6/12 w-full flex flex-col">
                                    <label class="font-poppins text-black font-semibold" for="Name">Nama Lengkap :</label>
                                    <input class="mt-3 border-2 p-2" placeholder="Nama Lengkap" type="text">
                                </div>
                                <div class="md:w-6/12 w-full flex flex-col">
                                    <label class="font-poppins text-black font-semibold" for="Name">Email :</label>
                                    <input class="mt-3 border-2 p-2" placeholder="example@email.com" type="text">
                                </div>
                            </div>
                            <div class="flex mt-5">
                                <div class="md:w-6/12 w-full flex flex-col">
                                    <label class="font-poppins text-black font-semibold" for="Name">Nomor Telepon :</label>
                                    <input class="mt-3 border-2 py-2 px-2" placeholder="example@email.com" type="text">
                                </div>
                            </div>
                            <div class="flex mt-5">
                                <div class="w-full flex flex-col">
                                    <label class="font-poppins text-black font-semibold" for="Name">Pesan :</label>
                                    <textarea name="pesan" id="pesan" class="border-2 rounded" cols="30" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="flex mt-10">
                                <button class="rounded-full bg-blue-500 text-white font-poppins py-3 px-10">Kirim</button>
                            </div>
                        </form>
                    </div>
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
    <script type="text/javascript" src="{{ asset('/js/plugins/jquery-nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/inits/app.init.js') }}"></script>
</body>

</html>

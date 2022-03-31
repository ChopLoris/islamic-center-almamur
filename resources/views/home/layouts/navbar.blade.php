<div id="preloader" class="fixed h-screen w-screen bg-blue-600 z-50 overflow-hidden">
    <div class="flex justify-center items-center h-screen">
        <img src="{{ asset('assets/img/preloader.gif') }}" alt="">
    </div>
</div>

<div class="fixed w-full z-30 top-0 bg-white shadow-lg" @scroll.window="showInfo = (window.pageYOffset > 20) ? false : true">
    <div class="p-3 bg-blue-500" :class="{ 'flex': showInfo, 'hidden': !showInfo }">
        <span class="w-36 lg:flex hidden text-white 2xl:text-base lg:text-sm font-semibold font-poppins">SEKILAS INFO</span>
        <marquee class="font-poppins text-white lg:text-sm text-xs font-semibold" behavior="" loop="infinite" direction="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga laborum sit ex voluptatum iure accusantium?</marquee>
        <span id="timeNow" class="w-40 ml-5 lg:flex hidden text-white 2xl:text-base lg:text-sm font-semibold font-poppins">WAKTU 15:03:22</span>
    </div>
    <div class="lg:container bg-white flex lg:flex-row flex-col justify-between mx-auto 2xl:px-16 px-0">
        <div class="flex flex-col xl:w-6/12 lg:w-5/12 items-center logo">
            <div class="flex w-full items-center">
                <div class="image">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </div>
                <div class="ml-2">
                    <h1 class="xl:text-2xl lg:text-xl text-sm font-semibold font-poppins">Masjid Jamie Al-Ma'mur</h1>
                    <p class="xl:text-sm w-8/12 lg:text-sm text-xs font-semibold font-poppins text-gray-500">Pusat Perubahan Menuju Muslim Yang Rahmatan Lil'alamin</p>
                </div>
            </div>
            <div class="w-full lg:hidden flex flex-col mx-auto">
                <div class="flex bg-[#0F4C75]">
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
        <div class="xl:w-6/12 lg:w-7/12 flex items-center" x-data="{ navOpen: false }">
            <div class="w-full lg:inline-flex hidden" :class="{ 'hidden': !navOpen, 'flex': navOpen}">
                <ul class="flex w-full lg:flex-row flex-col xl:space-x-10 lg:space-x-5 overflow-hidden">
                    <li class="xl:text-lg lg:py-0 lg:px-0 border-b-2 border-blue-200 lg:border-b-4 py-3 px-2">
                        <a class="text-base font-semibold font-poppins text-black-50 border-blue-400" href="">Beranda</a>
                    </li>
                    <li class="xl:text-lg lg:py-0 lg:px-0 py-3 px-2 border-b-2 border-blue-200 lg:border-b-0" x-data="{ opendropDown: false }">
                        <button class="text-base w-full justify-between flex flex-row items-center space-x-2 mt-0 xl:mt-[3px] overflow-hidden font-semibold font-poppins text-black-50" @click.prevent="opendropDown = !opendropDown">
                            <span>Artikel</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="lg:absolute bg-white lg:w-48 lg:border-2 rounded-lg mt-6" x-show="opendropDown" @click.away="opendropDown = false">
                            <ul class="font-semibold font-poppins text-base">
                                <li class="px-3 py-3 hover:bg-blue-200"><a href="">Semua Kategori</a></li>
                                @foreach ($kategoriArtikel as $item)
                                    <li class="px-3 py-3 hover:bg-blue-200"><a href="">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="xl:text-lg lg:py-0 lg:px-0 py-3 px-2 border-b-2 border-blue-200 lg:border-b-0" x-data="{ opendropDown: false }">
                        <button class="text-base w-full justify-between flex flex-row items-center space-x-2 mt-0 xl:mt-[3px] overflow-hidden font-semibold font-poppins text-black-50" @click.prevent="opendropDown = !opendropDown">
                            <span>Infaq</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="lg:absolute bg-white lg:w-48 lg:border-2 rounded-lg mt-6" x-show="opendropDown" @click.away="opendropDown = false">
                            <ul class="font-semibold font-poppins text-base">
                                <li class="px-3 py-3 hover:bg-blue-200"><a href="">Laporan Infaq</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="xl:text-lg lg:py-0 lg:px-0 py-3 px-2 border-b-2 border-blue-200 lg:border-b-0" x-data="{ opendropDown: false }">
                        <button class="text-base w-full justify-between flex flex-row items-center space-x-2 mt-0 xl:mt-[3px] overflow-hidden font-semibold font-poppins text-black-50" @click.prevent="opendropDown = !opendropDown">
                            <span>Informasi</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="lg:absolute bg-white lg:w-48 lg:border-2 rounded-lg mt-6" x-show="opendropDown" @click.away="opendropDown = false">
                            <ul class="font-semibold font-poppins text-base">
                                @foreach ($semuaKategori as $item)
                                    @if ($item->id == 1 || $item->id == 2 || $item->id == 3)
                                        <li class="px-3 py-3 hover:bg-blue-200"><a href="">{{ $item->name }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="xl:text-lg lg:py-0 lg:px-0 border-b-2 border-blue-200 lg:border-b-0 py-3 px-2">
                        <a class="text-base font-semibold font-poppins text-black-50 border-blue-400" href="">Gallery</a>
                    </li>
                </ul>
            </div>
            <div class="lg:static absolute right-2 flex space-x-2" :class="{'top-7': !showInfo, 'top-16': showInfo}">
                <button class="px-2 py-2 bg-blue-200 rounded-full" @click.prevent="showSearch = !showSearch">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                      </svg>
                </button>
                <button class="lg:hidden px-2 py-2 bg-blue-200 rounded-full" @click.prevent = "navOpen = !navOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="fixed h-screen bg-black bg-opacity-70 w-full z-40" x-show="showSearch">
    <div class="absolute right-0 text-white">
        <button class="mr-5 mt-10" @click.prevent="showSearch = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="absolute top-1/2 left-[25%] mx-auto w-8/12">
        <input class="bg-white rounded-full lg:w-8/12 w-10/12 px-5 py-3 text-center placeholder-slate-700 border-2 border-blue-400 outline-0 font-poppins text-bold" placeholder="Search" type="text" @click.away="showSearch = false">
    </div>
</div>


@extends('home.layouts.master')


@section('content')

    <section class="lg:pt-44 pt-52">
        <div class="container flex lg:flex-row flex-col lg:space-x-7 space-x-0 w-full mx-auto">
            <div class="lg:w-9/12 w-full px-3">
                <div class="tag flex justify-between mb-3 bg-blue-500 px-5 py-3 shadow-lg">
                    <div class="text-white flex items-center font-poppins text-sm">
                        <ul class="flex space-x-1">
                            <li class="lg:text-sm text-xs font-poppins"><a href="">Beranda </a>/</li>
                            <li class="lg:text-sm text-xs font-poppins"><a href="">Artikel </a>/</li>
                            <li class="lg:text-sm text-xs font-poppins"><a href="">Berita </a></li>
                        </ul>
                    </div>
                    <div class="flex space-x-2">
                        <div class="created_once flex text-white items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              <span class="font-poppins text-xs">12 Januari 2022</span>
                        </div>
                    </div>
                </div>
                <div class="image-content mb-5">
                    <img class="w-full md:h-[432px] h-[240px] object-fill shadow-lg" src="{{ asset('images/layanan/1648534554_1.jpg') }}" alt="">
                </div>
                <div class="title-content mb-3">
                    <h2 class="font-bold font-poppins text-3xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugit tempora magnam quae?</h2>
                </div>
                <div class="content-body mb-10 border-b-2 pb-10">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis ea expedita voluptatum animi adipisci neque id. Reiciendis nostrum tenetur optio quis laborum. Ut voluptates alias cum delectus ducimus nulla eius, explicabo ratione molestias voluptate odit magni sed aliquam facere consectetur inventore sit ad nisi, dolorem doloremque? Amet vero totam voluptatem eaque! Odio non velit quasi libero quam, eaque, possimus sunt ratione qui neque quod dicta! Eum a aliquid, cupiditate maxime aut, harum fugiat, illo iste labore ratione amet voluptatibus commodi quisquam culpa. Culpa eligendi rerum veniam velit expedita aperiam praesentium, reprehenderit assumenda inventore illo molestias libero vero odio incidunt sapiente facere et beatae reiciendis temporibus minus tempora perferendis voluptates ratione sunt? Accusantium aliquam minus possimus illo nesciunt, ex dignissimos eveniet fugit reprehenderit et necessitatibus dolorem, eos facere odit voluptatem iste veritatis nemo illum consequatur animi explicabo modi laboriosam blanditiis hic. Asperiores veniam fugit aut minima tempore dolorem non ab excepturi explicabo quidem! Veniam velit aliquid animi optio, architecto quo. Eum, labore soluta nostrum totam velit saepe porro sint aliquid perspiciatis, incidunt non? Esse, quam, mollitia, nemo dolore veritatis deserunt ipsum deleniti officia doloremque totam praesentium dicta architecto accusantium necessitatibus maiores blanditiis earum amet quaerat delectus? Corporis iusto minima dicta hic dolorem non, aliquam asperiores reprehenderit eveniet? At praesentium, ad unde iste saepe maxime sunt, aperiam earum laudantium doloremque natus perspiciatis recusandae impedit quo voluptates ipsam. Earum sint totam quas enim illum placeat obcaecati atque inventore eaque omnis, sapiente ea quasi. Obcaecati explicabo dolorem rerum autem libero! Labore accusantium facilis dignissimos! Neque adipisci, aspernatur fugit sit alias veritatis? Repudiandae aperiam quo autem dolorum, debitis possimus aut? Culpa unde reprehenderit inventore est voluptatibus iste quo beatae. Quasi atque perspiciatis ducimus cupiditate praesentium enim, libero placeat itaque numquam porro commodi vitae animi delectus vero ipsam veniam modi corporis, inventore voluptates. Suscipit, magnam possimus..
                    </p>
                </div>
                <div class="flex justify-between mb-10">
                    <div class="before text-blue-500">
                        <a class="flex items-center space-x-3" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                              </svg>
                            <div class="flex flex-col">
                                <span class="text-black font-poppins text-sm italic">Sebelumnya</span>
                                <span class="font-poppins font-semibold text-sm">Makna Zakat Fitrah</span>
                            </div>
                        </a>
                    </div>
                    <div class="after text-blue-500">
                        <a class="flex items-center space-x-3" href="">
                            <div class="flex flex-col">
                                <span class="text-black text-right font-poppins text-sm italic">Sesudahnya</span>
                                <span class="font-poppins text-right font-semibold text-sm">Makna Zakat Fitrah</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                              </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <h4 class="font-poppins font-bold text-2xl">Artikel Lainnya</h4>
                    <div class="mt-5">
                        <div class="slider-other-article w-full">
                            <div class="splide__track">
                                <ul class="splide__list w-full">
                                    <li class="splide__slide p-4 lg:w-1/3 md:w-6/12 w-full" data-splide-interval="1000">
                                        <div class="h-full w-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                            <img class="h-32 w-full object-cover object-center" src="{{ asset('images/layanan/1648534554_1.jpg') }}" alt="content-images">
                                            <div class="px-5 py-3 hover:bg-blue-400 hover:text-white transition duration-300 ease-in">
                                                <h2 class="text-sm font-medium text-black-50 mb-1 font-poppins">October, 29, 2021</h2>
                                                <h1 class="text-xl font-poppins font-semibold mb-3">Lorem ipsum dolor sit amet.</h1>
                                                <p class="leading-relaxed font-poppins mb-3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quasi vitae rerum unde, nulla ratione!
                                                </p>
                                                <div class="flex items-center text-blue-700 flex-wrap">
                                                    <a href="" class="text-black-50 inline-flex font-poppins items-center md:mb-2 lg:mb-0">Lihat Selengkapnya</a>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black-50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                      </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-3/12 w-full flex-col">
                <div class="card w-full mb-5">
                    <div class="card-header bg-blue-500 px-5 py-3">
                        <span class="text-white font-poppins">Youtube Channel</span>
                    </div>
                    <div class="card-body shadow-lg">
                        <iframe class="w-full h-[200px]" src="https://www.youtube.com/embed/X5YNMYg6uCc" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="card w-full mb-5">
                    <div class="card-header bg-blue-500 px-5 py-3">
                        <span class="text-white font-poppins">Infaq Terbaru</span>
                    </div>
                    <div class="card-body shadow-lg">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b-2">
                                    <th class="w-2/5 text-left text-sm font-poppins px-3 py-3">Jumlah</th>
                                    <th class="w-3/5 text-left text-sm font-poppins px-3 py-3">Dari</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b-2">
                                    <td class="w-2/5 text-left text-sm font-poppins px-3 py-3">Rp 500.000</td>
                                    <td class="w-3/5 text-left text-sm font-poppins px-3 py-3">Infaq Parkir Kendaraan Bulanan Juli 2021</td>
                                </tr>
                                <tr class="border-b-2">
                                    <td class="w-2/5 text-left text-sm font-poppins px-3 py-3">Rp 500.000</td>
                                    <td class="w-3/5 text-left text-sm font-poppins px-3 py-3">Infaq Parkir Kendaraan Bulanan Juli 2021</td>
                                </tr>
                                <tr class="border-b-2">
                                    <td class="w-2/5 text-left text-sm font-poppins px-3 py-3">Rp 500.000</td>
                                    <td class="w-3/5 text-left text-sm font-poppins px-3 py-3">Infaq Parkir Kendaraan Bulanan Juli 2021</td>
                                </tr>
                                <tr class="border-b-2">
                                    <td class="w-2/5 text-left text-sm font-poppins px-3 py-3">Rp 500.000</td>
                                    <td class="w-3/5 text-left text-sm font-poppins px-3 py-3">Infaq Parkir Kendaraan Bulanan Juli 2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card w-full mb-5">
                    <div class="card-header bg-blue-500 px-5 py-3">
                        <span class="text-white font-poppins">Agenda Terbaru</span>
                    </div>
                    <div class="card-body shadow-lg">
                        <ul class="px-5 py-3">
                            <li class="border-b-2 py-2">
                                <a class="flex space-x-3" href="">
                                    <img class="w-14 h-14" src="{{ asset('images/layanan/1648534554_1.jpg') }}" alt="">
                                    <div class="flex flex-col">
                                        <span class="font-poppins text-sm">Pengukuhan Pengurus KKBTPQ Periode 2021-2026</span>
                                        <span class="text-xs font-poppins italic">1 Month Ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="border-b-2 py-2">
                                <a class="flex space-x-3" href="">
                                    <img class="w-14 h-14" src="{{ asset('images/layanan/1648534554_1.jpg') }}" alt="">
                                    <div class="flex flex-col">
                                        <span class="font-poppins text-sm">Pengukuhan Pengurus KKBTPQ Periode 2021-2026</span>
                                        <span class="text-xs font-poppins italic">1 Month Ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="border-b-2 py-2">
                                <a class="flex space-x-3" href="">
                                    <img class="w-14 h-14" src="{{ asset('images/layanan/1648534554_1.jpg') }}" alt="">
                                    <div class="flex flex-col">
                                        <span class="font-poppins text-sm">Pengukuhan Pengurus KKBTPQ Periode 2021-2026</span>
                                        <span class="text-xs font-poppins italic">1 Month Ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="border-b-2 py-2">
                                <a class="flex space-x-3" href="">
                                    <img class="w-14 h-14" src="{{ asset('images/layanan/1648534554_1.jpg') }}" alt="">
                                    <div class="flex flex-col">
                                        <span class="font-poppins text-sm">Pengukuhan Pengurus KKBTPQ Periode 2021-2026</span>
                                        <span class="text-xs font-poppins italic">1 Month Ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card w-full mb-5">
                    <div class="card-header bg-blue-500 px-5 py-3">
                        <span class="text-white font-poppins">Informasi</span>
                    </div>
                    <div class="card-body shadow-lg">
                        <ul class="px-5 py-3">
                            <li class="font-poppins text-sm border-b-2 py-2"><a href="" class="text-blue-700">Pengukuhan Pengurus KKBTPQ Periode 2021-2026 <span class="text-black font-semibold">Februari 2, 2022</span></a></li>
                            <li class="font-poppins text-sm border-b-2 py-2"><a href="" class="text-blue-700">Pengukuhan Pengurus KKBTPQ Periode 2021-2026 <span class="text-black font-semibold">Februari 2, 2022</span></a></li>
                            <li class="font-poppins text-sm border-b-2 py-2"><a href="" class="text-blue-700">Pengukuhan Pengurus KKBTPQ Periode 2021-2026 <span class="text-black font-semibold">Februari 2, 2022</span></a></li>
                            <li class="font-poppins text-sm border-b-2 py-2"><a href="" class="text-blue-700">Pengukuhan Pengurus KKBTPQ Periode 2021-2026 <span class="text-black font-semibold">Februari 2, 2022</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card w-full mb-5">
                    <div class="card-header bg-blue-500 px-5 py-3">
                        <span class="text-white font-poppins">Pengumuman</span>
                    </div>
                    <div class="card-body shadow-lg">
                        <ul class="px-5 py-3">
                            <li class="border-b-2 py-2">
                                <a class="flex space-x-3" href="">
                                    <img class="w-14 h-14" src="{{ asset('images/layanan/1648534554_1.jpg') }}" alt="">
                                    <div class="flex flex-col">
                                        <span class="font-poppins text-sm">Pengukuhan Pengurus KKBTPQ Periode 2021-2026</span>
                                        <span class="text-xs font-poppins italic">1 Month Ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="border-b-2 py-2">
                                <a class="flex space-x-3" href="">
                                    <img class="w-14 h-14" src="{{ asset('images/layanan/1648534554_1.jpg') }}" alt="">
                                    <div class="flex flex-col">
                                        <span class="font-poppins text-sm">Pengukuhan Pengurus KKBTPQ Periode 2021-2026</span>
                                        <span class="text-xs font-poppins italic">1 Month Ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="border-b-2 py-2">
                                <a class="flex space-x-3" href="">
                                    <img class="w-14 h-14" src="{{ asset('images/layanan/1648534554_1.jpg') }}" alt="">
                                    <div class="flex flex-col">
                                        <span class="font-poppins text-sm">Pengukuhan Pengurus KKBTPQ Periode 2021-2026</span>
                                        <span class="text-xs font-poppins italic">1 Month Ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="border-b-2 py-2">
                                <a class="flex space-x-3" href="">
                                    <img class="w-14 h-14" src="{{ asset('images/layanan/1648534554_1.jpg') }}" alt="">
                                    <div class="flex flex-col">
                                        <span class="font-poppins text-sm">Pengukuhan Pengurus KKBTPQ Periode 2021-2026</span>
                                        <span class="text-xs font-poppins italic">1 Month Ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('custom-js')

    <script>
        $(document).ready(function () {
            new Splide('.slider-other-article', {
                type: 'loop',
                drag: 'free',
                perPage : 3,
                autoplay: true,
                autoWidth: true,
                arrows: false
            }).mount();
        })
    </script>

@endsection

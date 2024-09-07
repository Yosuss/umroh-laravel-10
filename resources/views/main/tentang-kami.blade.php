@extends('template.layout')
@section('konten')
    <div class="tentang-kami w-full">

        {{-- navbar --}}
        <div class="navbar z-50 top-0 backdrop-blur-lg w-full gap-1 capitalize text-lg flex fixed lg:relative">
            <div class="logo px-5 pt-8 pb-4 lg:pl-20 z-1 lg:w-3/6 w-full">
                <img src="{{ asset('aset/sinaii.svg') }}" alt="" class=" w-4/12 lg:w-2/12">
            </div>

            <div class="section flex font-medium text-lg font-sans w-full justify-end pr-0 lg:pr-32">
                <!-- Burger Button (visible only on small screens) -->
                <div
                    class="lg:hidden flex max-lg:items-center max-lg:py-2 justify-end max-lg:pr-4 max-lg:text-end max-lg:w-full">
                    <div id="burger" class="p-2 focus:outline-none relative z-[999] flex flex-col justify-center">
                        <span class="line left-0 w-8 h-[0.1rem] bg-black duration-200 mb-2"></span>
                        <span class="line left-0 w-8 h-[0.1rem] bg-black duration-200"></span>
                    </div>
                </div>

                <!-- Menu items -->
                <div id="menu"
                    class="hidden w-full lg:flex font-normal text-2xl text-end justify-end items-center gap-12 ">
                    <a href="{{ url('/') }}">
                        <h1 class="">beranda</h1>
                    </a>
                    <a href="{{ url('/layanan') }}">
                        <h1 class="">layanan</h1>
                    </a>
                    <a href="{{ url('/tentang-kami') }}">
                        <h1 class="font-bold">tentang kami</h1>
                    </a>
                    <a href="{{ url('/testimoni') }}">
                        <h1 class="">testimonial</h1>
                    </a>
                    <a href="{{ url('/contact') }}">
                        <h1 class="">hubungi<span class=""> kami</span></h1>
                    </a>
                    <h1 class="">sign <span class=""> In</span></h1>
                </div>

                <!-- Dropdown for mobile -->
                <div id="dropdown" class="hidden bg-white top-0 left-0 w-full space-y-2 lg:mt-2 h-screen z-50 fixed">
                    <div class="absolute bottom-0 w-full">
                        <a href="{{ url('/') }}">
                            <h1 class="text-black text-4xl px-2 py-4">beranda</h1>
                        </a>
                        <a href="{{ url('/') }}">
                            <h1 class="text-black text-4xl px-2 py-4">layanan</h1>
                        </a>
                        <a href="{{ url('/') }}">
                            <h1 class="text-black text-4xl px-2 py-4">tentang kami</h1>
                        </a>
                        <a href="{{ url('/') }}">
                            <h1 class="text-black text-4xl px-2 py-4">testimonial</h1>
                        </a>
                        <a href="{{ url('/') }}">
                            <h1 class="text-black text-4xl px-2 py-4">hubungi kami</h1>
                        </a>
                        <h1 class="text-black text-4xl px-2 py-4">sign In</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- navbar end --}}


        {{-- dedikasi --}}
        <div
            class="flex flex-col-reverse justify-center items-center lg:flex-row gap-2 mt-40 lg:mt-32 m-10 lg:mb-44 lg:m-20">
            <div class="flex justify-center items-center size-full relative">
                <div class="img bg-gray-200 w-full h-80 lg:h-[40rem] rounded-xl max-lg:mb-20 lg:mx-10">
                    {{-- <img src="{{ asset('aset/hero.svg') }}" alt="tower" class=" rounded-3xl lg:w-full object-cover"> --}}
                </div>
            </div>
            <div class="info w-full flex flex-col">
                <h1 class="lg:text-xl text-medium text-blue-800 w-fit py-2 px-4 rounded-3xl bg-blue-100">Dedikasi Kami,
                    Ibadah Anda ✨
                </h1>
                <h1 class="text-[2.7rem] lg:text-[4rem] font-semibold items-center lg:w-5/6 w-full">Kami memastikan setiap
                    langkah
                    ibadah Anda penuh kenyamanan dan keberkahan.</h1>
                <div class="flex lg:pt-32">
                    <img src="{{ asset('aset/play.svg') }}" alt="" class="w-[5rem]">
                    <h1 class="flex justify-center items-center font-semibold text-2xl">play testimoni jama'ah</h1>
                </div>
            </div>
        </div>
        {{--  dedikasi end --}}

        {{-- about-us --}}
        <div class="bg-blue-800 flex flex-col-reverse justify-center items-center lg:flex-row gap-2 lg:px-20 py-10">
            <div class="info w-11/12 lg:w-7/12 max-lg:mt-5">
                <h1 class="lg:text-xl text-medium text-yellow-800 w-fit py-2 px-4 rounded-3xl bg-yellow-50">Tentang Kami
                </h1>
                <div class="flex flex-col gap-4 text-2xl lg:text-4xl text-white mt-5 lg:pr-10">
                    <h1 class="">Di Sinai & Amanah Travel, kami berdedikasi untuk menjadi mitra perjalanan spiritual
                        Anda yang terpercaya. Sebagai penyedia resmi visa Umrah yang diakui oleh Kementerian Agama RI, kami
                        memahami betapa pentingnya setiap langkah ibadah Anda.</h1>
                    <h1 class="font-light">Dengan pengalaman lebih dari 8 tahun di industri, kami mengutamakan pelayanan
                        berkualitas, kenyamanan jamaah, dan keamanan dana ibadah. Kami bangga menjadi anggota resmi IATA,
                        ASITA, dan KESTHURI, yang memastikan bahwa setiap layanan yang kami tawarkan memenuhi standar
                        internasional.</h1>
                </div>
            </div>
            <div class="flex justify-center items-center size-full relative w-full lg:w-5/12">
                <div
                    class="img flex justify-center items-center lg:p-5 bg-white w-full h-80 lg:h-[36rem] rounded-xl mx-5 lg:mx-10">
                    {{-- <img src="{{ asset('aset/hero.svg') }}" alt="tower" class=" rounded-3xl lg:w-full object-cover"> --}}
                    <div class="bg-gray-200 w-full lg:h-[34rem]"></div>
                </div>
            </div>
        </div>
        {{-- about-us -end-}}

        {{-- visi misi --}}
        <div
            class="flex flex-col justify-center items-center lg:flex-row gap-4 my-6 px-4 lg:px-20">
            <div class="flex flex-col justify-center size-full relative lg:pl-20">
                <h1 class="lg:text-xl text-medium text-yellow-800 w-fit py-2 px-4 rounded-3xl bg-yellow-50">Visi Kami
                </h1>
                <h1 class="lg:text-4xl text-2xl mt-4 lg:font-semibold lg:w-5/6">“ Menjadi penyedia layanan Umrah dan Haji terkemuka yang dipercaya oleh jamaah, dengan mengutamakan kualitas, kenyamanan, dan keamanan dalam setiap perjalanan spiritual. “</h1>
            </div>
            <div class="flex flex-col justify-center size-full relative">
                <h1 class="lg:text-xl text-medium text-yellow-800 w-fit py-2 px-4 rounded-3xl bg-yellow-50">Misi Kami.
                </h1>
                
                <div class="misi">
                    <div class="flex items-center gap-4 mt-6">
                        <i
                            class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="lg:text-2xl text-xl">Menyediakan Layanan Berkualitas</h1>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <i
                            class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="lg:text-2xl text-xl">Menjamin Keamanan dan Kenyamanan</h1>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <i
                            class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="lg:text-2xl text-xl">Mengutamakan Kepuasan Jamaah</h1>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <i
                            class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="lg:text-2xl text-xl">Meningkatkan Mutu Pelayanan</h1>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <i
                            class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="lg:text-2xl text-xl">Meningkatkan Mutu Pelayanan</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- visi misi end  --}}

        {{-- footer --}}
        <div class="footer bg-[#25222C]">
            <div class=" mt-20 grid grid-cols-1 lg:grid-cols-2 text-white px-5 lg:px-20 py-10">
                <div class="katalog flex flex-col">
                    <h1 class="text-sm font-light uppercase">katalog</h1>
                    <div class="grid grid-cols-3 mt-8 w-6/6 lg:w-5/6 justify-center gap-1">
                        <h1 class="capitalize text-lg">beranda <span class="max-lg:ml-2 ml-10">/</span></h1>
                        <h1 class="capitalize text-lg">layanan <span class="max-lg:ml-2 ml-10">/</span></h1>
                        <h1 class="capitalize text-lg">tentang<span class="capitalize ml-2">kami <span
                                    class="max-lg:ml-0 ml-10">/</span></span></h1>
                        <h1 class="capitalize text-lg">testimonial <span class="max-lg:ml-2 ml-10">/</span></h1>
                        <h1 class="capitalize text-lg">hubungi<span class="capitalize ml-2">kami <span
                                    class="max-lg:ml-0 ml-10">/</span></span></h1>
                    </div>
                    <div class="mt-24 w-8/12 max-lg:w-full max-lg:mb-10">
                        <h1 class="text-4xl max-lg:text-2xl font-bold">Book your trip in minute,get full Control for much
                            longer.</h1>
                    </div>
                </div>
                <div class="flex flex-2 mt-5 lg:mt-0 w-full">
                    <div class="contact">
                        <h1 class="text-sm font-light uppercase">kontak</h1>
                        <h1 class="capitalize text-lg mt-8 text-yellow-400">+62 892 161 572</h1>
                        <h1 class="capitalize text-lg font-light">hello@sinaiumrah.com</h1>
                        <h1 class="capitalize text-lg font-light mt-44 max-lg:mt-24">alamat perusahaan</h1>
                    </div>
                    <div class="folow-me text-end max-lg:text-center max-lg:ml-10 w-full">
                        <h1 class="text-sm font-light uppercase">ikuti kami</h1>
                        <h1 class="capitalize text-lg mt-8">whatsapp</h1>
                        <h1 class="capitalize text-lg">instagram</h1>
                        <div class="capitalize text-lg font-light text-yellow-400 mt-44 max-lg:mt-24 max-lg:text-end">
                            <i class="bi bi-arrow-up"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright grid grid-cols-3 text-center max-md:mx-6  py-10 text-white">
                <h1 class="text-sm font-light uppercase ">@2024-Copyright</h1>
                <h1 class="text-sm font-light uppercase ">privacy</h1>
                <h1 class="text-sm font-light uppercase">All right reserved</h1>
            </div>
        </div>
        {{-- footer end --}}


    </div>

    <script>
        const burger = document.getElementById("burger");
        const menu = document.getElementById("menu");
        const dropdown = document.getElementById("dropdown");

        burger.addEventListener("click", () => {
            console.log(burger, dropdown, menu)
            dropdown.classList.toggle("hidden");

            if (dropdown.classList.contains("hidden")) {
                document.body.style.overflowY = "";
            } else {
                document.body.style.overflowY = "hidden";
            }
        });
    </script>
@endsection

@extends('template.layout')
@section('konten')
    <div class="tentang-kami w-full">

        <!-- Icon whatsapp -->
        {{-- <a href="https://api.whatsapp.com/send/?phone=085659670362&text&type=phone_number&app_absent=0"> --}}
        <a href="https://api.whatsapp.com/send/?phone=6281363209449&text&type=phone_number&app_absent=0">
            <div class="fixed right-10 bottom-10 lg:bottom-[15rem] flex z-20">
                <div
                    class=" bg-white p-2 lg:p-4 rounded-xl w-fit shadow-lg text-lx lg:text-xl flex flex-col justify-center text-center">
                    <h1 class="font-semibold">Cari info umroh?</h1>
                    <h1 class="text-lg font-light lg:mt-2">Hubunngi Sinai aja!</h1>
                </div>
                <img src="{{ asset('aset/whatsapp.png') }}" alt="" class="w-20 lg:w-32">
            </div>
        </a>

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
                        <span id="line1" class=" left-0 w-8 h-[0.1rem] bg-black duration-200 mb-2"></span>
                        <span id="line2" class="left-0 w-8 h-[0.1rem] bg-black duration-200"></span>
                    </div>
                </div>

                <!-- Menu items -->
                <div id="menu"
                    class="hidden w-full lg:flex font-normal text-xl text-end justify-end items-center gap-12 ">
                    <a href="{{ url('/') }}" class="flex gap-2">
                        <i class="bi bi-house"></i>
                        <h1 class="">beranda</h1>
                    </a>
                    <a href="{{ url('/layanan') }}" class="flex gap-2">
                        <i class="bi bi-gear"></i>
                        <h1 class="">layanan</h1>
                    </a>
                    <a href="{{ url('/tentang-kami') }}" class="flex gap-2">
                        <i class="bi bi-person"></i>
                        <h1 class="">tentang kami</h1>
                    </a>
                    <a href="{{ url('/galeri') }}" class="flex gap-2">
                        <i class="bi bi-chat-square-dots"></i>
                        <h1 class="font-bold">galeri</h1>
                    </a>
                    <a href="{{ url('/testimoni') }}" class="flex gap-2">
                        <i class="bi bi-chat-square-dots"></i>
                        <h1 class="">testimonial</h1>
                    </a>
                    <a href="{{ url('/contact') }}" class="flex gap-2">
                        <i class="bi bi-telephone"></i>
                        <h1 class="">hubungi<span class=""> kami</span></h1>
                    </a>
                    <a href="{{ url('/login') }}" class="flex gap-2">
                        <i class="bi bi-key"></i>
                        <h1 class="">sign <span class=""> In</span></h1>
                    </a>
                </div>

                <!-- Dropdown for mobile -->
                <div id="dropdown" class="hidden bg-white top-0 left-0 w-full space-y-2 lg:mt-2 h-screen z-50 fixed">
                    <div class="absolute bottom-0 w-full">
                        <a href="{{ url('/') }}">
                            <h1 class="text-black text-3xl px-2 py-4">beranda</h1>
                        </a>
                        <a href="{{ url('/layanan') }}">
                            <h1 class="text-black text-3xl px-2 py-4">layanan</h1>
                        </a>
                        <a href="{{ url('/tentang-kami') }}">
                            <h1 class="text-black text-3xl px-2 py-4">tentang kami</h1>
                        </a>
                        <a href="{{ url('/testimoni') }}">
                            <h1 class="text-black text-3xl px-2 py-4">testimonial</h1>
                        </a>
                        <a href="{{ url('/contact') }}">
                            <h1 class="text-black text-3xl px-2 py-4">hubungi kami</h1>
                        </a>
                        <a href="{{ url('/galeri') }}">
                            <h1 class="text-black text-3xl px-2 py-4">galeri</h1>
                        </a>
                        <a href="{{ url('/login') }}">
                            <h1 class="text-black text-3xl px-2 py-4">sign In</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- navbar end --}}

        {{-- galeri --}}
        <div class="galeri flex flex-col w-full max-lg:mt-44">
            <div class="flex flex-col justify-center gap-2 lg:w-7/12 lg:m-20 mx-4">
                <h1 class="text-[3rem] lg:text-[4.5rem] font-semibold ">Ciptakan momen dalam perjalanan ibadah anda 📸 </h1>
                <h1 class="text-2xl lg:text-3xl font-light lg:mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h1>
            </div>
            <div class="vid columns-2 lg:columns-3 w-full mt-4 px-4 lg:px-20 gap-2">
                <video controls class="w-full pb-2 rounded-2xl">
                    <source src="{{ asset('aset/v1.mp4') }}" type="video/mp4">
                </video>
                <video controls class="w-full pb-2 rounded-2xl">
                    <source src="{{ asset('aset/v2.mp4') }}" type="video/mp4">
                </video>
                <video controls class="w-full pb-2 rounded-2xl">
                    <source src="{{ asset('aset/v3.mp4') }}" type="video/mp4">
                </video>
                <video controls class="w-full pb-2 rounded-2xl">
                    <source src="{{ asset('aset/v4.mp4') }}" type="video/mp4">
                </video>
                <video controls class="w-full pb-2 rounded-2xl">
                    <source src="{{ asset('aset/v5.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
        {{-- galeri end --}}

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
                        <h1 class="text-4xl max-lg:text-2xl font-bold">Book your trip in minute,get full Control for
                            much
                            longer.</h1>
                    </div>
                </div>
                <div class="flex flex-2 mt-5 lg:mt-0 w-full">
                    <div class="contact">
                        <h1 class="text-sm font-light uppercase">kontak</h1>
                        <h1 class="capitalize text-lg mt-8 text-yellow-400">+62 892 161 572</h1>
                        <h1 class="capitalize text-lg text-yellow-400">+62 813 6320 9449</h1>
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
        const l1 = document.getElementById("line1");
        const l2 = document.getElementById("line2");

        burger.addEventListener("click", () => {
            dropdown.classList.toggle("hidden");

            if (dropdown.classList.contains("hidden")) {
                document.body.style.overflowY = "";
                line1.style.transform = 'translateX(0) rotate(0deg)';
                line2.style.transform = 'translateX(0) rotate(0deg)';
            } else {
                document.body.style.overflowY = "hidden";
                line1.style.transform = 'translateX(-50%) rotate(-45deg)';
                line2.style.transform = 'translateX(-50%) rotate(45deg)';
            }
        });
    </script>
@endsection

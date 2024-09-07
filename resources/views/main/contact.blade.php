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
                        <h1 class="">tentang kami</h1>
                    </a>
                    <a href="{{ url('/testimoni') }}">
                        <h1 class="">testimonial</h1>
                    </a>
                    <a href="{{ url('/contact') }}">
                        <h1 class="font-bold">hubungi<span class=""> kami</span></h1>
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

        {{-- contact --}}
        <div class="contact lg:mx-20">
            <div class="contact-header flex flex-col w-full justify-center items-center max-lg:mt-44">
                <div class="flex flex-col justify-center w-full gap-2 lg:m-20 mx-4 text-center items-center">
                    <h1 class="text-[3rem] lg:text-[4.5rem] font-semibold lg:w-7/12">Masih ragu? Kita ngobrol bareng yuk.
                    </h1>
                    <h1 class="text-2xl lg:text-3xl font-light lg:mt-4 lg:w-8/12">Kita bahas semua yang perlu kamu ketahui,
                        dari paket yang paling cocok hingga detail perjalanan yang akan membuatmu merasa lebih siap.</h1>
                </div>
            </div>
            <div class="form-container bg-white flex max-lg:flex-col lg:w-full max-lg:mx-4 px-10 lg:px-0 mt-10 lg:gap-10 justify-center lg:justify-between items-center">
                <div class="form flex flex-col gap-2 m-6 w-full lg:w-6/12 lg:mr-52">
                    <h1 class="text-3xl lg:mb-2 font-semibold">Hubungi Kami.</h1>
                    <input type="text" class="text-2xl rounded-lg w-full" placeholder="Email">
                    <input type="text" class="text-2xl rounded-lg w-full" placeholder="Nama">
                    <input type="text" class="text-2xl rounded-lg w-full pb-10" placeholder="Subjek">
                    <button class="capitalize px-4 py-2 text-white bg-yellow-600 rounded-lg w-full">kirim</button>
                </div>
                <div class="map m-6 lg:w-1/2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.265428656888!2d106.95414807482915!3d-6.228694993759419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c89a57526f1%3A0xa850dc0a366b403c!2sSMK%20NEGERI%201%20KOTA%20BEKASI!5e0!3m2!1sid!2sid!4v1725679840076!5m2!1sid!2sid"
                        width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-lg max-lg:hidden"></iframe>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.265428656888!2d106.95414807482915!3d-6.228694993759419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c89a57526f1%3A0xa850dc0a366b403c!2sSMK%20NEGERI%201%20KOTA%20BEKASI!5e0!3m2!1sid!2sid!4v1725679840076!5m2!1sid!2sid"
                        width="480" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-lg lg:hidden"></iframe>
                </div>
            </div>
        </div>
        {{-- contact end --}}

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

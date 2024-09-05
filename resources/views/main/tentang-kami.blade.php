@extends('template.layout')
@section('konten')
    <div class="tentang-kami w-full">

        <div class="h-screen">
            {{-- navbar --}}
            <div class="navbar justify-between capitalize text-lg grid grid-cols-1 lg:grid-cols-2 mt-12 m-10 lg:mx-20">
                <div class="logo font-extrabold text-3xl">
                    <img src="{{ asset('aset/sinaii.svg') }}" alt="" class="w-1/12">
                </div>
    
                <div class="section flex font-medium text-lg font-sans items-center justify-end">
                    <!-- Burger Button (visible only on small screens) -->
                    <div class="lg:hidden">
                        <button id="burger" class="p-2 focus:outline-none flex flex-col justify-center">
                            <span class="line left-0 w-12 h-1 bg-black transition-transform duration-200 mb-4"></span>
                            <span class="line left-0 w-12 h-[0.] bg-black transition-transform duration-200"></span>
                        </button>
                    </div>
    
                    <!-- Menu items -->
                    <div id="menu" class="hidden lg:grid lg:grid-cols-5 text-center">
                        <h1>beranda</h1>
                        <h1>layanan</h1>
                        <h1>tentang kami</h1>
                        <h1>testimonial</h1>
                        <h1>hubungi<span class="ml-1">kami</span></h1>
                    </div>
    
                    <!-- Dropdown for mobile -->
                    <div id="dropdown"
                        class="hidden bg-white/30 backdrop-blur-md lg:hidden left-0 w-full space-y-2 mt-2 h-[60rem] z-50 grid grid-rows-5 absolute justify-center items-center">
                        <h1 class="bg-black text-white text-end py-10">beranda</h1>
                        <h1 class="bg-black text-white text-end py-10">layanan</h1>
                        <h1 class="bg-black text-white text-end py-10">tentang kami</h1>
                        <h1 class="bg-black text-white text-end py-10">testimonial</h1>
                        <h1 class="bg-black text-white text-end py-10">hubungi kami</h1>
                    </div>
                </div>
    
            </div>
            {{-- navbar end --}}
    
            {{--  --}}
            <div class="lg:mx-20 grid grid-cols-1 lg:grid-cols-2 mt-20 gap-1">
                <div class="bg-blue-200 h-full flex justify-center">
                    <img src="{{ asset('aset/hero.svg') }}" alt="" class="object-cover">
                </div>
                <div class="px-10 w-full">
                    <h1 class="text-xl text-medium text-blue-800 bg-blue-100 w-fit py-2 px-4 rounded-3xl">Dedikasi Kami, Ibadah
                        Anda ✨</h1>
                    <h1 class="text-3xl lg:text-5xl font-semibold w-full mt-5 space-y-6">Kami memastikan setiap
                    </h1>
                    <h1 class="text-3xl lg:text-5xl font-semibold w-full mt-5 space-y-6">langkah ibadah Anda
                    </h1>
                    <h1 class="text-3xl lg:text-5xl font-semibold w-full mt-5 space-y-6">penuh kenyamanan dan
                    </h1>
                    <h1 class="text-3xl lg:text-5xl font-semibold w-full mt-5 space-y-6">keberkahan.
                    </h1>
                    <div class="flex pt-32">
                        <img src="{{ asset('aset/play.svg') }}" alt="" class="w-2/12">
                        <h1 class="flex justify-center items-center font-semibold text-lg">play testimoni jama,ah</h1>
                    </div>
                </div>
            </div>
            {{--  --}}
    
        </div>
        {{--  --}}
        <div class="about-us lg:px-20 flex flex-col-reverse lg:flex-row gap-4 bg-blue-800 mt-20">
            <div class="mt-16 w-7/12 text-white">
                <h1 class="text-xl text-medium text-yellow-800 bg-yellow-50 w-fit py-2 px-4 rounded-3xl capitalize">tentang kami</h1>
                <h1 class="text-xl w-fit font-semibold mt-6">Di Sinai & Amanah Travel, kami berdedikasi untuk menjadi mitra perjalanan spiritual Anda yang terpercaya. Sebagai penyedia resmi visa Umrah yang diakui oleh Kementerian Agama RI, kami memahami betapa pentingnya setiap langkah ibadah Anda.</h1>
            </div>
                <div class="mt-16 w-5/12 bg-black">
                    <img src="{{ asset('aset/hero.svg') }}" alt="" class="object-cover">
                </div>
        </div>
        {{--  --}}

    </div>
@endsection

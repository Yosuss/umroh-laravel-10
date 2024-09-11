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
                        <h1 class="font-bold">layanan</h1>
                    </a>
                    <a href="{{ url('/tentang-kami') }}" class="flex gap-2">
                        <i class="bi bi-person"></i>
                        <h1 class="">tentang kami</h1>
                    </a>
                    <a href="{{ url('/galeri') }}" class="flex gap-2">
                        <i class="bi bi-chat-square-dots"></i>
                        <h1 class="">galeri</h1>
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

        {{-- layanan --}}
        <div class="layanan-header flex flex-col w-full justify-center items-center max-lg:mt-44">
            <div class="flex flex-col justify-center w-full gap-2 lg:m-20 mx-4 max-lg:px-2 text-center items-center">
                <h1 class="lg:text-xl text-2xl text-blue-800 w-fit py-2 px-4 rounded-3xl">Layanan & Pendaftaran
                </h1>
                <h1 class="text-[3rem] lg:text-[3.5rem] font-semibold lg:w-5/12">Layanan Terbaik, Syarat Mudah, Pendaftaran
                    Cepat ✨
                </h1>
                <h1 class="text-2xl lg:text-3xl font-light lg:mt-4 lg:w-6/12">Temukan layanan umrah terbaik kami, lihat
                    persyaratannya, dan daftar dengan mudah untuk memulai perjalanan ibadahmu bersama
                    Sinau Umrah.</h1>
                <div class="flex gap-4 mt-5 lg:mt-10 text-lg font-semibold">
                    <button class="bg-blue-800 text-white rounded-full px-6 py-2">
                        <a href="#form-container">Mulai daftar</a>
                    </button>
                    <button
                        class="border-2 inline-flex text-center justify-center items-center gap-4 border-black capitalize text-lg px-6 pt-3 pb-4 text-black rounded-full">Lihat
                        persyaratan
                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.6172L10 1.38281M10 1.38281H1M10 1.38281V10.3828" stroke="#1E1E1E"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="packet grid grid-cols-1 lg:grid-cols-3 mt-6 px-2 lg:px-96 gap-8">
                    <div
                        class="packet-1 group rounded-3xl bg-yellow-50 text-left mt-4 p-8 gap-4 hover:text-white hover:bg-yellow-400 duration-200">
                        <div class="grid lg:grid-cols-1 grid-cols-2  gap-4">
                            <div class="">
                                <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                                <h1 class="font-bold my-5 text-lg uppercase">rp <span
                                        class="capitalize font-bold text-3xl">35,5
                                        juta</span>
                                </h1>
                                <h1 class="tracking-[0.07rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Exercitationem
                                    dignissimos
                                    sequi esse.</h1>
                            </div>
                            <div class="benefit w-full grid gap-4">
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> hotel bintang 4
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> perlengkapan
                                    (gratis)
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> 13 hari
                                    perjalanan
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> dapat 2x jum'at
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> free thaif &
                                    kereta
                                    gantung</h1>
                            </div>
                        </div>
                        <button
                            class="group-hover:bg-white group-hover:text-yellow-400 bg-yellow-400 w-full  mt-5 py-2 rounded-xl text-white text-semibold hover:text-yellow-400 hover:bg-white duration-200">pilih
                            paket</button>
                    </div>

                    <div
                        class="packet-2 group rounded-3xl bg-blue-50 text-left mt-4 p-8 gap-4 hover:text-white hover:bg-blue-800 duration-200">
                        <div class="grid lg:grid-cols-1 grid-cols-2  gap-4">
                            <div class="">
                                <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                                <h1 class="font-bold my-5 text-lg uppercase">rp <span
                                        class="capitalize font-bold text-3xl">35,5
                                        juta</span>
                                </h1>
                                <h1 class="tracking-[0.07rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Exercitationem
                                    dignissimos
                                    sequi esse.</h1>
                            </div>
                            <div class="benefit w-full grid gap-4">
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> hotel bintang 4
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> perlengkapan
                                    (gratis)
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> 13 hari
                                    perjalanan
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> dapat 2x jum'at
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> free thaif &
                                    kereta
                                    gantung</h1>
                            </div>
                        </div>
                        <button
                            class="group-hover:bg-white group-hover:text-blue-800 bg-blue-800 w-full  mt-5 py-2 rounded-xl text-white text-semibold hover:text-blue-400 hover:bg-white duration-200">pilih
                            paket</button>
                    </div>

                    <div
                        class="packet-1 group rounded-3xl bg-yellow-50 text-left mt-4 p-8 gap-4 hover:text-white hover:bg-yellow-400 duration-200">
                        <div class="grid lg:grid-cols-1 grid-cols-2  gap-4">
                            <div class="">
                                <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                                <h1 class="font-bold my-5 text-lg uppercase">rp <span
                                        class="capitalize font-bold text-3xl">35,5
                                        juta</span>
                                </h1>
                                <h1 class="tracking-[0.07rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Exercitationem
                                    dignissimos
                                    sequi esse.</h1>
                            </div>
                            <div class="benefit w-full grid gap-4">
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> hotel bintang
                                    4
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> perlengkapan
                                    (gratis)
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> 13 hari
                                    perjalanan
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> dapat 2x
                                    jum'at
                                </h1>
                                <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> free thaif &
                                    kereta
                                    gantung</h1>
                            </div>
                        </div>
                        <button
                            class="group-hover:bg-white group-hover:text-yellow-400 bg-yellow-400 w-full  mt-5 py-2 rounded-xl text-white text-semibold hover:text-yellow-400 hover:bg-white duration-200">pilih
                            paket</button>
                    </div>
                </div>

                <div class="syarat capitalize text-lg py-10 px-4 lg:p-20 bg-blue-800 w-full lg:mt-20">
                    <div class="syarat-header flex flex-col text-white">
                        <h1 class="text-sm lg:text-xl font-semibold text-blue-800 w-fit py-2 px-4 rounded-3xl bg-white">
                            Persyaratan umrah.</h1>
                        <h1 class="text-3xl lg:text-5xl font-semibold my-4 w-full text-start lg:w-7/12">Berikut
                            syarat-syarat Dokumen
                            Keberangkatan Umrah
                            yang harus dilengkapi 🕋
                        </h1>
                    </div>

                    <div class="syarat-value mt-4 flex flex-wrap">

                        <div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-8">
                            <div class="flex flex-col gap-8">
                                <div class="syarat-pendaftaran bg-white text-start p-5 rounded-xl">
                                    <h1 class="text-2xl font-bold text-blue-800">syarat pendaftaran</h1>
                                    <div class="list-container">
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">Mengisi formulir pendaftaran</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">KTP, KK, Buku Nikah, AKte</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light lg:w-1/2">Dokumen & Pelunasan diselesaikan
                                                (Minimal 45 hari sebelum keberangkatan)</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">DP Rp. 3.000.000</h1>
                                        </div>

                                    </div>
                                </div>
                                <div class="harga bg-white text-start p-5 rounded-xl">
                                    <h1 class="text-2xl font-bold text-yellow-800">Harga belum termasuk</h1>
                                    <div class="list-container">
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-dash p-1 px-2 rounded-full bg-yellow-100 text-yellow-800"></i>
                                            <h1 class="lg:text-lg font-light">Biaya suntik Meningitis</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-dash p-1 px-2 rounded-full bg-yellow-100 text-yellow-800"></i>
                                            <h1 class="lg:text-lg font-light">Biaya pengurusan paspor</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-dash p-1 px-2 rounded-full bg-yellow-100 text-yellow-800"></i>
                                            <h1 class="lg:text-lg font-light lg:w-1/2">Biaya transportasi domestik</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-dash p-1 px-2 rounded-full bg-yellow-100 text-yellow-800"></i>
                                            <h1 class="lg:text-lg font-light">Surat Mahrom Rp. 350.000</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-dash p-1 px-2 rounded-full bg-yellow-100 text-yellow-800"></i>
                                            <h1 class="lg:text-lg font-light">Kelebihan Bagasi</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-dash p-1 px-2 rounded-full bg-yellow-100 text-yellow-800"></i>
                                            <h1 class="lg:text-lg font-light">Biaya sewaktu-waktu dapat berubah</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-8">
                                <div class="fasilitas bg-white text-start p-5 rounded-xl">
                                    <h1 class="text-2xl font-bold text-blue-800">fasilitas</h1>
                                    <div class="list-container">
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">Visa</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">Pembimbing</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light lg:w-1/2">Tiket Pesawat (Pulang - Pergi)</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">Hotel Mekkah & Madinah</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">Makan 3x sehari</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">City Tour</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">Transportasi Ekslusif</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">5 Liter air zam-zam</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">Sertifikat Umrah</h1>
                                        </div>
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">Perlengkapan Umrah Asuransi</h1>
                                        </div>

                                    </div>
                                </div>
                                <div class="syarat-keberangkatan bg-white text-start p-5 rounded-xl">
                                    <h1 class="text-2xl font-bold text-blue-800">syarat keberangkatan</h1>
                                    <div class="list-container">
                                        <div class="flex items-center gap-4 mt-2">
                                            <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="lg:text-lg font-light">Paspor (Minimal berlaku 7 bulan)</h1>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div id="form-container" class="flex flex-col justify-center w-full gap-2 items-center mt-20">
                    <h1 class="lg:text-xl text-2xl text-blue-800 w-fit py-2 px-4 rounded-3xl">Formulir Pendaftaran.
                    </h1>
                    <h1 class="text-[3rem] lg:text-[3.5rem] font-semibold lg:w-6/12">Raih Kesempatan Berangkat Umrah dengan
                        Mudah! 📋
                    </h1>
                    <h1 class="text-2xl lg:text-3xl font-light lg:mt-4 lg:w-8/12">Isi form pendaftaran di bawah ini dan
                        mulailah perjalanan spiritualmu bersama Sinau Umrah. Proses cepat, mudah, dan aman untuk memastikan
                        kenyamanan ibadahmu.</h1>
                </div>

                <div
                    class="flex max-lg:flex-col lg:w-8/12 mt-10 max-lg:mx-2 justify-center lg:justify-between items-center">
                    <div class="flex justify-center items-center relative w-full">
                        <div
                            class="img flex justify-center items-center z-10 bg-white lg:p-6 w-full rounded-xl mx-10 lg:mx-10">
                            <img src="{{ asset('aset/mekah.png') }}" alt="tower" class="max-lg:p-6 rounded-3xl lg:w-full object-cover">
                        </div>
                    </div>

                    <form action="{{route('tambah')}}" method="POST" class="form flex flex-col gap-2 mx-2 w-full lg:mr-10 max-lg:px-5 max-lg:mt-5">
                        @csrf
                        <h1 class="text-xl lg:text-3xl lg:mb-2 font-semibold text-start">Ayoo, daftar disini!.</h1>
                        <input type="text" name="nama" class="text-lg rounded-lg py-4 w-full" placeholder="Nama lengkap">
                        <input type="text" name="alamat" class="text-lg rounded-lg py-4 w-full pb-20" placeholder="Alamat rumah">
                        <div class="gap-2 grid grid-cols-2">
                            <input type="number" name="no" class="text-lg rounded-lg py-4 w-full" placeholder="Nomor Telp/WA">
                            <input type="date" name="date" class="text-lg rounded-lg py-4 w-full"
                                placeholder="Tanggal keberangkatan">
                            <div
                                class="text-lg rounded-lg py-4 w-full border-[0.08rem] bg-white border-gray-500 text-gray-500 text-start">
                                <button id="paket" class="px-4">Paket umroh</button>
                                <div id="dropdown-paket" class="hidden w-full items-center">
                                    <div class="absolute z-50 flex flex-col items-center backdrop-blur-lg gap-1 mt-5">
                                        <h1 class="text-xl px-4 py-2 border-2 bg-white border-gray-500 rounded-lg">Paket 1
                                        </h1>
                                        <h1 class="text-xl px-4 py-2 border-2 bg-white border-gray-500 rounded-lg">Paket 2
                                        </h1>
                                        <h1 class="text-xl px-4 py-2 border-2 bg-white border-gray-500 rounded-lg">Paket 3
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="jumlah" class="text-lg rounded-lg py-4 w-full" placeholder="Jumlah jama’ah">
                        </div>
                        <button
                            type="submit" class="capitalize text-2xl px-4 mt-2 text-white bg-yellow-600 shadow-lg rounded-lg py-4 w-full">kirim</button>
                    </form>
                </div>


            </div>
        </div>
        {{-- layanan end --}}

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
        const paket = document.getElementById("paket");
        const dp = document.getElementById("dropdown-paket");
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

        paket.addEventListener("click", () => {
            dp.classList.toggle("hidden");

            if (dp.classList.contains("hidden")) {
                document.body.style.overflowY = "";
            } else {
                document.body.style.overflowY = "hidden";
            }
        });
    </script>
@endsection

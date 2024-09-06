@extends('template.layout')
@section('konten')
    <div class="pages w-full font-sans">
        {{-- navbar --}}
        <div
            class="navbar z-50 top-0 backdrop-blur-lg justify-between w-full gap-1 capitalize text-lg grid grid-cols-2 fixed lg:relative">
            <div class="logo w-full p-10 lg:pl-20 z-1">
                <img src="{{ asset('aset/sinaii.svg') }}" alt="" class=" w-6/12 lg:w-2/12">
            </div>

            <div
                class="section flex font-medium text-lg font-sans items-center  mr-10 lg:mr-20 justify-end lg:justify-center">
                <!-- Burger Button (visible only on small screens) -->
                <div class="lg:hidden">
                    <button id="burger" class="p-2 focus:outline-none relative z-[999] flex flex-col justify-center">
                        <span class="line left-0 w-8 h-[0.1rem] bg-black duration-200 mb-2"></span>
                        <span class="line left-0 w-8 h-[0.1rem] bg-black duration-200"></span>
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
                <div id="dropdown" class="hidden bg-white top-0 left-0 w-full space-y-2 lg:mt-2 h-screen z-50 fixed">
                    <div class="absolute bottom-0 w-full">
                        <h1 class="text-black text-4xl px-2 py-4">beranda</h1>
                        <h1 class="text-black text-4xl px-2 py-4">layanan</h1>
                        <h1 class="text-black text-4xl px-2 py-4">tentang kami</h1>
                        <h1 class="text-black text-4xl px-2 py-4">testimonial</h1>
                        <h1 class="text-black text-4xl px-2 py-4">hubungi kami</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- navbar end --}}

        {{-- regist-page --}}
        <div class="register flex flex-col-reverse lg:flex-row gap-2 mt-40 lg:mt-10 m-10 lg:mb-44 lg:m-20">
            <div class="info w-full ">
                <h1 class="font-bold text-lg lg:text-2xl mb-5">Ahlan wa sahlan <span class="font-normal">di situs
                        resmi</span></h1>
                <h1 class="text-[1.8rem] lg:text-[3rem] font-bold text-yellow-500 ">Mulai Umrohmu bersama</h1>
                <h1 class="text-[1.8rem] lg:text-[3rem] font-bold text-blue-800 ">Sinai Umroh cabang</h1>
                <h1 class="text-[1.8rem] lg:text-[3rem] font-bold text-blue-800 ">Indarung Padang.</h1>
                <h1 class="mt-8 text-lg font-light w-11/12">Halo calon jamaah umroh kami adalah mitra terpercaya untuk
                    perjalanan
                    spiritual anda dengan pengalaman <span class="font-bold">8+ tahun</span> kami siap mendampingi ibdadah
                    umroh dan haji anda</h1>
                <div class="button font-medium text-white mt-5 flex">
                    <button class="bg-yellow-500 capitalize text-lg px-6 py-3 mr-4 rounded-3xl">daftar sekarang</button>
                    <button
                        class="border-2 inline-flex items-center gap-4 border-black capitalize text-lg px-6 pt-3 pb-4 text-black rounded-3xl">masuk
                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.6172L10 1.38281M10 1.38281H1M10 1.38281V10.3828" stroke="#1E1E1E"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex justify-center items-center size-full relative">
                {{-- <div class="rounded-2xl bg-white p-4 absolute top-2 left-[-2rem]">
                    <h1 class="font-bold text-xl">8+ years</h1>
                    <h1 class="text-xl">experience</h1>
                </div>
                <img src="{{ asset('aset/mekah.jpg') }}" alt="mekah" class="rounded-2xl w-[30rem]">
                <img src="{{ asset('aset/kakbah.jpg') }}" alt="kakbah"
                    class="rounded-2xl absolute w-[15rem] bottom-2 right-[-2rem]"> --}}
                <img src="{{ asset('aset/hero.svg') }}" alt="tower" class="rounded-3xl lg:w-full object-cover">
            </div>
        </div>
        {{-- regist-page end --}}

        {{-- about me --}}
        <div class="about-me capitalize text-lg py-10 px-4 lg:p-20 bg-blue-800 w-full">
            <h1 class="text-sm lg:text-xl text-medium text-blue-800 w-fit py-2 px-4 rounded-3xl bg-white">tentang kami.</h1>
            <div class="detail grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-6 text-white">
                <h1 class="text-4xl max-lg:w-3/4 font-semibold mb-4 mt-4 w-full lg:w-8/12">Siapa sih Sinai Umroh Indarung
                    Padang itu?
                </h1>
                <h1 class="text-xl justify-end">Sinai Umrah adalah penyedia resmi visa Umrah, fokus pada pelayanan
                    berkualitas, kenyamanan jamaah, dan keamanan dana ibadah. Dengan pengalaman lebih dari 8 tahun dan
                    anggota IATA, ASITA, serta KESTHURI, kami siap wujudkan perjalanan ibadah yang aman dan berkesan.</h1>
            </div>

            <div class="items grid grid-cols-1 lg:grid-cols-3 justify-center gap-4 lg:gap-8 mt-10">
                <div class="flex flex-col items-start lg:items-center bg-white p-8 lg:rounded-lg lg:text-center rounded-xl">
                    <img src="{{ asset('aset/mail.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Travel dengan
                        ber-izin resmi</h1>
                    <h1 class="mt-2">Sinai & Amanah Travel, resmi di bawah Kemenag RI (PPIU No. 292/2020), menjamin
                        keberangkatan setiap jamaah.</h1>
                </div>
                <div class="flex flex-col items-start lg:items-center bg-white p-8 lg:rounded-lg lg:text-center rounded-xl">
                    <img src="{{ asset('aset/person.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Member Resmi IATA,
                        ASITA & Kesthuri</h1>
                    <h1 class="mt-2">Sinai & Amanah Travel adalah anggota resmi IATA, ASITA, dan KESTHURI, menjamin
                        layanan umrah dan haji yang berkualitas.</h1>
                </div>
                <div class="flex flex-col items-start lg:items-center bg-white p-8 lg:rounded-lg lg:text-center rounded-xl">
                    <img src="{{ asset('aset/personpc.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Terakreditasi secara
                        Nasional</h1>
                    <h1 class="mt-2">Komite Akreditasi Nasional (KAN) adalah lembaga non-struktural yang bertanggung jawab
                        atas akreditasi penilaian kesesuaian.</h1>
                </div>
            </div>

            <div class="items grid grid-cols-1 lg:grid-cols-2 justify-center gap-4 lg:gap-8 lg:mt-5 mt-4 px-0 lg:px-60">
                <div class="flex flex-col items-start lg:items-center bg-white p-8 lg:rounded-lg lg:text-center rounded-xl">
                    <img src="{{ asset('aset/mailc.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Legalitas Operasional
                        Kantor Cabang</h1>
                    <h1 class="mt-2">Setiap kantor cabang dilengkapi SK resmi dari kantor pusat, izin Kemenag setempat,
                        dan legalitas dari IATA, ASITA, & AMPHURI.</h1>
                </div>
                <div class="flex flex-col items-start lg:items-center bg-white p-8 lg:rounded-lg lg:text-center rounded-xl">
                    <img src="{{ asset('aset/protect.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Sistem umroh yang
                        aman & terpercaya</h1>
                    <h1 class="mt-2">Fokus dalam penyediaan resmi visa umrah & pada pelayanan, kualitas, dan kenyamanan
                        jamaah, serta menjamin keamanan dana ibadah.</h1>
                </div>
            </div>
        </div>
        {{-- about me end --}}

        {{-- dokumentation --}}
        <div class="dokumentation px-10 lg:px-20 my-20 py-2 lg:py-10 w-full text-center">
            <h1 class="text-sm lg:text-xl mx-auto text-yellow-600 bg-yellow-100 w-fit px-4 py-2 rounded-full">Kenangan Suci
                dalam Setiap Jejak?</h1>
            <h1 class="text-2xl lg:text-4xl font-semibold mt-2">Setiap foto <span class="text-yellow-600">bercerita</span>,
                setiap
                senyuman penuh <span class="text-blue-800">syukur</span>.</h1>
            <h1 class="text-2xl lg:text-4xl font-semibold mt-2 mb-6 lg:mb-12">Yuk, jelajahi galeri kami!</h1>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-6">
                <div class="w-full">
                    <img src="{{ asset('aset/dc1.svg') }}" alt="tower" class="mb-2 lg:mb-6 w-full">
                    <img src="{{ asset('aset/dc2.svg') }}" alt="tower" class="w-full">
                </div>
                <div class="w-full">
                    <img src="{{ asset('aset/dc3.svg') }}" alt="tower" class="w-full h-full object-cover">
                </div>
                <div class="w-full">
                    <img src="{{ asset('aset/dc4.svg') }}" alt="tower"
                        class="w-full h-full object-cover max-lg:hidden">
                </div>
            </div>
        </div>
        {{-- dokumentation end --}}

        {{-- dream-page --}}
        <div
            class="dream mx-0 px-10 lg:px-32 lg:mx-0 py-16 m-20 lg:m-0 grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-[8rem] bg-blue-800 w-full">
            <div class="flex justofy-center items-center">
                <div class="bg-white rounded-2xl size-full p-4">
                    <img src="{{ asset('aset/tower.jpg') }}" alt="tower" class="rounded-xl size-full object-cover">
                </div>
            </div>
            <div class="dream-detail w-fit text-white">
                <h1 class="text-sm lg:text-xl text-medium text-yellow-600 bg-yellow-100 w-fit px-4 py-2 rounded-full">Ingin
                    umroh tapi
                    terbentur biaya?</h1>
                <h1 class="text-[1.7rem] lg:text-3xl font-semibold mt-4">Wujudkan impian tersebut bersama kami dalam nabung
                    umrah</h1>
                <h1 class="text-[1.7rem] lg:text-3xl font-semibold"></h1>
                <h1 class="text-xl mt-4 font-semibold">1 mengisi formulir pendaftaran umroh</h1>
                <div class="requirement grid grid-rows-3 gap-2">
                    <div class="require flex items-center gap-4 mt-6">
                        <i class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="text-xl">Menyiapkan KTP</h1>
                    </div>
                    <div class="require flex items-center gap-4">
                        <i class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="text-xl">Mengisi formulir pendaftaran umroh</h1>
                    </div>
                    <div class="require flex items-center gap-4">
                        <i class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="text-xl w-8/12">Mengisi formulir pembukaan rekening bank syarah ( BSI,BRI,Nagari syariah
                            )</h1>
                    </div>
                </div>
                <div class="grid grid-cols-2 justify-between">
                    <div class="pagination mt-14 flex gap-2">
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                        <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                        <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                    </div>
                    <div class="slide mt-10 flex gap-4 justify-end">
                        <i class="bi bi-arrow-left-circle text-4xl text-white"></i>
                        <i class="bi bi-arrow-right-circle-fill text-4xl text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        {{-- dream-page end --}}

        {{-- packet --}}
        <div class="packets mt-28 mx-10 lg:mx-60 text-center">
            <h1 class="text-sm lg:text-xl text-medium text-blue-800 semi-bodl">Paket perjalanan ibadah</h1>
            <h1 class="text-4xl font-semibold mt-2">Yuk, umroh bareng sinai Umrah Pilihlah paket yang nyaman, biar ibadah
                main berkesan</h1>
        </div>
        <div class="packet grid grid-cols-1 lg:grid-cols-3 mt-6 px-2 lg:px-20 gap-8">
            <div
                class="packet-1 rounded-3xl bg-yellow-50 text-left mt-4 p-8 gap-4 hover:text-white hover:bg-yellow-400 duration-200">
                <div class="grid lg:grid-cols-1 grid-cols-2  gap-4">
                    <div class="">
                        <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                        <h1 class="font-bold my-5 text-lg uppercase">rp <span class="capitalize font-bold text-3xl">35,5
                                juta</span>
                        </h1>
                        <h1 class="tracking-[0.07rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem
                            dignissimos
                            sequi esse.</h1>
                    </div>
                    <div class="benefit w-full grid gap-4">
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> hotel bintang 4</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> perlengkapan (gratis)</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> 13 hari perjalanan</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> dapat 2x jum'at</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> free thaif & kereta gantung</h1>
                    </div>
                </div>
                <button
                    class="bg-yellow-400 w-full  mt-5 py-2 rounded-xl text-white text-semibold hover:text-yellow-400 hover:bg-white duration-200">pilih
                    paket</button>
            </div>

            <div
                class="packet-2 rounded-3xl bg-blue-50 text-left mt-4 p-8 gap-4 hover:text-white hover:bg-blue-800 duration-200">
                <div class="grid lg:grid-cols-1 grid-cols-2  gap-4">
                    <div class="">
                        <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                        <h1 class="font-bold my-5 text-lg uppercase">rp <span class="capitalize font-bold text-3xl">35,5
                                juta</span>
                        </h1>
                        <h1 class="tracking-[0.07rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem
                            dignissimos
                            sequi esse.</h1>
                    </div>
                    <div class="benefit w-full grid gap-4">
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> hotel bintang 4</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> perlengkapan (gratis)</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> 13 hari perjalanan</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> dapat 2x jum'at</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> free thaif & kereta gantung</h1>
                    </div>
                </div>
                <button
                    class="bg-blue-800 w-full  mt-5 py-2 rounded-xl text-white text-semibold hover:text-blue-400 hover:bg-white duration-200">pilih
                    paket</button>
            </div>

            <div
                class="packet-1 rounded-3xl bg-yellow-50 text-left mt-4 p-8 gap-4 hover:text-white hover:bg-yellow-400 duration-200">
                <div class="grid lg:grid-cols-1 grid-cols-2  gap-4">
                    <div class="">
                        <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                        <h1 class="font-bold my-5 text-lg uppercase">rp <span class="capitalize font-bold text-3xl">35,5
                                juta</span>
                        </h1>
                        <h1 class="tracking-[0.07rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem
                            dignissimos
                            sequi esse.</h1>
                    </div>
                    <div class="benefit w-full grid gap-4">
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> hotel bintang 4</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> perlengkapan (gratis)</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> 13 hari perjalanan</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> dapat 2x jum'at</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> free thaif & kereta gantung</h1>
                    </div>
                </div>
                <button
                    class="bg-yellow-400 w-full  mt-5 py-2 rounded-xl text-white text-semibold hover:text-yellow-400 hover:bg-white duration-200">pilih
                    paket</button>
            </div>
        </div>
        {{-- packet end --}}

        {{-- testimoni --}}
        <div class="testimonial mt-20 lg:mx-0 lg:pt-10 p-5 lg:px-20 lg:pb-2 bg-blue-800 ">
            <div class="grid grid-cols-1 lg:grid-cols-2 justify-between">
                <div class="text-white">
                    <h1 class="text-sm lg:text-2xl text-medium capitalize bg-white text-blue-800 w-fit py-[0.6rem] px-6 max-lg:mt-4 rounded-full">Testimoni</h1>
                    <h1 class="text-3xl lg:text-4xl font-semibold mt-4">Gimana perasaan mereka</h1>
                    <h1 class="text-3xl lg:text-4xl font-semibold mt-2 mb-6">dengan sinai Umroh?</h1>
                </div>
                <div class="flex gap-4 lg:text-start justify-end max-lg:justify-start mb-6">
                    <i class="bi bi-arrow-left-circle text-4xl text-white"></i>
                    <i class="bi bi-arrow-right-circle-fill text-4xl text-white"></i>
                </div>
            </div>

            <div class="testimoni-detail grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-6 lg:mb-20">
                <div class="values bg-white rounded-xl px-10 lg:mt-5 max-lg:mb-5">
                    <div class="value flex pt-5 pb-2 gap-2 items-center">
                        <div class="w-10 h-10 bg-black rounded-full"></div>
                        <div class="">
                            <h1 class="capitalize text-lg font-semibold">anugrah</h1>
                            <h1 class="capitalize max-lg:text-xm text-md font-light">Pengusaha sawit</h1>
                        </div>
                    </div>
                    <div class="value pb-5 lg:pb-20 gap-2 max-lg:pb-32">
                        <h1 class="text-xl">Alhamdullilah, bisa umroh pakai jasa ini, worth it banget, udh murah cepet,
                            tour guide nya baikk
                            bnget, sukses terus Sinai Umrah. </h1>
                    </div>
                </div>

                <div class="values bg-white rounded-xl px-10 lg:mt-5 max-lg:hidden max-md:hidden">
                    <div class="value flex pt-5 pb-2 gap-2 items-center">
                        <div class="w-10 h-10 bg-black rounded-full"></div>
                        <div class="">
                            <h1 class="capitalize text-lg font-semibold">anugrah</h1>
                            <h1 class="capitalize text-md font-light">Pengusaha sawit</h1>
                        </div>
                    </div>
                    <div class="value pb-5 lg:pb-20 gap-2">
                        <h1 class="text-xl">Alhamdullilah, bisa umroh pakai jasa ini, worth it banget, udh murah cepet,
                            tour guide nya baikk
                            bnget, sukses terus Sinai Umrah. </h1>
                    </div>
                </div>

                <div class="values bg-white rounded-xl px-10 lg:mt-5 max-lg:hidden">
                    <div class="value flex pt-5 pb-2 gap-2 items-center">
                        <div class="w-10 h-10 bg-black rounded-full"></div>
                        <div class="">
                            <h1 class="capitalize text-lg font-semibold">anugrah</h1>
                            <h1 class="capitalize text-md font-light">Pengusaha sawit</h1>
                        </div>
                    </div>
                    <div class="value pb-5 lg:pb-20 gap-2">
                        <h1 class="text-xl">Alhamdullilah, bisa umroh pakai jasa ini, worth it banget, udh murah cepet,
                            tour guide nya baikk
                            bnget, sukses terus Sinai Umrah. </h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- testimoni end --}}

        {{-- ending information --}}
        <div class="w-full flex items-center justify-center text-center mt-20">
            <div class="ending-information p-0 lg:p-8 lg:w-fit rounded-xl">
                <h1 class="text-sm lg:text-xl font-medium text-yellow-400 capitalize">Temukan informasi lebih</h1>
                <h1 class="text-3xl font-semibold mt-4 max-lg:text-4xl">Dapatkan informasi terkait promo, diskon atau <span>informasi menarik lainnya dengan subscribe</span> \<span> ke email kami.</span></h1>
                <div class="mail mt-4 flex gap-4 justify-center">
                    <input type="text" class="rounded-xl" placeholder="Enter your email">
                    <button class="langganan p-2 px-4 rounded-xl text-white shadow-lg bg-yellow-600">Langganan</button>
                </div>
            </div>
        </div>
        {{-- ending information end --}}

        {{-- footer --}}
        <div class="footer bg-[#25222C]">
            <div class=" mt-20 grid grid-cols-1 lg:grid-cols-2 text-white px-5 lg:px-20 py-10">
                <div class="katalog grid">
                    <h1 class="text-sm font-light uppercase">katalog</h1>
                    <div class="grid grid-cols-3 mt-8 w-5/6 lg:w-5/6 justify-center gap-1">
                        <h1 class="capitalize text-lg">beranda <span class="max-lg:ml-2 ml-10">/</span></h1>
                        <h1 class="capitalize text-lg">layanan <span class="max-lg:ml-2 ml-10">/</span></h1>
                        <h1 class="capitalize text-lg">tentang<span class="capitalize ml-2">kami <span class="max-lg:ml-2 ml-10">/</span></span></h1>
                        <h1 class="capitalize text-lg">testimonial <span class="max-lg:ml-2 ml-10">/</span></h1>
                        <h1 class="capitalize text-lg">hubungi<span class="capitalize ml-2">kami <span class="max-lg:ml-2 ml-10">/</span></span></h1>
                    </div>
                    <div class="mt-24 w-8/12 max-lg:w-full max-lg:mb-10">
                        <h1 class="text-4xl font-bold">Book your trip in minute,get full Control for much longer.</h1>
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
@endsection

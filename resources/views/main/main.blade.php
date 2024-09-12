@extends('template.layout')
@section('konten')
    <div class="pages w-full font-sans">

        @include('component.whatsapp')

        {{-- navbar --}}
            @include('component.navbar')
        {{-- navbar end --}}

        {{-- regist-page --}}
        <div
            class="register flex flex-col-reverse justify-center items-center lg:flex-row gap-2 mt-40 lg:mt-10 m-10 lg:mb-44 lg:m-20">
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
                    <button class="bg-yellow-500 capitalize text-lg px-6 py-0 mr-4 rounded-full">daftar sekarang</button>
                    <button
                        class="border-2 inline-flex text-center justify-center items-center gap-4 border-black capitalize text-lg px-6 pt-3 pb-4 text-black rounded-full">masuk
                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.6172L10 1.38281M10 1.38281H1M10 1.38281V10.3828" stroke="#1E1E1E"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex justify-center items-center size-full relative">
                <img src="{{ asset('aset/hero.svg') }}" alt="tower" class="rounded-3xl lg:w-full object-cover">
            </div>
        </div>
        {{-- regist-page end --}}

        {{-- about us --}}
        <div class="about-us capitalize text-lg py-10 px-4 lg:p-20 bg-blue-800 w-full">
            <h1 class="text-sm lg:text-xl text-medium text-blue-800 w-fit py-2 px-4 rounded-3xl bg-white">tentang kami.</h1>
            <div class="detail grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-6 text-white">
                <h1 class="text-4xl max-lg:w-3/4 font-semibold mb-4 mt-4 w-full lg:w-8/12">Siapa sih Sinai Umroh Indarung
                    Padang itu?
                </h1>
                <h1 class="text-xl text-justify">Sinai Umrah adalah penyedia resmi visa Umrah, fokus pada pelayanan
                    berkualitas, kenyamanan jamaah, dan keamanan dana ibadah. Dengan pengalaman lebih dari 8 tahun dan
                    anggota IATA, ASITA, serta KESTHURI, kami siap wujudkan perjalanan ibadah yang aman dan berkesan.</h1>
            </div>

            <div class="items grid grid-cols-1 lg:grid-cols-3 justify-center gap-4 lg:gap-8 mt-10">
                <div
                    class="flex flex-col items-start lg:items-center bg-white p-8 lg:rounded-lg lg:text-center rounded-xl">
                    <img src="{{ asset('aset/mail.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Travel dengan
                        ber-izin resmi</h1>
                    <h1 class="mt-2">Sinai & Amanah Travel, resmi di bawah Kemenag RI (PPIU No. 292/2020), menjamin
                        keberangkatan setiap jamaah.</h1>
                </div>
                <div
                    class="flex flex-col items-start lg:items-center bg-white p-8 lg:rounded-lg lg:text-center rounded-xl">
                    <img src="{{ asset('aset/person.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Member Resmi IATA,
                        ASITA & Kesthuri</h1>
                    <h1 class="mt-2">Sinai & Amanah Travel adalah anggota resmi IATA, ASITA, dan KESTHURI, menjamin
                        layanan umrah dan haji yang berkualitas.</h1>
                </div>
                <div
                    class="flex flex-col items-start lg:items-center bg-white p-8 lg:rounded-lg lg:text-center rounded-xl">
                    <img src="{{ asset('aset/personpc.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Terakreditasi secara
                        Nasional</h1>
                    <h1 class="mt-2">Komite Akreditasi Nasional (KAN) adalah lembaga non-struktural yang bertanggung
                        jawab
                        atas akreditasi penilaian kesesuaian.</h1>
                </div>
            </div>

            <div class="items grid grid-cols-1 lg:grid-cols-2 justify-center gap-4 lg:gap-8 lg:mt-5 mt-4 px-0 lg:px-60">
                <div
                    class="flex flex-col items-start lg:items-center bg-white p-8 lg:rounded-lg lg:text-center rounded-xl">
                    <img src="{{ asset('aset/mailc.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Legalitas Operasional
                        Kantor Cabang</h1>
                    <h1 class="mt-2">Setiap kantor cabang dilengkapi SK resmi dari kantor pusat, izin Kemenag setempat,
                        dan legalitas dari IATA, ASITA, & AMPHURI.</h1>
                </div>
                <div
                    class="flex flex-col items-start lg:items-center bg-white p-8 lg:rounded-lg lg:text-center rounded-xl">
                    <img src="{{ asset('aset/protect.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Sistem umroh yang
                        aman & terpercaya</h1>
                    <h1 class="mt-2">Fokus dalam penyediaan resmi visa umrah & pada pelayanan, kualitas, dan kenyamanan
                        jamaah, serta menjamin keamanan dana ibadah.</h1>
                </div>
            </div>
        </div>
        {{-- about us end --}}

        {{-- dokumentation --}}
        <div class="dokumentation px-10 lg:px-20 my-20 py-2 lg:py-0 w-full text-center">
            <h1 class="text-sm lg:text-xl mx-auto text-yellow-600 bg-yellow-100 w-fit px-4 py-2 rounded-full">Kenangan Suci
                dalam Setiap Jejak?</h1>
            <h1 class="text-2xl lg:text-4xl font-semibold mt-2">Setiap foto <span
                    class="text-yellow-600">bercerita</span>,
                setiap
                senyuman penuh <span class="text-blue-800">syukur</span>.</h1>
            <h1 class="text-2xl lg:text-4xl font-semibold mt-2 mb-6 lg:mb-12 max-lg:w-full">Yuk, jelajahi galeri kami!📸
            </h1>
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

            {{-- Swiper --}}
            <div class="flex flex-col">

                <div class="w-fit text-white">
                    <h1 class="text-sm lg:text-xl text-medium text-yellow-600 bg-yellow-50 w-fit px-4 py-2 rounded-full">
                        Ingin
                        umroh tapi
                        terbentur biaya?</h1>
                    <h1 class="text-[1.7rem] lg:text-3xl font-semibold mt-4">Wujudkan impian tersebut bersama kami
                        dalam
                        nabung
                        umrah</h1>

                    <h1 class="text-[1.7rem] lg:text-3xl font-semibold"></h1>
                </div>
                <div class="">
                    <div class="swiper-container overflow-hidden">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="w-fit text-white">
                                    <h1 class="text-xl mt-4 font-semibold">1 mengisi formulir pendaftaran umroh</h1>
                                    <div class="requirement grid grid-rows-3 gap-0">
                                        <div class="require flex items-center gap-4 mt-6">
                                            <i
                                                class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="text-lg">Menyiapkan KTP</h1>
                                        </div>
                                        <div class="require flex items-center gap-4">
                                            <i
                                                class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="text-lg">Mengisi formulir pendaftaran umroh</h1>
                                        </div>
                                        <div class="require flex items-center gap-4">
                                            <i
                                                class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="text-lg">Mengisi formulir pembukaan rekening bank syarah (
                                                BSI,BRI,Nagari
                                                syariah
                                                )</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-fit text-white">
                                    <h1 class="text-xl mt-4 font-semibold">2. Melakukan akad tabungan</h1>
                                    <div class="requirement grid grid-rows-3 gap-0">
                                        <div class="require flex items-center gap-4 mt-6">
                                            <i
                                                class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="text-lg">Menyertakan DP minimal Rp. 500.000 saat mendaftar</h1>
                                        </div>
                                        <div class="require flex items-center gap-4">
                                            <i
                                                class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="text-lg">Saldo awal Rp. 100.000</h1>
                                        </div>
                                        <div class="require flex items-center gap-4">
                                            <i
                                                class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="text-lg">Saldo awal Rp. 400.000 (Di kantor Sinai)</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-fit text-white">
                                    <h1 class="text-xl mt-4 font-semibold">3. Pembuatan Rekening Bank Terkait</h1>
                                    <div class="requirement grid grid-rows-3 gap-0">
                                        <div class="require flex items-center gap-4 mt-6">
                                            <i
                                                class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="text-lg">Berkas jama'ah dikirim ke kantor pusat</h1>
                                        </div>
                                        <div class="require flex items-center gap-4">
                                            <i
                                                class="bi bi-check2 text-md lg:text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                                            <h1 class="text-lg">Nantinya di teruskan ke pihak bank sebagau persyaratan Open
                                                rekening atas nama Jama'ah</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full relative justify-between">
                            <div class="w-full flex">
                                <div class="swiper-pagination text-white w-5/6 text-start z-1"></div>
                            </div>
                            <div class="slide mt-10 flex gap-4 items-end z-10">
                                <i class="button-prev bi bi-arrow-left-circle text-4xl text-white"></i>
                                <i class="button-next bi bi-arrow-right-circle-fill text-4xl text-white"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        {{-- dream-page end --}}

        {{-- packet --}}
        <div class="packets mt-28 mx-10 lg:mx-60 text-center">
            <h1 class="text-sm lg:text-xl text-medium text-blue-800 semi-bodl">Paket perjalanan ibadah</h1>
            <h1 class="text-4xl font-semibold mt-2">Yuk, umroh bareng sinai Umrah Pilihlah paket yang nyaman, biar ibadah
                main berkesan 🕋✨</h1>
        </div>
        <div class="packet grid grid-cols-1 lg:grid-cols-3 mt-6 px-2 lg:px-96 gap-8">
            <div
                class="packet-1 group rounded-3xl bg-yellow-50 text-left mt-4 p-8 gap-4 hover:text-white hover:bg-yellow-400 duration-200">
                <div class="grid lg:grid-cols-1 grid-cols-2  gap-4">
                    <div class="">
                        <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                        <h1 class="font-bold my-5 text-lg uppercase">rp <span class="capitalize font-bold text-3xl">35,5
                                juta</span>
                        </h1>
                        <h1 class="tracking-[0.07rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Exercitationem
                            dignissimos
                            sequi esse.</h1>
                    </div>
                    <div class="benefit w-full grid gap-4">
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> hotel bintang 4</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> perlengkapan (gratis)
                        </h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> 13 hari perjalanan
                        </h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> dapat 2x jum'at</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> free thaif & kereta
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
                        <h1 class="font-bold my-5 text-lg uppercase">rp <span class="capitalize font-bold text-3xl">35,5
                                juta</span>
                        </h1>
                        <h1 class="tracking-[0.07rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Exercitationem
                            dignissimos
                            sequi esse.</h1>
                    </div>
                    <div class="benefit w-full grid gap-4">
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> hotel bintang 4</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> perlengkapan (gratis)
                        </h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> 13 hari perjalanan</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> dapat 2x jum'at</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-blue-400"></i> free thaif & kereta
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
                        <h1 class="font-bold my-5 text-lg uppercase">rp <span class="capitalize font-bold text-3xl">35,5
                                juta</span>
                        </h1>
                        <h1 class="tracking-[0.07rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Exercitationem
                            dignissimos
                            sequi esse.</h1>
                    </div>
                    <div class="benefit w-full grid gap-4">
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> hotel bintang 4</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> perlengkapan (gratis)
                        </h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> 13 hari perjalanan
                        </h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> dapat 2x jum'at</h1>
                        <h1 class="capitalize text-lg"><i class="bi bi-check2 text-yellow-400"></i> free thaif & kereta
                            gantung</h1>
                    </div>
                </div>
                <button
                    class="group-hover:bg-white group-hover:text-yellow-400 bg-yellow-400 w-full  mt-5 py-2 rounded-xl text-white text-semibold hover:text-yellow-400 hover:bg-white duration-200">pilih
                    paket</button>
            </div>
        </div>
        {{-- packet end --}}

        {{-- testimoni --}}
        <div class="testimonial mt-20 lg:mx-0 lg:pt-10 p-5 lg:px-20 lg:pb-2 bg-blue-800 ">
            <div class="grid grid-cols-1 lg:grid-cols-2 justify-between">
                <div class="text-white">
                    <h1
                        class="text-sm lg:text-2xl text-medium capitalize bg-white text-blue-800 w-fit py-[0.6rem] px-6 max-lg:mt-4 rounded-full">
                        Testimoni</h1>
                    <h1 class="text-3xl lg:text-4xl font-semibold mt-4">Gimana perasaan mereka</h1>
                    <h1 class="text-3xl lg:text-4xl font-semibold mt-2 mb-6">dengan sinai Umroh?</h1>
                </div>
                <div class="slide-2 flex gap-4 items-end lg:text-start justify-end max-lg:justify-end mb-6">
                    <i class="button-prev-2 bi bi-arrow-left-circle text-4xl text-white"></i>
                    <i class="button-next-2 bi bi-arrow-right-circle-fill text-4xl text-white"></i>
                </div>
            </div>

            <div class="swiper-container-2 w-full overflow-hidden">
                <div class="swiper-wrapper flex items-center w-full gap-0">
                    <div class="swiper-slide">
                        <div class="testimoni-detail flex max-md:flex-col gap-2 lg:gap-6 lg:mb-20">
                            @foreach ($kesan as $item)
                            <div class="values bg-white rounded-xl px-4 lg:px-10 lg:mt-5 lg:mb-0">
                                <div class="value flex pt-5 pb-2 gap-2 items-center">
                                    <div class="w-10 h-10 bg-black rounded-full"></div>
                                    <div class="">
                                        <h1 class="capitalize text-lg font-semibold">{{$item->nama}}</h1>
                                        <h1 class="capitalize max-lg:text-xm text-md font-light">{{$item->desk}}</h1>
                                    </div>
                                </div>
                                <div class="value pb-5 lg:pb-20 gap-2">
                                    <h1 class="lg:text-xl text-lg">{{$item->kesan}}</h1>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>                
                </div>
            </div>

            {{-- <div class="testimoni-detail grid grid-cols-1 max-lg:md:grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-6 lg:mb-20">
                <div class="values bg-white rounded-xl px-10 lg:mt-5 lg:mb-0">
                    <div class="value flex pt-5 pb-2 gap-2 items-center">
                        <div class="w-10 h-10 bg-black rounded-full"></div>
                        <div class="">
                            <h1 class="capitalize text-lg font-semibold">anugrah</h1>
                            <h1 class="capitalize max-lg:text-xm text-md font-light">Pengusaha sawit</h1>
                        </div>
                    </div>
                    <div class="value pb-5 lg:pb-20 gap-2">
                        <h1 class="text-xl">Alhamdullilah, bisa umroh pakai jasa ini, worth it banget, udh murah cepet,
                            tour guide nya baikk
                            bnget, sukses terus Sinai Umrah. </h1>
                    </div>
                </div>
                <div class="values bg-white rounded-xl px-10 lg:mt-5 max-md:hidden">
                    <div class="value flex pt-5 pb-2 max gap-2 items-center">
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
            </div> --}}

            {{-- grid grid-cols-1 max-lg:md:grid-cols-2 lg:grid-cols-3 --}}
        </div>
        {{-- testimoni end --}}

        {{-- ending information --}}
        <div class="w-full flex items-center justify-center text-center mt-20">
            <div class="ending-information p-0 lg:p-8 lg:w-fit rounded-xl">
                <div class="flex flex-col items-center ">
                    <h1 class="text-sm lg:text-xl font-medium text-yellow-600 capitalize">Temukan informasi lebih</h1>
                    <h1 class="text-4xl font-semibold mt-4 w-3/6 max-lg:w-full max-lg:text-2xl">Dapatkan informasi terkait
                        promo, diskon atau <span>informasi menarik lainnya dengan subscribe</span><span> ke email
                            kami.</span></h1>
                </div>
                <div class="mail mt-4 flex gap-4 justify-center">
                    <div class="flex items-center border-2 bg-white rounded-xl p-2">
                        <i class="bi bi-envelope text-gray-500 mr-2"></i>
                        <input type="text" class="border-0 p-2 px-4 rounded-xl flex-grow outline-none"
                            placeholder="Enter your email">
                    </div>
                    <button
                        class="langganan text-md p-0 px-4 rounded-xl text-white shadow-lg bg-yellow-600">Langganan</button>
                </div>
            </div>
        </div>
        {{-- ending information end --}}

        {{-- footer --}}
        @include('component.footer')
        {{-- footer end --}}
    </div>

    <script>
        new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.slide .button-next',
                prevEl: '.slide .button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });

        const swiper = new Swiper('.swiper-container-2', {
            loop: true,
            // pagination: {
            //     el: '.swiper-pagination-2',
            //     clickable: true,
            // },
            navigation: {
                nextEl: '.slide-2 .button-next-2',
                prevEl: '.slide-2 .button-prev-2',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
        console.log(swiper)

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

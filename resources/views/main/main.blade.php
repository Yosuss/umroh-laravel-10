@extends('template.layout')
@section('konten')
    <div class="pages w-full font-sans">
        {{-- navbar --}}
        <div class="navbar justify-between capitalize text-lg grid grid-cols-2 mt-12 mx-0 lg:ml-20 lg:mr-10">
            <div class="logo font-extrabold text-3xl">
                <h1>logo</h1>
            </div>
            <div class="section font-medium text-lg grid grid-cols-5 font-sans">
                <h1>beranda</h1>
                <h1>layanan</h1>
                <h1>tentang kami</h1>
                <h1>testimonial</h1>
                <h1>hubungi kami</h1>
            </div>
        </div>
        {{-- navbar end --}}

        {{-- regist-page --}}
        <div class="register flex flex-col lg:flex-row gap-2 mt-20 m-10 lg:mb-36 lg:m-20">
            <div class="info w-full lg:w-8/12">
                <h1 class="font-bold text-2xl mb-5">Ahian wa sahlan <span class="font-normal">di situs resmi</span></h1>
                <h1 class="text-6xl font-bold text-yellow-500 mb-4">Mulai Umrohmu bersama</h1>
                <h1 class="text-6xl font-bold text-blue-800 mb-4">Sinai Umroh cabang</h1>
                <h1 class="text-6xl font-bold text-blue-800 mb-4">Indarung Padang.</h1>
                <h1 class="mt-8 text-2xl font-light w-11/12">Halo calon jamaah umroh kami adalah mitra terpercaya untuk
                    perjalanan
                    spiritual anda dengan pengalaman <span class="font-bold">8+ tahun</span> kami siap mendampingi ibdadah
                    umroh dan haji anda</h1>
                <div class="button font-medium text-white mt-5 flex">
                    <button class="bg-yellow-500 capitalize text-lg px-6 py-3 mr-4 rounded-3xl">daftar sekarang</button>
                    <button
                        class="border-2 inline-flex items-center gap-4 border-black capitalize text-lg px-6 py-3 text-black rounded-3xl">masuk
                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.6172L10 1.38281M10 1.38281H1M10 1.38281V10.3828" stroke="#1E1E1E"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex justify-center items-center w-5/12 relative">
                {{-- <div class="rounded-2xl bg-white p-4 absolute top-2 left-[-2rem]">
                    <h1 class="font-bold text-xl">8+ years</h1>
                    <h1 class="text-xl">experience</h1>
                </div>
                <img src="{{ asset('aset/mekah.jpg') }}" alt="mekah" class="rounded-2xl w-[30rem]">
                <img src="{{ asset('aset/kakbah.jpg') }}" alt="kakbah"
                    class="rounded-2xl absolute w-[15rem] bottom-2 right-[-2rem]"> --}}
                <img src="{{ asset('aset/hero.svg') }}" alt="tower" class="rounded-3xl lg:w-full w-200 ">
            </div>
        </div>
        {{-- regist-page end --}}

        {{-- about me --}}
        <div class="about-me capitalize text-lg py-10 px-4 lg:p-20 bg-blue-800 w-full">
            <h1 class="text-xl text-medium text-blue-800 w-fit py-2 px-4 rounded-3xl bg-white">tentang kami.</h1>
            <div class="detail grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-6 text-white">
                <h1 class="text-4xl font-semibold mb-4 mt-4 w-full lg:w-8/12">Siapa sih Sinai Umroh Indarung Padang itu?</h1>
                <h1 class="text-xl justify-end">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem porro
                    ducimus id repudiandae soluta modi, aliquid expedita mollitia minus quo est magnam nemo a perferendis,
                    reprehenderit, quasi ullam! Doloremque odio doloribus, provident illo facere laudantium ab repudiandae
                    omnis ipsum in?</h1>
            </div>

            <div class="items grid grid-cols-1 lg:grid-cols-3 justify-center gap-0 lg:gap-8 mt-10">
                <div class="flex flex-col items-center bg-white p-4 lg:rounded-lg text-center">
                <img src="{{ asset('aset/mail.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem
                        soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
                <div class="flex flex-col items-center bg-white p-4 lg:rounded-lg text-center">
                <img src="{{ asset('aset/person.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem
                        soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
                <div class="flex flex-col items-center bg-white p-4 lg:rounded-lg text-center">
                <img src="{{ asset('aset/personpc.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem
                        soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
            </div>

            <div class="items grid grid-cols-1 lg:grid-cols-2 justify-center gap-0 lg:gap-8 lg:mt-5 px-0 lg:px-60">
                <div class="flex flex-col items-center bg-white p-4 lg:rounded-lg text-center">
                <img src="{{ asset('aset/mailc.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem
                        soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
                <div class="flex flex-col items-center bg-white p-4 lg:rounded-lg text-center">
                <img src="{{ asset('aset/protect.svg') }}" alt="tower" class="">
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem
                        soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
            </div>
        </div>
        {{-- about me end --}}

        {{-- dokumentation --}}
        <div class="dokumentation lg:px-60 my-20 py-10 w-full text-center">
            <h1 class="text-xl mx-auto text-medium text-yellow-600 bg-yellow-100 w-fit px-4 py-2 rounded-full">Kenangan Suci dalam Setiap Jejak?</h1>
            <h1 class="text-4xl font-semibold mt-2">Setiap foto <span class="text-yellow-600">bercerita</span>, setiap senyuman penuh <span class="text-blue-800">syukur</span>.</h1>
            <h1 class="text-4xl font-semibold mt-2 mb-12">Yuk, jelajahi galeri kami!</h1>
            <div class="grid grid-cols-3 gap-6">
                <div class="">
                    <img src="{{ asset('aset/dc1.svg') }}" alt="tower" class="mb-6">
                    <img src="{{ asset('aset/dc2.svg') }}" alt="tower" class="">
                </div>
                <div class="">
                    <img src="{{ asset('aset/dc3.svg') }}" alt="tower" class="w-full h-full object-cover">
                </div>
                <div class="">
                    <img src="{{ asset('aset/dc4.svg') }}" alt="tower" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
        {{-- dokumentation end --}}

        {{-- dream-page --}}
        <div class="dream mx-0 px-10 lg:mx-0 py-16 m-20 lg:m-0 grid grid-cols-1 lg:grid-cols-2 gap-2 bg-blue-800 w-full">
            <div class="flex justofy-center items-center px-20">
                <div class="bg-blue-100 px-6 lg:py-10 w-fit rounded-lg">
                    <img src="{{ asset('aset/tower.jpg') }}" alt="tower" class="rounded-3xl py-5 lg:py-0 mx-0 lg:mx-10 lg:w-4/6 lg:h-1/2 h-[27rem]">
                </div>
            </div>
            <div class="dream-detail w-fit text-white">
                <h1 class="text-xl text-medium text-yellow-600 bg-yellow-100 w-fit px-4 py-2 rounded-full">Ingin umroh tapi terbentur biaya?</h1>
                <h1 class="text-3xl font-semibold mt-4">Wujudkan impian tersebut bersama</h1>
                <h1 class="text-3xl font-semibold">Kami dalam nabung umrah</h1>
                <h1 class="text-2xl mt-4 font-semibold">1 mengisi formulir pendaftaran umroh</h1>
                <div class="requirement grid grid-rows-3 gap-2">
                    <div class="require flex items-center gap-4 mt-6">
                        <i class="bi bi-check2 text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="text-xl">Menyiapkan KTP</h1>
                    </div>
                    <div class="require flex items-center gap-4">
                        <i class="bi bi-check2 text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="text-xl">Mengisi formulir pendaftaran umroh</h1>
                    </div>
                    <div class="require flex items-center gap-4">
                        <i class="bi bi-check2 text-xl p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
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
            <h1 class="text-xl text-medium text-blue-800 semi-bodl">paket perjalanan ibadah</h1>
            <h1 class="text-4xl font-semibold mt-2">Yuk, umroh bareng sinai Umrah Pilihlah paket yang nyaman, biar ibadah
                main berkesan</h1>
            <div class="packet grid grid-cols-1 lg:grid-cols-3 mt-6 gap-8">
                <div
                    class="packet-1 rounded-3xl bg-yellow-50 text-left mt-4 p-8 grid gap-4 hover:text-white hover:bg-yellow-400 duration-200">
                    <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                    <h1 class="font-bold text-lg uppercase">rp <span class="capitalize font-bold text-3xl">35,5 juta</span>
                    </h1>
                    <h1 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dignissimos
                        sequi esse.</h1>
                    <div class="benefit w-full grid gap-4">
                        <h1 class="capitalize text-lg">hotel bintang 4</h1>
                        <h1 class="capitalize text-lg">perlengkapan (gratis)</h1>
                        <h1 class="capitalize text-lg">13 hari perjalanan</h1>
                        <h1 class="capitalize text-lg">dapat 2x jum'at</h1>
                        <h1 class="capitalize text-lg">free thaif & kereta gantung</h1>
                        <button
                            class="bg-yellow-400 w-full py-2 rounded-xl text-white text-semibold hover:text-yellow-400 hover:bg-white duration-200">pilih
                            paket</button>
                    </div>
                </div>

                <div
                    class="packet-2 rounded-3xl bg-blue-50 text-left mt-4 p-8 grid gap-4 hover:text-white hover:bg-blue-800 duration-200">
                    <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                    <h1 class="font-bold text-lg uppercase">rp <span class="capitalize font-bold text-3xl">35,5
                            juta</span>
                    </h1>
                    <h1 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dignissimos
                        sequi esse.</h1>
                    <div class="benefit w-full grid gap-4">
                        <h1 class="capitalize text-lg">hotel bintang 4</h1>
                        <h1 class="capitalize text-lg">perlengkapan (gratis)</h1>
                        <h1 class="capitalize text-lg">13 hari perjalanan</h1>
                        <h1 class="capitalize text-lg">dapat 2x jum'at</h1>
                        <h1 class="capitalize text-lg">free thaif & kereta gantung</h1>
                        <button
                            class="bg-blue-800 w-full py-2 rounded-xl text-white text-semibold hover:text-blue-800 hover:bg-white duration-200">pilih
                            paket</button>
                    </div>
                </div>

                <div
                    class="packet-1 rounded-3xl bg-yellow-50 text-left mt-4 p-8 grid gap-4 hover:text-white hover:bg-yellow-400 duration-200">
                    <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                    <h1 class="font-bold text-lg uppercase">rp <span class="capitalize font-bold text-3xl">35,5
                            juta</span>
                    </h1>
                    <h1 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dignissimos
                        sequi esse.</h1>
                    <div class="benefit w-full grid gap-4">
                        <h1 class="capitalize text-lg">hotel bintang 4</h1>
                        <h1 class="capitalize text-lg">perlengkapan (gratis)</h1>
                        <h1 class="capitalize text-lg">13 hari perjalanan</h1>
                        <h1 class="capitalize text-lg">dapat 2x jum'at</h1>
                        <h1 class="capitalize text-lg">free thaif & kereta gantung</h1>
                        <button
                            class="bg-yellow-400 w-full py-2 rounded-xl text-white text-semibold hover:text-yellow-400 hover:bg-white duration-200">pilih
                            paket</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- packet end --}}

        {{-- testimoni --}}
        <div class="testimonial mt-20 p-10 lg:mx-0 lg:pt-10 lg:px-40 lg:pb-2 bg-blue-800 ">
            <div class="grid grid-cols-1 lg:grid-cols-2 justify-between">
                <div class="text-white">
                    <h1 class="text-xl text-medium capitalize">testimoni</h1>
                    <h1 class="text-3xl lg:text-4xl font-semibold mt-4">Gimana perasaan mereka</h1>
                    <h1 class="text-3xl lg:text-4xl font-semibold mt-2 mb-6">dengan sinai Umroh?</h1>
                </div>
                <div class="flex gap-4 items-start lg:items-end justify-end mb-6">
                    <i class="bi bi-arrow-left-circle text-4xl text-white"></i>
                    <i class="bi bi-arrow-right-circle-fill text-4xl text-white"></i>
                </div>
            </div>

            <div class="testimoni-detail grid grid-cols-2 lg:grid-cols-3 gap-6 mb-20">
                <div class="values bg-white rounded-xl">
                    <div class="value flex px-5 pt-5 pb-2 gap-2 items-center">
                        <div class="w-10 h-10 bg-black rounded-full"></div>
                        <h1 class="capitalize text-lg font-semibold">anugrah</h1>
                    </div>
                    <div class="value px-5 pb-20 gap-2">
                        <h1 class="pl-4 text-2xl">"</h1>
                        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio commodi accusamus vel harum
                            nesciunt inventore facilis repellendus modi et necessitatibus, totam quos iste officia
                            consectetur.</h1>
                    </div>
                </div>
                <div class="values bg-white rounded-xl">
                    <div class="value flex px-5 pt-5 pb-2 gap-2 items-center">
                        <div class="w-10 h-10 bg-black rounded-full"></div>
                        <h1 class="capitalize text-lg font-semibold">anugrah</h1>
                    </div>
                    <div class="value px-5 pb-20 gap-2">
                        <h1 class="pl-4 text-2xl">"</h1>
                        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio commodi accusamus vel harum
                            nesciunt inventore facilis repellendus modi et necessitatibus, totam quos iste officia
                            consectetur.</h1>
                    </div>
                </div>
                <div class="values bg-white rounded-xl">
                    <div class="value flex px-5 pt-5 pb-2 gap-2 items-center">
                        <div class="w-10 h-10 bg-black rounded-full"></div>
                        <h1 class="capitalize text-lg font-semibold">anugrah</h1>
                    </div>
                    <div class="value px-5 pb-20 gap-2">
                        <h1 class="pl-4 text-2xl">"</h1>
                        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio commodi accusamus vel harum
                            nesciunt inventore facilis repellendus modi et necessitatibus, totam quos iste officia
                            consectetur.</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- testimoni end --}}

        {{-- ending information --}}
        <div class="w-full flex items-center justify-center text-center mt-20">
            <div class="ending-information p-8 w-fit rounded-xl">
                <h1 class="text-xl font-medium text-yellow-400 capitalize">Temukan informasi lebih</h1>
                <h1 class="text-3xl font-semibold mt-4">Dapatkan informasi terkait promo, diskon atau</h1>
                <h1 class="text-3xl font-semibold mt-4">informasi menarik lainnya dengan subscribe</h1>
                <h1 class="text-3xl font-semibold mt-4">ke email kami.</h1>
                <div class="mail mt-4 flex gap-4 justify-center">
                    <input type="text" class="rounded-xl" placeholder="Enter your email">
                    <button class="langganan p-2 px-4 rounded-xl text-white shadow-lg bg-yellow-600">Langganan</button>
                </div>
            </div>
        </div>
        {{-- ending information end --}}

        {{-- footer --}}
        <div class="footer bg-black">
            <div class=" mt-20 grid grid-cols-1 lg:grid-cols-2 bg-black text-white px-5 lg:px-20 py-10">
                <div class="katalog grid">
                    <h1 class="text-sm font-light uppercase">katalog</h1>
                    <div class="grid grid-cols-6 mt-4 w-full lg:w-4/6 justify-center gap-1">
                        <h1 class="capitalize text-lg">beranda</h1>
                        <h1 class="text-center">/</h1>
                        <h1 class="capitalize text-lg">layanan</h1>
                        <h1 class="text-center">/</h1>
                        <h1 class="capitalize text-lg">tentang<span class="capitalize ml-2">kami</span></h1>
                        <h1 class="text-center">/</h1>
                        <h1 class="capitalize text-lg">testimonial</h1>
                        <h1 class="text-center">/</h1>
                        <h1 class="capitalize text-lg">hubungi<span class="capitalize ml-2">kami</span></h1>
                    </div>
                    <div class="mt-32 w-8/12">
                        <h1 class="text-3xl font-bold">Book your trip in minute,get full Control for much longer.</h1>
                    </div>
                </div>
                <div class="flex flex-2 mt-5 lg:mt-0 justify-between w-full">
                    <div class="contact">
                        <h1 class="text-sm font-light uppercase">kontak</h1>
                        <h1 class="capitalize text-lg mt-4 text-yellow-400">+62 892 161 572</h1>
                        <h1 class="capitalize text-lg font-light">hello@sinaiumrah.com</h1>
                        <h1 class="capitalize text-lg font-light mt-32">alamat perusahaan</h1>
                    </div>
                    <div class="folow-me">
                        <h1 class="text-sm font-light uppercase">ikuti kami</h1>
                        <h1 class="capitalize text-lg mt-4">whatsapp</h1>
                        <h1 class="capitalize text-lg">instagram</h1>
                        <h1 class="capitalize text-lg font-light mt-32">^</h1>
                    </div>
                </div>
            </div>
            <div class="copyright grid grid-cols-1 lg,md:mx-6 lg:grid-cols-3 w-full py-10 text-white">
                <h1 class="text-sm font-light uppercase px-20">@2024</h1>
                <h1 class="text-sm font-light uppercase px-[15rem]">@2024</h1>
                <h1 class="text-sm font-light uppercase lg:pl-[10rem] md:pl-0 pl-[21rem]">@2024</h1>
            </div>
        </div>
        {{-- footer end --}}

    </div>
@endsection

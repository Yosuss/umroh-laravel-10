@extends('template.layout')
@section('konten')
    <div class="pages w-full h-screen font-sans">
            <div class="navbar justify-between capitalize grid grid-cols-2 mt-12 mx-20">
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
    
            <div class="register flex gap-2 mt-20 m-20">
                <div class="info w-8/12">
                    <h1 class="font-bold text-2xl mb-5">Ahian wa sahlan <span class="font-normal">di situs resmi</span></h1>
                    <h1 class="text-6xl font-bold text-blue-600	mb-4">Mulai Umrohmu bersama</h1>
                    <h1 class="text-6xl font-bold text-blue-600 mb-4">Sinai Umroh Padang.</h1>
                    <h1 class="mt-8 text-2xl font-light">Halo calon jamaah umroh kami adalah mitra terpercaya untuk perjalanan spiritual anda dengan pengalaman <span class="font-bold">8+ tahun</span> kami siap mendampingi ibdadah umroh dan haji anda</h1>
                    <div class="button font-medium text-white mt-5">
                        <button class="bg-blue-600 capitalize px-6 py-3 mr-4 rounded-3xl">daftar sekarang</button>
                        <button class="border-2 border-black capitalize px-6 py-3 text-black rounded-3xl">masu ></button>
                    </div>
                </div>
                <div class="testimonial text-center w-4/12 bg-gray-300 shadow-lg mx-10">
                </div>
            </div>

        <div class="about-me capitalize m-20">
            <h1 class="text-lg text-medium text-blue-600">tentang kami.</h1>
            <div class="detail grid grid-cols-2">
                <h1 class="text-4xl font-semibold mt-4 w-8/12">Siapa sih Sinai Umroh Padang itu?</h1>
                <h1 class="text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolorem sed iure odit? Dignissimos, qui reprehenderit. Tenetur provident recusandae, aut laboriosam qui veniam necessitatibus nihil.</h1>
            </div>
            <div class="items grid grid-cols-5 gap-8 mt-10">
                <div class="flex flex-col items-center bg-white p-4 rounded-lg text-center">
                    <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
                <div class="flex flex-col items-center bg-white p-4 rounded-lg text-center">
                    <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
                <div class="flex flex-col items-center bg-white p-4 rounded-lg text-center">
                    <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
                <div class="flex flex-col items-center bg-white p-4 rounded-lg text-center">
                    <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
                <div class="flex flex-col items-center bg-white p-4 rounded-lg text-center">
                    <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
            </div>
        </div>

        <div class="dream m-20 grid grid-cols-2 gap-2">
            <div class="image mx-10 p-100 h-96 bg-gray-300 rounded-xl">

            </div>
            <div class="dream-detail w-fit">
                <h1 class="text-lg text-medium text-blue-600">Ingin umroh tapi terbentur biaya?</h1>
                <h1 class="text-3xl font-semibold mt-4">Wujudkan impian tersebut bersama</h1>
                <h1 class="text-3xl font-semibold">Kami dalam nabung umrah</h1>
                <h1 class="text-2xl mt-4 font-semibold">mengisi formulir pendaftaran umroh</h1>
                <div class="requirement grid grid-rows-3 gap-2">
                    <div class="require flex items-center gap-2">
                        <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                        <h1 class="text-xl">Menyiapkan KTP</h1>
                    </div>
                    <div class="require flex items-center gap-2">
                        <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                        <h1 class="text-xl">Mengisi formulir pendaftaran umroh</h1>
                    </div>
                    <div class="require flex items-center gap-2">
                        <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                        <h1 class="text-xl">Mengisi formulir pembukaan rekening bank syarah ( BSI,BRI,Nagari syariah )</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="packets h-screen mt-4 mx-80 text-center">
            <h1 class="text-lg text-medium text-blue-600 semi-bodl">paket perjalanan ibadah</h1>
            <h1 class="text-3xl font-semibold mt-2">Yuk, umroh bareng Sinau Umrah Pilihlah paket yang nyaman, biar ibadah main berkesan</h1>
            <div class="packet grid grid-cols-3 gap-2">
                <div class="packet-1 rounded-xl text-left mt-4 p-4 bg-white grid gap-4 hover:text-white hover:bg-yellow-400">
                    <h1 class="text-2xl text-semibold">product sinau agustus</h1>
                    <h1 class="font-bold text-md uppercase">rp <span class="capitalize font-bold text-3xl">35,5 juta</span></h1>
                    <h1 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dignissimos sequi esse.</h1>
                    <h1>hotel bintang 4</h1>
                    <h1 class="capitalize">perlengkapan (gratis)</h1>
                    <h1 class="capitalize">13 hari perjalanan</h1>
                    <h1 class="capitalize">dapat 2x jum'at</h1>
                    <h1 class="capitalize">free thaif & kereta gantung</h1>
                        <button class="bg-yellow-400 py-2 rounded-xl text-white text-semibold hover:bg-white hover:text-yellow-400">pilih paket</button>
                </div>
            </div>
        </div>
    </div>
@endsection
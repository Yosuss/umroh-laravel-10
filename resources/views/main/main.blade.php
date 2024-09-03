@extends('template.layout')
@section('konten')
    <div class="pages w-full h-screen font-sans">
        <div class="navbar justify-between capitalize text-lg grid grid-cols-2 mt-12 mx-20">
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
                <h1 class="text-6xl font-bold text-blue-600 mb-4">Sinai Umroh cabang</h1>
                <h1 class="text-6xl font-bold text-blue-600 mb-4">Indarung Padang.</h1>
                <h1 class="mt-8 text-2xl font-light w-11/12">Halo calon jamaah umroh kami adalah mitra terpercaya untuk perjalanan
                    spiritual anda dengan pengalaman <span class="font-bold">8+ tahun</span> kami siap mendampingi ibdadah
                    umroh dan haji anda</h1>
                <div class="button font-medium text-white mt-5">
                    <button class="bg-blue-600 capitalize text-lg px-6 py-3 mr-4 rounded-3xl">daftar sekarang</button>
                    <button class="border-2 border-black capitalize text-lg px-6 py-3 text-black rounded-3xl">masu ></button>
                </div>
            </div>
            <div class="flex justify-center items-center w-5/12 relative">
                <div class="rounded-2xl bg-white p-4 absolute top-2 left-[-2rem]">
                    <h1 class="font-bold text-xl">8+ years</h1>
                    <h1 class="text-xl">experience</h1>
                </div>
                <img src="{{asset('aset/mekah.jpg')}}" alt="mekah" class="rounded-2xl w-[30rem]">
                <img src="{{asset('aset/kakbah.jpg')}}" alt="kakbah" class="rounded-2xl absolute w-[15rem] bottom-2 right-[-2rem]">
            </div>
        </div>

        <div class="about-me capitalize text-lg m-20">
            <h1 class="text-xl text-medium text-blue-600">tentang kami.</h1>
            <div class="detail grid grid-cols-2">
                <h1 class="text-4xl font-semibold mt-4 w-8/12">Siapa sih Sinai Umroh Padang itu?</h1>
                <h1 class="text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolorem sed iure odit?
                    Dignissimos, qui reprehenderit. Tenetur provident recusandae, aut laboriosam qui veniam necessitatibus
                    nihil.</h1>
            </div>

            <div class="items grid grid-cols-3 justify-center gap-8 mt-10">
                <div class="flex flex-col items-center bg-white p-4 rounded-lg text-center">
                    <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem
                        soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
                <div class="flex flex-col items-center bg-white p-4 rounded-lg text-center">
                    <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem
                        soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
                <div class="flex flex-col items-center bg-white p-4 rounded-lg text-center">
                    <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem
                        soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
            </div>

            <div class="items grid grid-cols-2 justify-center gap-8 mt-5 px-60">
                <div class="flex flex-col items-center bg-white p-4 rounded-lg text-center">
                    <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem
                        soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
                <div class="flex flex-col items-center bg-white p-4 rounded-lg text-center">
                    <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                    <h1 class="mt-2 text-xl font-bold">Lorem ipsum dolor sit.</h1>
                    <h1 class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ex consequuntur autem
                        soluta ut pariatur! Repudiandae sapiente maxime velit? Impedit!</h1>
                </div>
            </div>
        </div>

        <div class="dream m-20 grid grid-cols-2 gap-2">
            {{-- <div class="image mx-10 p-100 h-96 bg-gray-300 rounded-xl">

            </div> --}}
            <img src="{{asset('aset/tower.jpg')}}" alt="tower" class="rounded-3xl mx-10 w-[35rem] h-[27rem]">
            <div class="dream-detail w-fit">
                <h1 class="text-xl text-medium text-blue-600">Ingin umroh tapi terbentur biaya?</h1>
                <h1 class="text-3xl font-semibold mt-4">Wujudkan impian tersebut bersama</h1>
                <h1 class="text-3xl font-semibold">Kami dalam nabung umrah</h1>
                <h1 class="text-2xl mt-4 font-semibold">1 mengisi formulir pendaftaran umroh</h1>
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
                <div class="grid grid-cols-2 justify-between">
                    <div class="pagination mt-14 flex gap-2">
                        <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                        <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                        <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                    </div>
                    <div class="slide mt-10 flex gap-4 justify-end">
                        <div class="border-2 border-blue-400 text-blue-400 items-center text-2xl rounded-full w-fit p-2"> < </div>
                        <div class="border-2 bg-blue-400 text-white  items-center text-2xl rounded-full w-fit p-2"> > </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="packets h-screen mt-4 mx-80 text-center">
            <h1 class="text-xl text-medium text-blue-600 semi-bodl">paket perjalanan ibadah</h1>
            <h1 class="text-3xl font-semibold mt-2">Yuk, umroh bareng sinai Umrah Pilihlah paket yang nyaman, biar ibadah
                main berkesan</h1>
            <div class="packet grid grid-cols-3 gap-8">

                <div
                    class="packet-1 rounded-xl text-left mt-4 p-4 bg-white grid gap-4 hover:text-white hover:bg-yellow-400 duration-200">
                    <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                    <h1 class="font-bold text-md uppercase">rp <span class="capitalize font-bold text-3xl">35,5 juta</span>
                    </h1>
                    <h1 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dignissimos
                        sequi esse.</h1>
                    <h1>hotel bintang 4</h1>
                    <div class="benefit w-full grid gap-4">
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
                    class="packet-2 rounded-xl text-left mt-4 p-4 bg-white grid gap-4 hover:text-white hover:bg-blue-600 duration-200">
                    <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                    <h1 class="font-bold text-md uppercase">rp <span class="capitalize font-bold text-3xl">35,5 juta</span>
                    </h1>
                    <h1 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dignissimos
                        sequi esse.</h1>
                    <h1>hotel bintang 4</h1>
                    <div class="benefit w-full grid gap-4">
                        <h1 class="capitalize text-lg">perlengkapan (gratis)</h1>
                        <h1 class="capitalize text-lg">13 hari perjalanan</h1>
                        <h1 class="capitalize text-lg">dapat 2x jum'at</h1>
                        <h1 class="capitalize text-lg">free thaif & kereta gantung</h1>
                        <button
                            class="bg-blue-600 w-full py-2 rounded-xl text-white text-semibold hover:text-blue-600 hover:bg-white duration-200">pilih
                            paket</button>
                    </div>
                </div>

                <div
                    class="packet-1 rounded-xl text-left mt-4 p-4 bg-white grid gap-4 hover:text-white hover:bg-yellow-400 duration-200">
                    <h1 class="text-2xl text-semibold">product sinai agustus</h1>
                    <h1 class="font-bold text-md uppercase">rp <span class="capitalize font-bold text-3xl">35,5 juta</span>
                    </h1>
                    <h1 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dignissimos
                        sequi esse.</h1>
                    <h1>hotel bintang 4</h1>
                    <div class="benefit w-full grid gap-4">
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

        <div class="testimonial mx-20">
            <h1 class="text-xl text-medium text-blue-600 capitalize ">testimoni</h1>
            <h1 class="text-3xl font-semibold mt-4">Gimana perasaan mereka</h1>
            <h1 class="text-3xl font-semibold mt-2 mb-6">dengan sinai Umroh?</h1>
            <div class="testimoni-detail grid grid-cols-3 gap-4">
                <div class="values bg-white rounded-xl">
                    <div class="value flex px-5 pt-5 pb-2 gap-2 items-center">
                        <div class="w-10 h-10 bg-black rounded-full"></div>
                        <h1 class="capitalize text-lg font-semibold">anugrah</h1>
                    </div>
                    <div class="value px-5 pb-20 gap-2">
                        <h1 class="pl-4 text-2xl">"</h1>
                        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio commodi accusamus vel harum nesciunt inventore facilis repellendus modi et necessitatibus, totam quos iste officia consectetur.</h1>
                    </div>
                </div>
                <div class="values bg-white rounded-xl">
                    <div class="value flex px-5 pt-5 pb-2 gap-2 items-center">
                        <div class="w-10 h-10 bg-black rounded-full"></div>
                        <h1 class="capitalize text-lg font-semibold">anugrah</h1>
                    </div>
                    <div class="value px-5 pb-20 gap-2">
                        <h1 class="pl-4 text-2xl">"</h1>
                        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio commodi accusamus vel harum nesciunt inventore facilis repellendus modi et necessitatibus, totam quos iste officia consectetur.</h1>
                    </div>
                </div>
                <div class="values bg-white rounded-xl">
                    <div class="value flex px-5 pt-5 pb-2 gap-2 items-center">
                        <div class="w-10 h-10 bg-black rounded-full"></div>
                        <h1 class="capitalize text-lg font-semibold">anugrah</h1>
                    </div>
                    <div class="value px-5 pb-20 gap-2">
                        <h1 class="pl-4 text-2xl">"</h1>
                        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio commodi accusamus vel harum nesciunt inventore facilis repellendus modi et necessitatibus, totam quos iste officia consectetur.</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex items-center justify-center text-center mt-20">
            <div class="ending-information p-8 bg-white w-fit rounded-xl">
                <h1 class="text-xl font-medium text-blue-600 capitalize">Temukan informasi lebih</h1>
                <h1 class="text-3xl font-semibold mt-4">Dapatkan informasi terkait promo, diskon atau</h1>
                <h1 class="text-3xl font-semibold mt-4">informasi menarik lainnya dengan subscribe</h1>
                <h1 class="text-3xl font-semibold mt-4">ke email kami.</h1>
                <div class="mail mt-4 flex gap-4 justify-center">
                    <input type="text" class="rounded-xl" placeholder="Enter your email">
                    <button class="langganan p-2 px-4 rounded-xl text-white shadow-lg bg-yellow-600">Langganan</button>
                </div>
            </div>
        </div>

        <div class="footer bg-black">
            <div class=" mt-20 grid grid-cols-2 bg-black text-white px-20 py-10">
                <div class="katalog grid">
                    <h1 class="text-sm font-light uppercase">katalog</h1>
                    <div class="grid grid-cols-6 mt-4 w-4/6">
                        <h1 class="capitalize text-lg">beranda</h1>
                        <h1>/</h1>
                        <h1 class="capitalize text-lg">layanan</h1>
                        <h1>/</h1>
                        <h1 class="capitalize text-lg">tentang kami</h1>
                        <h1>/</h1>
                        <h1 class="capitalize text-lg">testimonial</h1>
                        <h1>/</h1>
                        <h1 class="capitalize text-lg">hubungi kami</h1>
                    </div>
                    <div class="mt-8 w-4/6">
                        <h1 class="text-3xl font-bold">Book your trip in minute,get full Control for much longer.</h1>
                    </div>
                </div>
                <div class="grid grid-cols-2 justify-between w-full">
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
            <div class="copyright grid grid-cols-3 w-full text-center py-10 text-white">
                <h1 class="text-sm font-light uppercase">@2024</h1>
                <h1 class="text-sm font-light uppercase">@2024</h1>
                <h1 class="text-sm font-light uppercase">@2024</h1>
            </div>
        </div>  
    </div>
@endsection

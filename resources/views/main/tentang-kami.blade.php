@extends('template.layout')
@section('konten')
    <div class="tentang-kami w-full">

        @include('component.whatsapp')
        
        {{-- navbar --}}
        @include('component.navbar')
        {{-- navbar end --}}


        {{-- dedikasi --}}
        <div
            class="flex flex-col-reverse justify-center items-center lg:flex-row gap-2 mt-40 lg:mt-32 m-10 lg:mb-44 lg:m-20">
            <div class="flex justify-center items-center size-full relative">
                {{-- <img src="{{ asset('aset/hero.svg') }}" alt="" class=" rounded-3xl lg:w-full object-cover"> --}}
                <iframe width="850" height="600" class="object-cover"
                    src="https://www.youtube.com/embed/XJBibv9_FBI?si=pa9E01l5hrh4WVJZ" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="info w-full flex flex-col">
                <h1 class="lg:text-xl text-medium text-blue-800 w-fit py-2 px-4 rounded-3xl bg-blue-100">Dedikasi Kami,
                    Ibadah Anda ✨
                </h1>
                <h1 class="text-[2.7rem] lg:text-[4rem] font-semibold items-center lg:w-5/6 w-full">Kami memastikan setiap
                    langkah
                    ibadah Anda penuh kenyamanan dan keberkahan.</h1>
                <div class="flex lg:pt-32">
                    <img src="{{ asset('aset/play.svg') }}" alt="" class="w-[5rem] animate-pulse">
                    <h1 class="flex justify-center items-center font-semibold text-2xl">play testimoni jama'ah</h1>
                </div>
            </div>
        </div>
        {{--  dedikasi end --}}

        {{-- about-us --}}
        <div class="bg-blue-800 flex flex-col-reverse justify-center items-center lg:flex-row gap-2 lg:px-20 py-14">
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
                    class="img flex justify-center items-center bg-white w-full rounded-xl mx-10 py-4 lg:mr-60 lg:ml-6 lg:py-4">
                    <img src="{{ asset('aset/tentang_kami.png') }}" alt="" class="rounded-3xl object-cover">
                </div>
            </div>
        </div>
        {{-- about-us -end-}}

        {{-- visi misi --}}
        <div class="flex flex-col justify-center items-center lg:flex-row gap-4 my-6 px-4 lg:px-20">
            <div class="flex flex-col justify-center size-full relative lg:pl-20">
                <h1 class="lg:text-xl text-medium text-yellow-800 w-fit py-2 px-4 rounded-3xl bg-yellow-50">Visi Kami
                </h1>
                <h1 class="lg:text-3xl text-2xl mt-4 lg:font-semibold lg:w-5/6">“ Menjadi penyedia layanan Umrah dan Haji
                    terkemuka yang dipercaya oleh jamaah, dengan mengutamakan kualitas, kenyamanan, dan keamanan dalam
                    setiap perjalanan spiritual. “</h1>
            </div>
            <div class="flex flex-col justify-center size-full relative">
                <h1 class="lg:text-xl text-medium text-yellow-800 w-fit py-2 px-4 rounded-3xl bg-yellow-50">Misi Kami.
                </h1>

                <div class="misi">
                    <div class="flex items-center gap-4 mt-6">
                        <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="lg:text-2xl text-xl">Menyediakan Layanan Berkualitas</h1>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="lg:text-2xl text-xl">Menjamin Keamanan dan Kenyamanan</h1>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="lg:text-2xl text-xl">Mengutamakan Kepuasan Jamaah</h1>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="lg:text-2xl text-xl">Meningkatkan Mutu Pelayanan</h1>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <i class="bi bi-check2 p-1 px-2 rounded-full bg-blue-100 text-blue-800"></i>
                        <h1 class="lg:text-2xl text-xl">Meningkatkan Mutu Pelayanan</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- visi misi end  --}}

        {{-- footer --}}
        @include('component.footer')
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

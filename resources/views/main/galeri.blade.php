@extends('template.layout')
@section('konten')
    <div class="tentang-kami w-full">

        @include('component.whatsapp')

        {{-- navbar --}}
        @include('component.navbar')
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

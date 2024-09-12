@extends('template.layout')
@section('konten')
    <div class="tentang-kami w-full">

        @include('component.whatsapp')

        {{-- navbar --}}
        @include('component.navbar')
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

            <form action="{{ route('tambah') }}" method="POST"
                class="form-container bg-white flex max-lg:flex-col lg:w-full max-lg:mx-4 px-10 lg:px-0 mt-10 lg:gap-4 justify-center lg:justify-between items-center">
                @csrf
                <div class="form flex flex-col gap-6 m-6 w-full lg:w-6/12 lg:mr-10">
                    <h1 class="text-3xl lg:mb-5 font-semibold">Hubungi Kami.</h1>
                    <input type="text" name="email" class="text-2xl rounded-lg lg:py-4 w-full" placeholder="Email">
                    <input type="text" name="name" class="text-2xl rounded-lg lg:py-4 w-full" placeholder="Nama">
                    <input type="text" name="subject" class="text-2xl rounded-lg lg:py-4 w-full pb-10 lg:pb-20"
                        placeholder="Subjek">
                    <button type="submit"
                        class="capitalize px-4 lg:py-4 py-2 shadow-lg text-white bg-yellow-600 rounded-lg w-full">kirim</button>
                </div>
                <div class="map m-6 lg:w-1/2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d361174.16989107773!2d99.93070517341222!3d-0.9885416667089373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b95b314aa827%3A0x1131cf3ebcab80ff!2sSinai%20Umrah%20%26%20Haji%20Plus%20kantor%20pusat!5e0!3m2!1sid!2sid!4v1725696160390!5m2!1sid!2sid"
                        width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-lg max-lg:hidden"></iframe>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d361174.16989107773!2d99.93070517341222!3d-0.9885416667089373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b95b314aa827%3A0x1131cf3ebcab80ff!2sSinai%20Umrah%20%26%20Haji%20Plus%20kantor%20pusat!5e0!3m2!1sid!2sid!4v1725696160390!5m2!1sid!2sid"
                        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-lg lg:hidden"></iframe>
                </div>
            </form>

        </div>
        {{-- contact end --}}

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

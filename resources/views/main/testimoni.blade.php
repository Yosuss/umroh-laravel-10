@extends('template.layout')
@section('konten')
    <div class="tentang-kami w-full">

        @include('component.whatsapp')
        
        {{-- navbar --}}
        @include('component.navbar')
        {{-- navbar end --}}

        {{-- testimoni --}}
        <div class="testimonial flex flex-col w-full max-lg:mt-44">
            <div class="flex flex-col justify-center gap-2 lg:w-7/12 lg:m-20 mx-4">
                <h1 class="text-[3rem] lg:text-[4.5rem] font-semibold ">Cerita Mereka, Inspirasi Anda untuk Perjalanan Suci
                    ✨</h1>
                <h1 class="text-2xl lg:text-3xl font-light lg:mt-10">Baca pengalaman nyata dari para jamaah yang telah
                    mempercayakan perjalanan ibadahnya kepada kami. Setiap testimonial adalah bukti dedikasi kami dalam
                    memberikan pelayanan terbaik.</h1>
            </div>

            <div class="testimoni lg:grid lg:mx-20 hidden grid-cols-3 gap-2 lg:gap-8">
                @foreach ($data_desktop as $item)
                    <div class="values bg-blue-50 rounded-xl max-lg:pb-20 lg:mx-0 mx-4 px-10 mt-5 lg:mt-0">
                        <div class="value flex pt-5 pb-2 gap-2 items-center">
                            <div class="w-10 h-10 bg-black rounded-full"></div>
                            <div class="">
                                <h1 class="capitalize text-lg font-semibold">{{ $item->nama }}</h1>
                                <h1 class="capitalize max-lg:text-xm text-md font-light">{{ $item->job }}</h1>
                            </div>
                        </div>
                        <div class="value pb-5 lg:pb-20 gap-2">
                            <h1 class="text-xl">{{ $item->testimoni }}</h1>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="testimoni max-md:hidden lg:hidden lg:mx-20 grid grid-cols-2 gap-2 lg:gap-8">
                @foreach ($data_tablet as $item)
                    <div class="values bg-blue-50 rounded-xl max-lg:pb-20 lg:mx-0 mx-4 px-10 mt-5 lg:mt-0">
                        <div class="value flex pt-5 pb-2 gap-2 items-center">
                            <div class="w-10 h-10 bg-black rounded-full"></div>
                            <div class="">
                                <h1 class="capitalize text-lg font-semibold">{{ $item->nama }}</h1>
                                <h1 class="capitalize max-lg:text-xm text-md font-light">{{ $item->job }}</h1>
                            </div>
                        </div>
                        <div class="value pb-5 lg:pb-20 gap-2">
                            <h1 class="text-xl">{{ $item->testimoni }}</h1>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="testimoni max-md:grid hidden lg:mx-20 grid-cols-1 gap-2 lg:gap-8">
                @foreach ($data_mobile as $item)
                    <div class="values bg-blue-50 rounded-xl max-lg:pb-20 lg:mx-0 mx-4 px-10 mt-5 lg:mt-0">
                        <div class="value flex pt-5 pb-2 gap-2 items-center">
                            <div class="w-10 h-10 bg-black rounded-full"></div>
                            <div class="">
                                <h1 class="capitalize text-lg font-semibold">{{ $item->nama }}</h1>
                                <h1 class="capitalize max-lg:text-xm text-md font-light">{{ $item->job }}</h1>
                            </div>
                        </div>
                        <div class="value pb-5 lg:pb-20 gap-2">
                            <h1 class="text-xl">{{ $item->testimoni }}</h1>
                        </div>
                    </div>
                @endforeach
            </div>



            <div class="pagination lg:mx-20 mt-20 flex gap-2 justify-center items-center">
                {{-- {{ @dd($data) }} --}}
                <div class="max-lg:hidden">
                    {{ $data_desktop->links('vendor.pagination.tailwind') }}
                </div>
                <div class="max-md:hidden lg:hidden ">
                    {{ $data_desktop->links('vendor.pagination.tailwind') }}
                    {{-- {{$data_tablet->links("vendor.pagination.tailwind")}} --}}
                </div>
                <div class="md:hidden">
                    {{ $data_desktop->links('vendor.pagination.tailwind') }}
                    {{-- {{$data_mobile->links("vendor.pagination.tailwind")}} --}}
                </div>

                {{-- <span class="bg-blue-100 text-blue-800 py-2 px-4 rounded-lg">Perv</span>
                <span class="bg-white border-2 border-blue-800 text-blue-800 py-2 px-4 rounded-lg">1</span>
                <span class="bg-blue-800 text-white py-2 px-4 rounded-lg">2</span>
                <span class="bg-white border-2 border-blue-800 text-blue-800 py-2 px-4 rounded-lg">3</span>
                <span class="bg-white border-2 border-blue-800 text-blue-800 py-2 px-4 rounded-lg">4</span>
                <span class="bg-white border-2 border-blue-800 text-blue-800 py-2 px-4 rounded-lg">5</span>
                <span class="bg-white border-2 border-blue-800 text-blue-800 py-2 px-4 rounded-lg">6</span>
                <span class="bg-blue-800 text-white py-2 px-4 rounded-lg">Next</span> --}}
            </div>
        </div>
        {{-- testimoni end --}}

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

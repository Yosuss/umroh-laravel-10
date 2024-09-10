@extends('template.layout')
@section('konten')
    <div class="login w-full">
        <div class="grid grid-cols-2 h-screen md:grid-cols-1">
            <div class="w-full max-lg:hidden">
                <img src="{{ asset('aset/login.png') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col items-center justify-center text-center md:mx-20">
                <img src="{{ asset('aset/sinaii.svg') }}" alt="" class="lg:w-32 w-52 mb-4 object-cover">
                <h1 class="text-5xl lg:text-5xl font-semibold">Hola, selamat pagi!
                </h1>
                <h1 class="text-2xl lg:text-xl font-light mt-4 lg:mt-6 w-10/12 lg:w-8/12">Sign In untuk mengelola dan memantau semua data
                    jamaah serta layanan dengan mudah. Kelola operasional secara efisien dan aman melalui dashboard admin
                    kami.</h1>
                    <form action="" method="" class="flex flex-col items-start lg:mt-6">
                        <label for="" class="mt-2 text-2xl font-light mb-2">Username</label>
                        <input type="text" name="user" class="text-2xl items-center w-[45rem] lg:w-[35rem] py-4 lg:py-4 lg:px-4 rounded-xl" placeholder="username">
                        {{-- <input type="text" name="user" class="text-2xl items-center bg-blue-100 rounded-xl border-2 border-blue-800" placeholder="username"> --}}
                        <label for="" class="mt-2 text-2xl font-light mb-2">Password</label>
                        <input type="text" name="pass" class="text-2xl items-center w-[45rem] lg:w-[35rem] py-4 lg:py-4 lg:px-4 rounded-xl" placeholder="password">
                        {{-- <input type="text" name="pass" class="text-2xl items-center bg-red-100 rounded-xl border-2 border-red-800" placeholder="password"> --}}
                        <button class="capitalize bg-blue-800 px-4 py-4 text-white mt-8 rounded-xl text-2xl w-[45rem] lg:w-[35rem]">sign in</button>
                    </form>
            </div>
        </div>
    </div>
@endsection

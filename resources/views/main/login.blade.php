@extends('template.layout')
@section('konten')
    <div class="login w-full">
        <div class="grid grid-cols-2 h-screen">
            <div class="w-full">
                <img src="{{ asset('aset/login.png') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img src="{{ asset('aset/sinaii.svg') }}" alt="" class="w-48 object-cover">
                <h1 class="text-xl lg:text-5xl font-semibold">Hola, selamat pagi!
                </h1>
                <h1 class="text-lg lg:text-2xl font-light lg:mt-6 lg:w-8/12">Sign In untuk mengelola dan memantau semua data
                    jamaah serta layanan dengan mudah. Kelola operasional secara efisien dan aman melalui dashboard admin
                    kami.</h1>
                    <form action="" method="" class="flex flex-col items-start lg:mt-6">
                        <label for="" class="mt-2 text-2xl font-light">Username</label>
                        <input type="text" name="user" class="text-2xl items-center bg-blue-100 rounded-xl border-2 border-blue-800" placeholder="username">
                        <label for="" class="mt-2 text-2xl font-light">Password</label>
                        <input type="text" name="pass" class="text-2xl items-center bg-red-100 rounded-xl border-2 border-red-800" placeholder="password">
                    </form>
            </div>
        </div>
    </div>
@endsection

@extends('template.layout')
@section('konten')
    <div class="login w-full">
        <div class="grid grid-cols-2 h-screen max-md:grid-cols-1">
            <div class="w-full max-lg:hidden">
                <img src="{{ asset('aset/login.png') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col items-center justify-center text-center md:mx-20">
                <img src="{{ asset('aset/sinaii.svg') }}" alt="" class="lg:w-32 w-52 mb-4 object-cover">
                <h1 class="text-5xl lg:text-5xl font-semibold">Hola, selamat pagi!</h1>
                <h1 class="text-xl lg:text-xl font-light mt-4 lg:mt-6 w-10/12 lg:w-8/12">
                    Sign In untuk mengelola dan memantau semua data jamaah serta layanan dengan mudah. Kelola operasional secara efisien dan aman melalui dashboard admin kami.
                </h1>
                <form action="{{ route('login') }}" method="POST" class="flex flex-col items-center lg:items-start lg:mt-6">
                    @csrf
                    <div>
                        <label for="name" class="flex mt-2 text-2xl self-start font-light mb-2">Username</label>
                        <input type="text" name="name"
                            class="text-2xl items-center w-[30rem] lg:w-[35rem] py-4 lg:py-4 lg:px-4 rounded-xl"
                            placeholder="username">
                    </div>

                    <div>
                        <label for="password" class="flex mt-2 text-2xl self-start font-light mb-2">Password</label>
                        <input type="password" name="password"
                            class="text-2xl items-center w-[30rem] lg:w-[35rem] py-4 lg:py-4 lg:px-4 rounded-xl"
                            placeholder="password">
                    </div>

                    <button type="submit"
                        class="capitalize bg-blue-800 px-4 py-4 text-white mt-8 rounded-xl text-2xl w-[30rem] lg:w-[35rem]">sign
                        in</button>
                </form>

                @if ($errors->any())
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: `
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            `,
                        });
                    </script>
                @endif

            </div>
        </div>
    </div>


@endsection

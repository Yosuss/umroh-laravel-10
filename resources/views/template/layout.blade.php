<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>umroh</title>
    <link rel="stylesheet" href="resources/css/app.css">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="icon" href="aset/sinaii.svg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>
<body class=" bg-gray-100">
    {{-- @include('komponen.pesan') --}}
    @yield('konten')
</body>
</html>
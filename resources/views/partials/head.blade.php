<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- MyCSS --}}
    <link rel="stylesheet" href="{{ asset('app/css/my.css') }}">
    {{-- MyCSS --}}
    {{-- LightBox --}}
    <link rel="stylesheet" href="{{ asset('lightbox/dist/css/lightbox.min.css') }}">
    {{-- LightBox --}}
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body class="bg-[#f4f2ee]">

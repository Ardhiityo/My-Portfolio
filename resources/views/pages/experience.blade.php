@extends('layouts.app')

@section('title', 'Pengalaman')

@section('content')
    <section class="relative max-w-screen-md mx-auto bg-white border-2 rounded-lg border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="flex items-center gap-2 mb-4 text-lg font-semibold text-md">
                <div class="w-12 h-12 hover:bg-[#F3F3F3] rounded-full flex justify-center items-center">
                    <a href="{{ route('home') }}">
                        <i class="fa-solid fa-arrow-left fa-xl"></i>
                    </a>
                </div>
                Pengalaman
            </h1>
            <div class="flex gap-3 mb-3">
                <img src="{{ asset('images/unival.jpeg') }}" class="w-10 h-10" alt="">
                <div>
                    <h1 class="font-semibold text-md">Fullstack Web Coding Mentor</h1>
                    <p class="text-sm">Universitas Al-Khairiyah · Paruh Waktu</p>
                    <p class="text-sm text-slate-600">Feb 2024 - Saat ini · 1 thn 2 bln</p>
                    <p class="text-sm text-slate-600">Jl. Kh.Enggus Arja No.1, Citangkil, Kec. Citangkil, Kota
                        Cilegon,
                        Banten 42441 ·
                        Di lokasi</p>
                    <div class="my-5 text-sm">
                        <p>- Teaching and Mentoring:
                            Teach and mentor course participants in various certified coding classes, covering
                            topics
                            such
                            as HTML, CSS, JavaScript, PHP, and frameworks like Laravel.</p>
                        <div class="flex gap-3 my-3">
                            <img src="{{ asset('images/experience.jpeg') }}" alt=""
                                class="h-16 border rounded-lg border-slate-400 w-28">
                            <img src="{{ asset('images/experience.jpeg') }}" alt=""
                                class="h-16 border rounded-lg border-slate-400 w-28">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

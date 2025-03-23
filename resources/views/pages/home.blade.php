@extends('layouts.app')

@section('title', 'Arya Adhi Prasetyo')

@section('content')
    {{-- Profile --}}
    <section class="relative max-w-screen-md mx-auto">
        <div class="border-2 rounded-t-lg min-h-40 bg-slate-400 border-slate-300"
            style="background-image: url('./images/banner.jpeg'); background-size: 100% 100%; background-position: center;">
            <img src="{{ asset('images/profile.jpeg') }}" alt=""
                class="absolute border-4 border-white rounded-full left-6 top-20 w-36 h-36">
        </div>
        <div class="flex justify-between p-6 bg-white border-2 rounded-b-lg min-h-52 border-slate-300">
            <section class="mt-14">
                <div class="flex flex-col gap-2">
                    <h1>
                        <span class="text-lg font-semibold">Arya Adhi Prasetyo</span>
                        <span class="text-xs text-slate-500">(He/Him)</span>
                    </h1>
                    <p class="text-sm">Fullstack Web Developer | Laravel Developer</p>
                    <p class="text-xs text-slate-600">Cilegon, Banten, Indonesia • <span class="text-[#004182]">Informasi
                            kontak</span>
                    </p>
                </div>
            </section>
            <section class="invisible mt-14 sm:visible">
                <div class="flex items-center gap-1">
                    <img src="{{ asset('images/unival.jpeg') }}" alt="" class="w-7 h-7">
                    <p class="text-xs font-semibold">Universitas Al-Khairiyah</p>
                </div>
            </section>
        </div>
    </section>
    {{-- Profile --}}

    {{-- About me --}}
    <section class="relative max-w-screen-md mx-auto my-2">
        <div class="p-6 bg-white border-2 rounded-lg min-h-40 border-slate-300">
            <h1 class="mb-4 text-lg font-semibold">Tentang</h1>
            <p class="text-sm">As a Fullstack Web Coding Mentor at Al-Khairiyah University and Full-stack Web
                Developer,
                I am highly
                skilled in utilizing various technologies such as PHP, HTML, CSS, Javascript, as well as frameworks
                such
                as Laravel, Tailwind, Bootstrap and Laravel libraries such as Filament, Spatie, Breeze, Fortify, and
                Socialite to build highly responsive and visually appealing user interfaces and admin dashboards for
                a
                seamless web experience. </p>
        </div>
    </section>
    {{-- About me --}}

    {{-- Experience --}}
    <section class="relative max-w-screen-md mx-auto bg-white border-2 rounded-lg border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Pengalaman</h1>
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
        <div class="py-3 font-semibold border-t border-t-slate-300">
            <h3 class="text-center text-slate-700">
                <a href="{{ route('experience') }}">
                    Tampilkan semua 3 pengalaman
                    <i class="fa-solid fa-arrow-right fa-sm"></i>
                </a>
            </h3>
        </div>
    </section>
    {{-- Experience --}}

    {{-- Education --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Pendidikan</h1>
            <div class="flex gap-3 mb-3">
                <img src="{{ asset('images/unival.jpeg') }}" class="w-10 h-10" alt="">
                <div>
                    <h1 class="font-semibold text-md">Universitas Al-Khairiyah</h1>
                    <p class="text-sm">Gelar sarjana, Teknik Informatika</p>
                    <p class="text-sm text-slate-600">Jul 2022 - Jul 2026</p>
                    <p class="text-sm">IPK : 4th Semester - GPA 3.62</p>
                    <div class="my-5 text-sm">
                        <p>I am an active undergraduate student of Informatics Engineering at Al-Khairiyah
                            University,
                            have a certificate of expertise, and project experience. I am very enthusiastic to share
                            knowledge and work together. Let's establish friendship and collaboration to create
                            something extraordinary.</p>
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
        <div class="py-3 font-semibold border-t border-t-slate-300">
            <h3 class="text-center text-slate-700">Tampilkan semua 3 pendidikan
                <i class="fa-solid fa-arrow-right fa-sm"></i>
            </h3>
        </div>
    </section>
    {{-- Education --}}

    {{-- Certification --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Lisensi dan sertifikasi</h1>
            <div class="flex gap-3 mb-3">
                <img src="{{ asset('images/codepolitan.jpeg') }}" class="w-10 h-10" alt="">
                <div>
                    <h1 class="font-semibold text-md">Sertifikat Kelas Membuat Website Crowd Funding dengan Tailwind
                        -
                        Slicing</h1>
                    <p class="text-sm">CODEPOLITAN</p>
                    <p class="text-sm text-slate-600">Diterbitkan Mar 2025 Kedaluwarsa Mar 2028</p>
                    <p class="text-sm text-slate-600">ID Kredensial SWB0NHM</p>
                    <div class="my-3 text-sm">
                        <a class="w-64 h-20 px-3 py-1 border rounded-full border-slate-700">
                            Tampilkan Kredensial
                            <i class="fa-solid fa-up-right-from-square fa-sm"></i>
                        </a>
                        <div class="flex items-center gap-3 my-5">
                            <img src="{{ asset('images/certificate.jpeg') }}" alt=""
                                class="h-16 border rounded-lg border-slate-400 w-28">
                            <h1 class="font-semibold">Slicing Website Crowd Funding dengan Tailwind</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 font-semibold border-t border-t-slate-300">
            <h3 class="text-center text-slate-700">Tampilkan semua 3 lisensi dan sertifikasi
                <i class="fa-solid fa-arrow-right fa-sm"></i>
            </h3>
        </div>
    </section>
    {{-- Certification --}}

    {{-- Project --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Proyek</h1>
            <div class="mb-3">
                <h1 class="font-semibold text-md">
                    Studi Kasus Full Stack Web Developer Membuat Blog</h1>
                <p class="text-sm">Jul 2024 - Jul 2024</p>
                <div class="my-3 text-sm">
                    <p>Studi Kasus ini dibuat menggunakan Vue Js 3 di sisi Front-End, lalu Vue Router untuk Routing,
                        dan
                        Pinia sebagai State Managementnya, serta Firebase yang berfungsi sebagai database, aplikasi
                        ini
                        di deploy menggunakan layanan hosting dari Firebase, tujuan dari Studi Kasus ini adalah
                        pemantapan materi CRUD yang berfokus pada penggunaan Vue Js dari mulai Reusable Component,
                        memahami State Management menggunakan Pinia, serta mengetahui step by step CRUD pada
                        Firebase.
                    </p>
                    <div class="flex items-center gap-3 my-5">
                        <div class="relative">
                            <img src="{{ asset('images/certificate.jpeg') }}" alt=""
                                class="h-16 border rounded-lg border-slate-400 w-28">
                            <div
                                class="absolute bottom-0 right-0 p-1 bg-white rounded-tl-lg rounded-br-lg shadow border-1 border-slate-400">
                                <a href="#">
                                    <i class="fa-solid fa-up-right-from-square text-slate-600"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 font-semibold border-t border-t-slate-300">
            <h3 class="text-center text-slate-700">Tampilkan semua 3 proyek
                <i class="fa-solid fa-arrow-right fa-sm"></i>
            </h3>
        </div>
    </section>
    {{-- Project --}}

    {{-- Project --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Keahlian</h1>
            <div class="mb-3">
                <h1 class="font-semibold text-md">
                    Filament
                </h1>
                <div class="my-3">
                    <div class="flex items-center gap-2 my-5 text-sm">
                        <img src="{{ asset('images/unival.jpeg') }}" alt="" class="w-7 h-7">
                        <h1 class="font-semibold">Laravel</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 font-semibold border-t border-t-slate-300">
            <h3 class="text-center text-slate-700">Tampilkan semua 3 keahlian
                <i class="fa-solid fa-arrow-right fa-sm"></i>
            </h3>
        </div>
    </section>
    {{-- Project --}}
@endsection

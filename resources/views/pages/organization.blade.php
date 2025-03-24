@extends('layouts.app')

@section('title', 'Organisasi')

@section('content')
    <section class="relative max-w-screen-md mx-auto min-h-screen">
        <div class="p-6 pb-0 min-h-40 bg-white border-2 rounded-lg border-slate-300">
            <h1 class="flex items-center gap-2 mb-4 text-lg font-semibold text-md">
                <div class="w-12 h-12 hover:bg-[#F3F3F3] rounded-full flex justify-center items-center">
                    <a href="{{ route('home') }}">
                        <i class="fa-solid fa-arrow-left fa-xl"></i>
                    </a>
                </div>
                Organisasi
            </h1>
            <div class="mt-3 border-b border-slate-200">
                <h1 class="font-semibold text-md">
                    Kelompok studi Pasar Modal
                </h1>
                <h3 class="text-sm">Anggota · Mar 2024 - Sekarang </h3>
                <div class="my-3 text-sm">
                    <p>Sharing knowledge kepada mahasiswa betapa pentingnya investasi sedari dini, dan mejadi panitia dalam
                        rangkaian acara-acara seminar investasi di dunia pasar modal.</p>
                </div>
            </div>
            <div class="mt-3 border-b border-slate-200">
                <h1 class="font-semibold text-md">
                    Kelompok studi Pasar Modal
                </h1>
                <h3 class="text-sm">Anggota · Mar 2024 - Sekarang </h3>
                <div class="my-3 text-sm">
                    <p>Sharing knowledge kepada mahasiswa betapa pentingnya investasi sedari dini, dan mejadi panitia dalam
                        rangkaian acara-acara seminar investasi di dunia pasar modal.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

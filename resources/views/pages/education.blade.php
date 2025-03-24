@extends('layouts.app')

@section('title', 'Pendidikan')

@section('content')
    <section class="relative max-w-screen-md mx-auto min-h-screen">
        <div class="p-6 pb-0 min-h-40 bg-white border-2 rounded-lg border-slate-300">
            <h1 class="flex items-center gap-2 mb-4 text-lg font-semibold text-md">
                <div class="w-12 h-12 hover:bg-[#F3F3F3] rounded-full flex justify-center items-center">
                    <a href="{{ route('home') }}">
                        <i class="fa-solid fa-arrow-left fa-xl"></i>
                    </a>
                </div>
                Pendidikan
            </h1>
            <div class="flex gap-3 mt-3 border-b border-slate-200">
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
            <div class="flex gap-3 mt-3 border-b border-slate-200">
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
    </section>
@endsection

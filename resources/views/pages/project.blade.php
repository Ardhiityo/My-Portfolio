@extends('layouts.app')

@section('title', 'Proyek')

@section('content')
    <section class="relative max-w-screen-md mx-auto min-h-screen">
        <div class="p-6 pb-0 min-h-40 bg-white border-2 rounded-lg border-slate-300">
            <h1 class="flex items-center gap-2 mb-4 text-lg font-semibold text-md">
                <div class="w-12 h-12 hover:bg-[#F3F3F3] rounded-full flex justify-center items-center">
                    <a href="{{ route('home') }}">
                        <i class="fa-solid fa-arrow-left fa-xl"></i>
                    </a>
                </div>
                Proyek
            </h1>
            @forelse ($projects as $project)
                <div class="py-3 @if (!$loop->last) border-b border-slate-200 @endif">
                    <h1 class="font-semibold text-md">
                        {{ $project->title }}
                    </h1>
                    <p class="text-sm">{{ Carbon\Carbon::parse($project->start_date)->format('M Y') }} -
                        {{ Carbon\Carbon::parse($project->end_date)->format('M Y') }}</p>
                    <div class="my-3 text-sm">
                        <p>{{ $project->description }}
                        </p>
                        <div class="flex items-center gap-3 mt-5">
                            @foreach ($project->image as $image)
                                <div class="relative h-16 w-28 border rounded-lg border-slate-400 p-1">
                                    <a href="{{ asset('storage/' . $image) }}" data-lightbox="project">
                                        <img src="{{ asset('storage/' . $image) }}" alt="{{ $project->title }}"
                                            class="h-full mx-auto">
                                    </a>
                                    @if ($loop->first)
                                        <div
                                            class="absolute bottom-0 right-0 p-1 bg-white rounded-tl-lg rounded-br-lg shadow border-1 border-slate-400">
                                            <a href="{{ $project->link }}">
                                                <i class="fa-solid fa-up-right-from-square text-slate-600"></i>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @empty
                <div class="py-3">
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
            @endforelse
        </div>
    </section>
@endsection

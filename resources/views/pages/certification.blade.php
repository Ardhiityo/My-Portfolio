@extends('layouts.app')

@section('title', 'Lisensi dan sertifikasi')

@section('content')
    <section class="relative max-w-screen-md mx-auto min-h-screen">
        <div class="p-6 pb-0 min-h-40 bg-white border-2 rounded-lg border-slate-300">
            <h1 class="flex items-center gap-2 mb-4 text-lg font-semibold text-md">
                <div class="w-12 h-12 hover:bg-[#F3F3F3] rounded-full flex justify-center items-center">
                    <a href="{{ route('home') }}">
                        <i class="fa-solid fa-arrow-left fa-xl"></i>
                    </a>
                </div>
                Lisensi dan sertifikasi
            </h1>
            @foreach ($certifications as $certification)
                <div class="flex gap-3 mt-3 border-b border-slate-200">
                    <img src="{{ asset('storage/' . $certification->image) }}" class="w-10 h-10"
                        alt="{{ $certification->title }}">
                    <div>
                        <h1 class="font-semibold text-md">
                            {{ $certification->title }}
                        </h1>
                        <p class="text-sm">{{ $certification->place->name }}</p>
                        <p class="text-sm text-slate-600">Diterbitkan
                            {{ Carbon\Carbon::parse($certification->published_date)->format('M Y') }} Kedaluwarsa
                            {{ Carbon\Carbon::parse($certification->expired_date)->format('M Y') }}
                        </p>
                        @php
                            $data = explode('/', $certification->credential);
                            $credential = $data[count($data) - 1];
                        @endphp
                        <p class="text-sm text-slate-600">ID Kredensial {{ $credential }}</p>
                        <div class="my-3 text-sm">
                            <a class="w-64 h-20 px-3 py-1 border rounded-full border-slate-700"
                                href="{{ $certification->credential }}">
                                Tampilkan Kredensial
                                <i class="fa-solid fa-up-right-from-square fa-sm"></i>
                            </a>
                            <div class="flex items-center gap-3 my-5">
                                <img src="{{ asset('storage/' . $certification->image) }}" alt=""
                                    class="h-16 border rounded-lg border-slate-400 w-28">
                                <h1 class="font-semibold">
                                    {{ $certification->description }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

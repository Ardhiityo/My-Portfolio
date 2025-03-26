@extends('layouts.app')

@section('title', 'Pengalaman')

@section('content')
    <section class="relative max-w-screen-md mx-auto min-h-screen">
        <div class="p-6 pb-0 min-h-40 bg-white border-2 rounded-lg border-slate-300">
            <h1 class="flex items-center gap-2 mb-4 text-lg font-semibold text-md">
                <div class="w-12 h-12 hover:bg-[#F3F3F3] rounded-full flex justify-center items-center">
                    <a href="{{ route('home') }}">
                        <i class="fa-solid fa-arrow-left fa-xl"></i>
                    </a>
                </div>
                Pengalaman
            </h1>
            @foreach ($experiences as $experience)
                <div class="flex gap-3 mt-3 @if (!$loop->last) border-b border-slate-300 @endif">
                    <img src="{{ asset('storage/' . $experience->place->logo) }}" class="w-10 h-10"
                        alt="{{ $experience->place->name }}">
                    <div>
                        <h1 class="font-semibold text-md">{{ $experience->job_title }}</h1>
                        <p class="text-sm">
                            {{ $experience->place->name }} · {{ $experience->jobType->name }}
                        </p>
                        <p class="text-sm text-slate-600">
                            {{ Carbon\Carbon::parse($experience->start_date)->format('M Y') }} - Saat ini · 1 thn 2 bln
                        </p>
                        <p class="text-sm text-slate-600">{{ $experience->place->address }} ·
                            Di lokasi</p>
                        <div class="my-5 text-sm">
                            {!! $experience->description !!}
                            <div class="flex gap-3 my-3">
                                @foreach ($experience->image as $image)
                                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $experience->job_title }}"
                                        class="h-16 border rounded-lg border-slate-400 w-28">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

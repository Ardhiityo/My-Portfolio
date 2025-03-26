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
            @foreach ($organizations as $organization)
                <div class="py-3 @if (!$loop->last) border-b border-b-slate-300 @endif">
                    <h1 class="font-semibold text-md">
                        {{ $organization->name }}
                    </h1>
                    <h3 class="text-sm">{{ $organization->job_title }} ·
                        {{ Carbon\Carbon::parse($organization->start_date)->format('M Y') }} -
                        Sekarang </h3>
                    <div class="my-3 text-sm">
                        <p>{{ $organization->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

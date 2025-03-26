@extends('layouts.app')

@section('title', 'Kursus')

@section('content')
    <section class="relative max-w-screen-md mx-auto min-h-screen">
        <div class="p-6 pb-0 min-h-40 bg-white border-2 rounded-lg border-slate-300">
            <h1 class="flex items-center gap-2 mb-4 text-lg font-semibold text-md">
                <div class="w-12 h-12 hover:bg-[#F3F3F3] rounded-full flex justify-center items-center">
                    <a href="{{ route('home') }}">
                        <i class="fa-solid fa-arrow-left fa-xl"></i>
                    </a>
                </div>
                Kursus
            </h1>
            @foreach ($courses as $course)
                <div class="py-3 @if (!$loop->last) border-b border-b-slate-300 @endif">
                    <h1 class="font-semibold text-md">
                        {{ $course->place->name }}
                    </h1>
                    <h3 class="text-sm">{{ Carbon\Carbon::parse($course->start_date)->format('d M Y') }} -
                        {{ Carbon\Carbon::parse($course->end_date)->format('d M Y') }}</h3>
                    <div class="my-3 text-sm">
                        <p>{{ $course->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

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
            @foreach ($educations as $education)
                <div class="flex gap-3 mt-3 @if (!$loop->last) border-b border-slate-200 @endif">
                    <img src="{{ asset('storage/' . $education->place->logo) }}" class="w-10 h-10"
                        alt="{{ $education->place->name }}">
                    <div>
                        <h1 class="font-semibold text-md">{{ $education->place->name }}</h1>
                        <p class="text-sm">{{ $education->degree }}</p>
                        <p class="text-sm text-slate-600">
                            {{ Carbon\Carbon::parse($education->start_date)->format('M Y') }}
                            - {{ Carbon\Carbon::parse($education->end_date)->format('M Y') }}</p>
                        <p class="text-sm">{{ $education->gpa }}</p>
                        <div class="my-5 text-sm">
                            {!! $education->description !!}
                            <div class="flex gap-3 my-3">
                                @foreach ($education->image as $image)
                                    <a href="{{ asset('storage/' . $image) }}" data-lightbox="education">
                                        <img src="{{ asset('storage/' . $image) }}" alt="{{ $education->degree }}"
                                            class="h-16 border rounded-lg border-slate-400 w-28">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

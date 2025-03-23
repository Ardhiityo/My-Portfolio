@extends('layouts.app')

@section('title', 'Keahlian')

@section('content')
    <section class="relative max-w-screen-md mx-auto bg-white border-2 rounded-lg border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="flex items-center gap-2 mb-4 text-lg font-semibold text-md">
                <div class="w-12 h-12 hover:bg-[#F3F3F3] rounded-full flex justify-center items-center">
                    <a href="{{ route('home') }}">
                        <i class="fa-solid fa-arrow-left fa-xl"></i>
                    </a>
                </div>
                Keahlian
            </h1>
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
    </section>
@endsection

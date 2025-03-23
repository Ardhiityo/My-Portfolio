@extends('layouts.app')

@section('title', 'Kursus')

@section('content')
    <section class="relative max-w-screen-md mx-auto bg-white border-2 rounded-lg border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="flex items-center gap-2 mb-4 text-lg font-semibold text-md">
                <div class="w-12 h-12 hover:bg-[#F3F3F3] rounded-full flex justify-center items-center">
                    <a href="{{ route('home') }}">
                        <i class="fa-solid fa-arrow-left fa-xl"></i>
                    </a>
                </div>
                Kursus
            </h1>
            <div class="mb-3">
                <h1 class="font-semibold text-md">
                    Codepolitan
                </h1>
                <h3 class="text-sm">20 Mar 2024 - 20 Mar 2024</h3>
                <div class="my-3 text-sm">
                    <p>Kursus mahir fullstack web developer from a to z</p>
                </div>
            </div>
        </div>
    </section>
@endsection

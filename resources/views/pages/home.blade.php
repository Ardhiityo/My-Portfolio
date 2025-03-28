@extends('layouts.app')

@section('title', 'Arya Adhi Prasetyo')

@section('content')
    {{-- Profile --}}
    <section class="relative max-w-screen-md mx-auto border-2 rounded-lg shadow border-slate-300 bg-white">

        @if (is_null($profile))
            <div class="rounded-t-lg min-h-48"
                style="background-image: url({{ asset('images/banner.jpeg') }}); background-size: 100% 100%; background-position: center;">
                <img src="{{ asset('images/profile.jpeg') }}" alt="background_image"
                    class="absolute border-4 border-white rounded-full left-6 top-24 w-36 h-36">
            </div>
        @else
            <div class="rounded-t-lg min-h-48"
                style="background-image: url({{ asset('storage/' . $profile->background_image) }}); background-size: 100% 100%; background-position: center;">
                <a href="{{ asset('storage/' . $profile->avatar) }}" data-lightbox="avatar">
                    <img src="{{ asset('storage/' . $profile->avatar) }}" alt="profile"
                        class="absolute border-4 border-white rounded-full left-6 top-24 w-36 h-36">
                </a>
            </div>
        @endif

        <div class="flex justify-between p-6 bg-white rounded-b-lg min-h-52 border-slate-300">
            <section class="mt-12">
                @if (is_null($profile))
                    <div class="flex flex-col gap-2">
                        <h1>
                            <span class="text-lg font-semibold">John doe</span>
                            <span class="text-xs text-slate-500">(He/Him)</span>
                        </h1>
                        <p class="text-sm">Software Engineering</p>
                        <p class="text-xs text-slate-600">California, America • <span class="text-[#004182] font-semibold"
                                onclick="contact.showModal()">Informasi
                                kontak</span>
                        </p>
                    </div>
                @else
                    <div class="flex flex-col gap-2">
                        <h1>
                            <span class="text-lg font-semibold">{{ $profile->name }}</span>
                            <span class="text-xs text-slate-500">(He/Him)</span>
                        </h1>
                        <p class="text-sm">{{ $profile->job_title }}</p>
                        <p class="text-xs text-slate-600">{{ $profile->address }} • <span
                                class="text-[#004182] font-semibold" onclick="contact.showModal()">Informasi
                                kontak</span>
                        </p>
                    </div>
                @endif

                {{-- Modal contact --}}
                <dialog id="contact" class="modal">
                    <div class="modal-box">
                        <h3 class="pb-5 text-lg font-semibold border-b border-b-slate-300">Arya Adhi Prasetyo</h3>
                        @if (is_null($contact))
                            <div>
                                <h1 class="my-4 text-lg">Informasi Kontak</h1>
                                <div class="flex flex-col my-3">
                                    <p>
                                        <i class="inline mr-2 fa-brands fa-linkedin fa-lg"></i>
                                        Linkedin
                                    </p>
                                    <a href="#" class="text-sm text-indigo-800">
                                        'linkedin.com/in/ardhiityo'
                                    </a>
                                </div>
                                <div class="flex flex-col my-3">
                                    <p>
                                        <i class="mr-2 fa-solid fa-phone fa-lg"></i>
                                        Telepon
                                    </p>
                                    <p class="text-sm">089650557420<span class="text-slate-600">(Ponsel)</span></p>
                                </div>
                                <div class="flex flex-col my-3">
                                    <p>
                                        <i class="mr-2 fa-solid fa-envelope fa-lg"></i>
                                        Email
                                    </p>
                                    <a href="#" class="text-sm text-indigo-800">aryaadi229@gmail.com</a>
                                </div>
                                <div class="flex flex-col my-3">
                                    <p>
                                        <i class="fa-brands fa-github fa-lg mr-2"></i>
                                        Github
                                    </p>
                                    <a href="#" class="text-sm text-indigo-800">
                                        https://github.com/Ardhiityo
                                    </a>
                                </div>
                                <div class="flex flex-col my-3">
                                    <p>
                                        <i class="mr-2 fa-solid fa-location-dot fa-lg"></i>
                                        Alamat
                                    </p>
                                    <a href="#" class="text-sm text-indigo-800">
                                        Link. Jombang Wetan RT/RW 001/005
                                        Kelurahan Jombang Wetan, Kecamatan Jombang
                                    </a>
                                </div>
                            </div>
                        @else
                            <div>
                                <h1 class="my-4 text-lg">Informasi Kontak</h1>
                                <div class="flex flex-col my-3">
                                    <p>
                                        <i class="inline mr-2 fa-brands fa-linkedin fa-lg"></i>
                                        Linkedin
                                    </p>
                                    <a href="{{ $contact->linkedin }}" target="_blank" class="text-sm text-indigo-800">
                                        {{ $contact->linkedin }}
                                    </a>
                                </div>
                                <div class="flex flex-col my-3">
                                    <p>
                                        <i class="mr-2 fa-solid fa-phone fa-lg"></i>
                                        Telepon
                                    </p>
                                    <p class="text-sm">{{ $contact->phone }} <span class="text-slate-600">(Ponsel)</span>
                                    </p>
                                </div>
                                <div class="flex flex-col my-3">
                                    <p>
                                        <i class="mr-2 fa-solid fa-envelope fa-lg"></i>
                                        Email
                                    </p>
                                    <a href="mailto:{{ $contact->user->email }}" target="_blank"
                                        class="text-sm text-indigo-800">{{ $contact->user->email }}</a>
                                </div>
                                <div class="flex flex-col my-3">
                                    <p>
                                        <i class="fa-brands fa-github fa-lg mr-2"></i>
                                        Github
                                    </p>
                                    <a href="{{ $contact->github }}" target="_blank" class="text-sm text-indigo-800">
                                        {{ $contact->github }}
                                    </a>
                                </div>
                                <div class="flex flex-col my-3">
                                    <p>
                                        <i class="mr-2 fa-solid fa-location-dot fa-lg"></i>
                                        Alamat
                                    </p>
                                    <a href="http://maps.apple.com/?address={{ $contact->address }}"
                                        class="text-sm text-indigo-800">{{ $contact->address }}
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <form method="dialog" class="modal-backdrop">
                        <button>close</button>
                    </form>
                </dialog>
                {{-- Modal contact --}}
            </section>
            <section class="invisible mt-12 sm:visible">
                <div class="flex items-center gap-1">
                    <img src="{{ asset('storage/' . $latestEducation->place->logo) }}"
                        alt="{{ $latestEducation->place->name }}" class="w-7 h-7">
                    <p class="text-xs font-semibold">{{ $latestEducation->place->name }}</p>
                </div>
            </section>
        </div>
    </section>
    {{-- Profile --}}

    {{-- About me --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg shadow border-slate-300">
        <div class="p-6 min-h-24 ">
            {{-- Collapse --}}
            <div x-data="{ expanded: false }" class="text-sm">
                <template x-if="!expanded">
                    <div>{!! Str::words($about->description, 50, '...') !!}</div>
                </template>
                <template x-if="expanded">
                    <div>{!! $about->description !!}</div>
                </template>
                @if (str_word_count($about->description) > 50)
                    <div class="flex justify-end">
                        <button class="text-slate-600 hover:underline mt-1 text-sm " @click="expanded = !expanded"
                            x-text="expanded ? 'Lihat lebih sedikit' : 'Lihat lebih banyak'">
                        </button>
                    </div>
                @endif
            </div>
            {{-- Collapse --}}
        </div>
    </section>
    {{-- About me --}}

    {{-- Experience --}}
    <section class="relative max-w-screen-md mx-auto bg-white border-2 rounded-lg shadow border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Pengalaman</h1>
            @empty($experiences)
                <div class="flex gap-3 mb-3">
                    <img src="{{ asset('images/unival.jpeg') }}" class="w-10 h-10" alt="">
                    <div>
                        <h1 class="font-semibold text-md">
                            Fullstack Web Coding Mentor</h1>
                        <p class="text-sm">Universitas Al-Khairiyah · Paruh Waktu</p>
                        <p class="text-sm text-slate-600">Feb 2024 - Saat ini · 1 thn 2 bln</p>
                        <p class="text-sm text-slate-600">Jl. Kh.Enggus Arja No.1, Citangkil, Kec. Citangkil, Kota
                            Cilegon,
                            Banten 42441 ·
                            Di lokasi</p>
                        <div class="my-5 text-sm">
                            <p>- Teaching and Mentoring:
                                Teach and mentor course participants in various certified coding classes, covering
                                topics
                                such
                                as HTML, CSS, JavaScript, PHP, and frameworks like Laravel.</p>
                            <div class="flex gap-3 my-3">
                                <img src="{{ asset('images/experience.jpeg') }}" alt=""
                                    class="h-16 border rounded-lg border-slate-400 w-28">
                                <img src="{{ asset('images/experience.jpeg') }}" alt=""
                                    class="h-16 border rounded-lg border-slate-400 w-28">
                            </div>
                        </div>
                    </div>
                </div>
            @else
                @foreach ($experiences as $experience)
                    <div class="flex gap-3 py-3 @if (!$loop->last) border-b border-b-slate-300 @endif">
                        <img src="{{ asset('storage/' . $experience->place->logo) }}" class="w-10 h-10" alt="">
                        <div class="flex flex-col">
                            <h1 class="font-semibold text-md">{{ $experience->job_title }}</h1>
                            <p class="text-sm">{{ $experience->place->name }} · {{ $experience->jobType->name }}</p>
                            <p class="text-sm text-slate-600">
                                {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }} -
                                Saat ini · 1
                                thn 2 bln</p>
                            <p class="text-sm text-slate-600">{{ $experience->place->address }}</p>
                            <div class="mt-3 text-sm">
                                <div class="mb-5 text-sm">

                                    <div x-data="{ expanded: false }">
                                        <template x-if="!expanded">
                                            <div>{!! Str::words($experience->description, 20, '...') !!}</div>
                                        </template>
                                        <template x-if="expanded">
                                            <div>{!! $experience->description !!}</div>
                                        </template>

                                        @if (str_word_count($experience->description) > 20)
                                            <div class="flex justify-end">
                                                <button class="text-slate-600 hover:underline mt-1 text-sm "
                                                    @click="expanded = !expanded"
                                                    x-text="expanded ? 'Lihat lebih sedikit' : 'Lihat lebih banyak'">
                                                </button>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="flex gap-3 mb-3">
                                    @foreach ($experience->image as $image)
                                        <a href="{{ asset('storage/' . $image) }}" data-lightbox="experience">
                                            <img src="{{ asset('storage/' . $image) }}" alt="{{ $experience->job_title }}"
                                                class="h-16 border rounded-lg border-slate-400 w-28">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endempty
        </div>
        @if ($totalExperiences > 3)
            <div class="py-3 font-semibold border-t border-t-slate-300">
                <h3 class="text-center text-slate-700">
                    <a href="{{ route('experience') }}">
                        Tampilkan semua {{ $totalExperiences }} pengalaman
                        <i class="fa-solid fa-arrow-right fa-sm"></i>
                    </a>
                </h3>
            </div>
        @endif
    </section>
    {{-- Experience --}}

    {{-- Education --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg shadow border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Pendidikan</h1>
            @empty($educations)
                <div class="mb-3">
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
                <div class="flex gap-3 mb-3">
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
            @else
                @foreach ($educations as $education)
                    <div class="flex gap-3 py-3 @if (!$loop->last) border-b border-b-slate-300 @endif">
                        <img src="{{ asset('storage/' . $education->place->logo) }}" class="w-10 h-10" alt="">
                        <div>
                            <h1 class="font-semibold text-md">{{ $education->place->name }}</h1>
                            <p class="text-sm">{{ $education->degree }}</p>
                            <p class="text-sm text-slate-600">
                                {{ Carbon\Carbon::parse($education->start_date)->format('M Y') }} -
                                {{ Carbon\Carbon::parse($education->end_date)->format('M Y') }}
                            </p>
                            <p class="text-sm">{{ $education->gpa }}</p>
                            <div class="mt-3 text-sm">
                                <div class="mb-5">
                                    <div x-data="{ expanded: false }">
                                        <template x-if="!expanded">
                                            <div>{!! Str::words($education->description, 20, '...') !!}</div>
                                        </template>
                                        <template x-if="expanded">
                                            <div>{!! $education->description !!}</div>
                                        </template>

                                        @if (str_word_count($education->description) > 20)
                                            <div class="flex justify-end">
                                                <button class="text-slate-600 hover:underline mt-1 text-sm "
                                                    @click="expanded = !expanded"
                                                    x-text="expanded ? 'Lihat lebih sedikit' : 'Lihat lebih banyak'">
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex gap-3 my-3">
                                    @foreach ($education->image as $image)
                                        <a href="{{ asset('storage/' . $image) }}" data-lightbox="education">
                                            <img src="{{ asset('storage/' . $image) }}" alt="education_image"
                                                class="h-16 border rounded-lg border-slate-400 w-28">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endempty
        </div>
        @if ($totalEducations >= 3)
            <div class="py-3 font-semibold border-t border-t-slate-300">
                <h3 class="text-center text-slate-700">
                    <a href="{{ route('education') }}">
                        Tampilkan semua {{ $totalEducations }} pendidikan
                        <i class="fa-solid fa-arrow-right fa-sm"></i>
                    </a>
                </h3>
            </div>
        @endif
    </section>
    {{-- Education --}}

    {{-- Certification --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg shadow border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Lisensi dan sertifikasi</h1>
            @empty($certifications)
                <div class="flex gap-3 mb-3">
                    <img src="{{ asset('images/codepolitan.jpeg') }}" class="w-10 h-10" alt="">
                    <div>
                        <h1 class="font-semibold text-md">Sertifikat Kelas Membuat Website Crowd Funding dengan Tailwind
                            -
                            Slicing</h1>
                        <p class="text-sm">CODEPOLITAN</p>
                        <p class="text-sm text-slate-600">Diterbitkan Mar 2025 Kedaluwarsa Mar 2028</p>
                        <p class="text-sm text-slate-600">ID Kredensial SWB0NHM</p>
                        <div class="my-3 text-sm">
                            <a class="w-64 h-20 px-3 py-1 border rounded-full border-slate-700">
                                Tampilkan Kredensial
                                <i class="fa-solid fa-up-right-from-square fa-sm"></i>
                            </a>
                            <div class="flex items-center gap-3 my-5">
                                <img src="{{ asset('images/certificate.jpeg') }}" alt=""
                                    class="h-16 border rounded-lg border-slate-400 w-28">
                                <h1 class="font-semibold">Slicing Website Crowd Funding dengan Tailwind</h1>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                @foreach ($certifications as $certification)
                    <div class="flex gap-3 py-3 @if (!$loop->last) border-b border-b-slate-300 @endif">
                        <img src="{{ asset('storage/' . $certification->place->logo) }}" class="w-10 h-10" alt="">
                        <div>
                            <h1 class="font-semibold text-md">
                                {{ $certification->title }}
                            </h1>
                            <p class="text-sm">{{ $certification->place->name }}</p>
                            <p class="text-sm text-slate-600">Diterbitkan
                                {{ Carbon\Carbon::parse($certification->published_date)->format('M Y') }} Kedaluwarsa
                                {{ Carbon\Carbon::parse($certification->expired_date)->format('M Y') }}
                            </p>
                            <p class="text-sm text-slate-600">
                                @php
                                    $data = explode('/', $certification->credential);
                                    $credential = $data[count($data) - 1];
                                @endphp
                                ID Kredensial {{ $credential }}
                            </p>
                            <div class="my-3 text-sm">
                                <a class="w-64 h-20 px-3 py-1 border rounded-full border-slate-700"
                                    href="{{ $certification->credential }}">
                                    Tampilkan Kredensial
                                    <i class="fa-solid fa-up-right-from-square fa-sm"></i>
                                </a>
                                <div class="flex items-center gap-3 mt-5">
                                    <a href="{{ asset('storage/' . $certification->image) }}" data-lightbox="certification">
                                        <img src="{{ asset('storage/' . $certification->image) }}" alt="certification"
                                            class="h-16 border rounded-lg border-slate-400 w-28">
                                    </a>
                                    <h1 class="font-semibold">
                                        {{ $certification->description }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endempty
        </div>
        @if ($totalCertifications >= 3)
            <div class="py-3 font-semibold border-t border-t-slate-300">
                <h3 class="text-center text-slate-700">
                    <a href="{{ route('certification') }}">
                        Tampilkan semua {{ $totalCertifications }} lisensi dan sertifikasi
                        <i class="fa-solid fa-arrow-right fa-sm"></i>
                    </a>
                </h3>
            </div>
        @endif
    </section>
    {{-- Certification --}}

    {{-- Project --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg shadow border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Proyek</h1>
            @empty($projects)
                <div class="mb-3">
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
            @else
                @foreach ($projects as $project)
                    <div class="py-3 @if (!$loop->last) border-b border-b-slate-300 @endif">
                        <h1 class="font-semibold text-md">
                            {{ $project->title }}
                        </h1>
                        <p class="text-sm">Jul 2024 - Jul 2024</p>
                        <div class="my-3 text-sm">
                            <p>
                            <div x-data="{ expanded: false }">
                                <template x-if="!expanded">
                                    <div>{!! Str::words($project->description, 20, '...') !!}</div>
                                </template>
                                <template x-if="expanded">
                                    <div>{!! $project->description !!}</div>
                                </template>

                                @if (str_word_count($project->description) > 20)
                                    <div class="flex justify-end">
                                        <button class="text-slate-600 hover:underline mt-1 text-sm "
                                            @click="expanded = !expanded"
                                            x-text="expanded ? 'Lihat lebih sedikit' : 'Lihat lebih banyak'">
                                        </button>
                                    </div>
                                @endif
                            </div>
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
                @endforeach
            @endempty
        </div>
        @if ($totalProjects >= 3)
            <div class="py-3 font-semibold border-t border-t-slate-300">
                <h3 class="text-center text-slate-700">
                    <a href="{{ route('project') }}">
                        Tampilkan semua {{ $totalProjects }} proyek
                        <i class="fa-solid fa-arrow-right fa-sm"></i>
                    </a>
                </h3>
            </div>
        @endif
    </section>
    {{-- Project --}}

    {{-- Skill --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg border-slate-300">
        <div class="p-6 pb-0 min-h-28 ">
            <h1 class="text-lg mb-4 font-semibold">Keahlian</h1>
            @empty($skills)
                <div class="mb-3">
                    <h1 class="font-semibold text-md">
                        Laravel
                    </h1>
                    <div class="my-3">
                        <div class="flex items-center gap-2 my-5 text-sm">
                            <h1 class="font-semibold">Framework</h1>
                        </div>
                    </div>
                </div>
            @else
                @foreach ($skills as $skill)
                    <div class="py-3 @if (!$loop->last) border-b border-b-slate-300 @endif">
                        <h1 class="font-semibold">
                            {{ $skill->name }} - {{ $skill->category->name }}
                        </h1>
                    </div>
                @endforeach
            @endempty
        </div>
        @if ($totalSkills >= 3)
            <div class="py-3 font-semibold border-t border-t-slate-300">
                <h3 class="text-center text-slate-700">
                    <a href="{{ route('skill') }}">
                        Tampilkan semua {{ $totalSkills }} keahlian
                        <i class="fa-solid fa-arrow-right fa-sm"></i>
                    </a>
                </h3>
            </div>
        @endif
    </section>
    {{-- Skill --}}

    {{-- Course --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg shadow border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Kursus</h1>
            @empty($courses)
                <div class="mb-3">
                    <h1 class="font-semibold text-md">
                        Codepolitan
                    </h1>
                    <h3 class="text-sm">
                        01 Mar 2025 - 01 Mar 2025
                    </h3>
                    <div class="my-3 text-sm">
                        <p>Kursus mahir fullstack web developer from a to z</p>
                    </div>
                </div>
            @else
                @foreach ($courses as $course)
                    <div class="py-3 @if (!$loop->last) border-b border-b-slate-300 @endif">
                        <h1 class="font-semibold text-md">
                            {{ $course->place->name }}
                        </h1>
                        <h3 class="text-sm">{{ Carbon\Carbon::parse($course->start_date)->format('d M Y') }} -
                            {{ Carbon\Carbon::parse($course->end_date)->format('d M Y') }}</h3>
                        <div class="my-3 text-sm">
                            <p>
                            <div x-data="{ expanded: false }">
                                <template x-if="!expanded">
                                    <div>{!! Str::words($course->description, 20, '...') !!}</div>
                                </template>
                                <template x-if="expanded">
                                    <div>{!! $course->description !!}</div>
                                </template>

                                @if (str_word_count($course->description) > 20)
                                    <div class="flex justify-end">
                                        <button class="text-slate-600 hover:underline mt-1 text-sm "
                                            @click="expanded = !expanded"
                                            x-text="expanded ? 'Lihat lebih sedikit' : 'Lihat lebih banyak'">
                                        </button>
                                    </div>
                                @endif
                            </div>
                            </p>
                        </div>
                    </div>
                @endforeach
            @endempty
        </div>
        @if ($totalCourses >= 3)
            <div class="py-3 font-semibold border-t border-t-slate-300">
                <h3 class="text-center text-slate-700">
                    <a href="{{ route('course') }}">
                        Tampilkan semua {{ $totalCourses }} kursus
                        <i class="fa-solid fa-arrow-right fa-sm"></i>
                    </a>
                </h3>
            </div>
        @endif
    </section>
    {{-- Course --}}

    {{-- Organization --}}
    <section class="relative max-w-screen-md mx-auto my-2 bg-white border-2 rounded-lg shadow border-slate-300">
        <div class="p-6 pb-0 min-h-40 ">
            <h1 class="mb-4 text-lg font-semibold">Organisasi</h1>
            @empty($organizations)
                <div class="mb-3">
                    <h1 class="font-semibold text-md">
                        Kelompok studi Pasar Modal
                    </h1>
                    <h3 class="text-sm">Anggota · Mar 2024 - Sekarang </h3>
                    <div class="my-3 text-sm">
                        <p>Sharing knowledge kepada mahasiswa betapa pentingnya investasi sedari dini, dan mejadi panitia
                            dalam
                            rangkaian acara-acara seminar investasi di dunia pasar modal.</p>
                    </div>
                </div>
            @else
                @foreach ($organizations as $organization)
                    <div class="py-3 @if (!$loop->last) border-b border-b-slate-300 @endif">
                        <h1 class="font-semibold text-md">
                            {{ $organization->name }}
                        </h1>
                        <h3 class="text-sm">{{ $organization->job_title }} ·
                            {{ Carbon\Carbon::parse($organization->start_date)->format('M Y') }} -
                            Sekarang </h3>
                        <div class="my-3 text-sm">
                            <p>
                            <div x-data="{ expanded: false }">
                                <template x-if="!expanded">
                                    <div>{!! Str::words($organization->description, 20, '...') !!}</div>
                                </template>
                                <template x-if="expanded">
                                    <div>{!! $organization->description !!}</div>
                                </template>
                                @if (str_word_count($organization->description) > 20)
                                    <div class="flex justify-end">
                                        <button class="text-slate-600 hover:underline mt-1 text-sm "
                                            @click="expanded = !expanded"
                                            x-text="expanded ? 'Lihat lebih sedikit' : 'Lihat lebih banyak'">
                                        </button>
                                    </div>
                                @endif
                            </div>
                            </p>
                        </div>
                    </div>
                @endforeach
            @endempty
        </div>
        @if ($totalOrganizations >= 3)
            <div class="py-3 font-semibold border-t rounded-b-lg border-t-slate-300">
                <h3 class="text-center text-slate-700">
                    <a href="{{ route('organization') }}">
                        Tampilkan semua {{ $totalOrganizations }} organisasi
                        <i class="fa-solid fa-arrow-right fa-sm"></i>
                    </a>
                </h3>
            </div>
        @endif
    </section>
    {{-- Organization --}}
@endsection

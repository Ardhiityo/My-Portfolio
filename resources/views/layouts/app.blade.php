@include('partials.head')

@include('partials.navbar')

<main class="py-5 min-h-screen">
    @yield('content')
    <section class="max-w-screen-md mx-auto my-2">
        <div class="px-6 flex items-center justify-evenly gap-3">
            <nav>
                <div class="flex items-center gap-2">
                    <p class="text-xs">Other social media</p>
                    <a href="https://www.instagram.com/ardhiityo/">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </nav>
            <nav class="flex items-center gap-2">
                <p class="text-xs">Design inspiration from
                </p>
                <a href="https://www.linkedin.com">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </nav>
        </div>
    </section>
</main>

@include('partials.footer')

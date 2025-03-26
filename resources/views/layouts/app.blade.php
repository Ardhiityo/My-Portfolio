@include('partials.head')

@include('partials.navbar')

<main class="py-5 min-h-screen">
    @yield('content')
</main>
<script src="https://kit.fontawesome.com/364218679d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="{{ asset('lightbox/dist/js/lightbox-plus-jquery.min.js') }}"></script>
@include('partials.footer')

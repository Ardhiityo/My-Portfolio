@include('partials.head')

@include('partials.navbar')

<main class="my-5">
    @yield('content')
</main>

<script src="https://kit.fontawesome.com/364218679d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

@include('partials.footer')

<header class="bg-white h-[52px] px-6 sticky top-0 z-1 shadow">
    <nav class="h-full max-w-screen-md mx-auto">
        <ul class="flex items-center justify-between h-full px-1">
            <li class="flex items-center h-full gap-2">
                <div>
                    <a href="{{ route('home') }}">
                        <i class="fa-brands fa-linkedin fa-2xl text-[#0A66C2]"></i>
                    </a>
                </div>
                <form action="{{ route('project', ['search']) }}" method="GET">
                    <div class="flex">
                        <input type="text" name="title"
                            class="bg-[#F2F2F2] border-0 w-52 py-1 px-2 rounded-s-md text-sm peer outline-0 focus:border focus:border-slate-800 focus:border-e-0"
                            placeholder="Cari project...">
                        <button type="submit"
                            class="bg-[#F2F2F2] peer-focus:border peer-focus:border-s-0 peer-focus:border-slate-600 py-1 px-3 rounded-e-md">
                            <i class="fa-solid fa-magnifying-glass fa-sm"></i>
                        </button>
                    </div>
                </form>
            </li>
            <li>
                <a class="btn btn-sm" href="{{ route('cv') }}">
                    <i class="fa-solid fa-download "></i>
                    CV
                </a>
            </li>
        </ul>
    </nav>
</header>

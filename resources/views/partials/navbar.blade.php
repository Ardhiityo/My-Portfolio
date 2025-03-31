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
                            class="bg-[#F2F2F2] border-0 sm:w-52 w-28 py-1 px-2 rounded-s-md text-sm peer outline-0 focus:border focus:border-slate-800 focus:border-e-0"
                            placeholder="Cari project...">
                        <button type="submit"
                            class="bg-[#F2F2F2] peer-focus:border peer-focus:border-s-0 peer-focus:border-slate-600 py-1 px-3 rounded-e-md">
                            <i class="fa-solid fa-magnifying-glass fa-sm"></i>
                        </button>
                    </div>
                </form>
            </li>
            <li>
                <div class="flex items-center gap-4">
                    <a class="btn bg-[#F2F2F2] btn-sm rounded-full hover:bg-slate-200 border-2 boder-slate-600"
                        href="{{ route('cv') }}">
                        <i class="fa-solid fa-download"></i>
                        CV
                    </a>
                    <label class="toggle text-base-content">
                        <input type="checkbox" value="synthwave" class="theme-controller" />

                        <svg aria-label="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none"
                                stroke="currentColor">
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M12 2v2"></path>
                                <path d="M12 20v2"></path>
                                <path d="m4.93 4.93 1.41 1.41"></path>
                                <path d="m17.66 17.66 1.41 1.41"></path>
                                <path d="M2 12h2"></path>
                                <path d="M20 12h2"></path>
                                <path d="m6.34 17.66-1.41 1.41"></path>
                                <path d="m19.07 4.93-1.41 1.41"></path>
                            </g>
                        </svg>

                        <svg aria-label="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none"
                                stroke="currentColor">
                                <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                            </g>
                        </svg>

                    </label>
                </div>
            </li>
        </ul>
    </nav>
</header>

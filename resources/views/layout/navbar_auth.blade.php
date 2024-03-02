<nav class="px-10 flex justify-between py-5 bg-blue-900 shadow-md fixed top-0 left-0 right-0 z-30">
    <div class="logo-area self-center">
        <h1 class="font-bold text-2xl text-white">E-News</h1>
    </div>
    <div class="navlist flex flex-col lg:flex-row gap-0 lg:gap-10 self-auto lg:self-center  font-semibold text-xl list-none ml-0 lg:ml-16 absolute lg:static bg-blue-900 mt-12 lg:mt-0 justify-evenly lg:justify-normal h-dvh lg:h-auto w-full lg:w-auto text-center lg:text-left translate-x-full lg:translate-x-0">
        <li class="text-white hover:text-blue-300"><a href="/home#hero">Home</a></li>
        <li class="text-white hover:text-blue-300"><a href="/home#about">About</a></li>
        <li class="text-white hover:text-blue-300"><a href="/articles">Articles</a></li>
        @if (auth()->user()->is_admin == 0 )
            <li class="text-white hover:text-blue-300"><a href="/myarticles">Dashboard</a></li>
        @endif
        @if (auth()->user()->is_admin == 1 )
            <li class="text-white hover:text-blue-300"><a href="/admin">Admin</a></li>
        @endif
        <li class="text-white hover:text-blue-300 block lg:hidden"><a href="/logout">Logout</a></li>
    </div>
    <div class="auth-area lg:flex gap-3 hidden ">
        <button class="px-9 py-2 font-semibold text-black text-lg bg-white hover:bg-slate-300 rounded-md" onclick="location.href='/logout'">Logout</button>
    </div>

    <div class="icon-area menu static lg:hidden">
        <img src="/icons/menu-bg-dark.svg" class="w-7" alt="">
    </div>
</nav>
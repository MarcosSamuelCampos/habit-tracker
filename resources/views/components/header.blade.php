<header class="bg-white border-bottom border-b-2 flex items-center justify-between p-4">
    <div>
        logo
    </div>

    <div>
        github

        @auth
           <form action="{{ route('auth.logout')}}" method="post" class="inline">
            @csrf
            <button type="submit" class="bg-white p-2 border-2">
                  Sair
            </button>     
           </form>
        @endauth

        @guest
            <a href="{{route('site.login')}}" class="bg-white p-2 border-2">
                Login
            </a>
        @endguest
    </div>
</header>
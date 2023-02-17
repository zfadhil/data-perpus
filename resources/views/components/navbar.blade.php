<header class="p-3 bg-dark">
    {{-- <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                </ul>
                <div class="text-end">
                    @guest
                    <a href="{{route('login')}}" class="btn btn-outline-light me-2">Login</a>
    <a href="{{route('register')}}" class="btn btn-warning">Sign-up</a>
    @else
    <a href="{{route('logout')}}" class="btn btn-outline-light m-2" onclick="event.preventDefault();  
                    document.getElementById('logout-form'). submit();">
        {{Auth::user()->name}}</a>
    <form action="{{route('logout')}}" id="logout-form" method="POST">
        @csrf
    </form>
    @endguest
    </div>
    </div>
    </div> --}}

    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn normal-case text-xl text-white">Perpustakaan Nasional</a>
        </div>
        <div class="flex-none gap-2">
            @guest
            <a href="{{route('login')}}" class="btn btn-outline me-2">Login</a>
            <a href="{{route('register')}}" class="btn btn-primary">Sign-up</a>
            @else
            {{-- <form action="/" method="get">
                <input type="search" placeholder="Search" name="search" class="input input-bordered w-full max-w-xs" />
            </form> --}}
            <a href="{{route('logout')}}" class="btn btn-outline-light m-2" onclick="event.preventDefault();  
                document.getElementById('logout-form'). submit();">
                {{Auth::user()->name}}</a>
            <form action="{{route('logout')}}" id="logout-form" method="POST">
                @csrf
            </form>
            @endguest
        </div>
    </div>

</header>

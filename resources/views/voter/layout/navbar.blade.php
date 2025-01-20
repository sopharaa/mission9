
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/image/voter/7201157.png') }}" alt="logo" class="rounded-circle" width="60px" height="60px">
            <span class="text-dark fw-bold">American Election</span>
        </a>
        <button class="navbar-toggler" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-light">

                <li class="nav-item">
                    <a href="{{route('front.index')}}" class="nav-link text-dark">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('front.cadidate')}}">Candidate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('front.vote')}}">Voting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('front.result')}}">Election Results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('front.faq')}}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('front.aboutus')}}">About Us</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}" id="logout">Logout</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}" id="logout">Login</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>


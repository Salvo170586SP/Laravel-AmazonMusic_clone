<header>
    <figure>
        <img class="img-fluid" src="{{asset('images/logo.png')}}" alt="logo">
    </figure>
    <nav>
        <ul>
            <li><a class="btn text-light" href="{{ url('/') }}">Home</a></li>
            <li><a class="btn text-light" href="{{ route('discs.index') }}">Dischi</a></li>
        </ul>
    </nav>
</header>
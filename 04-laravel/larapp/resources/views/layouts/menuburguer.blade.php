<div class="menu">
    <a href="javascript:;" class="closem">
        <img src="{{ asset('image/closem.svg') }}" alt="">
    </a>
    <nav>
        <img src="{{ asset('image') . '/' . Auth::user()->photo }}" alt="Photo">
        <h4>{{ Auth::user()->fullname }}</h4>
        <h5>{{ Auth::user()->role }}</h5>
        <form action="{{ route('logout') }}" method="post">
            <button class="closes">Log Out</button>
            @csrf
        </form>
    </nav>
</div>
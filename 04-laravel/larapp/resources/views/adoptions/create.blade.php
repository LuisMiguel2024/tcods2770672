@extends('layouts.app')
@section('title', 'Adoption Page - PetsApp')

@section('content')
<header class="nav level-2">
    <a href="{{ route ('dashboard')}}">
        <img src="{{ asset ('image/ico-back.svg') }}" alt="Back">
    </a>
    <img src="{{ asset ('image/Vector.svg') }}" alt="Logo">
    <a href="" class="mburger">
        <img src="{{ asset ('image/mburger.svg') }}" alt="Menu Burger">
    </a>
</header>
<section class="module">
    <h1>Adoptions</h1>
    <div class="pets">
        @forelse ($pets as $pet)
        <article>
            <header>
                <img src="{{ asset('image/' . $pet->photo) }}" alt="Pet">
                <p>
                    <span>{{ $pet->name }}</span>
                    <p>{{ $pet->kind }}</p>
                </p>
            </header>
            <footer>
                <a href="{{ url('myadoptions/add/' . $pet->id) }}">View</a>
            </footer>
        </article>
        @empty
            
        @endforelse
    </div>
</section>
@endsection
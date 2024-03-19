@extends('layouts.app')
@section('tittle', 'Show User Page - PetsApp')

@section('content')
<header class="nav level-2">
    <a href="{{ route('dashboard')}}">
        <img src="{{ asset ('image/ico-back.svg') }}" alt="Back">
    </a>
    <img src="{{ asset ('image/Vector.svg') }}" alt="Logo">
    <a href="" class="mburger">
        <img src="{{ asset ('image/mburger.svg') }}" alt="Menu Burger">
    </a>
</header>
    <section class="show">
        <h1>My User</h1>
        <img src="{{ asset ('image/'.$user->photo) }}" class="photo" alt="Photo">
        <p class="role">{{ $user->role }}</p>
        <div class="info">
            <p>{{ $user->document }}</p>
            <p>{{ $user->fullname }}</p>
            <p>{{ $user->email }}</p>   
            <p>{{ $user->phone }}</p>
            <p>{{ $user->gender }}</p>
            <p>{{ Carbon\Carbon::parse($user->birth)->diffForHumans()}}</p>
        </div>
    </section>


@endsection
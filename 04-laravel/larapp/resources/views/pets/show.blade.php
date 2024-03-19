@extends('layouts.app')
@section('tittle', 'Show User Page - PetsApp')

@section('content')
<header class="nav level-2">
    <a href="{{ url ('pets')}}">
        <img src="{{ asset ('image/ico-back.svg') }}" alt="Back">
    </a>
    <img src="{{ asset ('image/Vector.svg') }}" alt="Logo">
    <a href="" class="mburger">
        <img src="{{ asset ('image/mburger.svg') }}" alt="Menu Burger">
    </a>
</header>
    <section class="show">
        <h1>Show User</h1>
        <img src="{{ asset ('image/'.$petpet->photo) }}" class="photo" alt="Photo">
        <div class="info">
            <p>{{ $pet->name }}</p>
            <p>{{ $pet->kind }}</p>
            <p>{{ $pet->weight }} Kls</p>   
            <p>{{ $pet->age }} Years</p>
            <p>{{ $pet->location }}</p>
        </div>
    </section>

@endsection
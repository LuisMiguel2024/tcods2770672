@extends('layouts.app')

@section('tittle', 'Welcome Page - PetsApp')

@section('content')
<header>
    <img src="{{ asset ('image/Vector.svg')}}" alt="logo">
</header>
<section class="homepage">
<img src="{{ asset ('image/logoinicion.png')}}" alt="imagen inicio">
<a href="{{ url ('login/')}}">Enter</a>
</section>
    
@endsection
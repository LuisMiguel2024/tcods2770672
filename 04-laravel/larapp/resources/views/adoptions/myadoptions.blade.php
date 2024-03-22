@extends('layouts.app')
@section('tittle', 'Pets Page - PetsApp')

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
        <h1>Module Adoptions</h1>
        <table>
            <tbody class='adoptions'>
            @forelse ($adops as $adp)
                <tr>
                    <td>
                        <img src="{{ asset('image/'.$adp->user->photo) }}" alt="User">
                        <img src="{{ asset('image/'.$adp->pet->photo) }}" alt="User">
                    </td>
                    <td>
                        <span>{{ $adp->user->fullname }}</span>
                        <span>{{ $adp->pet->name }}</span>
                        <span>{{ $adp->created_at->diffforhumans() }}</span>
                    </td>
                </tr>
                @empty
                <p class='no-adoptions'>
                    There are no adoptions yet... <br>
                    😄 Please adopt a pet 🐕
                </p>
                @endforelse
            </tbody>
        </table>
    </section>
    @endsection

    @section('js')
        @if (session('message'))
            <script>
            $(document).ready(function () {
                Swal.fire({
                    position: "top-end",
                    title: "Great job!",
                    text: "{{ session('message') }}",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 5000
                })
            })
            </script>
        @endif
    @endsection
            
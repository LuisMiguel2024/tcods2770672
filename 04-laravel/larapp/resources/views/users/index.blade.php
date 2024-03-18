@extends('layouts.app')
@section('tittle', 'Users Page - PetsApp')

@section('content')
<div class="menu">
    <a href="javascript:;" class="closem">
        <img src="{{ asset('image/uiw_close.svg') }}" alt="">
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
<main>
    <header class="nav level-2">
        <a href="{{ route ('dashboard')}}}">
            <img src="{{ asset ('image/ico-back.svg') }}" alt="Back">
        </a>
        <img src="{{ asset ('image/Vector.svg') }}" alt="Logo">
        <a href="" class="mburger">
            <img src="{{ asset ('image/mburger.svg') }}" alt="Menu Burger">
        </a>
    </header>
    <section class="module">
        <h1>Module Users</h1>
        <a class="add" href="{{ url ('users/create')}}">
            <img src="{{ asset ('image/ico-add.svg') }}" width="30px" alt="Add">
            Add User
        </a>
        <table>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        <img src="{{ asset ('image/'.$user->photo) }}" alt="Pet">
                    </td>
                    <td>
                        <span>{{ $user->fullname }}</span>
                        <p>{{ $user->role}}</p>
                    </td>
                    <td>
                        <a href="{{ url ('users/'.$user->id)}}" class="show">
                            <img src="{{ asset ('image/ico-search.svg') }}" alt="Show">
                        </a>
                        <a href="{{ url('users/' . $user->id . '/edit') }}" class="edit">
                            <img src="{{ asset ('image/ico-edit.svg') }}" alt="Edit">
                        </a>
                        <a href="javascript:;" class="delete" data-id="{{ $user->id}}">
                            <img src="{{ asset ('image/ico-trash.svg') }}" alt="Delete">
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">{{ $users->links('layouts.paginator') }}</td>
                </tr>
            </tfoot>
        </table>
    </section>
</main>
@endsection
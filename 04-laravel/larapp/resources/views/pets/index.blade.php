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
        <h1>Module Pets</h1>
        <a class="add" href="{{ url ('pets/create')}}">
            <img src="{{ asset ('image/ico-add.svg') }}" width="30px" alt="Add">
            Add Pet
        </a>
        <table>
            <tbody>
            @foreach ($pets as $pet)
                <tr>
                    <td>
                        <img src="{{ asset ('image/'.$pet->photo) }}" alt="Pet">
                    </td>
                    <td>
                        <span>{{ $pet->fullname }}</span>
                        <p>{{ $pet->role}}</p>
                    </td>
                    <td>
                        <a href="{{ url ('pets/' .$pet->id)}}" class="show">
                            <img src="{{ asset ('image/ico-search.svg') }}" alt="Show">
                        </a>
                        <a href="{{ url('pets/' . $pet->id . '/edit') }}" class="edit">
                            <img src="{{ asset ('image/ico-edit.svg') }}" alt="Edit">
                        </a>
                        <form action="{{ url('pets/' .$pet->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn-delete">
                        <img src="{{ asset ('image/ico-trash.svg') }}" alt="Delete">
                    </button>
                    </form>
                    </td>
                    </tr>
                    @endforeach
            </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                {{ $pets->links('layouts.paginator') }}
                        </td>
                        </tr>
                    </tfoot>
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

    <script>
        $(document).ready(function () {
            $('body').on('click', '.btn-delete', function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1f7a8c",
                    cancelButtonColor: "#1f7a8c",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).parent().submit()
                        }
                    })
                })
            })
    </script>
@endsection
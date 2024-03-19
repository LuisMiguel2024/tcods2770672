@extends('layouts.app')
@section('tittle', 'Edit Users Page - PetsApp')

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
    <section class="register create">
        <h1>Edit Pet</h1>
        <form action="{{ url('pets/'.$pet->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" name="photoactual" value="{{ $pet->photo }}">
            <img src="{{ asset('image/'.$pet->photo) }}" id="upload" width="240px" alt="Upload">
            <input type="text" name="name" placeholder="Name" value="{{ old('name', $pet->name) }}">
            <input type="text" name="kind" placeholder="Kind" value="{{ old('kind', $pet->kind) }}">
            <input type="number" name="weight" placeholder="Weight" value="{{ old('weight', $pet->weight) }}">
            <input type="number" name="age" placeholder="Age" value="{{ old('age', $pet->age) }}">
            <input type="text" name="breed" placeholder="Breed" value="{{ old('breed', $pet->breed) }}">
            <input type="text" name="location" placeholder="Location" value="{{ old('location', $pet->location) }}">
            <button type="submit">Edit</button>
        </form>
    </section>
    @endsection
    
    @section('js')
<script>
    $(document).ready(function () {
        $('#upload').click(function (e) { 
            e.preventDefault()
            $('#photo').click()
        })

        $('#photo').change(function (e) { 
            e.preventDefault();
            let reader = new FileReader()
            reader.onload = function(event) {
                $('#upload').attr('src', event.target.result)
            }
            reader.readAsDataURL(this.files[0])
        })
    })
</script>
@if (count($errors->all()) > 0)
    @php $error = '' @endphp
    @foreach ($errors->all() as $message )
        @php $error .= '<li>' . $message . '</li>' @endphp
    @endforeach
    <script>
    $(document).ready(function () {
        Swal.fire({
            position: "top-end",
            title: "Ops!",
            html: `@php echo $error @endphp`,
            icon: "error",
            showConfirmButton: false,
            timer: 5000
        })
    })
    </script>
@endif
@endsection
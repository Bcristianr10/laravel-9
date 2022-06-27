@extends('layouts.plantilla')

@section('title', 'home')

@section('content')
    <h1>Edit</h1>
    <form action="{{ route('prueba.update', '1') }}" method="POST">

        @csrf
        @method('put')


        <label>
            Name:
            <input type="text" name="name" value="">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <label>
            Description:
            <textarea name="description" rows="5"></textarea>
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <label>
            Name:
            <input type="text" name="category" value="">
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <button type="submit">Enviar datos</button>
    </form>
@endsection

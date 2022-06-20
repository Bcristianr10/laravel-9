@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h1>Create</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label>
            Name:
            <input type="text" name="name">
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
            <input type="text" name="category">
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <button type="submit">Enviar datos</button>
    </form>
@endsection

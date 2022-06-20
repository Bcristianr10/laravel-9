@extends('layouts.plantilla')

@section('title', 'home')

@section('content')
    <h1>Edit</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf
        @method('put')


        <label>
            Name:
            <input type="text" name="name" value="{{ old('name',$curso->name) }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <label>
            Description:
            <textarea name="description" rows="5">{{ old('description',$curso->description) }}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <label>
            Name:
            <input type="text" name="category" value="{{old('category',$curso->category) }}">
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <button type="submit">Enviar datos</button>
    </form>
@endsection

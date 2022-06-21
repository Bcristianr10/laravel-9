@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h1>Create</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
         <label>
            Name:
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        <br>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <label>
            Description:
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>
        <br>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <label>
            Name:
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        <br>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <button type="submit">Enviar datos</button>
    </form>
@endsection

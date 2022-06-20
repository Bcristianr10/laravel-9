@extends('layouts.plantilla')

@section('title', 'home')

@section('content')
    <h1>Edit</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        
        @csrf
        @method('put')


        <label>
            Name:
            <input type="text" name="name" value="{{$curso->name|}}">
        </label>
        <label>
            Description:
            <textarea name="description" rows="5">{{$curso->description}}</textarea>
        </label>
        <label>
            Name:
            <input type="text" name="category" value="{{$curso->category|}}">
        </label>

        <button type="submit">Enviar datos</button>
    </form>
@endsection

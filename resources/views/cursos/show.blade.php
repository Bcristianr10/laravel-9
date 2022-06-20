@extends('layouts.plantilla')

@section('title', 'Show ' . $cursos)

@section('content')
<h1>Course: {{$cursos->name}}</h1>
<a href="{{route('cursos.index')}}">Volver a cursos</a>
<a href="{{route('cursos.edit',$cursos)}}">Editar cursos</a>
<p>Description: {{$cursos->description}}</p>
<p>Category: {{$cursos->category}}</p>
@endsection

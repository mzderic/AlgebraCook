@extends('master');

@section('content')
Recepti:<br>
@foreach($recipes as $recipe)
{{ $recipe->name }}&nbsp
{{ $recipe->id }}<br>


@foreach($ingredients as $ingredient)
{{ $ingredient->name }}&nbsp
{{ $ingredient->id }}<br>
@endforeach

@endsection
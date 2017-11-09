@extends('master')

@section('title', 'Sastojci')

@section('content')
<div class="panel-body">
				<ul class="list-group">
					@foreach ($ingredients as $ingredient)
					<li class="list-group-item">
						<a href="/recipes/ingredient">{{ $ingredient->name }}</a>
					</li>
					@endforeach
				</ul>
</div>


@endsection

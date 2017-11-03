@extends('master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Uređivanje recepta</div>
				
					<div class="panel-body">
					<form action="/recipes/edit" method="POST">
						<input type="hidden" name="id" value="{{ $recipe->id }}">
						<div class="form-group">
							<label for="name">Ime</label>
							<input type="text" id="name" name="name" value="{{ $recipe->name }}" class="form-control">
						</div>
						<div class="form-group">
							<label for="opis">Opis</label>
							<textarea id="opis" name="opis" class="form-control">{{ $recipe->description }}</textarea>
						</div>
						<h3>Popis sastojaka</h3>
						<div id="ing-coll-fields">
						@foreach($recipe->ingredients as$ingredient)
							<div class="form-group">
								<label for="ingredient">Sastojak:<input type="text" name="ingredient[]" value="{{ $ingredient->name }}">
								</label>
								<a href="#" class="remScnt"><i class="fa fa-btn fa-close"></i>Makni sastojak</a>
							</div>
						@endforeach
						</div>
						<a href="#" id="addLink"><i class="fa fa-btn fa-plus"></i>Dodaj novi sastojak</a><br>
						{{ csrf_field() }}
						<input type="submit" value="Uredi recept" class="btn btn-default">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection	

@section('script')
<script>
	$(function() {
		var scntDiv = $('#ing-coll-fields');
		var i = $('#ing-coll-fields').size() + 1;
		
		$('#addLink').click(function() {
			$('<div class="form-group">'+
				'<label for="ingredient">Sastojak: <input name="ingredient[]" type="text"></label>'+
				'<a href="#" class="remScnt">'+
					'<i class="fa fa-btn fa-close"></i>Makni sastojak'+
				'</a></div>').appendTo(scntDiv);
			i++;
			return false;
		});
		
		scntDiv.on('click', '.remScnt', function() {
			if( i > 2 ) {
				$(this).parents('div .form-group').remove();
				i--;
			}
			return false;
		});		
	});
</script>
@endsection




	
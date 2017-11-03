@extends('master')


@section('title', 'Dodaj novi recept')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Dodaj novi recept</div>
				<div class="panel-body">
					<form action="/recipes/add" method="POST">
						<div class="form-group">
							<label for="name">Ime</label>
							<input type="text" id ="name" name="name" placeholder="unesite ime.." class="form-control">
						</div>
						<div class="form-group">
							<label for="opis"></label>
							<textarea id="opis" name="opis" placeholder="unesite opis.." class="form-control"></textarea>
						</div>
						<h3>Popis sastojaka</h3>
						<div id="ing-coll-fields">
							<div class="form-group">
								<label for="ingredient">Sastojak
									<input name="ingredient[]" type="text">
								</label>
							</div>
						</div>
						<a href="#" id="addLink"><i class="fa fa-btn fa-plus"></i>Dodaj sastojak</a><br><br>
						{{ csrf_field() }}
						<input type="submit" value="Stvori novi recept" class="btn btn-default">
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





















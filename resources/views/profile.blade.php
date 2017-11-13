@extends('master');

@section('title', 'Korisnički profil')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Korisnički profil</div>
				<div class="panel-body">
					<section>
						<h3>Promjena lozinke:</h3>
						<form method="post" action="/profile">
						{!! csrf_field() !!}
							<div class="form-group">
								<label for="password">Lozinka:</label>
								<input type="password" name="password" id="password" class="form-control">
								<input type="submit" class="btn btn-default" value="Promijeni lozinku">
							</div>
						</form>
					</section>
				</div>
			</div>
		</div>
	</div>
			
</div>



@endsection
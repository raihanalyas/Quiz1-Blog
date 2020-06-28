@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>

	<style type="text/css">
		h2	{
			margin-bottom: 30px;
			color: darksalmon;
		}
		
		.btn {
			color: white;
		}

		label {
			color: darksalmon;
		}

	</style>
	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
	<h2>Input Data Kategori</h2>
			<form method="post" action="{{url('/category')}}">
			@csrf
				<table>					
					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-5">
							<input type="text" name="cat_name" class=" form-control" id="inputEmail3" style="background-color: salmon">
					</div>
					</div>
					

					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-5">
						<input type="text" name="cat_text" class="form-control" id="inputEmail3"style="background-color: salmon">
					</div>
					</div>
				</table>
				<div class="form-group row">
					<div>
						<div class="col-sm-10">
						<button type="submit" class="btn" style="background-color: gray" >SIMPAN</button></div>
					</div>
			</form>

	</div>
</div>
</body>
</html>


@endsection
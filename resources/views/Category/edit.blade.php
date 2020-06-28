@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h2	{
			margin-bottom: 30px;
			color: darksalmon;
		}
		body {
			background-color:  #F5F5F5;
		}

		.btn, .form-control {
			color: white;
		}

		label {
			color: darksalmon;
		}

	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">

	<h2>Edit Data Kategori</h2>
	<form action="{{ url('/category/' . $row->cat_id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
		<div class="col-sm-5">
			<input type="text" name="cat_name" value="{{ $row->cat_name}}" style="background-color: salmon" class="form-control" id="inputEmail3">
		</div>
		</div>

		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
		<div class="col-sm-5">
			<input type="text" name="cat_text" value="{{ $row->cat_text}}" class="form-control" id="inputEmail3" style="background-color: salmon" >
		</div>
		</div>
	</table>
			<div class="form-group row">
			<div class="col-sm-10">
				<input type="submit" value="UPDATE" class="btn" style="background-color: gray">
			<div>
			</div>
	</form>
</div>
</body>
</html>

@endsection
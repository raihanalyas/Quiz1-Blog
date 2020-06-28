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

</body>
</html>

<div class="container">
	<div class="col-md-10">
	<h2>Edit Data Photo</h2>
	<form action="{{ url('/photo/' . $rows->id)}}" method="post" enctype="multipart/form-data">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Post</label>
		<div class="col-sm-5">	
			<select name="pho_post_id" class="form-control" style="background-color: salmon">
				@foreach($post as $row)
				<option value="{{$row->id}}"
					@if($row->id ==$rows->pho_post_id)
					selected
					@endif
					>{{$row->post_tittle}}</option>
					@endforeach
			</select>
		</div>
		</div>

		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">File Foto</label>
		<div class="col-sm-5">	
			<input type="file" name="gambar"  id="inputEmail3">
		</div>
		</div>

		
		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
		<div class="col-sm-5">	
			<input type="date" name="pho_date" value="{{ $rows->pho_date}}" id="inputEmail3" class="form-control" style="background-color: salmon">
		</div>
		</div>

		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
		<div class="col-sm-5">	
			<input type="text" name="pho_tittle" value="{{ $rows->pho_tittle}}" id="inputEmail3" class="form-control" style="background-color: salmon">
		</div>
		</div>

		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>	
		<div class="col-sm-5">	
			<input type="text" name="pho_text" value="{{ $rows->pho_text}}" id="inputEmail3" class="form-control" style="background-color: salmon">
		</div>
		</div>

	</table>
	<div class="form-group row">
		<div class="col-sm-10">
			<input type="submit" value="UPDATE" class="btn" style="background-color: gray"> 
		</div>
		</div>

	</form>
</div>
@endsection
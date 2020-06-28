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

		table th {
			color: white;
			font-family: century gothic;
		}

		
	</style>
</head>
<body>
	<div class="container">
	<h2>Data Post</h2>

	<table class="table">
		<thead class="bg-light">
		<tr style="background-color: salmon">
			<th scope="col">ID</th>
			<th scope="col">KATEGORI</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">SLUG</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color: #fFF5EE">
			<td>{{ $row->id }}</td>
			<td>{{ $row->category->cat_name }}</td>
			<td>{{ $row->post_date }}</td>
			<td>{{ $row->post_slug }}</td>
			<td>{{ $row->post_tittle }}</td>
			<td>{{ $row->post_text }}</td>
			<td>
				<a href="{{ url('post/' . $row->id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('post/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('post/create') }}">Tambah Data</a>
</div>

</body>
</html>

@endsection
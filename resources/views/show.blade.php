<!DOCTYPE html>
<html>
<head>
	<title>Promo Privatq</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/data.css') }}">
	
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
    
	
</head>
<body>
<div class="color1 container">
	<div class="col"> 
	<h1>Data User</h1>

	<br/>
	<form action='/data/cari' method='GET'>
		<div class='form-row align-items-center'>
		
			<input class='form-control col' type='text' name ='cari' placeholder='Ketikkan Nama' value='{{old("cari")}}'>
				<div class="col">
					<input class='btn btn-primary' type='submit' value='Cari'>
				</div>
		</div>
	</form>
	<br/>
	<table class="table">
		<thead class="thead-black">
		<tr class="up">
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			
		</tr>
		@foreach($user as $u)
		<tr class="hover">
			<td>{{ $u->nama }}</td>
			<td>{{ $u->email }}</td>
			<td>{{ $u->telepon }}</td>
			
		</tr>
		</thead>
		@endforeach
	</table>
	{{$user->links()}}

    <a class="btn-outline-primary btn" href="/">Kembali</a>
</div>
</div>
</body>
</html>


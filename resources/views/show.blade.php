<!DOCTYPE html>
<html>
<head>
	<title>Promo Privatq</title>
	
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<style type="text/css">
	body{
		background-color:#52C4B9;
		
	}
	h1{
		text-align:center;
		font-family:'Raleway';
		padding:30px;
	}

	table{
		width:100%;
		
		padding:5px;
		margin:auto;
		background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 100%;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}

th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}
tr:hover {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
	</style>
    
	
</head>
<body>
<div class="color1">
	
	<h1>Data User</h1>

	
	
	<br/>
	<form action='/data/cari' method='GET'>
	<div class='form-row align-items-center'>
	
		<input class='form-control col-md-2' type='text' name ='cari' placeholder='Ketikkan Nama' value='{{old("cari")}}'>
		<div class="col-auto">
		<input class='btn btn-primary' type='submit' value='Cari'>
		</div>
		</div>
		</form>
	<br/>

	<table class="table">
		<thead class="thead-black">
		<tr>
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
    <a href="/">Kembali</a>
	</div>
</body>
</html>


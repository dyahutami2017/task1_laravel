<!DOCTYPE html>
<html>
<head>
	<title>Promo Privatq</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/view.css') }}">
</head>
<body>

	
	<h1>Data User</h1>

	
	
	<br/>
	<br/>

	<table class="table">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			
		</tr>
		@foreach($user as $u)
		<tr>
			<td>{{ $u->nama }}</td>
			<td>{{ $u->email }}</td>
			<td>{{ $u->telepon }}</td>
			
		</tr>
		@endforeach
	</table>
    <a href="/">Kembali</a>

</body>
</html>
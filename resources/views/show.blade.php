<!doctype html>
<html lang="en">
  <head>
	<title>DATA</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/data.css') }}">
	
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
	<div class="color1 container">
		<div class="col"> 
		<h1>Data User</h1>
	
		<br/>
		<form action='/data/cari' method='GET'>
			<div class='form-row align-items-center'>
			
				<input class='form-control col' type='text' name ='cari' placeholder='Ketikkan Nama' value='{{request("cari")}}'>
					<div class="col">
						<input class='btn btn-primary' type='submit' value='Cari'>
					</div>
				<a class='btn btn-primary' href='/export' target="_blank">Export Excel</a>
			</div>
		</form>
		<br/>
		<table class="table">
			<thead class="thead-black">
			<tr class="up">
				<th>Nama</th>
				<th>Email</th>
				<th>Telepon</th>
				<th>Edit</th>
				
			</tr>
			@foreach($user as $u)
			<tr class="hover">
				<td>{{ $u->nama }}</td>
				<td>{{ $u->email }}</td>
				<td>{{ $u->telepon }}</td>
				<td><button class="btn btn-sm btn-warning editData" data-nama="{{ $u->nama }}" data-email="{{ $u->email }}" data-telepon="{{ $u->telepon }}"><i class="fa fa-edit    "></i> Edit</button></td>
				
			</tr>
			</thead>
			@endforeach
		</table>
		{{$user->links()}}
		<div class="row">
			<div class="col-md-4">
				<a class="btn-outline-primary btn" href="/">Kembali</a>
			</div>
			<div class="col-md-4 text-center">
				<a class=" btn-outline-primary btn" href="/sendemail">Kirim Email</a>
			</div>
			<div class="col-md-4 text-right">
				<a class=" btn-outline-primary btn" href="/upload">Upload File Promo</a>
			</div>
		</div>
	</div>
	</div>

	
	<!-- Modal -->
	<div class="modal fade" id="edit-data" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<input type="text" name="nama" id="nama" class="form-control" placeholder="nama lengkap">
						<input type="text" name="email" id="email" class="form-control" placeholder="email">
						<input type="text" name="telepon" id="telepon" class="form-control" placeholder="nomor telepon"><br>
						<div class="form-group">
						  <label for="">nama</label>
						  <div class="input-group">
							  <span><i class="fa fa-search" aria-hidden="true"></i></span>
						  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="nama">
						</div>
					</div>
					</form>				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
	  
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		$('.editData').click(function(){
			$('#nama').val($(this).data("nama"));
			$('#email').val($(this).data("email"));
			$('#telepon').val($(this).data("telepon"));
			$('#edit-data').modal('show');
		});
	</script>

</body>
</html>










{{--aaaaa-
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
		
			<input class='form-control col' type='text' name ='cari' placeholder='Ketikkan Nama' value='{{request("cari")}}'>
				<div class="col">
					<input class='btn btn-primary' type='submit' value='Cari'>
				</div>
			<a class='btn btn-primary' href='/export' target="_blank">Export Excel</a>
		</div>
	</form>
	<br/>
	<table class="table">
		<thead class="thead-black">
		<tr class="up">
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Edit</th>
			
		</tr>
		@foreach($user as $u)
		<tr class="hover">
			<td>{{ $u->nama }}</td>
			<td>{{ $u->email }}</td>
			<td>{{ $u->telepon }}</td>
			<td><button class="btn btn-sm btn-warning editData" data-nama="{{ $u->nama }}" data-email="{{ $u->email }}" data-telepon="{{ $u->telepon }}">Edit</button></td>
			
		</tr>
		</thead>
		@endforeach
	</table>
	{{$user->links()}}
	<div class="row">
		<div class="col-md-4">
    		<a class="btn-outline-primary btn" href="/">Kembali</a>
		</div>
		<div class="col-md-4 text-center">
			<a class=" btn-outline-primary btn" href="/sendemail">Kirim Email</a>
		</div>
		<div class="col-md-4 text-right">
			<a class=" btn-outline-primary btn" href="/upload">Upload File Promo</a>
		</div>
	</div>
</div>
</div>
</body>
</html>--}}


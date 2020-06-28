<!DOCTYPE html>
<html>
<head>
	<title>Input warga masuk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
	<div class="container">
	<div class="row mt-4">
		<div class="col-md-9">	 
<div class="card">
	<div class="card-header"><h3>Input Data Warga Keluar Wilayah</h3></div>

	<div class="card-body">
<?php if (validation_errors()):?>
<div class="alert alert-danger" role="alert">
  	<?= validation_errors();  ?>
</div> 
<?php endif; ?>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Nama</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Jenis Kelamin</label>
					<div id="jrs" class="col-sm-10">
					    <select class="form-control" id="jk" name="jk">
					 
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
					    </select> 
					</div>
				</div>
					<div class="form-group">
					<label class="control-label col-sm-2" for="email">Alamat Asal</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Asal">
					</div>
				</div>
					<div class="form-group">
					<label class="control-label col-sm-2" for="email">Kota Tujuan</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota Tujuan">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Alamat Tujuan</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Alamat Tujuan">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">No Hp</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="hp" name="hp" placeholder="No HP">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-success float-right">Simpan</button>
					</div>
				</div>
			</form>
			</div></div></div>
</body>
</html>
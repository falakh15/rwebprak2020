<!doctype html>
<html>
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
	<title>Home - Desa Sriharjo</title>
</head>
<body>
<center><h1>Pendataan Warga Keluar/Masuk Wilayah Desa Sriharjo </h1></center>
<center><h4>Masa Tanggap Darurat COVID-19</h4></center>
<?php if ($this->session->flashdata('flash')): ?>
 <div class="row mt-6">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Data<strong> berhasil</strong> <?php $this->session->flashdata('flash'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div></div>
<?php endif; ?>
<div class="container">

<h4><?php echo "Data Warga Masuk" ?></h4>
<a href="<?= base_url(); ?>Home/inputmasuk" class="btn btn-outline-dark my-2 my-sm-0">Input Data</a>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Kota Asal</th>
        <th>Alamat Asal</th>
        <th>Alamat Tujuan</th>
        <th>No HP</th>
      </tr>
    </thead>
    <tbody>
		<?php $no = 0;?>
		<?php foreach($data_wrgmasuk as $data):?>
		<?php $no++;?>
      <tr>
        <td><?= $no?></td> 
        <td><?= $data->nama?></td>
        <td><?= $data->jk?></td>
        <td><?= $data->kota_asal?></td>
        <td><?= $data->alamat_asal?></td>
        <td><?= $data->alamat_tujuan?></td>
        <td><?= $data->no_hp?></td>
	      <td><a href="<?= base_url();?>Home/hapus/<?= $data -> id ?>" class="badge badge-danger" onclick = "return confirm('yakin?');">hapus</a></td>
    </tr>
	  <?php endforeach?>
    </tbody>
  </table>
 
  <h4><?php echo "Data Warga Keluar" ?></h4>
   <a href="<?= base_url(); ?>Home/inputkeluar" class="btn btn-outline-dark my-2 my-sm-0">Input Data</a>         
  <table class="table table-striped">
    <thead>
      <tr>
       <th>No</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Alamat Asal</th>
        <th>Kota Tujuan</th>
        <th>Alamat Tujuan</th>
        <th>No HP</th>
      </tr>
    </thead>
    <tbody>
		<?php $no = 0;?>
		<?php foreach($data_wrgkeluar as $data):?>
		<?php $no++;?>
      <tr>
        <td><?php echo $no?></td>
        <td><?php echo $data->nama?></td>
        <td><?php echo $data->jk?></td>
        <td><?php echo $data->alamat_asal?></td>
        <td><?php echo $data->kota_tujuan?></td>
        <td><?php echo $data->alamat_tujuan?></td>
        <td><?php echo $data->no_hp?></td>
         <td><a href="<?= base_url();?>Home/hapus/<?= $data -> id ?>" class="badge badge-danger" onclick = "return confirm('yakin?');">hapus</a></td>
	  </tr>
	  <?php endforeach?>
    </tbody>
  </table>
</div>
</div>
</div>

</body>
</html>
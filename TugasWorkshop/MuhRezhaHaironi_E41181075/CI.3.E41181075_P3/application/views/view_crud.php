<!DOCTYPE html>
<html>
<head>
	<!-- Custom fonts for this template-->
	<link href="<?php base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">
</head>
<body>
	<!-- Begin Page Content -->
	<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">CRUD</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<h6 class="m-0 font-weight-bold text-primary"><?php echo anchor('crud/tambah','Tambah Data'); ?></h6>
  </div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table table-bordered" width="100%" cellspacing="0">
		  <thead>
		<tr>
			<th>Id User</th>
			<th>Nama</th>
			<th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Aksi</th>
		</tr>
</thead>
		<?php 

		foreach($user as $u){ 
		?>
		<tbody>
		<tr>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
            <td><?php echo $u->pekerjaan ?></td>
			<td>
			<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
			<?php echo anchor('crud/hapus/'.$u->id, 'Hapus'); ?>
		</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>
            </div>
          </div>

        </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<!-- Custom fonts for this template-->
	<link href="<?php  echo base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
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
  </div>
  <div class="card-body">
	
		<table class = "table table-bordered" style="margin:20px auto;">
<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<tbody>
        <tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
            </tr>
            <tr>
				<td>password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
</tbody>
</form>	
		</table>
		</div>
          </div>
		
		</div>
		</div>
	
</body>
</html>
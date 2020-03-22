<!DOCTYPE html>
<html>
<head>
		<!-- Custom fonts for this template-->
		<link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
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
	<div class="table-responsive">
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
        <table style="margin:20px auto;">
        <tr>
                <td>Username</td>
                <td>
                <input type="text" name="username" value="<?php echo $u->username ?>">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                <input type="text" name="password" value="<?php echo $u->password ?>">
                </td>
            </tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</div>
	</div>
	</div>
	</div>
	</form>	
	<?php } ?>
</body>
</html>
<?php

include "koneksi.php";
if(isset($_GET['q'])){
	$q = $_GET['q'];
	$sql = "SELECT * FROM tb_mahasiswa WHERE nama LIKE '%$q%' OR email LIKE '%$q%' OR alamat LIKE '%$q%' OR jurusan LIKE '%$q%' OR kelas LIKE '%$q%'";
}else{
	$sql = "SELECT * FROM tb_mahasiswa";
}
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Data Mahasiswa</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	  </div>
	</nav>
	<br /><br />
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h3>Data Mahasiswa New Media College</h3><br />
				<div class="row">
					<div class="col-md-3">
						<a href="create.php" class="btn btn-primary btn-block"><i class="fa-solid fa-plus"></i> Tambah Data</a>
					</div>
					<div class="col-md-9">
						<form method="GET" action="view.php">
							<input type="text" name="q" class="form-control" placeholder="Search..." style="width: 300px; display: inline;" <?php if(!empty($q)){ echo "value='$q'"; } ?>>
							<button type="submit" class="btn btn-info">Cari Data</button>
						</form>
					</div>
				</div>
				<br /><br />
				<div class="table-responsive">
				<table class="table table-striped">
				  <thead>
				  	<tr>
				  		<th>Action</th>
				  		<th>No</th>
				  		<th>Nama</th>
				  		<th>Email</th>
				  		<th>Alamat</th>
				  		<th>Jurusan</th>
				  		<th>Kelas</th>
				  	</tr>
				  </thead>
				  <tbody>
				  	<?php
				  	$i = 1;
				  	while($row = $result->fetch_assoc()) {
				  	?>
				  	<tr>
				  		<td>
				  			<a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
				  			<a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
				  		</td>
				  		<td><?php echo $i ?></td>
				  		<td><?php echo $row["nama"] ?></td>
				  		<td><?php echo $row["email"] ?></td>
				  		<td><?php echo $row["alamat"] ?></td>
				  		<td><?php echo $row["jurusan"] ?></td>
				  		<td><?php echo $row["kelas"] ?></td>
				  	</tr>
				  	<?php 
				  	$i++;
				  	}
				  	?>
				  </tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

<?php
$conn->close();
?>
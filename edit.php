<?php

include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_mahasiswa WHERE id = $id";
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
				<h3>Tambah Data Mahasiswa</h3><br />
				<form method="POST" action="update.php?id=<?php echo $_GET['id'] ?>">
					<?php
					while($row = $result->fetch_assoc()) {
					?>
					<div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
				    <input type="text" name="nama" class="form-control" aria-describedby="emailHelp" value="<?php echo $row["nama"] ?>">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Email address</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["email"] ?>">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Alamat</label>
				    <input type="text" name="alamat" class="form-control" aria-describedby="emailHelp" value="<?php echo $row["alamat"] ?>">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
				    <input type="text" name="jurusan" class="form-control" aria-describedby="emailHelp" value="<?php echo $row["jurusan"] ?>">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Kelas</label>
				    <input type="text" name="kelas" class="form-control" aria-describedby="emailHelp" value="<?php echo $row["kelas"] ?>">
				  </div>
				<?php } ?>
				  <a href="view.php" class="btn btn-warning">Back</a>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
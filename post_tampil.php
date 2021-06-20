<?php 



$post = new app\Post();
$rows = $post->tampil();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">

<main>
  <div class="container-fluid">
    <div class="card mt-4 mb-4">
      <div class="card-header">
          <i class="fas fa-table mr-1"></i>
          DataTable Posting
      </div>
      <div class="card-body">
        <div class="table-responsive">

		<table class="table table-striped">
  <thead>
    <tr>
					<th>No</th>
					<th>Id Post</th>
					<th>Id Kategori</th>
					<th>Tanggal Post</th>
					<th>Slug</th>
					<th>Judul</th>
					<th>Keterangan</th>
					<th>Aksi</th>
    </tr>
  </thead>
  <?php 
$no = 1;
?>

<?php foreach ($rows as $row) { ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $no++?></th>
					<td><?php echo $row['post_id']; ?></td>
					<td><?php echo $row['cat_id']; ?></td>
					<td><?php echo $row['post_date']; ?></td>
					<td><?php echo $row['post_slug']; ?></td>
					<td><?php echo $row['post_title']; ?></td>
					<td><?php echo $row['post_text']; ?></td>
					<td>
	  <a href="index2.php?halaman=post_edit&id=<?php echo $row['post_id']; ?>" type="button" class="btn btn-outline-primary">Edit</a>
    	<a href="index2.php?halaman=post_proses&delete-id=<?php echo $row['post_id']; ?>" type="button" class="btn btn-outline-danger">Hapus</a>
					</td>
    </tr>

	</tbody>
	<?php } ?>
	</table>
	<div align="center">
			<a href="index2.php?halaman=kategori_input">
			<button class="btn btn-primary">Tambah</button>
			</a>
			</div>
        </div>
      </div>
    </div>
  </div>
</main>
  </section><!-- End Hero -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
	
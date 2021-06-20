<!DOCTYPE html>
<html>	
<head>
	<title>WEb</title>
</head>
<body>
	<div class="utama">
	
		<!--header-->
		<div>
			<?php include "header.php"; ?>
		</div>
		
		<?php 
			if (isset($_GET['halaman'])) 
			{
				include $_GET['halaman'] . ".php";
			}else {
				include "utama.php";
			}
		 ?>
		</div>	
		
</div>
</body>
</html> 
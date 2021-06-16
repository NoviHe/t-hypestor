	<?php 
		$koneksi = mysqli_connect("localhost","thyg1899_admin","hankcer0111","thyg1899_admin");
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}		
		$salt="SOLUSIDIGITALID.COM";
	?>
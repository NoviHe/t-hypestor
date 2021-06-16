	<?php		
		function tgl_Indonesia($indo_tgl){
			$tr   = trim($indo_tgl);
			$indo_tgl    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
			return $indo_tgl;
		}
	?>
	<?php $feedback = "Tidak Boleh Kosong!";?>
	<?php	
		$sql="SELECT perusahaan from db_website";
		$result=$koneksi->query($sql);
		$perusahaan=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT tagline from db_website";
		$result=$koneksi->query($sql);
		$tagline=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT logo from db_website";
		$result=$koneksi->query($sql);
		$logo=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT favicon from db_website";
		$result=$koneksi->query($sql);
		$favicon=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT url from db_website";
		$result=$koneksi->query($sql);
		$url=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT telp_web from db_website";
		$result=$koneksi->query($sql);
		$telp_web=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT email_web from db_website";
		$result=$koneksi->query($sql);
		$email_web=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT alamat_web from db_website";
		$result=$koneksi->query($sql);
		$alamat_web=$result->fetch_assoc();
	?>	
	<?php 
		date_default_timezone_set('Asia/Jakarta');
		$username 	= $_SESSION['username'];
	?>
	<?php	
		$sql="SELECT nama from db_usermanager where username='$username'";
		$result=$koneksi->query($sql);
		$nama=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT no_telp from db_usermanager where username='$username'";
		$result=$koneksi->query($sql);
		$no_telp=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT foto from db_usermanager where username='$username'";
		$result=$koneksi->query($sql);
		$foto=$result->fetch_assoc();
	?>	
	<?php	
		$tgl_sekarang = date('Y-m-d');	
		$tgl_kemarin = date('Y-m-d',strtotime('-1 day', strtotime( date("Y-m-d") )));
		$tgl_seminggu = date('Y-m-d',strtotime('-7 day', strtotime( date("Y-m-d") )));
		$bulan=date('m');
		$tahun=date('Y');
	?>	
	
	<!-- Pemasukan Total -->
	<?php
		$data = mysqli_query($koneksi,"select sum(jumlah) as total_pemasukan from db_pemasukan where username='$username'");
		$d = mysqli_fetch_assoc($data);
		$total_pemasukan = $d['total_pemasukan'];
	?>
	
	<!-- Pengeluaran Total -->
	<?php
		$data = mysqli_query($koneksi,"select sum(jumlah) as total_pengeluaran from db_pengeluaran where username='$username'");
		$d = mysqli_fetch_assoc($data);
		$total_pengeluaran = $d['total_pengeluaran'];
	?>
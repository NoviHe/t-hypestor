	<!-- Modals Tambah Pemasukan -->	
	<div id="modals_tambah_pemasukan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include "assets/data/form-tambah-pemasukan.php";?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modals Edit Pemasukan -->		
	<?php
		$data = mysqli_query($koneksi,"select * from db_pemasukan where username='$username'");
		while($d = mysqli_fetch_array($data)){
	?>
	<div id="modals_edit_pemasukan_<?php echo $d['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include "assets/data/form-edit-pemasukan.php";?>
				</div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>
	
	<!-- Modals Hapus Pemasukan -->	
	<?php
		$data = mysqli_query($koneksi,"select id,jumlah from db_pemasukan where username='$username'");
		while($d = mysqli_fetch_array($data)){
	?>
	<div id="modals_hapus_pemasukan_<?php echo $d['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Hapus Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">					
					<form method="post" action="">
						<input type="hidden" name="id" value="<?php echo $d['id'];?>">
						<span class="modals_notif_hapus">
							Anda yakin ingin menghapus data pemasukan :
							<strong>
								<?php echo $d['id'];?> -
								Rp. 
								<?php 
									echo number_format($d['jumlah'],0,',','.');
								?>
							</strong>
							? 
						</span>
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 text-right">
								<button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="hapus_pemasukan">
									Hapus
								</button>
								<button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
									Batal
								</button>
							</div>
						</div>
					</form>
					<?php 
						if(isset($_POST['hapus_pemasukan']))
						{	
							$id = $_POST['id']; 
							$query = mysqli_query($koneksi,"delete from db_pemasukan where id='$id'");
							
							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Dihapus!";
							header("location: pemasukan");
							exit();
						}
					?>	
				</div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>
	
	<!-- Modals Tambah Pengeluaran -->	
	<div id="modals_tambah_pengeluaran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include "assets/data/form-tambah-pengeluaran.php";?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modals Edit Pengeluaran -->		
	<?php
		$data = mysqli_query($koneksi,"select * from db_pengeluaran where username='$username'");
		while($d = mysqli_fetch_array($data)){
	?>
	<div id="modals_edit_pengeluaran_<?php echo $d['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include "assets/data/form-edit-pengeluaran.php";?>
				</div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>
	
	<!-- Modals Hapus Pengeluaran -->	
	<?php
		$data = mysqli_query($koneksi,"select id,jumlah from db_pengeluaran where username='$username'");
		while($d = mysqli_fetch_array($data)){
	?>
	<div id="modals_hapus_pengeluaran_<?php echo $d['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Hapus Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">					
					<form method="post" action="">
						<input type="hidden" name="id" value="<?php echo $d['id'];?>">
						<span class="modals_notif_hapus">
							Anda yakin ingin menghapus data pengeluaran :
							<strong>
								<?php echo $d['id'];?> -
								Rp. 
								<?php 
									echo number_format($d['jumlah'],0,',','.');
								?>
							</strong>
							? 
						</span>
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 text-right">
								<button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="hapus_pengeluaran">
									Hapus
								</button>
								<button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
									Batal
								</button>
							</div>
						</div>
					</form>
					<?php 
						if(isset($_POST['hapus_pengeluaran']))
						{	
							$id = $_POST['id']; 
							$query = mysqli_query($koneksi,"delete from db_pengeluaran where id='$id'");
							
							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Dihapus!";
							header("location: pengeluaran");
							exit();
						}
					?>	
				</div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>
	
	<!-- Modals Avatar -->	
	<div id="modals_ganti_foto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ganti Avatar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php include "assets/data/form-ganti-foto.php";?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modals Halaman Login -->	
	<div id="modals_halaman_login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Halaman Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include "assets/data/form-halaman-login.php";?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modals Notifikasi -->	
	<div id="modals_notifikasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Notifikasi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include "assets/data/form-notifikasi.php";?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modals Loader -->	
	<div id="modals_loader" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Loader</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include "assets/data/form-loader.php";?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modals Warna Dasar -->	
	<div id="modals_warna_dasar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Warna Aplikasi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include "assets/data/form-warna.php";?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modals Ganti Username -->	
	<div id="modals_ganti_username" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Username</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include "assets/data/form-ganti-username.php";?>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	<!-- Modals Detail Media Images -->	
	<div id="modals_media_images" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Media Library</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include "assets/data/form-media.php";?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modals Hapus Media Images -->	
	<?php
		$data = mysqli_query($koneksi,"select id,file from db_media_images");
		while($d = mysqli_fetch_array($data)){
	?>
	<div id="modals_hapus_media_images_<?php echo $d['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Hapus Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">					
					<form method="post" action="">
						<input type="hidden" name="id" value="<?php echo $d['id'];?>">
						<span class="modals_notif_hapus">
							Anda yakin ingin menghapus data media :
							<strong>
								<?php echo $d['file'];?>
							</strong>
							? 
						</span>
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 text-right">
								<button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="hapus_media_images">
									Hapus
								</button>
								<button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
									Batal
								</button>
							</div>
						</div>
					</form>
					<?php 
						if(isset($_POST['hapus_media_images']))
						{	
							$id = $_POST['id']; 
							$query = mysqli_query($koneksi,"delete from db_media_images where id='$id'");
							
							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Media Berhasil Dihapus!";
							header("location: media");
							exit();
						}
					?>	
				</div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>
	<!-- Validation -->	
	<script src="../assets/js/validate.js"></script>
	<script>
		(function () {
		  'use strict'
		  var forms = document.querySelectorAll('.form_validation')

		  Array.prototype.slice.call(forms)
			.forEach(function (form) {
			  form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
				  event.preventDefault()
				  event.stopPropagation()
				}

				form.classList.add('was-validated')
			  }, false)
			})
		})()																
	</script>
	<style>
		.was-validated .form-control:valid, .form-control.is-valid,
		.was-validated .form-control:invalid, .form-control.is-invalid {
		  background-image: none;
		  padding:0px;
		  padding-top:1px;
		  padding-left:.75rem;
		  border-color:#ced4da;
		}
		.was-validated .form-control:valid, .form-control.is-valid {
		  background:#fff;
		}
		.was-validated .form-control:invalid, .form-control.is-invalid {
		  background:#fcf678;
		}
		.was-validated .form-control.input.nomor:valid, .form-control.input.nomor.is-valid,
		.was-validated .form-control.input.nomor:invalid, .form-control.input.nomor.is-invalid {
		  padding-left:0rem;
		}
		.was-validated .form-control.input.validasi_modals:valid, .form-control.input.validasi_modals.is-valid,
		.was-validated .form-control.input.validasi_modals:invalid, .form-control.input.validasi_modals.is-invalid {
		  padding-top:2px!important;
		}
		.modal-title {
			font-size: 12px;
		}
		.close {
			font-size: 18px;
		}
		.form-control.input {
			padding-top:7px;
		}
	</style>
	
	<!-- Rupiah -->
	<script>
		function convertToRupiah(objek) {
		  separator = ".";
		  a = objek.value;
		  b = a.replace(/[^\d]/g,"");
		  c = "";
		  panjang = b.length; 
		  j = 0; 
		  for (i = panjang; i > 0; i--) {
			j = j + 1;
			if (((j % 3) == 1) && (j != 1)) {
			  c = b.substr(i-1,1) + separator + c;
			} else {
			  c = b.substr(i-1,1) + c;
			}
		  }
		  objek.value = c;

		}    
		function convertToAngka()
		{	var nominal= document.getElementById("nominal").value;
			var angka = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
			document.getElementById("angka").innerHTML= angka;
		}       

		function convertToAngka()
		{	var nominal1= document.getElementById("nominal1").value;
			var angka1 = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
			document.getElementById("angka1").innerHTML= angka;
		}
	</script>
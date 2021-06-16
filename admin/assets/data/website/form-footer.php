	<?php
		$data = mysqli_query($koneksi,"select * from db_w_footer");
		while($d = mysqli_fetch_array($data)){
	?>		
	<form method="post" action="" class="form_validation" novalidate>
		<input type="hidden" name="id" value="footer">
		
		<div class="form_grup_with_judul double">
			<div class="judul">
				Kolom 1
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Judul <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="judul_1" value="<?php echo $d['judul_1'];?>" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Tagline <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="isi_1" value="<?php echo $d['isi_1'];?>" required>
					</div>
				</div>
			</div>
		</div>
		
		<div class="form_grup_with_judul double f_right">
			<div class="judul">
				Kolom 2
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Judul <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="judul_2" value="<?php echo $d['judul_2'];?>" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Tagline <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="isi_2" value="<?php echo $d['isi_2'];?>" required>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit_data_pengaturan">
					Simpan
				</button>
			</div>
		</div>
	</form>
	<?php 
	}
	?>
	<?php 
		if(isset($_POST['edit_data_pengaturanxxxx']))
		{	
			$tipe 			 = $_POST['tipe']; 
			$url 			 = $_POST['url']; 
			$perusahaan 	 = $_POST['perusahaan']; 
			$tagline 		 = $_POST['tagline']; 
			$favicon 		 = $_POST['favicon']; 
			$logo 			 = $_POST['logo']; 
			$telp_web 		 = $_POST['telp_web']; 
			$email_web 		 = $_POST['email_web']; 
			$alamat_web 	 = $_POST['alamat_web']; 
			
			$query = mysqli_query($koneksi,"update db_website set 		
		
			url		 		= '$url',
			perusahaan		= '$perusahaan',
			tagline		 	= '$tagline',
			favicon		 	= '$favicon',
			logo		 	= '$logo',
			telp_web		= '$telp_web',
			email_web		= '$email_web',
			alamat_web		= '$alamat_web'
			
			where tipe='$tipe'");
				
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
			header("location: pengaturan");
			exit();
		}
	?>
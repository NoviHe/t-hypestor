	<style>
		.app-sidebars{
			width: 80px;
			min-width: 80px;
		}
	</style>
	<div class="app-sidebar-wrapper no_print">
		<div class="app-sidebar sidebar-shadow">
			<div class="app-header__logo">
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $perusahaan['perusahaan'];?>" class="logo-src">
					<img onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/konten/<?php echo $logo['logo'];?>">
				</a>
				<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
			<div class="scrollbar-sidebar scrollbar-container">
				<div class="app-sidebar__inner">
					<ul class="vertical-nav-menu">
						
						<!-- Menu Awal -->
						<li class="app-sidebar__heading">Menu</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-rocket"></i>
								Dashboards
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="monitoring-active block-page-btn-example-1" href="monitoring">
										monitoring
									</a>
								</li>
							</ul>
						</li>
						
						<!-- Menu -->
						<li class="app-sidebar__heading">Akunting</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-wallet"></i>
								Akunting
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="pemasukan-active" href="#">
										Pemasukan
									</a>
								</li>
								<li>
									<a class="pengeluaran-active" href="#">
										Pengeluaran
									</a>
								</li>
							</ul>
						</li>
						
						<!--
						<li class="app-sidebar__heading">Website</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-copy-file"></i>
								Website
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="website-utama-active" href="website-utama">
										Website Utama
									</a>
								</li>
							</ul>
						</li>
						-->
						
						<!-- Menu -->
						<li class="app-sidebar__heading">User Manager</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-wallet"></i>
								User Manager
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="admin-active" href="#">
										User
									</a>
								</li>
							</ul>
						</li>
						
						<!-- Menu -->
						<li class="app-sidebar__heading">Pengaturan</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-settings"></i>
								Pengaturan
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="media-active" href="media">
										Media
									</a>
								</li>
								<li>
									<a class="pengaturan-active" href="pengaturan">
										Pengaturan
									</a>
								</li>
								<li>
									<a class="ganti-password-active" href="ganti-password">
										Ganti Password
									</a>
								</li>
							</ul>
						</li>
						
						<!-- Menu Terakhir -->
						<li class="app-sidebar__heading">Sign Out</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-back"></i>
								Sign Out
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="sign-out-active" href="sign-out">
										Sign Out
									</a>
								</li>
							</ul>
						</li>
						<!-- End Menu -->
					</ul>
				</div>
			</div>
		</div>
	</div>
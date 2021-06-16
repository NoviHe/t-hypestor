	<?php include "assets/scripts/head.php";?>
	<?php $kategori = "dashboard";?>
	<?php $halaman = "monitoring";?>
	<?php $halaman_dua = "";?>
	<style>
		.menu-active {
			color:<?php echo $color_dasar['color_dasar'];?>!important;
			background:<?php echo $bg_menu['bg_menu'];?>!important;
		}	
		.menu-actives {
			display: block;
			width: 100%;
			clear: both;
			font-weight: 400;
			color: #fff!important;
			text-align: inherit;
			white-space: nowrap;
			background-color:<?php echo $bg_dasar['bg_dasar'];?>!important;
			border: 0;
			text-decoration: none;
		}
	</style>
	
	<div class="app-container app-theme-gray">
        <div class="app-main">
			<?php include "assets/scripts/menu.php";?>
            <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
					<?php include "assets/scripts/header.php";?>					
                    <div class="app-inner-layout app-inner-layout-page">
                        <div class="app-inner-bar">
                            <div class="inner-bar-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link show-menu-btn cursor_none" style="color:#fff;">
                                            <i class="fa fa-align-left mr-2"></i>
                                            <span class="hide-text-md">Menu</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> 
							<div class="inner-bar-center">
								<ul class="nav">
									<li class="nav-item">
										<a href="" class="nav-link active">
											<span>
												Menu
											</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="inner-bar-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link open-right-drawer cursor_none">
                                            &nbsp;
                                        </a>
                                    </li>
                                </ul>
                            </div>
						</div>
                        <div class="app-inner-layout__wrapper">
							
							
                        </div>
                    </div>
                </div>
				
                <?php include "assets/scripts/footer_pages.php";?>				
            </div>
        </div>
	</div>
	<?php include "assets/scripts/footer.php";?>
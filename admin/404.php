	<?php include "assets/scripts/head.php";?>
	<?php $kategori = "Error 404";?>
	<?php $halaman = "Error 404";?>
	<?php $halaman_dua = "";?>
	
	<div class="app-container app-theme-gray">
        <div class="app-main">
			<?php include "assets/scripts/menu.php";?>
            <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
					<?php include "assets/scripts/header.php";?>					
                    <div class="app-inner-layout app-inner-layout-page">
                        <div class="app-inner-bar">
							<div class="inner-bar-left bar_mobile_none" style="width:200px;">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link open-right-drawer cursor_none">
                                            &nbsp;
                                        </a>
                                    </li>
                                </ul>
                            </div> 
							<div class="inner-bar-center">
								<ul class="nav">
									<li class="nav-item">
										<a href="" class="nav-link active">
											<span>
												<?php echo $kategori;?>
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
							
							<!-- Konten -->
							<div class="app-inner-layout__content">
                                <div class="tab-content">
									<!-- Tab -->
									<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
										<div class="container-fluid">
											<div class="row">
												<div class="col-sm-12 col-md-12 col-xl-12" style="margin-bottom:100px;">
													<div class="mb-3 card">
														<div class="tab-content">
															<div class="tab-pane active" role="tabpanel">
																<div class="card-body" style="padding-top:30px; padding-bottom:25px;">
																	<!-- Disini -->
																		<img src="../assets/images/404.svg" style="display:block; margin:0px auto;">
																	<!-- End -->
																</div>
															</div>
														</div>
													</div>	
												</div>
											</div>
											
										</div>
									</div>
										
                                </div>
                            </div>
							<!-- End Konten -->
                        </div>
                    </div>
                </div>
				
                <?php include "assets/scripts/footer_pages.php";?>				
            </div>
        </div>
	</div>
	<?php include "assets/scripts/footer.php";?>
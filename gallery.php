<?php
session_start();
$_SESSION['category'] = 'gallery';

include('partials/header.php');
?>
        <section class="page-header page-header-modern bg-color-secondary page-header-lg mb-0">
            <div class="container">
                <div class="row my-4">
                    <div class="col-md-12 align-self-center text-center">
                        <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4">Gallery</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-no-border bg-color-light m-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div id="galleryAjaxBox" class="ajax-box ajax-box-init mb-4">
                            <div class="bounce-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                            <div class="ajax-box-content" id="galleryAjaxBoxContent"></div>
                        </div>
                    </div>
                </div>
                <div class="row" data-plugin-masonry data-plugin-options="{'itemSelector': '.col-lg-4'}">
                    <div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="assets/front/gallery/xmas13-gallery-on-page.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<span class="thumb-info-wrapper">
											<img src="assets/gallery/carols2013/xmas2013(7).JPG" alt class="img-fluid" />
										</span>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="assets/front/gallery/xmas13-gallery-on-page.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Christmas Carols 2013
												</a>
											</h2>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="assets/front/gallery/nairobi16-gallery-on-page.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<span class="thumb-info-wrapper">
											<img src="assets/gallery/nairobi2016/nairobi2016(4).jpg" alt class="img-fluid" />
										</span>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="assets/front/gallery/nairobi16-gallery-on-page.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Trip to Nairobi (2016)
												</a>
											</h2>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="assets/front/gallery/xmas16-gallery-on-page.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<span class="thumb-info-wrapper">
											<img src="assets/gallery/carols2016/xmas2016(7).JPG" alt class="img-fluid" />
										</span>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="assets/front/gallery/xmas16-gallery-on-page.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Christmas Carols 2016
												</a>
											</h2>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="assets/front/gallery/kankobe17-gallery-on-page.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<span class="thumb-info-wrapper">
											<img src="assets/gallery/kankobe2017/kankobe2017(9).jpg" alt class="img-fluid" />
										</span>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="assets/front/gallery/kankobe-gallery-on-page.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Kankobe Visit (2017)
												</a>
											</h2>
										</span>
									</span>
								</span>
                    </div>
                    <!-- <div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/demo-church-gallery-ajax-on-page-3.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<span class="thumb-info-wrapper">
											<img src="http://ctk.local/front/img/demos/church/gallery/gallery-5.jpg" alt class="img-fluid" />
										</span>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/demo-church-gallery-ajax-on-page-3.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Church Community
												</a>
											</h2>
										</span>
									</span>
								</span>
                    </div> -->
                    <!--  <div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/demo-church-gallery-ajax-on-page-1.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<span class="thumb-info-wrapper">
											<img src="http://ctk.local/front/img/demos/church/gallery/gallery-6.jpg" alt class="img-fluid" />
										</span>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/demo-church-gallery-ajax-on-page-1.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Baptism
												</a>
											</h2>
										</span>
									</span>
								</span>
                    </div> -->
                    <!-- <div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/demo-church-gallery-ajax-on-page-1.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<span class="thumb-info-wrapper">
											<img src="http://ctk.local/front/img/demos/church/gallery/gallery-7.jpg" alt class="img-fluid" />
										</span>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/demo-church-gallery-ajax-on-page-1.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Baptism
												</a>
											</h2>
										</span>
									</span>
								</span>
                    </div> -->
                    <!-- <div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/demo-church-gallery-ajax-on-page-2.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<span class="thumb-info-wrapper">
											<img src="http://ctk.local/front/img/demos/church/gallery/gallery-8.jpg" alt class="img-fluid" />
										</span>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/demo-church-gallery-ajax-on-page-2.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Wedding
												</a>
											</h2>
										</span>
									</span>
								</span>
                    </div> -->
                    <!-- <div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/demo-church-gallery-ajax-on-page-3.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<span class="thumb-info-wrapper">
											<img src="http://ctk.local/front/img/demos/church/gallery/gallery-9.jpg" alt class="img-fluid" />
										</span>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/demo-church-gallery-ajax-on-page-3.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Church Community
												</a>
											</h2>
										</span>
									</span>
								</span>
                    </div> -->
                </div>
            </div>
        </section>

<?php include('partials/footer.php') ?>

<?php
require('libs/config.php');
$_SESSION['category'] = 'home';
$date = date('Y-m-d');
$reading = getDailyReading($date); 

include('partials/header.php');
include('partials/slider.php');
?>
        <section class="section section-no-border custom-position-relative custom-section-padding-1 bg-color-light m-0">
            <img class="custom-cloud left-pos d-none d-md-block appear-animation" data-appear-animation="customFadeInLeftNoRotate" data-appear-animation-delay="0" data-plugin-options="{'accY': -300}" src="assets/front/img/demos/church/others/left-c" alt />
            <div class="custom-big-square left-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInLeft" data-appear-animation-delay="500" data-plugin-options="{'accY': -300}" style="background: url('assets/gallery/kankobe2017/kankobe2017(9).jpg'); background-size: cover;"></div>
            <div class="custom-small-square left-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInLeft" data-appear-animation-delay="1000" data-plugin-options="{'accY': -300}" style="background: url('assets/gallery/carols2013/xmas2013(7).JPG'); background-size: cover;"></div>
            <img class="custom-cloud right-pos d-none d-md-block appear-animation" data-appear-animation="customFadeInRightNoRotate" data-appear-animation-delay="0" data-plugin-options="{'accY': -300}" src="assets/front/img/demos/church/others/right-cloud.png" alt />
            <div class="custom-big-square right-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInRight" data-appear-animation-delay="500" data-plugin-options="{'accY': -300}" style="background: url('assets/gallery/carols2013/xmas2013(8).JPG'); background-size: cover;"></div>
            <div class="custom-small-square right-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInRight" data-appear-animation-delay="1000" data-plugin-options="{'accY': -300}" style="background: url('assets/gallery/kankobe2017/kankobe2017(30).jpg'); background-size: cover;"></div>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-xl-10">
                        <h2 class="font-weight-bold">We seek love God above all thing</h2>
                        <p>Munyonyo Parish Choir, Kampala, has been in service at Munyonyo Parish since 1936. At the time of inception, the Choir Director was Mr. S. Lobo assisted by Choirmaster, Mr. Remy de Silva. The Choir mainly comprised of the Goan community with only four Ugandan members, one of whom was the late Valerian Mayega.</p>
                        <a href="home.php" class="btn btn-primary custom-btn-style-1 text-uppercase mt-4">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-secondary section-no-border m-0">
            <div class="container">
                <div class="row justify-content-center text-center custom-negative-margin-1">
                    <div class="col">
                        <div class="countdown custom-newcomers-class custom-secondary-font custom-box-shadow font-weight-bold text-color-dark" data-plugin-countdown data-plugin-options="{'date': '2021/10/03 12:00:00', 'numberClass': 'font-weight-bold text-color-primary', 'wrapperClass': 'text-color-dark line-height-4', 'insertHTMLbefore': 'Next Event', 'textDay': 'Day', 'textHour': 'Hrs', 'textMin': 'Min', 'textSec': 'Sec', 'uppercase': false}"></div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-lg-4 col-sm-8 mb-4 mb-lg-0">
                        <img src="assets/front/img/demos/church/icons/custom-icon-1.png" alt class="img-repsonsive" />
                        <h2 class="font-weight-bold text-color-light">Our Values</h2>
                        <p class="custom-text-color-2">To sing songs of praise and to lead the congregation into worship by encouraging their participation in the Liturgy.</p>
                    </div>
                    <div class="col-lg-4 col-sm-8 mb-4 mb-lg-0">
                        <img src="assets/front/img/demos/church/icons/custom-icon-2.png" alt class="img-repsonsive" />
                        <h2 class="font-weight-bold text-color-light">Join Us</h2>
                        <p class="custom-text-color-2"><strong class="text-color-light">Sundays at 10.00am - 11.00am</strong></br> at Munyonyo Parish, </br> Plot 3 Colville Street Kampala, UG</p>
                    </div>
                    <div class="col-lg-4 col-sm-8">
                        <img src="assets/front/img/demos/church/icons/custom-icon-3.png" alt class="img-repsonsive" />
                        <h2 class="font-weight-bold text-color-light">Our Mission</h2>
                        <p class="custom-text-color-2">“To live and serve in Song and Praise for the Greater Glory of God”.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-no-border bg-color-light m-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <!--<h2 class="font-weight-bold">Next Event</h2> -->
                        <article class="thumb-info custom-thumb-info custom-box-shadow">
									<span class="thumb-info-wrapper">
										<a href="#">
											<img src="assets/slider/slide3.jpg" alt class="img-fluid" />
										</a>
									</span>
                            <span class="thumb-info-caption">
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													10:00 AM
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													Munyonyo Parish, Kampala
												</li>
											</ul>
										</span>
										<span class="thumb-info-caption-text">
											<h4 class="font-weight-bold mb-2">
												<a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
													Sunday Mass
												</a>
											</h4>
											<p>First Mass after 42 + 60 day Lock down of houses of Worship </p>
										</span>
									</span>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="font-weight-bold">Today's Reading</h2>
                        <article class="custom-post-event">
                            <div class="post-event-date bg-color-primary text-center">
                                <span class="day font-weight-bold text-color-light">3</span>
                                <span class="month text-uppercase custom-secondary-font text-color-light">Sep</span>
                                <span class="year text-color-light">2021</span>
                            </div>
                            <div class="post-event-content custom-margin-1">
                                <h4 class="font-weight-bold">
                                    <a href="#" class="text-decoration-none custom-secondary-font text-color-dark"><span style="color: #690303">COMING SOON</span></a>
                                </h4>
                                <!--<h4 class="font-weight-bold">
                                    <a href="#" class="text-decoration-none custom-secondary-font text-color-dark"><span style="color: #690303">1ST Reading</span></a>
                                </h4>
                                <h4 class="font-weight-bold">
                                    <a href="#" class="text-decoration-none custom-secondary-font text-color-dark"><span style="color: #690303">2ND Reading</span></a>
                                </h4>
                                <h4 class="font-weight-bold">
                                    <a href="#" class="text-decoration-none custom-secondary-font text-color-dark"><span style="color: #690303">Gospel</span></a>
                                </h4>-->
                            </div>
                        </article>
                        <hr class="solid"><br>
                    </div>
                </div>
            </div>
        </section>
<?php include('partials/footer.php') ?>
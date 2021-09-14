<?php
require('libs/config.php');
$_SESSION['category'] = 'events';

$events = fetchUpcoming2Events();
include('partials/header.php');
?>

        <section class="page-header page-header-modern bg-color-secondary page-header-lg mb-0">
            <div class="container">
                <div class="row my-4">
                    <div class="col-md-12 align-self-center text-center">
                        <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4"> Upcoming Events</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-tertiary section-no-border m-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="text-color-dark font-weight-bold"></h2>
                        <article class="thumb-info custom-thumb-info custom-box-shadow">
									<span class="thumb-info-wrapper">
										<a href="#">
											<img src="assets/slider/slide1.jpg" alt class="img-fluid" />
										</a>
									</span>
                            <span class="thumb-info-caption">
										<span class="custom-thumb-info-wrapper-box text-center justify-content-center d-flex mb-4">
											<div class="countdown custom-newcomers-class custom-secondary-font custom-box-shadow font-weight-bold text-color-dark clock-one-events" data-plugin-countdown data-plugin-options="{'date': '2021/10/03 10:00:00', 'numberClass': 'font-weight-bold text-color-primary', 'wrapperClass': 'text-color-dark', 'textDay': 'Day', 'textHour': 'Hrs', 'textMin': 'Min', 'textSec': 'Sec', 'uppercase': false}"></div>
										</span>
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													10:00 AM
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													Christ the King Church, Kampala
												</li>
											</ul>
										</span>
										<span class="thumb-info-caption-text">
											<h4 class="font-weight-bold mb-2">
												<a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
													Sunday Mass
												</a>
											</h4>
											<p>1st Mass after 42 + 60  days of lockdown</p>
										</span>
									</span>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="text-color-dark font-weight-bold">Upcoming Events</h2>
                        <article class="custom-post-event">
                            <div class="post-event-date bg-color-primary text-center">
                                <span class="month text-uppercase custom-secondary-font text-color-light"><?php echo date("M", strtotime($events[0]['date'])) ?></span>
                                <span class="day font-weight-bold text-color-light"><?php echo date("d", strtotime($events[0]['date'])) ?></span>
                                <span class="year text-color-light"><?php echo date("Y", strtotime($events[0]['date'])) ?></span>
                            </div>
                            <div class="post-event-content custom-margin-1">
                                        <span class="custom-event-infos">
                                            <ul>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    <?php echo date("h:i a", strtotime($events[0]['time'])) ?>
                                                </li>
                                                <li class="text-uppercase">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <?php echo $events[0]['location'] ?>
                                                </li>
                                            </ul>
                                        </span>
                                <h4 class="font-weight-bold">
                                    <a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
                                        <?php
                                            switch($events[0]['type'])
                                            {
                                                case 'M': echo 'Mass';
                                                    break;
                                                case 'W': echo 'Wedding';
                                                    break;
                                                case 'B': echo 'Baptism';
                                                    break;
                                                case 'F': echo 'Funeral';
                                                    break;
                                                case 'OD': echo 'Ordination';
                                                    break;
                                                case 'O': echo 'Other';
                                                    break;
                                                case 'N': echo 'Not Defined';
                                                    break;
                                            }
                                        ?>
                                    </a>
                                </h4>
                                <p></p><br>
                            </div>
                        </article>
                        <hr class="solid">
                        <article class="custom-post-event">
                            <div class="post-event-date bg-color-primary text-center">
                                <span class="month text-uppercase custom-secondary-font text-color-light"><?php echo date("M", strtotime($events[1]['date'])) ?></span>
                                <span class="day font-weight-bold text-color-light"><?php echo date("d", strtotime($events[1]['date'])) ?></span>
                                <span class="year text-color-light"><?php echo date("Y", strtotime($events[1]['date'])) ?></span>
                            </div>
                            <div class="post-event-content custom-margin-1">
                                        <span class="custom-event-infos">
                                            <ul>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    <?php echo date("h:i a", strtotime($events[1]['time'])) ?>
                                                </li>
                                                <li class="text-uppercase">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <?php echo $events[1]['location'] ?>
                                                </li>
                                            </ul>
                                        </span>
                                <h4 class="font-weight-bold">
                                    <a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
                                        <?php
                                            switch($events[1]['type'])
                                            {
                                                case 'M': echo 'Mass';
                                                    break;
                                                case 'W': echo 'Wedding';
                                                    break;
                                                case 'B': echo 'Baptism';
                                                    break;
                                                case 'F': echo 'Funeral';
                                                    break;
                                                case 'OD': echo 'Ordination';
                                                    break;
                                                case 'O': echo 'Other';
                                                    break;
                                                case 'N': echo 'Not Defined';
                                                    break;
                                            }
                                        ?>
                                    </a>
                                </h4>
                                <p></p><br>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="section section-no-border bg-color-light m-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-color-dark mb-3">Past Events</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <article class="custom-post-event bg-color-light mb-4 mb-lg-0">
                            <div class="post-event-date bg-color-primary text-center">
                                <span class="month text-uppercase custom-secondary-font text-color-light">Oct</span>
                                <span class="day font-weight-bold text-color-light">05</span>
                                <span class="year text-color-light">2021</span>
                            </div>
                            <div class="post-event-content custom-margin-1">
                                        <span class="custom-event-infos">
                                            <ul>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    5:00 PM
                                                </li>
                                                <li class="text-uppercase">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    New York
                                                </li>
                                            </ul>
                                        </span>
                                <h4 class="font-weight-bold text-color-dark">
                                    <a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
                                        Mauris ornare semeu lorem
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...</p>
                            </div>
                            <hr class="solid">
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="custom-post-event bg-color-light mb-4 mb-lg-0">
                            <div class="post-event-date bg-color-primary text-center">
                                <span class="month text-uppercase custom-secondary-font text-color-light">Set</span>
                                <span class="day font-weight-bold text-color-light">30</span>
                                <span class="year text-color-light">2021</span>
                            </div>
                            <div class="post-event-content custom-margin-1">
                                        <span class="custom-event-infos">
                                            <ul>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    2:00 PM
                                                </li>
                                                <li class="text-uppercase">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    New York
                                                </li>
                                            </ul>
                                        </span>
                                <h4 class="font-weight-bold text-color-dark">
                                    <a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
                                        Mauris ornare semeu lorem
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...</p>
                            </div>
                            <hr class="solid">
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <article class="custom-post-event bg-color-light custom-sm-margin-bottom-2">
                            <div class="post-event-date bg-color-primary text-center">
                                <span class="month text-uppercase custom-secondary-font text-color-light">Set</span>
                                <span class="day font-weight-bold text-color-light">25</span>
                                <span class="year text-color-light">2021</span>
                            </div>
                            <div class="post-event-content custom-margin-1">
                                        <span class="custom-event-infos">
                                            <ul>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    8:00 AM
                                                </li>
                                                <li class="text-uppercase">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    New York
                                                </li>
                                            </ul>
                                        </span>
                                <h4 class="font-weight-bold text-color-dark">
                                    <a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
                                        Mauris ornare semeu lorem
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...</p>
                            </div>
                            <hr class="solid d-lg-none">
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="custom-post-event bg-color-light">
                            <div class="post-event-date bg-color-primary text-center">
                                <span class="month text-uppercase custom-secondary-font text-color-light">Set</span>
                                <span class="day font-weight-bold text-color-light">17</span>
                                <span class="year text-color-light">2021</span>
                            </div>
                            <div class="post-event-content custom-margin-1">
                                        <span class="custom-event-infos">
                                            <ul>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    11:00 AM
                                                </li>
                                                <li class="text-uppercase">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    New York
                                                </li>
                                            </ul>
                                        </span>
                                <h4 class="font-weight-bold text-color-dark">
                                    <a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
                                        Mauris ornare semeu lorem
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section> -->

<?php include('partials/footer.php') ?>

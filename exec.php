<?php
require('libs/config.php');
$_SESSION['category'] = 'about';
include('partials/header.php');

$exec = fetchCurrrentExec();
$users = fetchUsers();
?>

    <section class="page-header page-header-modern page-header-background page-header-background-sm parallax overlay overlay-color-dark overlay-show overlay-op-1 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="assets/slider/slide5.jpg">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12 align-self-center text-center">
                    <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold mb-1">Executive Committee</h1>
                    <p class="text-color-light custom-secondary-font text-uppercase mb-0">About Us</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-border bg-color-light m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-7">
                    <h2 class="font-weight-bold">Current Executive Committee ( <?php echo date('jS F Y', strtotime($exec[0]['start'])) ?> )</h2>
                    <ol>
                        <li><span style="font-weight: bolder; color: black">Chairman :</span>
                            <?php
                                foreach($users as $row =>  $user)
                                {
                                    if($exec[0]['cm'] == $user['id'])
                                    {
                                        echo $user['f_name'].' '.$user['l_name'];
                                    }
                                }
                            ?>
                        </li>
                        <li><span style="font-weight: bolder; color: black">Vice  Chairman :</span>
                            <?php
                            foreach($users as $row =>  $user)
                            {
                                if($exec[0]['vcm'] == $user['id'])
                                {
                                    echo $user['f_name'].' '.$user['l_name'];
                                }
                            }
                            ?>
                        </li>
                        <li><span style="font-weight: bolder; color: black">Secretary :</span>
                            <?php
                            foreach($users as $row =>  $user)
                            {
                                if($exec[0]['sec'] == $user['id'])
                                {
                                    echo $user['f_name'].' '.$user['l_name'];
                                }
                            }
                            ?>
                        </li>
                        <li><span style="font-weight: bolder; color: black">Director :</span>
                            <?php
                            foreach($users as $row =>  $user)
                            {
                                if($exec[0]['dir'] == $user['id'])
                                {
                                    echo $user['f_name'].' '.$user['l_name'];
                                }
                            }
                            ?>
                        </li>
                        <li><span style="font-weight: bolder; color: black">Organist :</span>
                            <?php
                            foreach($users as $row =>  $user)
                            {
                                if($exec[0]['org'] == $user['id'])
                                {
                                    echo $user['f_name'].' '.$user['l_name'];
                                }
                            }
                            ?>
                        </li>
                        <li><span style="font-weight: bolder; color: black">Voice Rep (Soprano) :</span>
                            <?php
                            foreach($users as $row =>  $user)
                            {
                                if($exec[0]['sop'] == $user['id'])
                                {
                                    echo $user['f_name'].' '.$user['l_name'];
                                }
                            }
                            ?>
                        </li>
                        <li><span style="font-weight: bolder; color: black">Voice Rep (Alto) :</span>
                            <?php
                            foreach($users as $row =>  $user)
                            {
                                if($exec[0]['alt'] == $user['id'])
                                {
                                    echo $user['f_name'].' '.$user['l_name'];
                                }
                            }
                            ?>
                        </li>
                        <li><span style="font-weight: bolder; color: black">Voice Rep (Tenor) :</span>
                            <?php
                            foreach($users as $row =>  $user)
                            {
                                if($exec[0]['ten'] == $user['id'])
                                {
                                    echo $user['f_name'].' '.$user['l_name'];
                                }
                            }
                            ?>
                        </li>
                        <li><span style="font-weight: bolder; color: black">Voice Rep (Bass) :</span>
                            <?php
                            foreach($users as $row =>  $user)
                            {
                                if($exec[0]['bass'] == $user['id'])
                                {
                                    echo $user['f_name'].' '.$user['l_name'];
                                }
                            }
                            ?>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-5 col-sm-5 d-none d-sm-block">
                    <div class="custom-box-squares">
                        <img class="custom-cloud left-pos-2" alt src="http://ctk.local/frontend/img/demos/church/others/left-cloud.png" />
                        <div class="custom-big-square left-pos-2 custom-box-shadow" style="background: url('assets/slider/slide1.jpg'); background-size: cover;"></div>
                        <div class="custom-small-square left-pos-2 custom-box-shadow" style="background: url('assets/slider/slide6.jpg'); background-size: cover;"></div>
                    </div>
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
                    <img src="http://ctk.local/front/img/demos/church/icons/custom-icon-1.png" alt class="img-repsonsive" />
                    <h2 class="font-weight-bold text-color-light">Our Values</h2>
                    <p class="custom-text-color-2">To sing songs of praise and to lead the congregation into worship by encouraging their participation in the Liturgy.</p>
                </div>
                <div class="col-lg-4 col-sm-8 mb-4 mb-lg-0">
                    <img src="http://ctk.local/front/img/demos/church/icons/custom-icon-2.png" alt class="img-repsonsive" />
                    <h2 class="font-weight-bold text-color-light">Join Us</h2>
                    <p class="custom-text-color-2"><strong class="text-color-light">Sundays at 10.00am - 11.00am</strong></br> at Christ the King Church, </br> Plot 3 Colville Street Kampala, UG</p>
                </div>
                <div class="col-lg-4 col-sm-8">
                    <img src="http://ctk.local/front/img/demos/church/icons/custom-icon-3.png" alt class="img-repsonsive" />
                    <h2 class="font-weight-bold text-color-light">Our Mission</h2>
                    <p class="custom-text-color-2">“To live and serve in Song and Praise for the Greater Glory of God”.</p>
                </div>
            </div>
        </div>
    </section>

<?php include('partials/footer.php') ?>

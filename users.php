<?php
require('libs/config.php');
$_SESSION['category'] = 'members';
include('partials/header.php');

$soprano = fetchMemberByVoice(1);
$alto = fetchMemberByVoice(2);
$tenor = fetchMemberByVoice(3);
$bass = fetchMemberByVoice(4);
?>

<section class="page-header page-header-modern page-header-background page-header-background-sm parallax overlay overlay-color-dark overlay-show overlay-op-1 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="http://ctk.local/uploads/slider/slide5.jpg">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12 align-self-center text-center">
                <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold mb-1">All</h1>
                <p class="text-color-light custom-secondary-font text-uppercase mb-0">Choir Members</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-no-border bg-color-light m-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-7">
                <h2 class="font-weight-bold">Soprano</h2>
                <p>
                    <ol>
                        <?php
                            foreach($soprano as $row => $voice1){
                                echo '<li>'.$voice1['f_name'].' '.$voice1['l_name'].'</li>';
                            }
                        ?>
                    </ol>
                </p>
                <h2 class="font-weight-bold">Alto</h2>
                <p>
                    <ol>
                        <?php
                        foreach($alto as $row => $voice2){
                            echo '<li>'.$voice2['f_name'].' '.$voice2['l_name'].'</li>';
                        }
                        ?>
                    </ol>
                </p>
                <h2 class="font-weight-bold">Tenor</h2>
                <p>
                    <ol>
                        <?php
                        foreach($tenor as $row => $voice3){
                            echo '<li>'.$voice3['f_name'].' '.$voice3['l_name'].'</li>';
                        }
                        ?>
                    </ol>
                </p>
                <h2 class="font-weight-bold">Bass</h2>
                <p>
                    <ol>
                        <?php
                        foreach($bass as $row => $voice3){
                            echo '<li>'.$voice3['f_name'].' '.$voice3['l_name'].'</li>';
                        }
                        ?>
                    </ol>
                </p>

            </div>
            <div class="col-lg-5 col-sm-5 d-none d-sm-block">
                <div class="custom-box-squares">
                    <img class="custom-cloud left-pos-2" alt src="assets/front/img/demos/church/others/left-cloud.png" />
                    <div class="custom-big-square left-pos-2 custom-box-shadow" style="background: url('assets/slider/slide1.jpg'); background-size: cover;"></div>
                    <div class="custom-small-square left-pos-2 custom-box-shadow" style="background: url('assets/gallery/kankobe2017/kankobe2017(11).jpg'); background-size: cover;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php') ?>


<!-- <section class="section section-no-border custom-position-relative custom-overflow-hidden p-0 m-0">
            <div class="custom-view-our-location text-center">
                <img src="img/demos/church/others/view-our-location.png" alt />
                <a href="#" onclick="initMapAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)" class="custom-view-location custom-secondary-font font-weight-bold text-color-light text-decoration-none">View Our Location</a>
            </div>
            <div id="googlemaps" class="google-map m-0"></div>
        </section> -->
<footer id="footer" class="bg-color-secondary custom-footer m-0" style="background: url('../assets/front/img/demos/church/footer-bg.jpg'); background-size: cover;">
    <div class="container pt-5">
        <div class="row text-center">
            <div class="col">
                <a href="../home.php" class="text-decoration-none"  style="color: #fff; font-weight: bolder; font-size: 20px">
                    Munyonyo Parish Church Choir
                </a>
            </div>
        </div>
        <hr class="solid tall custom-hr-color-1">
        <div class="row justify-content-center text-center">
            <div class="col-lg-3 custom-sm-margin-bottom-1">
                <i class="fas fa-map-marker-alt text-color-primary custom-icon-size-1"></i>
                <p class="custom-text-color-2 alternative-font-4 text-3-5">
                    <strong class="d-block text-color-light custom-secondary-font text-5-5 line-height-8 mb-1">Munyonyo Parish</strong>
                    St. Andrew Kaggwa Rd., </br>P.O BOX 11603 Kampala, UG
                </p>
            </div>
            <div class="col-lg-4 custom-sm-margin-bottom-1">
                <i class="far fa-clock text-color-primary custom-icon-size-1"></i>
                <p class="custom-text-color-2 alternative-font-4 text-3-5">
                    <strong class="d-block text-color-light custom-secondary-font text-5-5 line-height-8 mb-1">Join us on Sunday<br> for Mass</strong>
                    10.00am - 11.00am
                </p>
            </div>
            <div class="col-lg-3">
                <i class="fas fa-phone-volume text-color-primary custom-icon-size-1"></i>
                <p class="alternative-font-4 text-3-5">
                    <strong class="d-block text-color-light custom-secondary-font text-5-5 line-height-8 mb-1">Call us now</strong>
                    <a href="tel:" class="text-decoration-none custom-text-color-2">Phone : </a></br>
                    <a href="mail:" class="text-decoration-none custom-text-color-2">Email : </a>
                </p>
            </div>
        </div>
        <hr class="solid tall custom-hr-color-1">
        <div class="row text-center pb-5">
            <div class="col">
                <ul class="social-icons social-icons-clean custom-social-icons mb-3">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-googleplus"><a href="http://www.google.com/" target="_blank" title="Google Plus"><i class="fab fa-google-plus-g"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p class="alternative-font-4 text-3 text-color-light opacity-7">© Copyright 2016 - <?php echo date('Y') ?>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Vendor -->
<script src="../assets/front/vendor/jquery/jquery.min.js"></script>
<script src="../assets/front/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="../assets/front/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../assets/front/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="../assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/front/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="../assets/front/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="../assets/front/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="../assets/front/vendor/lazysizes/lazysizes.min.js"></script>
<script src="../assets/front/vendor/isotope/jquery.isotope.min.js"></script>
<script src="../assets/front/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/front/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="../assets/front/vendor/vide/jquery.vide.min.js"></script>
<script src="../assets/front/vendor/vivus/vivus.min.js"></script>
<script src="../assets/front/vendor/jquery.countdown/jquery.countdown.min.js"></script>
<!-- Theme Base, Components and Settings -->
<script src="../assets/front/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="../assets/front/js/views/view.contact.js"></script>
<!-- Demo -->
<script src="../assets/front/js/demos/demo-church.js"></script>

<!-- Theme Custom -->
<script src="../assets/front/js/custom.js"></script>
<!-- Theme Initialization Files -->
<script src="../assets/front/js/theme.init.js"></script>

<!-- Custom Javascript for the page -->

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script>
    /*
    Map Settings
        Find the Latitude and Longitude of your address:
            - https://www.latlong.net/
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/
    */
    // Map Markers
    var mapMarkers = [{
        address: "New York, NY 10017",
        html: "<strong>Porto Church</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/demos/church/others/pin.png",
            iconsize: [28, 35],
            iconanchor: [28, 35]
        }
    }];
    // Map Initial Location
    var initLatitude = 40.75198;
    var initLongitude = -73.96978;
    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: (($.browser.mobile) ? false : true),
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 14
    };
    // Map text-center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }
    // Custom Init Map
    var initMapAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').animate({
            height: 350
        }, 300, function(){
            setTimeout(function(){
                $('.custom-view-our-location').animate({
                    bottom: '-160px'
                }, 300);
            }, 1000);
            var map = $('#googlemaps').gMap(mapSettings),
                mapRef = $('#googlemaps').data('gMap.reference');
            // Styles from https://snazzymaps.com/
            var styles = [{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"simplified"},{"color":"#e94f3f"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"gamma":"0.50"},{"hue":"#ff4a00"},{"lightness":"-79"},{"saturation":"-86"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"hue":"#ff1700"}]},{"featureType":"landscape.natural.landcover","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"poi","elementType":"all","stylers":[{"color":"#e74231"},{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#4d6447"},{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"color":"#f0ce41"},{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"color":"#363f42"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#231f20"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#6c5e53"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#313639"},{"visibility":"off"}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"hue":"#ff0000"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"visibility":"simplified"},{"hue":"#ff0000"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#0e171d"}]}];
            var styledMap = new google.maps.StyledMapType(styles, {
                name: 'Styled Map'
            });
            mapRef.mapTypes.set('map_style', styledMap);
            mapRef.setMapTypeId('map_style');
        });
    }
</script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Fish Market</title>
    <link rel="stylesheet" href="https://use.typekit.net/qcb3mly.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.1.3/dist/css/splide.min.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/template-parts/city-fish-market/city-fish-market.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"
        integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA="
        crossorigin="anonymous"></script>
</head>
<body>

    <main role="main" id="page-city-fish-market">
        <div class="cf-mobile-nav-wrap">
            <div class="container">
                <div class="row justify-content-between py-1 px-3 align-items-center">
                    <div class="col-auto">
                        <div class="logo">
                            <img style="width: 50px;" src="<?php echo get_theme_file_uri(); ?>/assets/img/city_fish_logo.png" alt="City Fish Market">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div id="cf-burger-nav" role="button" aria-label="Open navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>  
                </div>
            </div>
            <nav class="cf-mobile-nav cf-blue-bg px-0">
                <ul class="menu unstyled-list cf-menu-mobile">
                    <li class="menu-item mb-0">
                        <a class="px-3 py-2 white-txt uppercase" href="#featured">featured</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="px-3 py-2 white-txt uppercase" href="#about">About Us</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="px-3 py-2 white-txt uppercase" href="#menus">Menus</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="px-3 py-2 white-txt uppercase" href="#party-spaces">Party Spaces</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="px-3 py-2 white-txt uppercase" href="#awards">Awards</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="px-3 py-2 white-txt uppercase" href="#hours-and-location">Hours & Location</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="cf-blue-bg cf-menu-wrap px-0">
                    <div id="cf-menu">
                        <div class="logo px-6 py-4 white-bg">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/img/city_fish_logo.png" alt="City Fish Market" class="size-full-width-img">
                        </div>
                        <ul class="menu unstyled-list cf-menu">
                            <li class="menu-item mb-0">
                                <a class="px-3 py-2 white-txt uppercase" href="#featured">featured</a>
                            </li>
                            <li class="menu-item mb-0">
                                <a class="px-3 py-2 white-txt uppercase" href="#about">About Us</a>
                            </li>
                            <li class="menu-item mb-0">
                                <a class="px-3 py-2 white-txt uppercase" href="#menus">Menus</a>
                            </li>
                            <li class="menu-item mb-0">
                                <a class="px-3 py-2 white-txt uppercase" href="#party-spaces">Party Spaces</a>
                            </li>
                            <li class="menu-item mb-0">
                                <a class="px-3 py-2 white-txt uppercase" href="#awards">Awards</a>
                            </li>
                            <li class="menu-item mb-0">
                                <a class="px-3 py-2 white-txt uppercase" href="#hours-and-location">Hours & Location</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-four-fifth site-wrap p-relative px-0">
                    <section class="hero full-bg p-relative" id="featured" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"> 
                        <h1 class="cf-h1">Featured <br> Entree</h1>
                        <div class="cf-featured white-txt px-5 py-3">
                            <h4 class="mb-0"><?php the_field('featured_entree'); ?></h4>
                            <p class="mb-0"><?php the_field('featured_entree_description'); ?></p>
                        </div>
                    </section>
                    <section id="about">
                    <div class="cf-blue-bg p-2">
                        <h3 class="uppercase white-txt center-txt mb-0">About City Fish Market</h3>
                    </div>
                    <div class="py-5 px-3 p-md-7 full-bg" style="background-image:url('<?php echo get_theme_file_uri(); ?>/assets/img/about.jpg');">
                        <?php the_content(); ?>
                    </div>
                    </section>
                    <section id="menus">
                        <div class="cf-blue-bg p-2">
                            <h3 class="uppercase white-txt center-txt mb-0">Menus</h3>
                        </div>
                        <div class="container py-5 px-3 p-md-7">
                            <div class="row">
                            <?php $cfMenuArgs = array(
                                'post_type' => 'cf_menu',
                                'order' => 'ASC'
                            );
                            $cfMenuLoop = new WP_Query( $cfMenuArgs );
                            if ($cfMenuLoop->have_posts()) :
                                while ($cfMenuLoop->have_posts()) : $cfMenuLoop->the_post(); ?>
                                <div class="cf-menu col-12 col-md-6 mb-4 px-4 px-lg-0">
                                    <?php the_post_thumbnail('full-width-img mb-3') ?>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="cf-divider mb-3"></div>
                                    <?php the_content(); ?>
                                </div>
                                <?php endwhile;
                            endif; wp_reset_postdata(); ?>
                            </div>  
                        </div>
                    </section>
                    <section id="party-spaces">
                        <div class="cf-blue-bg p-2">
                            <h3 class="uppercase white-txt center-txt mb-0">Party Spaces</h3>
                        </div>
                        <div class="cf-blue-bg px-4 pb-5 pb-md-7 px-md-7 white-txt" style="font-size:1.3rem;">
                            <h2 class="white-txt center-txt py-4">Plan Your Occasion With Us</h2>
                            <p style="font-size:1.3rem;">City Fish Market is the perfect space to plan your next event. To request information on private parties, contact Sherry Craig.</p>
                            <div class="mb-3">
                                <a class="white-txt" href="tel:5614871600"><i class="fas fa-phone"></i> 561.487.1600</a>
                            </div>
                            <div>
                                <a class="white-txt" href="mailto:info@cityfishmarket.com"><i class="fas fa-envelope"></i> info@cityfishmarket.com</a>
                            </div>
                        </div>
                        <div class="py-5 px-3 p-md-7">
                            <div class="container">
                                <div class="row">
                                <?php $partySpaceArgs = array(
                                    'post_type' => 'cf_party_spaces',
                                    'order' => 'ASC'
                                ); 
                                $partySpaceLoop = new WP_Query( $partySpaceArgs );
                                if ($partySpaceLoop->have_posts()) :
                                    while ($partySpaceLoop->have_posts()) : $partySpaceLoop->the_post(); ?>
                                    <div class="col-12 col-md-6 mb-5">
                                        <div class="center-txt mb-5">
                                            <?php the_post_thumbnail('party-space-img'); ?>
                                        </div>
                                        <h4 class="mb-3"><?php the_title(); ?></h4>
                                        <div class="cf-divider mb-3"></div>
                                        <?php the_content(); ?>
                                    </div>
                                    <?php endwhile;
                                endif; wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="py-5 px-3 p-md-7 cf-light-blue-bg">
                            <h2 class="center-txt blue uppercase mb-5">ENJOY OUR ANCHORED IN ACCOMMODATIONS!</h2>
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-12 col-md-4 px-7">
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/img/anchor.svg" alt="anchor" class="mb-4 mb-lg-0">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <ul>
                                            <li>Specialized attention to each function</li>
                                            <li>Menu packages & custom printed menus</li>
                                            <li>Wheelchair accessibility</li>
                                            <li>Valet parking</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="awards">
                        <div class="cf-blue-bg p-2">
                            <h3 class="uppercase white-txt center-txt mb-0">Awards</h3>
                        </div>
                        <div class="container py-5 px-3 p-md-7">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-4 col-lg-5">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/awards.svg" alt="trophy">
                                </div>
                                <div class="col-12 col-md-8 col-lg-7 awards">
                                    <h2 class="blue mb-1">3.5 OUT OF 4 STARS</h2>
                                    <h4 class="mb-1">-South Florida Sun Sentinal, 2016</h4>
                                    <h2 class="blue mb-1">BEST BAR MENU</h2>
                                    <h4 class="mb-1">-Boca Raton Magazine – 2016</h4>
                                    <h2 class="blue mb-1">NEW SEAFOOD SPOT</h2>
                                    <h4 class="mb-1">-Boca Raton Magazine, 2016</h4>
                                    <h2 class="blue mb-1">BEST SEAFOOD</h2>
                                    <h4 class="mb-1">-Boca Raton Magazine, 2015-2016</h4>
                                    <h2 class="blue mb-1">BEST SEAFOOD RESTAURANT</h2>
                                    <h4 class="mb-1">-Broward County Times, 2016</h4>
                                </div>
                            </div>
                        </div>
                        <div id="reviews" class="py-5 px-3 p-md-7 full-bg splide" style="background-image:url('<?php echo get_theme_file_uri(); ?>/assets/img/plan_your_occasion.jpg');">
                        <?php $reviewArgs = array(
                            'post_type' => 'cf_reviews',
                            'order' => 'ASC'
                        );
                        $reviewLoop = new WP_Query( $reviewArgs );
                        if ($reviewLoop->have_posts()) : ?>
                            <div class="container">
                                <div class="splide__track">
                                    <div class="splide__list">
                                    <?php while ($reviewLoop->have_posts()) : $reviewLoop->the_post(); ?>
                                        <div class="px-3 py-5 p-md-7 p-relative white-txt splide__slide">
                                            <img style="width:auto;" class="open-quote" src="<?php echo get_theme_file_uri(); ?>/assets/img/quote_open.png" alt="open quote">
                                            <img style="width:auto;" class="close-quote" src="<?php echo get_theme_file_uri(); ?>/assets/img/quote_close.png" alt="open quote">
                                            <?php the_content(); ?>
                                            <h4 class="mb-0 cf-yellow-txt">- <?php the_title(); ?></h4>
                                        </div>
                                    <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; wp_reset_postdata(); ?>
                        </div>
                    </section>
                    <section id="hours-and-location">
                        <div class="cf-blue-bg p-2">
                            <h3 class="uppercase white-txt center-txt mb-0">Hours & Location</h3>
                        </div>
                        <div class="container-fluid p-0">
                            <div class="row no-gutters">
                            <?php $hourArgs = array(
                                'post_type' => 'cf_hours',
                                'order' => 'ASC'
                            );
                            $hourLoop = new WP_Query( $hourArgs );
                            if ($hourLoop->have_posts()) :
                                while ($hourLoop->have_posts()) : $hourLoop->the_post(); ?>
                                <div class="col-12 col-md-6 full-bg hours-bg" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
                                    <div class="container-fluid p-0" style="height:100%;">
                                        <div class="row no-gutters" style="height:100%;">
                                            <div class="col-4 col-md-6"></div>
                                            <div class="col-8 col-md-6 hours white-txt p-4" style="height:100%;">
                                            <h3><?php the_title(); ?></h3>
                                            <?php if (have_rows('hours')) : 
                                                while (have_rows('hours')) : the_row();
                                                $weekdays = get_sub_field('weekdays');
                                                $weekends = get_sub_field('weekends'); ?>
                                                <div class="cf-divider-yellow mb-3"></div>
                                                <?php if ($weekdays) : ?>
                                                <p class="mb-0"><?php the_sub_field('weekdays') ?></p>
                                                <p class="mb-0"><?php the_sub_field('weekdays_time_start'); ?> - <?php the_sub_field('weekdays_time_end') ?></p>
                                                <?php endif; ?>
                                                <?php if ($weekends) : ?>
                                                <p class="mb-0"><?php the_sub_field('weekends'); ?></p>
                                                <p class="mb-0"><?php the_sub_field('weekends_time_start'); ?> - <?php the_sub_field('weekends_time_end') ?></p>
                                                <?php endif; ?>
                                                <?php endwhile;
                                            endif; wp_reset_postdata(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;
                            endif; wp_reset_postdata(); ?>
                            </div>
                        </div>
                        <?php $cityFishMap = get_field('map');
                        if( $cityFishMap ): ?>
                            <div class="acf-map" data-zoom="10">
                                <div class="marker" data-lat="<?php echo esc_attr($cityFishMap['lat']); ?>" data-lng="<?php echo esc_attr($cityFishMap['lng']); ?>">
                                    <h4 class="mb-0 center-txt">City Fish Market</h4>
                                    <p class="mb-0 center-txt"><?php echo $cityFishMap['address'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </section>
                    <footer class="py-5 px-3 p-md-7 yellow-bg blue center-txt">
                        <p class="mb-0">© 2016 City Fish Market. All Rights Reserved.</p>
                    </footer>
                </div>
            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.1.3/dist/js/splide.min.js"></script>
    <script>
        new Splide( '.splide', {
            type        :   'loop',
            perPage     :   1,
            speed       :   1000,
            autoplay    :   true,
            arrows      :   false,
            pagination  :   false,
            interval    :   5000
        }).mount();
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=API_GOES_HERE"></script>
    <script type="text/javascript">
        (function( $ ) {

        /**
         * initMap
         *
         * Renders a Google Map onto the selected jQuery element
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @return  object The map instance.
         */
        function initMap( $el ) {

            // Find marker elements within map.
            var $markers = $el.find('.marker');

            // Create gerenic map.
            var mapArgs = {
                zoom        : $el.data('zoom') || 16,
                mapTypeId   : google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map( $el[0], mapArgs );

            // Add markers.
            map.markers = [];
            $markers.each(function(){
                initMarker( $(this), map );
            });

            // Center map based on markers.
            centerMap( map );

            // Return map instance.
            return map;
        }

        /**
         * initMarker
         *
         * Creates a marker for the given jQuery element and map.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @param   object The map instance.
         * @return  object The marker instance.
         */
        function initMarker( $marker, map ) {

            // Get position from marker.
            var lat = $marker.data('lat');
            var lng = $marker.data('lng');
            var latLng = {
                lat: parseFloat( lat ),
                lng: parseFloat( lng )
            };

            // Create marker instance.
            var marker = new google.maps.Marker({
                position : latLng,
                map: map
            });

            // Append to reference for later use.
            map.markers.push( marker );

            // If marker contains HTML, add it to an infoWindow.
            if( $marker.html() ){

                // Create info window.
                var infowindow = new google.maps.InfoWindow({
                    content: $marker.html()
                });

                // Show info window when marker is clicked.
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open( map, marker );
                });
            }
        }

        /**
         * centerMap
         *
         * Centers the map showing all markers in view.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   object The map instance.
         * @return  void
         */
        function centerMap( map ) {

            // Create map boundaries from all map markers.
            var bounds = new google.maps.LatLngBounds();
            map.markers.forEach(function( marker ){
                bounds.extend({
                    lat: marker.position.lat(),
                    lng: marker.position.lng()
                });
            });

            // Case: Single marker.
            if( map.markers.length == 1 ){
                map.setCenter( bounds.getCenter() );

            // Case: Multiple markers.
            } else{
                map.fitBounds( bounds );
            }
        }

        // Render maps on page load.
        $(document).ready(function(){
            $('.acf-map').each(function(){
                var map = initMap( $(this) );
            });
        });

        })(jQuery);
    </script>
    <script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/template-parts/city-fish-market/city-fish-market.js"></script>
</body>
</html>

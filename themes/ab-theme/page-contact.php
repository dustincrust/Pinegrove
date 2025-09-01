<?php
/**
 * Template Name: Contact
 */

$title = get_field('title');
$heading = get_field('heading');
$subheading = get_field('subheading');

$icon = get_field('email_icon');
$iconPic = $icon['sizes']['large'];
$email = get_field('email');
$image = get_field('contact_img');

$contactFormId = get_field('hubspot_shortcode','option');

$mapIcon = get_field('map_icon');
$mapPic = $mapIcon['sizes']['large'];
$map1 = get_field('map_1');

$addressName1 = get_field('address_title_1');
$address1 = get_field('woodbury_address');
$phone1 = get_field('phone_1');

$map2 = get_field('map_2');
$addressName2 = get_field('address_title_2');
$address2 = get_field('minnetonka_address');
$phone2 = get_field('phone_2');

$map3 = get_field('map_3');
$addressName3 = get_field('address_title_3');
$address3 = get_field('st_louis_park_address');
$phone3 = get_field('phone_3');

$map4 = get_field('map_4');
$addressName4 = get_field('address_title_4');
$address4 = get_field('apple_valley');
$phone4 = get_field('phone_4');

get_header(); ?>

    <script>

        (function($){

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

                let customMapStyle = [
                    {
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]

                // Find marker elements within map.
                var $markers = $el.find('.marker');

                // Create gerenic map.
                var mapArgs = {
                    zoom        : $el.data('zoom') || 13,
                    mapTypeId   : google.maps.MapTypeId.ROADMAP,
                    styles : customMapStyle
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
                    map: map,
                    icon: '<?php echo $mapPic;?>' });

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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAegewuNFQqnmL2fnR4I77VsyvfQX8TMH0"></script>

    <section id="primary" class="content-area ltbl-section">
        <div id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>

            <!-- Contact Us Section -->
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <h1 class="teal block-title general-ss-name block-page__name">Contact Us</h1>
                            <p class="dk-teal-font heading-48 mb-1 lead baskerville  block-page__title">Talk to us about </br>your situation & goals</p>
                            <p class="block-subheading w-85 ltbl-text block-page__subtitle">
                                We would love to hear about your current financial situation
                                and discuss if we can help. Please fill out the form or email us
                                to start the conversation.</p>
                            <div class="row d-none d-lg-flex">
                                <div class="col-12">
                                    <div class="contact__image--wrapper">
                                        <?php if($image): ;?>
                                            <picture>
                                                <source srcset="<?php echo $image['sizes']['medium_large']?>">
                                                <img class="contact__image" src="<?php echo $image['sizes']['medium_large']?>" width="<?php echo $image['sizes']['medium_large-width']?>" height="<?php echo $image['sizes']['medium_large-height']?>" title="<?php echo $image['title']?:$image['alt']?>" alt="<?php echo $image['alt']?:$image['title']?>"/>
                                            </picture>
                                        <?php endif;?>
                                    </div>
                                    <div class="contact-email">
                                            <div class="row">
                                            <div class="col-3 col-md-2">
                                            <?php if($icon): ?>
                                                <div class="icon-container ">
                                                    <img src="<?php echo $iconPic;?>" class="financial-prosperity-img">
                                                </div>
                                            <?php endif;?>
                                            </div>
                                            <div class="col-9 col-md-10 sm-less-left-padding d-flex flex-column justify-content-center">
                                                <h3 class="mb-0 light-weight poppins-block-smaller-heading contact__email--title">Email Us</h3>
                                                <h3 class="teal sm-fs-16 contact__email--wrapper"><a class="contact__email" href="mailto:<?php echo $email;?>"><?php echo $email;?></a></h3>
                                            </div>

                                        </div>
                                    
                                    </div>
                                   
                                </div>
                                <?php if($email): ?>
                                   
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="contact-form-container contactForm__form">
                                <?php echo do_shortcode(get_field('hubspot_shortcode'));?>
                            </div>
                        </div>

                        
                                <div class="col-12 d-lg-none">
                                    <div class="contact__image--wrapper">
                                        <?php if($image): ;?>
                                            <picture>
                                                <source srcset="<?php echo $image['sizes']['medium_large']?>">
                                                <img class="contact__image" src="<?php echo $image['sizes']['medium_large']?>" width="<?php echo $image['sizes']['medium_large-width']?>" height="<?php echo $image['sizes']['medium_large-height']?>" title="<?php echo $image['title']?:$image['alt']?>" alt="<?php echo $image['alt']?:$image['title']?>"/>
                                            </picture>
                                        <?php endif;?>
                                    </div>
                                    <div class="contact-email">
                                            <div class="row">
                                            <div class="col-3 col-md-2">
                                            <?php if($icon): ?>
                                                <div class="icon-container ">
                                                    <img src="<?php echo $iconPic;?>" class="financial-prosperity-img">
                                                </div>
                                            <?php endif;?>
                                            </div>
                                            <div class="col-9 col-md-10 sm-less-left-padding d-flex flex-column justify-content-center">
                                                <h3 class="mb-0 light-weight poppins-block-smaller-heading contact__email--title">Email Us</h3>
                                                <h3 class="teal sm-fs-16 contact__email--wrapper"><a class="contact__email" href="mailto:<?php echo $email;?>"><?php echo $email;?></a></h3>
                                            </div>

                                        </div>
                                    
                                    </div>
                                   
                                </div>
                                <?php if($email): ?>
                                   
                                <?php endif;?>
                            
                    </div>
                </div>
            </section>
            <!-- / Contact Us Section -->

            <!-- Location Section -->
            <section class="py-5">
                <div class="container pb-5">
                    <div class="row text-center">
                        <div class="col-12 col-md-6">
                            <?php if($map1): ?>
                                <div class="acf-map mb-4" data-zoom="13">
                                    <div class="marker" data-lat="<?php echo esc_attr($map1['lat']); ?>" data-lng="<?php echo esc_attr($map1['lng']); ?>">
                                        <p><em><?php echo esc_html( $map1['address'] ); ?></em></p>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if($addressName1): ?>
                                <h3 class="poppins-block-heading"><?php echo $addressName1;?></h3>
                            <?php endif;?>
                            <?php if($address1): ?>
                                <div class="block-subheading ltbl-text map__desc"><?php echo $address1;?></div>
                            <?php endif;?>
                            <?php if($phone1): ?>
                                <h3 class="teal">
                                    <a href="tel:<?php echo $phone1;?>"><?php echo $phone1;?></a>
                                </h3>
                            <?php endif;?>
                        </div>
                        <div class="col-12 col-md-6">
                            <?php if($map2): ?>
                                <div class="acf-map mb-4" data-zoom="13">
                                    <div class="marker" data-lat="<?php echo esc_attr($map2['lat']); ?>" data-lng="<?php echo esc_attr($map2['lng']); ?>">
                                        <p><em><?php echo esc_html( $map2['address'] ); ?></em></p>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if($addressName2): ?>
                                <h3 class="poppins-block-heading"><?php echo $addressName2;?></h3>
                            <?php endif;?>
                            <?php if($address2): ?>
                                <div class="block-subheading ltbl-text map__desc"><?php echo $address2;?></div>
                            <?php endif;?>
                            <?php if($phone2): ?>
                                <h3 class="teal">
                                    <a href="tel:<?php echo $phone2;?>"><?php echo $phone2;?></a>
                                </h3>
                            <?php endif;?>
                        </div>
                 
                  
                        <div class="col-12 col-md-6">
                            <?php if($map3): ?>
                                <div class="acf-map mb-4" data-zoom="13">
                                    <div class="marker" data-lat="<?php echo esc_attr($map3['lat']); ?>" data-lng="<?php echo esc_attr($map3['lng']); ?>">
                                        <p><em><?php echo esc_html( $map3['address'] ); ?></em></p>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if($addressName3): ?>
                                <h3 class="poppins-block-heading"><?php echo $addressName3;?></h3>
                            <?php endif;?>
                            <?php if($address3): ?>
                                <div class="block-subheading ltbl-text map__desc"><?php echo $address3;?></div>
                            <?php endif;?>
                            <?php if($phone3): ?>
                                <h3 class="teal">
                                    <a href="tel:<?php echo $phone3;?>"><?php echo $phone3;?></a>
                                </h3>
                            <?php endif;?>
                        </div>


                        <div class="col-12 col-md-6">
                            <?php if($map4): ?>
                                <div class="acf-map mb-4" data-zoom="13">
                                    <div class="marker" data-lat="<?php echo esc_attr($map4['lat']); ?>" data-lng="<?php echo esc_attr($map4['lng']); ?>">
                                        <p><em><?php echo esc_html( $map4['address'] ); ?></em></p>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if($addressName4): ?>
                                <h3 class="poppins-block-heading"><?php echo $addressName4;?></h3>
                            <?php endif;?>
                            <?php if($address4): ?>
                                <div class="block-subheading ltbl-text map__desc"><?php echo $address4;?></div>
                            <?php endif;?>
                            <?php if($phone4): ?>
                                <h3 class="teal">
                                    <a href="tel:<?php echo $phone4;?>"><?php echo $phone4;?></a>
                                </h3>
                            <?php endif;?>
                        </div>
                  
                </div>
            </section>
            <!-- / Location Section -->

        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();

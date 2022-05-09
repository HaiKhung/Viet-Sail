<?php
/**
 * Header file for the viet sail WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage viet sail
 * @since viet sail 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="wp-content/themes/vietsail/assets/css/styles.css"> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet"> -->
    <title><?php the_title(); ?></title>
    <!-- Load font awesome icons for social media -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_Vs">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_Vs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_Vs/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_Vs/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon_Vs/safari-pinned-tab.svg" color="#383d3f">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#151313">

    <!-- Open Graph data -->
    <meta property="og:title" content="Viet Sails Phu Quoc" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.VietSailsPhuQuoc.com/" />
    <meta property="og:image" content="/assets/imagesVsails/accueilVs.jpg" />
    <meta property="og:description" content="The first Sailing Center in Phu Quoc island Vietnam" />

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Viet_Sails">
    <meta name="twitter:title" content="Viet Sails Phu Quoc">
    <meta name="twitter:description" content="The first Sailing Center in Phu Quoc island Vietnam">
    <meta name="twitter:creator" content="@haicocobar">
    <meta name="twitter:image" content="/assets/imagesVsails/accueilVs.jpg">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vissense/0.10.0/vissense.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
	<?php wp_head(); ?>
</head>

<body>
    <!--Navigation-->
    <section id="section-navigation">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 background-video">
                        <iframe
                            src="https://www.youtube.com/embed/Ba9_0jGHTzs?controls=0&mute=1&showinfo=0&controls=0&autoplay=1&loop=1&playlist=Ba9_0jGHTzs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="container-fluid g-0">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light position-xs-sm-only-fixed p-0">
                        <button class="navbar-toggler button-navbar-fixed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end pe-lg-5" id="navbarSupportedContent">

						<?php wp_nav_menu( 
							array( 
								'theme_location' => 'primary-menu', 
								'menu_id' => 'main-menu', 
								'menu_class' => 'navbar-nav ul-navbar-content fs-5 fw-bold'
							) 
							); ?>
                            <!-- <ul class="navbar-nav ul-navbar-content fs-5 fw-bold">
                                <li class="nav-item">
                                    <a class="nav-link active mt-5 mt-lg-0" aria-current="page"
                                        href="#section-eco">Eco-friendly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section-offers">Our-Offers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section-us">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section-video">Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section-contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="+84776830072"><i class="fa-solid fa-phone"></i>+84 77
                                        683 0072</a>
                                </li>
                            </ul> -->
                        </div>
                    </nav>
                </div>
            </div>
            <div class="container-fluid background-content mt-5 mt-lg-3 g-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
                            <div class="logo">
                                <img class="w-25" src="assets/imagesVsails/VS_Logo_Black.png" alt="">
                            </div>
                            <div class="text text-center">
                                <h4 class="fs-3 text-danger">SAILING CLUB</h4>
                                <h1 class="fs-3 fs-2"><span class="fs-2 fs-1 fw-bold">LEARN SAILING</span> <br />
                                    In The Vietnamese Island Paradise</h1>
                                <p class="w-50 mx-auto fw-bold">
                                    We are happy to assist with organizing
                                    transportation to our locations.
                                </p>
                                <div class="button">
                                    <a class="btn btn-danger w-50" href="#" role="button">BOOK HERE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );

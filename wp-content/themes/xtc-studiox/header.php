<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Inter%3A1%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic&display=swap&ver=6.5.3" rel="stylesheet">
</head>

<body <?php body_class('layout-full-width no-shadows header-classic header-boxed sticky-header'); ?>>

<div id="Wrapper">
    <div id="Header_wrapper" class="">

        <header id="Header">


            <div class="header_placeholder" style="height: 0px;"></div>

            <div id="Top_bar" class="" style="top: 0px;">

                <div class="container">
                    <div class="column one">
                        <div class="top_bar_left clearfix">
                            <div class="logo">
                                <a id="logo" href="<?php bloginfo('url'); ?>" title="Extreme Tech Challenge" data-height="60" data-padding="15" class="retina">
                                    <img class="logo-main scale-with-grid svg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/StudioX-white-text.svg" data-retina="https://extremetechdev.wpenginepowered.com/wp-content/uploads/2022/08/XTC-Logo-Long.svg" data-height="259" alt="XTC-Logo-Long" data-no-retina="" style="max-height: 60px;"><img class="logo-sticky scale-with-grid svg" src="https://extremetechdev.wpenginepowered.com/wp-content/uploads/2022/08/XTC-Logo-Short.svg" data-retina="https://extremetechdev.wpenginepowered.com/wp-content/uploads/2022/08/XTC-Logo-Short.svg" data-height="259" alt="XTC-Logo-Short" data-no-retina="" style="max-height: 35px;"><img class="logo-mobile scale-with-grid svg" src="https://extremetechdev.wpenginepowered.com/wp-content/uploads/2022/08/XTC-Logo-Long.svg" data-retina="https://extremetechdev.wpenginepowered.com/wp-content/uploads/2022/08/XTC-Logo-Long.svg" data-height="259" alt="XTC-Logo-Long" data-no-retina="" style="max-height: 50px;"><img class="logo-mobile-sticky scale-with-grid svg" src="https://extremetechdev.wpenginepowered.com/wp-content/uploads/2022/08/XTC-Logo-Long.svg" data-retina="https://extremetechdev.wpenginepowered.com/wp-content/uploads/2022/08/XTC-Logo-Long.svg" data-height="259" alt="XTC-Logo-Long" data-no-retina="" style="max-height: 50px;">
                                </a>
                            </div>
                        </div>

                        <div class="header-cta">
                            <a href="<?php bloginfo('url'); ?>/#start" class="cta-button">
                                <span>
                                    GET STARTED
                                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.60156 5.89062C7.95703 6.21875 7.95703 6.79297 7.60156 7.12109L2.35156 12.3711C2.02344 12.7266 1.44922 12.7266 1.12109 12.3711C0.765625 12.043 0.765625 11.4688 1.12109 11.1406L5.74219 6.49219L1.12109 1.87109C0.765625 1.54297 0.765625 0.96875 1.12109 0.640625C1.44922 0.285156 2.02344 0.285156 2.35156 0.640625L7.60156 5.89062Z" fill="white"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
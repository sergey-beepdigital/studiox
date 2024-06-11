<?php
	/**
	 * Template Name: Promotional
	 */

	get_header();

	$theme_options = get_option('studiox_theme_options');
    $form_shortcode = $theme_options['form_shortcode'];
?>

<style>
	.module-package .outer-wrap .inner-wrap .columns.packages .column .package-wrap .content-wrap .paragraph-wrap.included ul li:before {
		background-image: url("<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-white.svg");
	}

	@media only screen and (min-width: 768px) {
		.module-package .outer-wrap .inner-wrap .columns.packages .column .package-wrap.main:hover .content-wrap .paragraph-wrap.included ul li:before {
			background-image: url("<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-pink.svg");
		}
	}

	.center-content,.module-team .outer-wrap,body{position:relative}.header-wrap .white,.header-wrap .white .h1,.header-wrap .white .h2,.header-wrap .white .h3,.header-wrap .white .h4,.header-wrap .white .h5,.header-wrap .white .h6,.header-wrap .white a,.header-wrap .white h1,.header-wrap .white h2,.header-wrap .white h3,.header-wrap .white h4,.header-wrap .white h5,.header-wrap .white h6,.header-wrap .white p,.header-wrap .white span,.header-wrap .white ul li,.header-wrap.white,.header-wrap.white .h1,.header-wrap.white .h2,.header-wrap.white .h3,.header-wrap.white .h4,.header-wrap.white .h5,.header-wrap.white .h6,.header-wrap.white a,.header-wrap.white h1,.header-wrap.white h2,.header-wrap.white h3,.header-wrap.white h4,.header-wrap.white h5,.header-wrap.white h6,.header-wrap.white p,.header-wrap.white span,.header-wrap.white ul li,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .link-wrap.read-more-wrap .read-more,.paragraph-wrap .white,.paragraph-wrap .white .h1,.paragraph-wrap .white .h2,.paragraph-wrap .white .h3,.paragraph-wrap .white .h4,.paragraph-wrap .white .h5,.paragraph-wrap .white .h6,.paragraph-wrap .white a,.paragraph-wrap .white h1,.paragraph-wrap .white h2,.paragraph-wrap .white h3,.paragraph-wrap .white h4,.paragraph-wrap .white h5,.paragraph-wrap .white h6,.paragraph-wrap .white p,.paragraph-wrap .white span,.paragraph-wrap .white ul li,.paragraph-wrap.white,.paragraph-wrap.white .h1,.paragraph-wrap.white .h2,.paragraph-wrap.white .h3,.paragraph-wrap.white .h4,.paragraph-wrap.white .h5,.paragraph-wrap.white .h6,.paragraph-wrap.white a,.paragraph-wrap.white h1,.paragraph-wrap.white h2,.paragraph-wrap.white h3,.paragraph-wrap.white h4,.paragraph-wrap.white h5,.paragraph-wrap.white h6,.paragraph-wrap.white p,.paragraph-wrap.white span,.paragraph-wrap.white ul li,.sub-header-wrap .white,.sub-header-wrap .white .h1,.sub-header-wrap .white .h2,.sub-header-wrap .white .h3,.sub-header-wrap .white .h4,.sub-header-wrap .white .h5,.sub-header-wrap .white .h6,.sub-header-wrap .white a,.sub-header-wrap .white h1,.sub-header-wrap .white h2,.sub-header-wrap .white h3,.sub-header-wrap .white h4,.sub-header-wrap .white h5,.sub-header-wrap .white h6,.sub-header-wrap .white p,.sub-header-wrap .white span,.sub-header-wrap .white ul li,.sub-header-wrap.white,.sub-header-wrap.white .h1,.sub-header-wrap.white .h2,.sub-header-wrap.white .h3,.sub-header-wrap.white .h4,.sub-header-wrap.white .h5,.sub-header-wrap.white .h6,.sub-header-wrap.white a,.sub-header-wrap.white h1,.sub-header-wrap.white h2,.sub-header-wrap.white h3,.sub-header-wrap.white h4,.sub-header-wrap.white h5,.sub-header-wrap.white h6,.sub-header-wrap.white p,.sub-header-wrap.white span,.sub-header-wrap.white ul li,body:after{color:#fff}.cta-button,.fade-in-up{will-change:opacity,transform}.fill-container.fixed,body:after{position:fixed}body:after{bottom:0;left:0;width:auto;height:19px;padding:10px;text-align:right;opacity:.8;background-color:#000;z-index:9999999}/*@media only screen and (min-width:375px){body:after{content:'mobilPortrait - 375px'}}@media only screen and (min-width:480px){body:after{content:'mobileLandscape - 480px'}}@media only screen and (min-width:640px){body:after{content:'tabletSmall - 640px'}}@media only screen and (min-width:768px){body:after{content:'tabletPortrait - 768px'}}@media only screen and (min-width:1024px){body:after{content:'tabletLandscape - 1024px'}}*//*@media only screen and (min-width:1284px){body:after{content:'desktop - 1284px';content:'desktopLarge - 1440px'}}*/.fade-in-up{opacity:0;transform:translateY(30px);transition:opacity .5s,transform .5s cubic-bezier(.165, .84, .44, 1)}.in_viewport .fade-in-down,.in_viewport .fade-in-up{opacity:1;transform:translateY(0)}[data-delay="1"]{transition-delay:0.2s!important}[data-delay="2"]{transition-delay:0.4s!important}[data-delay="3"]{transition-delay:0.6s!important}[data-delay="4"]{transition-delay:0.8s!important}[data-delay="5"]{transition-delay:1s!important}[data-delay="6"]{transition-delay:1.2s!important}[data-delay="7"]{transition-delay:1.4s!important}[data-delay="8"]{transition-delay:1.6s!important}[data-delay="9"]{transition-delay:1.8s!important}[data-delay="10"]{transition-delay:2s!important}[data-delay="11"]{transition-delay:2.2s!important}[data-delay="12"]{transition-delay:2.4s!important}[data-delay="13"]{transition-delay:2.6s!important}[data-delay="14"]{transition-delay:2.8s!important}[data-delay="15"]{transition-delay:3s!important}[data-delay="16"]{transition-delay:3.2s!important}[data-delay="17"]{transition-delay:3.4s!important}[data-delay="18"]{transition-delay:3.6s!important}[data-delay="19"]{transition-delay:3.8s!important}[data-delay="20"]{transition-delay:4s!important}[data-delay="21"]{transition-delay:4.2s!important}[data-delay="22"]{transition-delay:4.4s!important}[data-delay="23"]{transition-delay:4.6s!important}[data-delay="24"]{transition-delay:4.8s!important}[data-delay="25"]{transition-delay:5s!important}[data-delay="26"]{transition-delay:5.2s!important}[data-delay="27"]{transition-delay:5.4s!important}[data-delay="28"]{transition-delay:5.6s!important}[data-delay="29"]{transition-delay:5.8s!important}[data-delay="30"]{transition-delay:6s!important}.center-content{display:block;float:none;width:100%;max-width:100%;margin:0 auto;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;outline:0}.center-content.width-710{max-width:710px}.center-content.width-820{max-width:820px}.center-content.width-900{max-width:900px}.center-content.width-1024{max-width:1024px}.center-content.width-1096{max-width:1205px}.center-content.width-1200{max-width:1200px}.center-content.width-1242{max-width:1242px}.center-content.width-1284{max-width:1284px}.center-content.width-1440{max-width:1440px}.center-content.width-full{max-width:100%}.layout-padding,.layout-padding-small{padding:0 30px}@media only screen and (min-width:1024px){.layout-padding{padding:0 100px}.layout-padding-small{padding:0 50px}}/*@media only screen and (min-width:1640px){body:after{content:'siteWidth - 1640px'}*/.layout-padding,.layout-padding-small{padding:0}}.fill-container{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;object-fit:cover}.inner-wrap,.outer-wrap{display:flex;flex-direction:column;justify-content:center;width:100%;max-width:100%;height:auto}.hide{display:none!important}.absolute-center{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)}.flexible-content-wrap{display:flex;flex-direction:column;justify-content:center;width:100%;clear:both;padding:0;overflow-x:hidden}.flexible-content,.flexible-content-block{position:relative;float:left;width:100%;display:block;clear:both;padding:0;overflow:hidden}.flexible-content-block:last-of-type{margin-bottom:0!important}.content-wrap{display:flex;flex-direction:column;justify-content:flex-start}.content-wrap.center{justify-content:center;height:100%;margin:0 auto}.content-wrap.between{justify-content:space-between;height:100%;margin:0 auto}.cta-button,.header-wrap.fullheight,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .top,.paragraph-wrap.fullheight,.sub-header-wrap.fullheight{height:auto}.header-wrap,.module-package .outer-wrap>.inner-wrap .columns .column,.paragraph-wrap,.sub-header-wrap{display:flex;flex-direction:column;justify-content:flex-start;width:100%;max-width:100%}.header-wrap.space-between,.paragraph-wrap.space-between,.sub-header-wrap.space-between{justify-content:space-between}.header-wrap.top,.module-hero .outer-wrap .inner-wrap .columns .column.media,.paragraph-wrap.top,.sub-header-wrap.top{justify-content:flex-start}.header-wrap.bottom,.module-reveal .outer-wrap .inner-wrap .columns .column.content,.paragraph-wrap.bottom,.sub-header-wrap.bottom{justify-content:flex-end}.header-wrap.center h1,.header-wrap.center h2,.header-wrap.center h3,.header-wrap.center h4,.header-wrap.center h5,.header-wrap.center h6,.header-wrap.center p,.header-wrap.center span,.paragraph-wrap.center h1,.paragraph-wrap.center h2,.paragraph-wrap.center h3,.paragraph-wrap.center h4,.paragraph-wrap.center h5,.paragraph-wrap.center h6,.paragraph-wrap.center p,.paragraph-wrap.center span,.sub-header-wrap.center h1,.sub-header-wrap.center h2,.sub-header-wrap.center h3,.sub-header-wrap.center h4,.sub-header-wrap.center h5,.sub-header-wrap.center h6,.sub-header-wrap.center p,.sub-header-wrap.center span{text-align:center;width:100%}.header-wrap.left h1,.header-wrap.left h2,.header-wrap.left h3,.header-wrap.left h4,.header-wrap.left h5,.header-wrap.left h6,.header-wrap.left p,.header-wrap.left span,.header-wrap.right h1,.header-wrap.right h2,.header-wrap.right h3,.header-wrap.right h4,.header-wrap.right h5,.header-wrap.right h6,.header-wrap.right p,.header-wrap.right span,.paragraph-wrap.left h1,.paragraph-wrap.left h2,.paragraph-wrap.left h3,.paragraph-wrap.left h4,.paragraph-wrap.left h5,.paragraph-wrap.left h6,.paragraph-wrap.left p,.paragraph-wrap.left span,.paragraph-wrap.right h1,.paragraph-wrap.right h2,.paragraph-wrap.right h3,.paragraph-wrap.right h4,.paragraph-wrap.right h5,.paragraph-wrap.right h6,.paragraph-wrap.right p,.paragraph-wrap.right span,.sub-header-wrap.left h1,.sub-header-wrap.left h2,.sub-header-wrap.left h3,.sub-header-wrap.left h4,.sub-header-wrap.left h5,.sub-header-wrap.left h6,.sub-header-wrap.left p,.sub-header-wrap.left span,.sub-header-wrap.right h1,.sub-header-wrap.right h2,.sub-header-wrap.right h3,.sub-header-wrap.right h4,.sub-header-wrap.right h5,.sub-header-wrap.right h6,.sub-header-wrap.right p,.sub-header-wrap.right span{text-align:left}.header-wrap.xlarge-margin,.module-package .outer-wrap>.inner-wrap .columns .column .content-wrap .paragraph-wrap.choose,.paragraph-wrap.xlarge-margin,.sub-header-wrap.xlarge-margin{margin:0 0 40px}.header-wrap.large-margin,.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap .header-wrap,.paragraph-wrap.large-margin,.sub-header-wrap.large-margin{margin:0 0 30px}.header-wrap.medium-margin,.paragraph-wrap.medium-margin,.sub-header-wrap.medium-margin{margin:0 0 20px}.header-wrap.small-margin,.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .header-wrap,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .header-wrap.title,.paragraph-wrap.small-margin,.sub-header-wrap.small-margin{margin:0 0 15px}.header-wrap.xsmall-margin,.paragraph-wrap.xsmall-margin,.sub-header-wrap.xsmall-margin{margin:0 0 12px}.header-wrap a a,.header-wrap a:last-child,.header-wrap h1,.header-wrap h2,.header-wrap h3,.header-wrap h4,.header-wrap h5,.header-wrap h6,.header-wrap p a,.header-wrap p:last-child,.header-wrap span a,.header-wrap span:last-child,.paragraph-wrap a a,.paragraph-wrap a:last-child,.paragraph-wrap h1,.paragraph-wrap h2,.paragraph-wrap h3,.paragraph-wrap h4,.paragraph-wrap h5,.paragraph-wrap h6,.paragraph-wrap p a,.paragraph-wrap p:last-child,.paragraph-wrap span a,.paragraph-wrap span:last-child,.sub-header-wrap a a,.sub-header-wrap a:last-child,.sub-header-wrap h1,.sub-header-wrap h2,.sub-header-wrap h3,.sub-header-wrap h4,.sub-header-wrap h5,.sub-header-wrap h6,.sub-header-wrap p a,.sub-header-wrap p:last-child,.sub-header-wrap span a,.sub-header-wrap span:last-child{margin:0}.header-wrap .black,.header-wrap .black .h1,.header-wrap .black .h2,.header-wrap .black .h3,.header-wrap .black .h4,.header-wrap .black .h5,.header-wrap .black .h6,.header-wrap .black a,.header-wrap .black h1,.header-wrap .black h2,.header-wrap .black h3,.header-wrap .black h4,.header-wrap .black h5,.header-wrap .black h6,.header-wrap .black p,.header-wrap .black span,.header-wrap .black ul li,.header-wrap.black,.header-wrap.black .h1,.header-wrap.black .h2,.header-wrap.black .h3,.header-wrap.black .h4,.header-wrap.black .h5,.header-wrap.black .h6,.header-wrap.black a,.header-wrap.black h1,.header-wrap.black h2,.header-wrap.black h3,.header-wrap.black h4,.header-wrap.black h5,.header-wrap.black h6,.header-wrap.black p,.header-wrap.black span,.header-wrap.black ul li,.paragraph-wrap .black,.paragraph-wrap .black .h1,.paragraph-wrap .black .h2,.paragraph-wrap .black .h3,.paragraph-wrap .black .h4,.paragraph-wrap .black .h5,.paragraph-wrap .black .h6,.paragraph-wrap .black a,.paragraph-wrap .black h1,.paragraph-wrap .black h2,.paragraph-wrap .black h3,.paragraph-wrap .black h4,.paragraph-wrap .black h5,.paragraph-wrap .black h6,.paragraph-wrap .black p,.paragraph-wrap .black span,.paragraph-wrap .black ul li,.paragraph-wrap.black,.paragraph-wrap.black .h1,.paragraph-wrap.black .h2,.paragraph-wrap.black .h3,.paragraph-wrap.black .h4,.paragraph-wrap.black .h5,.paragraph-wrap.black .h6,.paragraph-wrap.black a,.paragraph-wrap.black h1,.paragraph-wrap.black h2,.paragraph-wrap.black h3,.paragraph-wrap.black h4,.paragraph-wrap.black h5,.paragraph-wrap.black h6,.paragraph-wrap.black p,.paragraph-wrap.black span,.paragraph-wrap.black ul li,.sub-header-wrap .black,.sub-header-wrap .black .h1,.sub-header-wrap .black .h2,.sub-header-wrap .black .h3,.sub-header-wrap .black .h4,.sub-header-wrap .black .h5,.sub-header-wrap .black .h6,.sub-header-wrap .black a,.sub-header-wrap .black h1,.sub-header-wrap .black h2,.sub-header-wrap .black h3,.sub-header-wrap .black h4,.sub-header-wrap .black h5,.sub-header-wrap .black h6,.sub-header-wrap .black p,.sub-header-wrap .black span,.sub-header-wrap .black ul li,.sub-header-wrap.black,.sub-header-wrap.black .h1,.sub-header-wrap.black .h2,.sub-header-wrap.black .h3,.sub-header-wrap.black .h4,.sub-header-wrap.black .h5,.sub-header-wrap.black .h6,.sub-header-wrap.black a,.sub-header-wrap.black h1,.sub-header-wrap.black h2,.sub-header-wrap.black h3,.sub-header-wrap.black h4,.sub-header-wrap.black h5,.sub-header-wrap.black h6,.sub-header-wrap.black p,.sub-header-wrap.black span,.sub-header-wrap.black ul li{color:#000}.header-wrap ul,.paragraph-wrap ul,.sub-header-wrap ul{list-style-type:disc;list-style-position:outside;margin:10px 0 10px 25px;padding:0;color:#000}.header-wrap ol.large-gaps li,.header-wrap ul.large-gaps li,.paragraph-wrap ol.large-gaps li,.paragraph-wrap ul.large-gaps li,.sub-header-wrap ol.large-gaps li,.sub-header-wrap ul.large-gaps li{margin-bottom:20px}.header-wrap ol.medium-gaps li,.header-wrap ul.medium-gaps li,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .paragraph-wrap.intro,.paragraph-wrap ol.medium-gaps li,.paragraph-wrap ul.medium-gaps li,.sub-header-wrap ol.medium-gaps li,.sub-header-wrap ul.medium-gaps li{margin-bottom:10px}.header-wrap ol,.paragraph-wrap ol,.sub-header-wrap ol{list-style-type:decimal;list-style-position:outside;margin:0 0 10px 25px}.header-wrap ol ul,.header-wrap ul ul,.paragraph-wrap ol ul,.paragraph-wrap ul ul,.sub-header-wrap ol ul,.sub-header-wrap ul ul{list-style-type:circle;list-style-position:outside;margin:0 0 10px 15px}.header-wrap ol ol,.header-wrap ul ol,.paragraph-wrap ol ol,.paragraph-wrap ul ol,.sub-header-wrap ol ol,.sub-header-wrap ul ol{list-style-type:lower-latin;list-style-position:outside;margin:0 0 10px 15px}.header-wrap li,.paragraph-wrap li,.sub-header-wrap li{font-family:urbane,sans-serif;font-weight:400;font-size:calc($value / 16) rem;line-height:1.5;letter-spacing:0;text-transform:none;color:#1a1a1a}.header-wrap a,.header-wrap p,.header-wrap span,.paragraph-wrap a,.paragraph-wrap p,.paragraph-wrap span,.sub-header-wrap a,.sub-header-wrap p,.sub-header-wrap span{display:inline-block;font-family:urbane,sans-serif;font-weight:400;font-size:calc($value / 16) rem;line-height:1.35;letter-spacing:0;text-align:left;text-decoration:none;text-transform:none;margin:0 0 20px}.cta-button,.cta-button span{text-decoration:none!important}.cta-button{background-color:#000;display:inline-flex;flex-direction:column;justify-content:center;width:auto;padding:14px 32px;align-items:center;border-radius:64px;transition:opacity .5s,background-color .5s,transform .5s cubic-bezier(.165, .84, .44, 1)}.cta-button span{color:#fff;font-weight:600;text-transform:uppercase;letter-spacing:1px}.cta-button svg{padding:2px 0 0;margin:0 0 0 3px}.cta-button:hover{background-color:#d41361}@keyframes gradientAnimationSmall{0%,100%{background-position:0 25%}50%{background-position:100% 25%}}.pink-gradient{background:#f83258;background:linear-gradient(132deg,#f83258 0,#fb9a22 100%);background-size:200% 200%;animation-name:gradientAnimationSmall;animation-duration:8s;animation-delay:0;animation-iteration-count:infinite;animation-direction:forward}.page-template-template-promotional-php #Content{background-color:#fdfdff}.module-hero .outer-wrap .inner-wrap .columns .column.media .desktop,.module-reveal .outer-wrap .inner-wrap .columns .column.media img.desktop,.page-template-template-promotional-php #Header_wrapper #Subheader{display:none}.page-template-template-promotional-php #Header_wrapper #Top_bar .container{max-width:1244px;padding:0}.page-template-template-promotional-php #Header_wrapper .menu-item:last-of-type .sub-menu{transform:translateX(-135px)}.module-hero,.module-package,.module-reveal,.module-team{display:flex;flex-direction:column;justify-content:flex-start;overflow:hidden;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;outline:0!important}.module-hero *,.module-hero :after,.module-hero :before,.module-package *,.module-package :after,.module-package :before,.module-reveal *,.module-reveal :after,.module-reveal :before,.module-team *,.module-team :after,.module-team :before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;outline:0!important}.module-hero .outer-wrap{position:relative;padding:36px 0}.module-hero .outer-wrap .inner-wrap,.module-package .outer-wrap>.inner-wrap,.module-reveal .outer-wrap .inner-wrap{display:flex;flex-direction:column;justify-content:flex-start;z-index:2;padding:0 20px}.module-hero .outer-wrap .inner-wrap .columns,.module-hero .outer-wrap .inner-wrap .columns .column,.module-package .outer-wrap>.inner-wrap .columns,.module-reveal .outer-wrap .inner-wrap .columns,.module-reveal .outer-wrap .inner-wrap .columns .column{display:flex;flex-direction:column;justify-content:flex-start;width:100%}.module-hero .outer-wrap .inner-wrap .columns .column.media .mobile,.module-team .outer-wrap .team-carousel-main .slide img.mobile{display:block}.module-hero .outer-wrap .inner-wrap .columns .column.media img{padding-top:30px;width:100%;max-width:580px;margin:0 auto}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .header-wrap h1{font-size:40px!important}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .paragraph-wrap{max-width:523px;width:100%;margin:0 0 20px}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .paragraph-wrap p{font-size:16px;font-weight:300;line-height:1.5}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .number-wrap{display:none;flex-direction:row;justify-content:flex-start;margin:0 0 30px}.module-hero .outer-wrap .inner-wrap .center-content.width-1200.mobile .number-wrap .number,.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .number-wrap .number{max-width:50%}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .number-wrap .number img{max-width:112px}.module-hero .outer-wrap .inner-wrap .center-content.width-1200.mobile .number-wrap .text,.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .number-wrap .text{display:flex;flex-direction:column;justify-content:flex-start;padding:0 0 0 20px;max-width:278px}.module-hero .outer-wrap .inner-wrap .center-content.width-1200.mobile .number-wrap .text span,.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .number-wrap .text span{margin:0;font-size:19px;font-weight:300;padding:0 0 3px}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .number-wrap .text p{margin:0;color:#3c3c3c;font-size:14px;font-weight:300}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .logo-wrap,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .header-wrap.price{margin:0 0 10px}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .logo-wrap img{max-width:93px}.module-hero .outer-wrap .inner-wrap .center-content.width-1200.mobile{display:flex;margin:20px 0 10px}.module-hero .outer-wrap .inner-wrap .center-content.width-1200.mobile .number-wrap{display:flex;flex-direction:row;justify-content:flex-start;margin:20px 0 0}.module-hero .outer-wrap .inner-wrap .center-content.width-1200.mobile .number-wrap .number img{max-width:104px}.module-hero .outer-wrap .inner-wrap .center-content.width-1200.mobile .number-wrap .text p{margin:0;color:#3c3c3c;font-size:12px;font-weight:300;padding:0 30px 0 0}.module-hero .background-container{flex-direction:row;justify-content:center;position:absolute;top:0;left:0;width:100%;height:100%;z-index:1;overflow:hidden;display:none}.module-hero .background-container img{position:absolute;top:52%;left:0;transform:translate(-50%,-50%);max-width:1031px;opacity:0;transition:opacity .5s,left .5s,transform .5s cubic-bezier(.165, .84, .44, 1);will-change:opacity,transform}.module-hero.in_viewport .background-container img{left:56%;opacity:1}@media only screen and (min-width:768px){.cta-button{padding:10px 32px}.page-template-template-promotional-php #Content{background-color:#f4f6fc}.module-hero .outer-wrap{padding:80px 0}.module-hero .outer-wrap .inner-wrap .columns{flex-direction:row}.module-hero .outer-wrap .inner-wrap .columns .column{max-width:50%}.module-hero .outer-wrap .inner-wrap .center-content.width-1200.mobile,.module-hero .outer-wrap .inner-wrap .columns .column.media .mobile{display:none}.module-hero .outer-wrap .inner-wrap .columns .column.media .desktop{display:block;align-self:flex-end}.module-hero .outer-wrap .inner-wrap .columns .column.media img{padding-top:0;padding-bottom:30px;margin:0}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .header-wrap,.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .paragraph-wrap{margin:0 0 30px}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .header-wrap h1{font-size:50px!important}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .paragraph-wrap p{font-size:19px}.module-hero .background-container,.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .number-wrap{display:flex}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .logo-wrap{margin:0 0 20px}.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .logo-wrap img{max-width:168px}.module-hero.in_viewport .background-container img{left:64%;top:25%;max-width:703px}}@media only screen and (min-width:1024px){.module-hero .outer-wrap .inner-wrap .columns .column .content-wrap .header-wrap h1{font-size:65px!important}.module-hero.in_viewport .background-container img{left:64%;top:41%;max-width:962px}}@media only screen and (min-width:1284px){.module-hero .outer-wrap .inner-wrap,.module-reveal .outer-wrap .inner-wrap{padding:0}.module-hero .outer-wrap .inner-wrap .columns .column.media{justify-content:flex-end}.module-hero.in_viewport .background-container img{left:62%;top:55%;max-width:1131px}}/*@media only screen and (min-width:1600px){body:after{content:'wideDesktop - 1600px'}*/.page-template-template-promotional-php #Header_wrapper .menu-item:last-of-type .sub-menu{transform:translateX(0)}.module-hero.in_viewport .background-container img{left:60%;max-width:1131px}}/*@media only screen and (min-width:1920px){body:after{content:'extraWideDesktop - 1920px'}*/.module-hero.in_viewport .background-container img{left:57%;top:53%;max-width:1131px}}.page-loaded .module-hero [data-delay="0"],.page-loaded .module-hero [data-delay="1"],.page-loaded .module-hero [data-delay="2"],.page-loaded .module-hero [data-delay="3"],.page-loaded .module-hero [data-delay="4"]{-webkit-transition-delay:0s!important;transition-delay:0s!important}.module-reveal .outer-wrap{padding:16px 0 40px}.module-reveal .outer-wrap .inner-wrap .columns .column.media{justify-content:flex-end;padding:30px 0 0}.module-reveal .outer-wrap .inner-wrap .columns .column.media img{padding-bottom:30px;max-width:100%}.module-reveal .outer-wrap .inner-wrap .columns .column.media img.mobile{display:block;margin:20px auto 0}.module-reveal .outer-wrap .inner-wrap .columns .column .content-wrap .header-wrap{margin:0 0 35px}.module-package .outer-wrap>.inner-wrap .columns .column .content-wrap .header-wrap h1,.module-reveal .outer-wrap .inner-wrap .columns .column .content-wrap .header-wrap h1{font-size:65px!important}.module-reveal .outer-wrap .inner-wrap .columns .column .content-wrap .paragraph-wrap{margin:0 0 30px;max-width:523px;width:100%}.module-package .outer-wrap>.inner-wrap .columns .column .content-wrap .paragraph-wrap p,.module-reveal .outer-wrap .inner-wrap .columns .column .content-wrap .paragraph-wrap p{font-size:16px;font-weight:300;line-height:1.4}.module-package .outer-wrap{padding:60px 0}.module-package .outer-wrap>.inner-wrap .columns .column .content-wrap .header-wrap{margin:0 0 15px;max-width:350px}.module-package .outer-wrap>.inner-wrap .columns .column .content-wrap .paragraph-wrap{margin:0 0 20px;max-width:100%;width:100%}.module-package .outer-wrap>.inner-wrap .columns .column .content-wrap .paragraph-wrap.choose p{font-size:24px;font-weight:500;line-height:1.4}.module-package .outer-wrap>.inner-wrap .columns.packages{display:flex;flex-direction:column;justify-content:flex-start;width:100%;padding:15px 0 0}.module-package .outer-wrap>.inner-wrap .columns.packages .column{position:relative;display:flex;flex-direction:column;justify-content:flex-start;max-width:100%;width:100%;padding:15px 0}.module-package .outer-wrap>.inner-wrap .columns.packages .column .popular{position:absolute;top:-3px;right:-11px;display:flex;flex-direction:column;justify-content:center;width:69px;height:69px;border-radius:100%;background-color:#d41361;padding:10px;z-index:10}.module-package .outer-wrap>.inner-wrap .columns.packages .column .popular span{color:#fff;text-align:center;line-height:1.2;font-family:permanent-marker,sans-serif;font-size:12px}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap{display:flex;flex-direction:column;justify-content:flex-start;border:1px solid #fff;padding:30px 30px 20px;border-radius:15px;height:auto;background-color:rgba(0,0,0,0);transition:opacity .5s,background .5s,transform .5s cubic-bezier(.165, .84, .44, 1);will-change:opacity,background,transform}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap{display:flex;flex-direction:column;justify-content:flex-start;height:auto}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .bottom{display:flex;flex-direction:column;justify-content:space-between;height:100%;overflow:hidden;max-height:0;transition:opacity .5s,max-height .5s,transform .5s cubic-bezier(.165, .84, .44, 1);will-change:opacity,max-height,transform}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .bottom .inner-wrap{display:flex;flex-direction:column;justify-content:space-between;height:100%;margin:10px 0 0;max-height:3000px!important}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap.open .bottom{max-height:2000px}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap.open .intro,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap.open .read-more{opacity:0;display:none}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .header-wrap.title h4{font-size:32px!important}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .header-wrap.price span{font-size:19px;font-weight:600}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .paragraph-wrap.description p,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .paragraph-wrap.included p,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .paragraph-wrap.intro p{font-size:14px;font-weight:300}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .paragraph-wrap.included span{margin:0 0 5px;font-size:16px;font-weight:600}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .paragraph-wrap.included ul{list-style-type:none}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .paragraph-wrap.included ul li{position:relative;font-size:14px;font-weight:300;margin:0 0 5px}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .paragraph-wrap.included ul li:before{content:"\A";background-repeat:no-repeat;background-size:100%;width:16px;height:18px;position:absolute;top:2px;left:-22px}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .link-wrap.read-more-wrap .read-more svg{width:9px;transform:translate(3px,2px) rotate(90deg)}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .link-wrap.read-more-wrap .read-more span{font-weight:600;text-transform:uppercase;letter-spacing:1px}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main{background:rgba(0,0,0,.2);border:2px solid #fff}.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap{max-width:800px;width:100%;margin:0 auto;padding:30px 0 0}.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap .paragraph-wrap p{text-align:center;font-size:16px;line-height:1.6;font-weight:300;padding:0 0 25px}.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap .paragraph-wrap p a{color:#000!important}.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap .header-wrap span a:hover,.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap .paragraph-wrap p a:hover{text-decoration:underline}.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap .header-wrap span{text-align:center;font-size:27px;line-height:1.1;font-weight:600}@media only screen and (min-width:1023px){.module-package .outer-wrap,.module-reveal .outer-wrap{padding:80px 0}.module-package .outer-wrap>.inner-wrap .columns,.module-reveal .outer-wrap .inner-wrap .columns{flex-direction:row}.module-reveal .outer-wrap .inner-wrap .columns .column:first-of-type{max-width:60%}.module-reveal .outer-wrap .inner-wrap .columns .column.media{padding:0}.module-reveal .outer-wrap .inner-wrap .columns .column.media img{max-width:580px;align-self:flex-end}.module-reveal .outer-wrap .inner-wrap .columns .column.media img.desktop{display:block}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .link-wrap.read-more-wrap,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .paragraph-wrap.intro,.module-reveal .outer-wrap .inner-wrap .columns .column.media img.mobile{display:none}.module-package .outer-wrap>.inner-wrap .columns .column{max-width:50%}.module-package .outer-wrap>.inner-wrap .columns .column .content-wrap .header-wrap{margin:0 0 30px}.module-package .outer-wrap>.inner-wrap .columns .column .content-wrap .paragraph-wrap{max-width:523px}.module-package .outer-wrap>.inner-wrap .columns .column .content-wrap .paragraph-wrap.choose p{font-size:16px}.module-package .outer-wrap>.inner-wrap .columns.packages{padding:30px 0 0;flex-direction:row;width:calc(100% + 30px);margin:0 -17px}.module-package .outer-wrap>.inner-wrap .columns.packages .column{padding:15px;max-width:33.333%}.module-package .outer-wrap>.inner-wrap .columns.packages .column .popular{top:-33px;right:-9px;width:96px;height:96px}.module-package .outer-wrap>.inner-wrap .columns.packages .column .popular span{font-size:18px}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap{height:100%;padding:30px}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap{height:100%}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap .content-wrap .bottom{max-height:2000px}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap:hover{background:rgba(0,0,0,.2)}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover{background:#fff}.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .header-wrap.price span,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .header-wrap.title h1,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .header-wrap.title h2,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .header-wrap.title h3,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .header-wrap.title h4,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .header-wrap.title h5,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .header-wrap.title h6,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .paragraph-wrap.description p,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .paragraph-wrap.description ul,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .paragraph-wrap.description ul li,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .paragraph-wrap.included p,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .paragraph-wrap.included span,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .paragraph-wrap.included ul,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .paragraph-wrap.included ul li,.module-package .outer-wrap>.inner-wrap .columns.packages .column .package-wrap.main:hover .paragraph-wrap.intro p{color:#000}.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap{padding:70px 0 0}.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap .paragraph-wrap p{font-size:19px;padding:0 0 10px}.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap .header-wrap span{font-size:32px}}.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap .header-wrap span a{color:#000!important;text-decoration:underline;font-weight:600}.module-team .outer-wrap .inner-wrap{display:flex;flex-direction:column;justify-content:flex-start;z-index:2;position:absolute;top:0;left:0;width:100%;height:100%;padding:0 20px}@media only screen and (min-width:1284px){.module-package .outer-wrap>.inner-wrap,.module-team .outer-wrap .inner-wrap{padding:0}}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap{padding:100px 0;width:100%;max-width:430px}@media only screen and (max-width:1024px){.module-team .outer-wrap .inner-wrap .center-content>.content-wrap{margin:0 auto;padding:50px 0}}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content{width:100%}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .slide{opacity:0}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .slide.is-selected{opacity:1}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content span.quote{font-family:urbane,sans-serif;font-size:32px!important;font-style:normal;font-weight:600}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content span.quote.top{position:absolute;top:-5px;left:0}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content span.quote.bottom{position:absolute;transform:translate(7px,-10px)}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap{width:100%;padding:0 0 0 20px}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap .header-wrap span{font-size:26px;font-style:normal;font-weight:600;line-height:1.1}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap .paragraph-wrap{display:flex;flex-direction:column;justify-content:flex-start;margin:0 0 30px}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap .paragraph-wrap p{font-size:14px;font-style:normal;font-weight:300;line-height:1.4}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap .paragraph-wrap.person{display:flex;flex-direction:column;justify-content:flex-start;margin:0}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap .paragraph-wrap.person span{font-size:14px;font-style:normal;font-weight:600;line-height:1.4;letter-spacing:1px;margin:0;text-transform:uppercase}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap .paragraph-wrap.person p{font-size:14px;font-style:normal;font-weight:300;line-height:1.4;margin:0}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .flickity-page-dots{display:flex;flex-direction:row;justify-content:flex-start;padding:0 0 0 12px}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .flickity-page-dots .dot{margin:0 3px;width:13px;height:13px;background-color:#fff}.module-team .outer-wrap .team-carousel-main,.module-team .outer-wrap .team-carousel-main .flickity-viewport,.module-team .outer-wrap .team-carousel-main .flickity-viewport .flickity-slider{width:100vw;height:100vh}.module-team .outer-wrap .team-carousel-main .slide{position:relative;width:100vw;height:100vh;display:flex;flex-direction:column;justify-content:flex-end}@media only screen and (min-width:640px){.module-team .outer-wrap .team-carousel-main,.module-team .outer-wrap .team-carousel-main .flickity-viewport,.module-team .outer-wrap .team-carousel-main .flickity-viewport .flickity-slider,.module-team .outer-wrap .team-carousel-main .slide{height:120vh}}.module-team .outer-wrap .team-carousel-main .slide img.desktop{display:none;width:100vw;height:100vh;object-fit:cover}@media only screen and (min-width:1024px){.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap .header-wrap span{font-size:28px}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap .paragraph-wrap p{font-size:19px}.module-team .outer-wrap .inner-wrap .center-content>.content-wrap .team-carousel-content .content-wrap .paragraph-wrap.person p{font-size:12px}.module-team .outer-wrap .team-carousel-main,.module-team .outer-wrap .team-carousel-main .flickity-viewport,.module-team .outer-wrap .team-carousel-main .flickity-viewport .flickity-slider,.module-team .outer-wrap .team-carousel-main .slide{height:75vh}.module-team .outer-wrap .team-carousel-main .slide img.mobile{display:none}.module-team .outer-wrap .team-carousel-main .slide img.desktop{display:block}}

.page-template-template-promotional-php #Content {
                background-color:#f4f6fc;
            }

.module-package .outer-wrap>.inner-wrap.follow-up .content-wrap.white-text .header-wrap span a{
	color: #FFF!important;
}

.center-content.width-790{
	max-width: 790px;
}

.center-content.width-1120{
	max-width: 1120px;
}

@media screen and (min-width: 992px) {
	.column--offset-left{padding-left: 5%;}
	.column--offset-right{padding-right: 15%;}
	.column--offset-top{padding-top: 9px;}
}

.studiox-form-box{
	background-color: #FFF;
	border-radius: 20px;
	padding: 60px 70px;
}

.studiox-form-box--thanks{
	padding: 120px 70px;
	font-size: 30px;
	font-weight: 600;
	text-align:center;
	line-height:1.1;
}
.studiox-form-box--thanks p{max-width:400px;margin: 0 auto 30px;}
.studiox-form-box--thanks p:last-child{margin-bottom: 0;}

.button-flat .button{}
.button-flat .button:after{content:normal!important;}
.button-flat .button--black{background: #000!important;color:#FFF;padding: 16px;font-size: 14px !important;text-transform: uppercase;border-radius: 30px;transition: background-color .5s}
.button-flat .button--black:hover{background:#D40862!important;}

.cf7-form-columns{display:flex;gap: 40px;}
.cf7-form-columns__input-group .wpcf7-list-item-label,
.cf7-form-columns__heading,
.cf7-form-columns__input-group input{font-size: 21px;font-weight:600;}
.cf7-form-columns + p,
.cf7-form-columns p{margin-bottom: 0;}
.cf7-form-columns__column{flex: 1;}
.cf7-form-columns__input-group{margin-bottom:30px;}
.cf7-form-columns__heading{margin-top: 5px;}
.cf7-form-columns__input-group .wpcf7-form-control{border-width: 2px;border-top-width:0;border-left-width:0;border-right-width:0;padding: 0 3px;}
.cf7-form-columns__input-group .wpcf7-form-control::placeholder{color: #000000;}
.cf7-form-columns__input-group .wpcf7-form-control.wpcf7-not-valid{border-color: #D40862;}
.cf7-form-columns__input-group .wpcf7-form-control.wpcf7-not-valid::placeholder{color: #D40862;}
.cf7-form-columns__input-group .wpcf7-list-item label{margin-bottom: 0;cursor: pointer;}
.cf7-form-columns__input-group .wpcf7-checkbox{display:flex;flex-direction:column;gap: 15px;}
.cf7-form-columns__input-group .wpcf7-checkbox .wpcf7-list-item{margin: 0;position:relative;}
.cf7-form-columns__input-group .wpcf7-checkbox .wpcf7-list-item input{position: absolute;top:0;left:0;opacity:0;visibility: hidden;}
.cf7-form-columns__input-group .wpcf7-checkbox .wpcf7-list-item-label{position:relative;padding-left: 35px;}
.cf7-form-columns__input-group .wpcf7-checkbox .wpcf7-list-item-label:before{content: "";position:absolute;width:23px;height:23px;background: #F2F2F2;border:2px solid #D9D9D9;border-radius: 50%;display:block;top: 3px;left: 0;}
.cf7-form-columns__input-group .wpcf7-checkbox input:checked + .wpcf7-list-item-label:before{background: #8F1739;}

.wpcf7 .button{min-width:175px;margin-bottom: 0!important;text-transform: uppercase;background-color: #000!important;transition: 0.5s ease all;color: #fff;font-weight: 600!important;letter-spacing: 1px;font-family: 'urbane', sans-serif;}
.wpcf7 .button:hover{background-color: #D40862!important;border-color: #D40862!important;}
.wpcf7 .button:after{content:normal!important;}
.wpcf7 .wpcf7-response-output{margin: 30px 0 0!important;padding:0!important;display:none!important;}
body:not(.cf7p-message) .wpcf7-not-valid-tip{top:100%!important;width: auto!important;height:auto!important;text-indent:0!important;background: none!important;color:#D40862!important;left:0!important;padding-left:3px!important;}
body:not(.cf7p-message) .wpcf7-not-valid-tip:before{content:normal!important;}

@media screen and (max-width: 767px) {
	.cf7-form-columns{flex-direction: column;gap: 0;}
	
	.cf7-form-columns__input-group .wpcf7-checkbox{gap:20px;}
}

@media screen and (max-width: 575px) {
	.studiox-form-box{padding: 40px 22px;}
	.studiox-form-box--thanks{padding: 200px 20px;}

	.cf7-form-columns__input-group .wpcf7-list-item-label,
	.cf7-form-columns__heading,
	.cf7-form-columns__input-group input{font-size:19px;}
	.cf7-form-columns__input-group{margin-bottom: 40px;}

	.wpcf7 .button{margin: 0 auto;display: block;}
}

</style>

<div id="Content">
	<div class="content_wrapper clearfix">

		<main class="sections_group">

			<section class="module-hero viewport_check">
				<div class="outer-wrap">

					<div class="inner-wrap">

						<div class="center-content width-1200">
							<div class="columns">

								<div class="column">
									<div class="content-wrap">

										<div data-delay="1" class="header-wrap fade-in-up">
											<h1>Partner with the creative talent behind XTC</h1>
										</div>	

										<div data-delay="2" class="paragraph-wrap fade-in-up">
											<p>Studio X is the trusted creative marketing and branding team supporting and delivering the Extreme Tech Challenge. We understand, first-hand, the needs of startups, founders, entrepreneurs and investors in a fast-paced world.</p>
										</div>	

										<div data-delay="3" class="paragraph-wrap number-wrap fade-in-up">
											<div class="number">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/4.1.png" alt="background shape">
											</div>

											<div class="text">
												<span>$ / bn</span>
												<p>Venture capital raised by XTC startup finalists (2015-2022)</p>
											</div>
										</div>

										<div data-delay="4" class="link-wrap fade-in-up">
											<a class="cta-button scolltostart" href="#start" target="_self"><span>Get started <?php include get_stylesheet_directory() .'/assets/images/chevron.svg' ?></span></a>
										</div>	

									</div>
								</div>

								<div class="column media">

									<img data-delay="2" class="desktop fade-in-up" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-image.png" alt="background shape">
									<img data-delay="5" class="mobile fade-in-up" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mobile.png" alt="background shape">

								</div>

							</div>
						</div>

						<div class="center-content width-1200 mobile">
							<div class="content-wrap">

								<div data-delay="5" class="paragraph-wrap number-wrap fade-in-up">
									<div class="number">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/4.1.png" alt="background shape">
									</div>

									<div class="text">
										<span>$ / bn</span>
										<p>Venture Capital Funding Raised by XTC Startup Finalists (2015-2022)</p>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="background-container">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shard-bg.png" alt="background shape">
					</div>

				</div>
			</section>

			<section class="module-reveal viewport_check">
				<div class="outer-wrap" style="padding-top:0">

					<div class="inner-wrap">

						<div class="center-content width-1200">
							<div class="columns">

								<div class="column content">
									<div class="content-wrap">

										<div data-delay="1" class="header-wrap fade-in-up">
											<h2>Creativity designed for the tech industry</h2>
										</div>	

										<div data-delay="2" class="paragraph-wrap fade-in-up">
											<p>Our reputation is built on our open can-do attitude and passion for creativity and technology.
Together we create world-class brands, powerful videos, creative campaigns, digital experiences and beautiful graphics.
</p>
										</div>	

											

									</div>
								</div>

								<div class="column media">
								<video width="1000" height="1000" autoplay="autoplay" loop  muted>
									<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ticker.mp4?ab" type="video/mp4">
									
								</video>

								
								</div>

							</div>
						</div>

					</div>

				</div>
			</section>

			<section id="start" class="module-package pink-gradient viewport_check">
				<div class="outer-wrap">
					<div class="inner-wrap">
						<div class="center-content width-1120">

							<div class="columns intro">

								<div class="column column--offset-left">
									<div class="content-wrap">

										<div data-delay="1" class="header-wrap white fade-in-up">
											<h2>Let’s get you started</h2>
										</div>	

									</div>
								</div>

								<div class="column column--offset-right column--offset-top">

									<div class="content-wrap white-text">

										<div data-delay="3" class="paragraph-wrap fade-in-up">
                                            <p>We’re a collective of fast movers and fast thinkers — It’s this startup mentality that makes us truly unique in building powerful solutions for our clients.</p>
                                            <p>Fill out the form, and one of our tech branding experts will get in touch.</p>
										</div>	

									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="inner-wrap" style="margin-top:56px;">
						<div class="center-content width-790">
							<div id="form-shortcode" class="studiox-form-box">
								<?php echo do_shortcode($form_shortcode); ?>
							</div>
							<div id="form-shortcode-thanks" class="studiox-form-box studiox-form-box--thanks" style="display:none;">
								<p>Thanks!</p>
								<p>Now just hang tight and we’ll get back to you in 24 hours.</p>
							</div>
						</div>
					</div>

					<div class="inner-wrap follow-up">
						<div class="content-wrap white-text">
							<div class="paragraph-wrap">
								<p>If you need something more bespoke or have a quick question to ask? </p>
							</div>
							
							<div class="header-wrap">
								<span><a href="tel:0014086000550" target="_self">Give us a call</a> or <a href="mailto:studiox@beep.digital?subject=StudioX General Enquiry" target="_self">drop us an email</a>
							
							</span>
							</div>
						</div>
					</div>

				</div>

			</section>

			<?php if(false) : ?>

			<section id="start" class="module-package pink-gradient viewport_check">
				<div class="outer-wrap">
					<div class="inner-wrap">
						<div class="center-content width-1200">

							<div class="columns intro">

								<div class="column">
									<div class="content-wrap">

										<div data-delay="1" class="header-wrap white fade-in-up">
											<h2>Let’s get you started</h2>
										</div>	

										<div data-delay="2" class="paragraph-wrap choose white fade-in-up">
											<p>Choose your pack</p>
										</div>

									</div>
								</div>

								<div class="column">

									<div class="content-wrap white-text">

										<div data-delay="3" class="paragraph-wrap fade-in-up">
										
										
										
										<ol style="padding-left:8px">
											<li>Choose your pack (you can change this later) to best suit your needs</li>
											<li>Click ‘Get Started’ to send us an message and we’lll be in touch</li>
											<li>Get started by submitting your first brief to your project board</li>
										</ol>

	
										<p>We’re renowned for our speedy response, so keep checking your inbox.</p>
										</div>	

									</div>
								</div>

							</div>

							<div class="columns packages">

								<div data-delay="1" class="column fade-in-up">
									<div class="package-wrap">
										<div class="content-wrap">
											<div class="top">
												<div class="header-wrap title white">
													<h4>Starter Pack</h4>
												</div>
												
												<div class="header-wrap price white">
													<span>$3,000</span>
												</div>

												<div class="paragraph-wrap intro white">
													<p>Already have the idea, we help bring to market a brand worthy of it … let’s get you running with our brand pack! </p>
												</div>

												<div class="link-wrap read-more-wrap">
													<div class="read-more" href="#" target="_self"><span>Read more <?php include get_stylesheet_directory() .'/assets/images/chevron.php' ?></span></div>
												</div>
											</div>

											<div class="bottom">
												<div class="inner-wrap">
													<div class="paragraph-wrap description white">
														<p>Already have the idea, we help bring to market a brand worthy of it … let’s get you running with our brand pack! </p>
													</div>

													<div class="paragraph-wrap included white">
														<span>Brand Identity</span>

														<ul>
															
														<li>Logo & Icon (distinctive and visually appealing logo)</li>
															<li>Colour palette (a colour scheme that reflects your brand personality)</li>
															<li>Typography (brand fonts that complement your brand)</li>
															<li>Style guide (document guidelines for consistent application of your brand)</li>
															<li>Tone of Voice (communication style that represents your brand)</li>
															<li>Branded social header & template (supplied for your social channel)</li>

														</ul>


														<span>Includes</span>

														<ul>
															<li>Dedicated project manager</li>
															<li>Project board and instant messaging</li>
<li>Trusted team of multi-disciplinary designers and developers.
</li>
														</ul>






													</div>

													<div class="link-wrap">
														<a class="cta-button" href="mailto:studiox@beep.digital?subject=StudioX Booster Pack" target="_self"><span>Get started <?php include get_stylesheet_directory() .'/assets/images/chevron.php' ?></span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div data-delay="2" class="column fade-in-up">
									

									<div class="package-wrap ">
										<div class="content-wrap">
											<div class="top">
												<div class="header-wrap title white">
													<h4>Booster Pack</h4>
												</div>
												
												<div class="header-wrap price white">
													<span>$5,000</span>
												</div>

												<div class="paragraph-wrap intro white">
													<p>We focus on articulating your offering to the market in the best way possible, with our Brand + Web Booster pack </p>
												</div>

												<div class="link-wrap read-more-wrap">
													<div class="read-more" href="mailto:studiox@beep.digital?subject=StudioX Booster Pack" target="_self"><span>Read more <?php include get_stylesheet_directory() .'/assets/images/chevron.php' ?></span></div>
												</div>
											</div>

											<div class="bottom">
												<div class="inner-wrap">
													<div class="paragraph-wrap description white">
														<p>We focus on articulating your offering to the market in the best way possible, with our Brand + Web Booster pack </p>
													</div>

													<div class="paragraph-wrap included white">
														

													<span>Brand Identity</span>
													
													<p style="padding:0; margin:0; padding-top:10px">Starter pack plus:</p>
													<ul>
													
													
													<li>Branded social card template (supplied in square and portrait format)</li>
													<li>Imagery (a selection of brand stock images) </li>
															</ul>
													<span>Web Presence</span>
													
													
													<ul>
													<li>Personalised Webpage (built-in Webflow)</li>
													<li>Copywriting (We help shape your content to match your brand and website)</li>
													<li>SEO (includes base SEO fundamentals)</li>
													</ul>
													<span>Includes</span>
													
													
													<ul>
													<li>Interactive job board and messaging + monthly account planning meeting</li>
													<li>Trusted team of over 20 designers, developers and marketing strategists</li>
													<li>Dedicated account manager and exclusive access to the senior design team</li>
													<li>Pause or cancel at any time</li></ul>
													
													</div>






													<div class="link-wrap">
														<a class="cta-button" href="mailto:studiox@beep.digital?subject=StudioX Booster Pack" target="_self"><span>Get started <?php include get_stylesheet_directory() .'/assets/images/chevron.php' ?></span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div data-delay="3" class="column fade-in-up">
								<div class="popular">
										<span>Most Popular</span>
									</div>
									<div class="package-wrap main">
										<div class="content-wrap">

											<div class="top">
												<div class="header-wrap title white">
													<h4>Power Pack</h4>
												</div>
												
												<div class="header-wrap price white">
													<span>from $12,000 per month</span>
												</div>

												<div class="paragraph-wrap intro white">
													<p><span style="font-weight:600">FULL ACCESS...</span></p>
												</div>

												<div class="link-wrap read-more-wrap">
													<div class="read-more" href="#" target="_self"><span>Read more <?php include get_stylesheet_directory() .'/assets/images/chevron.php' ?></span></div>
												</div>
											</div>
	
											<div class="bottom">
												<div class="inner-wrap">
													<div class="paragraph-wrap description white">
													<p style="font-weight:600">FULL ACCESS...</p>

														<p style="font-size:22px">Power Surge your startup! Gain access to our full suite of creative services and the entire studio team, giving your business the best opportunity for success.</p>

														<p>Like you, we’re all-in for the long game and can offer ongoing support as your business grows with our subscription model. It’s flexible, and designed to meet your changing needs as you thrive and build your team, giving you priority access to our creatives and more time focused on your success.</p>

													
													</div>
					
													<div class="link-wrap">
														<a class="cta-button" href="mailto:studiox@beep.digital?subject=StudioX Power Packx" target="_self"><span>Get started <?php include get_stylesheet_directory() .'/assets/images/chevron.php' ?></span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="inner-wrap follow-up">
						<div class="content-wrap">
							<div class="paragraph-wrap">
								<p>If you need something more bespoke or have a quick question to ask? </p>
							</div>
							
							<div class="header-wrap">
								<span><a href="tel:0014086000550" target="_self">Give us a call</a> or <a href="mailto:studiox@beep.digital?subject=StudioX General Enquiry" target="_self">drop us an email</a>
							
							</span>
							</div>
						</div>
					</div>

				</div>
			</section>

			<?php endif; ?>

				<style>

					.white-text {
						color:#fff;
					}

					.white-text ol, .white-text li{
						font-weight:600 !important;
						font-size:22px !important;
						color:#fff !important;
						line-height:28px !important;
					}
					.white-text li {
						margin-bottom:10px;
					}


					.paragraph-wrap { flex-grow:0}
					.paragraph-wrap.included

					{ flex-grow:1;}
					.slider-studiox {
						width:100%
					}

						.slide {
							width:100%;
							position: relative;
							color:#fff
						}
						.slide .triangle {
							position: absolute;
							right:0; bottom:0;
							width:52%;
							height:47%
						}
						.slide .person {
							position: absolute;
							right:19%; bottom:0;
							width:auto;
							height:95%;
						}
						
						.slide .container .quotetext {
							height:100%;
							width:45%;
							margin-left:5%;
							padding:100px 0;
							min-height: 500px;
							flex-direction: column;
							align-items: center;
							display: flex;
							align-items: center;
							justify-content: center;
						}
						
						.slide1 {
							background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide1_bg.png");
							background-size:100% 100%;
							background-position:right center;
						}
						.slide2 {
							background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide2_bg.png");
							background-size:100% 100%;
							background-position:right center;
						}
						.slide .title {
							font-family: 'urbane', sans-serif;
							font-weight:600;
							font-size:28px;
							line-height:1.2em;
							padding-bottom:30px;
							
						}
						.slide .body {
							font-size:18px;
							line-height:1.45em;
							padding-bottom:30px;
						}
						.slide .name {
							line-height:1.4em;
						}
						.slide .name b {
							text-transform:uppercase;
							letter-spacing:1px;
						}
						.quote {
							font-size:34px;
							color:#fff;
							opacity:0.5;
							display:inline-block;
							font-weight:600;
						}
						.quote.top {
							margin-left:-25px;
							width:25px;
						}
						.quote.bottom {
							margin-left:2px;
							vertical-align: middle;
							
						}
						.media video {
							width:100%; 
							height:auto;
							border:0;
						}
						video {
							-webkit-mask-image: -webkit-radial-gradient(white, black);
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}

						@media only screen and (max-width: 1239px) {

							.slide .person {
								right: 11%;
							}
						}
						@media only screen and (max-width: 930px) {

						.slide .person {
							right: 6%;
							height:85%;
						}
						}

						@media only screen and (max-width: 767px) {
							.slide .container {
							height:100%;
							max-width:40000px !important
						}

							.slide .container .quotetext {
								padding:80px 0 30px 0;
							min-height: 50px;
							width:90%;
						 }
						 .slide .person {
							position: relative;
							right: auto;
							bottom: 0;
							width: 60%;
							height: auto;
							display: block;
							margin: 0 auto;
							}
							.slide .triangle {
							position: absolute;
							right: 0;
							bottom: 0;
							width: 92%;
							height: 23%;

							}
							.slide1 {
							background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide1_bg.png");
							background-size: 140% 100%;
							background-position: left center;
							}
							.slide2 {
							background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide2_bg.png");
							background-size: 140% 100%;
							background-position: left center;
							}
						}
						@media only screen and (max-width: 790px) {
							.slide .container .quotetext {
								min-height: 480px;
								
							}
						}
						@media only screen and (max-width: 500px) {
							.slide .container .quotetext {
								min-height: 500px;
								
							}
						}

						@media only screen and (max-width: 340px) {
							.slide .container .quotetext {
								min-height: 540px;
								
							}
						}

						[class^="icon-"]:before, [class*=" icon-"]:before {
							margin-right:0
						}
				</style>
		<section class="slider-studiox">
			<div class="slide slide1">	
			
				<div class="container">
					<div class="quotetext">
						<div class="content">
							<div class="title"><div class="quote top">“</div>The team at Studio X are simply a natural extension of our marketing team.</div>
							<div class="body">Their fresh ideas and creativity help us to stand out from the crowd and get noticed. They understand how we work and they have a natural ability to articulate that to our community of startup founders. <span class="quote bottom">“</span></div>
							<div class="name"><p><b>Victoria Slivkoff</b><br>
									Executive Managing Director, Extreme Tech Challenge</p>
							</div>
						</div>
					</div>
					


											<!-- <div class="header-wrap white">
												<span class="quote top" style="color:#6EC3DD">“</span>
												<span>Studio X are connectors, they elevate startups to match them with investors.</span>
											</div>	
											<div class="paragraph-wrap white">
												<p>Their fresh ideas and creativity help us to stand out from the crowd and get noticed. They understand how we work and they have a natural ability to articulate that to our community of startup founders. <span class="quote bottom" style="color:#6EC3DD">“</span></p>
											</div>	
											<div class="paragraph-wrap person white">
												<span>BILL TAI</span>
												<p>Silicon Valley entrepreneur & Extreme Tech Challenge Founder</p>
											</div>	 -->
											<!-- <div class="header-wrap white">
												<span class="quote top" style="color:#8370C3">“</span>
												<span>The team at Studio X are simply a natural extension of our marketing team.</span>
											</div>	
											<div class="paragraph-wrap white">
												<p>Their fresh ideas and creativity help us to stand out from the crowd and get noticed. They understand how we work and they have a natural ability to articulate that to our community of startup founders. <span class="quote bottom" style="color:#8370C3">“</span></p>
											</div>	
											<div class="paragraph-wrap person white">
												<span>Victoria Slivkoff</span>
												<p>Executive Managing Director, Extreme Tech Challenge</p>
											</div> -->
				</div>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/victoria.png" class="person"/>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide1_tri.png" class="triangle"/>
					
					
			</div>
			<div class="slide slide2">	
			
				<div class="container">
					<div class="quotetext">
						<div class="content">
							<div class="title"><div class="quote top">“</div>Studio X are connectors, they elevate startups to match them with investors<span class="quote bottom">“</span></div>
							<!-- <div class="body"> <span class="quote bottom">“</span></div> -->
							<div class="name"><p><b>Bill Tai</b><br>
							Silicon Valley entrepreneur & Extreme Tech Challenge Founder</p>
							</div>
						</div>
					</div>
					


											
				</div>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bill.png" class="person"/>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide2_tri.png" class="triangle"/>
					
					
			</div>
		</section>


		</main>

	</div>
</div>

<script>
	jQuery(function ($) {

		var checkView = $('.viewport_check:not(.in_viewport)').waypoint(function () {
			$(this.element).addClass('in_viewport');
			this.destroy();
		}, {
			offset: '90%'
		});

		$(document).ready(function(){

			$(".scolltostart").click(function() {
				$('html, body').animate({
					scrollTop: $("#start").offset().top - 50
				}, 600);
			});

			setTimeout(function(){
				$('body').addClass("page-loaded");
			}, 1500);

			$('.read-more-wrap .read-more').on( 'click', function() {		
				$(this).parent('.read-more-wrap').parent('.top').parent('.content-wrap').toggleClass('open');

				setTimeout(function(){
					$(this).parent('.read-more-wrap').parent('.top').parent('.content-wrap').css('max-height', 3000);
				}, 2000);
			});

			// $('.team-carousel-main').flickity({
			// 	asNavFor: '.team-carousel-content',
			// 	cellAlign: 'left',
			// 	contain: true,
			// 	pageDots: false,
			// 	prevNextButtons: false,
			// });
		
			$('.slider-studiox').flickity({
				contain: true,
				pageDots: true,
				prevNextButtons: false,
				wrapAround: true
			});

            // Prevent validate CF7 when checkbox is checked
            jQuery('.wpcf7 input[type="checkbox"]').on("change", function(e) {
                e.stopPropagation();
            });

            jQuery('#back_to_top').on('click', function() {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });
		});

        document.addEventListener( 'wpcf7mailsent', function( event ) {
            if(event.detail.contactFormId == '8') {
                const form = document.querySelector('#form-shortcode');
                const thankYou = document.querySelector('#form-shortcode-thanks');

                form.style.display = 'none';
                thankYou.style.display = 'block';
            }
        }, false );
	});
</script>

<?php get_footer(); ?>

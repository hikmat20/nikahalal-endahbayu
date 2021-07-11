<?php
require_once 'config/connection.php';
require_once 'models/timesince.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<style type="text/css">
		.checkboxtext {
			background: none;
		}
	</style>
	<script type="text/javascript" src="assets/1eba3f19/jquery.js"></script>
	<title>Undangan Pernikahan Endah &amp; Bayu</title>
	<link rel="shortcut icon" type="images/x-icon" href="images/setting/favicon/nikahalal.png">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta name="description" content="Undangan Pernikahan Endah & Bayu" />
	<meta name="keywords" content="undangan digital, undangan pernikahan, video undangan, jasa undangan, web pernikahan, gratis, web nikah, undangan online" />
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<meta name="mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-title" content="Undangan Digital Website Nikah Digital - GRATIS!">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="theme-color" content="#1a1b30" />
	<meta name="msapplication-navbutton-color" content="#1a1b30">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="HandheldFriendly" content="true" />
	<meta name="format-detection" content="telephone=no">
	<link rel="canonical" href="#" />
	<meta property="og:title" content="Undangan Pernikahan Endah & Bayu" />
	<meta property="og:description" content="17 Juli 2021 - @nikahalal.com" />
	<meta property="og:site_name" content="Undangan Digital Website Nikah Digital" />
	<meta property="og:url" content="https://nikahalal.com" />
	<meta property="og:image" content="images/wedding/logo/thumbnail-endah-bayu.jpg" />
	<link itemprop="thumbnailUrl" href="images/wedding/logo/thumbnail-endah-bayu.jpg">
	<span itemprop="thumbnail" itemscope itemtype="images/wedding/logo/thumbnail-endah-bayu.jpg">
		<link itemprop="url" href="images/wedding/logo/thumbnail-endah-bayu.jpg">
	</span>
	<!-- <meta property="fb:app_id" content="168414063189010" />
    	<meta property="fb:admins" content="1236159042" /> -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css">
	<link href="assets/css/css-plugin-collections.css" rel="stylesheet" />
	<link id="menuzord-menu-skins" href="assets/css/menuzord-skins/menuzord-bottom-trace.css" rel="stylesheet" />
	<link href="assets/css/style-main.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors/theme-skin-navy-rustic.css" rel="stylesheet" type="text/css">
	<link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
	<link href="assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
	<link href="assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
	<link href="assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" type="text/css" />
	<style>
		body {
			overflow: overlay;
		}

		body.noscroll {
			overflow: hidden;
		}

		.svg-genders {
			fill: #BBAD62 !important;
		}

		.cover {
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0;
			left: 0;
			background-image: url('images/wedding/bg/bg-cover.jpg');
			background-position: center;
			background-size: cover;
			z-index: 9999;
			display: block;
		}

		.cover.overlay::before {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100vh;
			content: "";
			background-color: black;
			/* z-index: 99991; */
			opacity: .5;
		}

		.content-cover {
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translateX(-50%);
			margin: auto;
		}

		/* width */
		::-webkit-scrollbar {
			width: 10px;
			height: 20px;
			background: none;
		}

		/* Track */
		::-webkit-scrollbar-track {
			background: none;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #f1f1f12e;
			border-radius: 20px;

		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #f1f1f13e;
		}
	</style>
</head>

<body class="noscroll has-side-panel side-panel-right fullwidth-page side-push-panel">
	<section id="cover" class="cover overlay">
		<div class="text-center">
			<div class="fadeInUp animated">
				<h3 class="text-white text-heading mt-50" style="font-family:Georgia, 'Times New Roman', Times, serif;">The Wedding</h3>
				<h1 class="text-theme-colored font-64 f">Endah & Bayu</h1>
			</div>
			<div class="content-cover">
				<div class="fadeInUp animated mt-140">
					<?php if (isset($_GET['to'])) : ?>
						<p class="text-white">Kepada Yth, Bpk/Ibu/Sdr</p>
						<h2 style="font-family: Georgia, 'Times New Roman', Times, serif" class="m-0 font-36 text-theme-colored"><u><?= ($_GET['to']) ? $_GET['to'] : 'Tamu Undangan'; ?></u></h2>
						<p class="text-white ">Di mohon untuk berkenan menghadiri acara pernikahan kami.</p>
						<button type="button" class="btn bg-theme-colored text-black" id="buka-undangan"></i> Undangan <i class="text-danger fa fa-heart"></i></button>
					<?php else : ?>
						<div class="" style="padding-top:100px ;">
							<button type="button" class="btn bg-theme-colored text-black" id="buka-undangan">Buka Undangan <i class="text-danger fa fa-heart"></i></button>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</section>
	<div id="wrapper" class="clearfix">
		<!-- Header -->
		<header id="header" class="header">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<div class="header-nav navbar-fixed-top header-dark navbar-white navbar-transparent navbar-sticky-animated animated-active">
				<div class="header-nav-wrapper">
					<div class="container">
						<nav>
							<div id="menuzord-right" class="menuzord green"> <a class="menuzord-brand pull-left flip font-playball font-24 text-theme-colored" href="javascript:void(0)">Endah & Bayu</a>
								<ul class="menuzord-menu">
									<li class=""><a href="#home">Sampul</a></li>
									<li><a href="#couple">Mempelai</a></li>
									<li><a href="#story">Acara Akad </a></li>
									<li><a href="#maps">Denah Lokasi</a></li>
									<li><a href="#gallery">Gallery</a></li>
									<li><a href="#message">Ucapan & Do'a</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<!-- Start main-content -->
		<div class="main-content">
			<!-- Section: home -->
			<section id="home" class="divider">
				<div class="container-fluid p-0">

					<!-- Slider Revolution Start -->
					<div class="rev_slider_wrapper">
						<div class="rev_slider" data-version="5.0">
							<ul>

								<!-- SLIDE 1 -->
								<li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/wedding/bg/bg-02.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="The Wedding of Endah & Bayu">
									<!-- MAIN IMAGE -->
									<img src="images/wedding/slider/endah-bayu-2.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

									<!-- LAYER NR. 1 -->
									<div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="rs-1-layer-1" data-x="['center']" data-hoffset="['0']" data-y="['bottom']" data-voffset="['30']" data-fontsize="['30']" data-lineheight="['50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><img src="images/wedding/logo/logo-endah-bayu.png" alt="">
								</li>
								<!-- SLIDE 2 -->
								<li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/wedding/bg/bg-02.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="The Wedding of Endah & Bayu">
									<!-- MAIN IMAGE -->
									<img src="images/wedding/slider/endah-bayu-1.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

									<!-- LAYER NR. 2 -->
								</li>
								<!-- SLIDE 3 -->
								<li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/wedding/bg/bg-02.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="The Wedding of Endah & Bayu">
									<!-- MAIN IMAGE -->
									<img src="images/wedding/slider/endah-bayu-3.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

									<!-- LAYER NR. 3 -->
								</li>
								<!-- SLIDE 3 -->
								<li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/wedding/bg/bg-02.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="The Wedding of Endah & Bayu">
									<!-- MAIN IMAGE -->
									<img src="images/wedding/slider/endah-bayu-4.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

									<!-- LAYER NR. 3 -->
								</li>

							</ul>
						</div><!-- end .rev_slider -->
					</div>
					<!-- end .rev_slider_wrapper -->
				</div>
			</section>

			<!-- Section: Couple -->
			<section id="couple" class="divider pb-0 bg-img-center-bottom" data-stellar-background-ratio="0.9" data-bg-img="images/wedding/bg/bg-04.jpg">
				<div class="container">
					<div class="section-title">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center pb-30 wow fadeInUp animation-delay1">
								<h2 class="font-32" style="color:#254539">
									<span class='typed-text-carouse' data-speed='300' data-back_delay='200' data-loop='true'>
										<span>Pernikahan Endah & Bayu</span>
									</span>
								</h2>
								<img src="images/navy-rustic/section-title-after.png" alt="">
								<p class="mt-50 font-16" style="color:#254539">"Maha suci Allah yang telah menciptakan mahluk-Nya berpasang-pasangan. Ya Allah, perkenankanlah kami merangkaikan kasih sayang yang Kau ciptakan diantara kami.</p>
							</div>
						</div>
					</div>

					<div class="section-content">
						<div class="row p-20">
							<div class="col-xs-12 col-sm-4 col-sm-offset-2 wow fadeInRight animation-delay2 animated">
								<div class="couple">
									<div class="couple-thumb text-center">
										<img class="img-fullwith" width="200px" src="images/wedding/bride/endah.jpg" alt="" style="border-radius: 50%;border:5px solid #254539;transform: scaleX(-1);">
									</div>
									<div class="couple-detals text-center">
										<h3 class="name">
											<span class='typed-text-carouse' style="color:#254539;" data-speed='300' data-back_delay='200' data-loop='true'>
												<span>Endah Sri Rahayu</span>
											</span>
										</h3>
										<p style="font-size:14px; color:#254539;">Putri Ke-2 <br>Alm. Bpk. Sumali & Alm. Ibu Eni Purwaningsih</p>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-4 wow fadeInLeft animation-delay1 animated">
								<div class="couple">
									<div class="couple-thumb text-center">
										<img class="img-fullwidh" width="200px" src="images/wedding/bride/bayu.jpg" alt="" style="border-radius:50%;border:5px solid #254539;transform: scaleX(-1);">
									</div>
									<div class="couple-detais text-center">
										<h3 class="name">
											<span class='typed-text-carouse' style="color:#254539;" data-speed='300' data-back_delay='200' data-loop='true'>
												<span>Eka Bayu Saputra</span>
											</span>
										</h3>
										<p style="font-size:14px; color:#254539;">Putra Ke-1 <br> Bpk. Jemadi & Ibu Ani Susanti</p>
									</div>
								</div>
							</div>

							<div class="col-md-offset-2 col-md-8 font-16 text-center">
								<p class="pt-40" style="color:#254539">"Dan diantara tanda-tanda kekuasaan-Nya adalah diciptakan-Nya untukmu pasangan hidup dari jenis mu sendiri supaya kamu mendapat ketenangan hati dan dijadikan-Nya kasih sayang di antara kamu. Sesungguhnya yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang yang berfikir". ( Ar-Rum : 21 )</p>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section id="home" class="divider parallax fullscreen layer-overlay" data-stellar-background-ratio="0.8" data-bg-img="images/wedding/bg/bg-endah-dan-bayu.jpg">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container pt-200 pb-">
							<div class="row">
								<div class="col-md-12 text-center">
									<h1 class="tagline text-white font-48">
										<span data-speed='50' class='typed-text-carousel' data-speed='300' data-back_delay='300' data-loop='true'>
											<span>Endah & Bayu</span>
											<span>Tidak ada solusi yang lebih baik bagi dua insan yang saling mencintai di banding sebuah pernikahan. HR Ibnu Majah</span>
										</span>
									</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Section: Our Story  -->
			<section id="story" class="divider bg-img-center-bottom text-theme-colored" data-bg-img="images/wedding/bg/bg-03.jpg">
				<div class="container">
					<div class="section-title">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center pb-30 wow fadeInUp animation-delay2">
								<h3 class="font-32 text-theme-colored">
									<span class='typed-text-carouse' data-speed='300' data-back_delay='200' data-loop='true'>
										<span>Acara Pernikahan </span>
									</span>
								</h3>
								<img src="images/navy-rustic/section-title-after.png" alt="">
								<p>Dengan Memohon Rahmat dan Ridho Allah Subhanahu wa Ta'ala, Kami bermaksud menyelenggarakan Akad Nikah pada : </p>
							</div>
						</div>
						<div class="section-content text-theme-colored">
							<div class="row">
								<div class="each-story animated fadeInUp wow pl-20 pr-20">
									<div class="col-md-4 col-md-offset-4 pt-30 col-xs-12 text-center border-theme-colored border-3px" style="border-radius:1em">
										<img src="images/wedding/event/genders.svg" class="ml-10" style="opacity: .8;" width="50px" alt="">
										<h2 class="p-sm-20 mt-sm-0 font-32 text-theme-colored"><em>Akad Nikah</em></h2>
										<div class="p-20 mb-20">
											<div class="row">
												<div class="col-sm-12">
													<h4 class="text-theme-colored">Sabtu, 17 Juli 2021</h4>
													<span class="wedding-">Pukul 07:00 WIB s/d Selesai
														<br>
														<br>
														<h4 class="text-theme-colored">Bertempat di</h4>
														<p>Kediaman Rumah Mempelai Wanita</p>
														<p>Jl. Parang Kembang No. 10, Ponorogo, Jawa Timur</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="text-center mt-30 animated fadeInUp">
								<a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=MTZkbTdoYnU0N2xuNmxsczhwOWxrOW1tZXIgaGlrbWF0YXVsaWEyMEBt&tmsrc=hikmataulia20%40gmail.com" target="_blank" class="font-playball btn btn-lg font-24 bg-theme-colored" style="color: #254539;"><strong>#SaveTheDate</strong></a>
								<!-- <a class="font-playball text-theme-colored text-center font-32" href="#">#SaveTheDate</a> -->
							</div>
							<div class="row mt-30 animated fadeIn">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h3 class="font-32">
										<span class='typed-text-carouse text-theme-colored font-32' data-speed='300' data-back_delay='200' data-loop='true'>
											<span>Menuju Acara Pernikahan </span>
										</span>
									</h3>
									<div class="title-icon">
										<img src="images/navy-rustic/section-title-after.png" alt="">
									</div>
								</div>
								<style>
									.gaya {
										display: inline-block;
										width: 100px;
										height: 100px;
										/*background: rgba(241, 78, 149, 0.8);*/
										/* background-color: ; */
										-webkit-border-radius: 50%;
										-moz-border-radius: 50%;
										-ms-border-radius: 50%;
										border-radius: 50%;
										position: relative;
										animation: pulse 1s ease infinite;
										/* color: #ffffff; */
										font-size: 30px;
										margin: 5px;
										border: 3px solid #BBAD62;
										padding: 14px;
									}

									.gaya span {
										font-size: 16px;
										display: block;
										margin-top: 0px;
										font-size: 16px;
									}
								</style>
								<div class="col-md-12 animated fadeInUp" style="text-align:center;">
									<div class="font-playball mt-20">
										<div id="hitungmundur1" class="gaya"></div>
										<div id="hitungmundur2" class="gaya"></div>
										<div id="hitungmundur3" class="gaya"></div>
										<div id="hitungmundur4" class="gaya"></div>
									</div>
								</div>
							</div>
						</div>

					</div>
			</section>
			<!-- Section: Story -->

			<!-- Section: Client and Logo -->
			<section id="maps" class="divider bg-img-center-center" data-bg-img="images/wedding/bg/bg-01.jpg">
				<div class="container">
					<div class="section-title">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center wow fadeInUp animation-delay1">
								<i class="fa fa-map-marker-alt font-48" style="color: #254539;"></i>
								<h2 class="font-32">
									<span class='typed-text-carouse' style="color: #254539;" data-speed='300' data-back_delay='200' data-loop='true'>
										<span>Denah Lokasi</span>
									</span>

								</h2>
								<img src="images/navy-rustic/section-title-after.png" alt="">
								<p class="text-black-555">Jl. Parang Kembang No. 10, Ponorogo, Jawa Timur</p>
								<div class="border-20px" style="border:solid 3px #254539;border-radius:20px">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.0949370335469!2d111.4862668291832!3d-7.855265999646262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNTEnMTkuMCJTIDExMcKwMjknMTIuNSJF!5e0!3m2!1sid!2sid!4v1625757396553!5m2!1sid!2sid" width="600" height="450" style="border:3px solid #254539;border-radius:20px" allowfullscreen="" loading="lazy"></iframe>
								</div>

								<a class="btn btn-lg btn-dark btn-flat text-white mt-30 animated" style="background-color: #254539;" href="https://goo.gl/maps/mvxetNZKgGkQMiSH7">Navigasi ke Lokasi</a>
								<a class="btn btn-lg btn-dark btn-flat text-white mt-30 animated" target="_blank" style="background-color: #254539;" href="https://www.google.com/maps/@-7.8554768,111.4868122,3a,75y,359.42h,90t/data=!3m6!1e1!3m4!1s8l0rZEBXCkLk-e5TYwnYdQ!2e0!7i16384!8i8192">Streat View</a>
							</div>
						</div>
					</div>
				</div>


			</section>

			<!-- Section: Gallery  -->
			<section id="gallery" class="divider pb-0 bg-img-center-top" data-stellar-background-ratio="0.8" data-bg-img="images/wedding/bg/bg-05.jpg">
				<div class="container-fluid pl-0 pr-0 pb-0">
					<div class="section-title">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center pb-30 wow fadeInUp animation-delay1">
								<h2 class="font-32">

									<span class='typed-text-carouse' style="color: #254539;" data-speed='300' data-back_delay='200' data-loop='true'>
										<span>Galeri Foto</span>
									</span>

								</h2>
								<img src="images/navy-rustic/section-title-after.png" alt="">
							</div>
						</div>
					</div>
					<div class="section-content">
						<div class="row">
							<div class="col-md-12">

								<!-- Portfolio Gallery Grid -->
								<div id="grid" class="portfolio-gallery masonry grid-4 clearfix" data-lightbox="gallery">

									<!-- Portfolio Item Start 1 -->
									<div class="portfolio-item">
										<a href="images/wedding/gallery/big/gallery-01.jpeg" data-lightbox="gallery-item" title="Undangan Pernikahan Endah & Bayu">
											<div class="thumb">
												<img class="img-fullwidth photo" src="images/wedding/gallery/small/gallery-01.jpg" alt="Undangan Pernikahan Endah & Bayu">
												<div class="overlay-shade"></div>
												<div class="text-holder">
													<div class="title text-center">Endah & Bayu</div>
												</div>
												<div class="icons-holder">
													<div class="icons-holder-inner">
														<div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
															<i class="fa fa-plus text-white"></i>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
									<!-- Portfolio Item End 1 -->
									<!-- Portfolio Item Start 2 -->
									<div class="portfolio-item">
										<a href="images/wedding/gallery/big/gallery-02.jpeg" data-lightbox="gallery-item" title="Undangan Pernikahan Endah & Bayu">
											<div class="thumb">
												<img class="img-fullwidth photo" src="images/wedding/gallery/small/gallery-02.jpg" alt="Undangan Pernikahan Endah & Bayu">
												<div class="overlay-shade"></div>
												<div class="text-holder">
													<div class="title text-center">Endah & Bayu</div>
												</div>
												<div class="icons-holder">
													<div class="icons-holder-inner">
														<div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
															<i class="fa fa-plus text-white"></i>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
									<!-- Portfolio Item End 2 -->
									<!-- Portfolio Item Start 3 -->
									<div class="portfolio-item">
										<a href="images/wedding/gallery/big/gallery-03.jpeg" data-lightbox="gallery-item" title="Undangan Pernikahan Endah & Bayu">
											<div class="thumb">
												<img class="img-fullwidth photo" src="images/wedding/gallery/small/gallery-03.jpg" alt="Undangan Pernikahan Endah & Bayu">
												<div class="overlay-shade"></div>
												<div class="text-holder">
													<div class="title text-center">Endah & Bayu</div>
												</div>
												<div class="icons-holder">
													<div class="icons-holder-inner">
														<div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
															<i class="fa fa-plus text-white"></i>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
									<!-- Portfolio Item End 3 -->
									<!-- Portfolio Item Start 4 -->
									<div class="portfolio-item">
										<a href="images/wedding/gallery/big/gallery-04.jpeg" data-lightbox="gallery-item" title="Undangan Pernikahan Endah & Bayu">
											<div class="thumb">
												<img class="img-fullwidth photo" src="images/wedding/gallery/small/gallery-04.jpg" alt="Undangan Pernikahan Endah & Bayu">
												<div class="overlay-shade"></div>
												<div class="text-holder">
													<div class="title text-center">Endah & Bayu</div>
												</div>
												<div class="icons-holder">
													<div class="icons-holder-inner">
														<div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
															<i class="fa fa-plus text-white"></i>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
									<!-- Portfolio Item End 4 -->
									<!-- Portfolio Item Start 5 -->
									<div class="portfolio-item">
										<a href="images/wedding/gallery/big/gallery-05.jpeg" data-lightbox="gallery-item" title="Undangan Pernikahan Endah & Bayu">
											<div class="thumb">
												<img class="img-fullwidth photo" src="images/wedding/gallery/small/gallery-05.jpg" alt="Undangan Pernikahan Endah & Bayu">
												<div class="overlay-shade"></div>
												<div class="text-holder">
													<div class="title text-center">Endah & Bayu</div>
												</div>
												<div class="icons-holder">
													<div class="icons-holder-inner">
														<div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
															<i class="fa fa-plus text-white"></i>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
									<!-- Portfolio Item End 5 -->
									<!-- Portfolio Item Start 6 -->
									<div class="portfolio-item">
										<a href="images/wedding/gallery/big/gallery-06.jpeg" data-lightbox="gallery-item" title="Undangan Pernikahan Endah & Bayu">
											<div class="thumb">
												<img class="img-fullwidth photo" src="images/wedding/gallery/small/gallery-06.jpg" alt="Undangan Pernikahan Endah & Bayu">
												<div class="overlay-shade"></div>
												<div class="text-holder">
													<div class="title text-center">Endah & Bayu</div>
												</div>
												<div class="icons-holder">
													<div class="icons-holder-inner">
														<div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
															<i class="fa fa-plus text-white"></i>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
									<!-- Portfolio Item End 6 -->
									<!-- Portfolio Item Start 7 -->
									<div class="portfolio-item">
										<a href="images/wedding/gallery/big/gallery-07.jpeg" data-lightbox="gallery-item" title="Undangan Pernikahan Endah & Bayu">
											<div class="thumb">
												<img class="img-fullwidth photo" src="images/wedding/gallery/small/gallery-07.jpg" alt="Undangan Pernikahan Endah & Bayu">
												<div class="overlay-shade"></div>
												<div class="text-holder">
													<div class="title text-center">Endah & Bayu</div>
												</div>
												<div class="icons-holder">
													<div class="icons-holder-inner">
														<div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
															<i class="fa fa-plus text-white"></i>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
									<!-- Portfolio Item End 7 -->
									<!-- Portfolio Item Start 8 -->
									<div class="portfolio-item">
										<a href="images/wedding/gallery/big/gallery-08.jpeg" data-lightbox="gallery-item" title="Undangan Pernikahan Endah & Bayu">
											<div class="thumb">
												<img class="img-fullwidth photo" src="images/wedding/gallery/small/gallery-08.jpg" alt="Undangan Pernikahan Endah & Bayu">
												<div class="overlay-shade"></div>
												<div class="text-holder">
													<div class="title text-center">Endah & Bayu</div>
												</div>
												<div class="icons-holder">
													<div class="icons-holder-inner">
														<div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
															<i class="fa fa-plus text-white"></i>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
									<!-- Portfolio Item End 8 -->
								</div>
								<!-- End Portfolio Gallery Grid -->
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Footer -->
			<section id="message" class="divider pb-0 bg-img-center-center" data-bg-img="images/wedding/bg/bg-01.jpg">
				<!--<section id="message" class="divider pb-0 bg-img-center-bottom" data-bg-img="/images/navy-rustic/bg.png">-->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center wow fadeInUp animation-delay1">
							<i class="fa fa-envelope font-48" style="color: #254539;"></i>
							<h2>
								<span class='typed-text-carouse font-32' style="color: #254539;" data-speed='300' data-back_delay='200' data-loop='true'>
									<span>Ucapan/ Pesan/ Do'a</span>
								</span>
							</h2>
							<img src="images/navy-rustic/section-title-after.png" alt="">

							<div class="form-normal form-horizontal clearfix mt-50">
								<div class="col-lg-12">

									<form enctype="multipart/form-data" autocomplete="off" id="form-greeting">
										<div class="alert alert-warning" id="registration-form_es_" style="display:none"></div>

										<div class="form-group">
											<div class="col-md-12">
												<input class="form-control input-lg" style="border-radius: 10px;" placeHolder="Nama Lengkap" name="nama" id="nama" type="text" maxlength="100" />
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-12">
												<textarea class="form-control input-lg" style="border-radius: 10px;" placeHolder="Tulis Pesan / Ucapan..." name="greeting" id="greeting"></textarea>
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-12">
												<input class="btn btn-lg btn-dark btn-flat text-white mt-30 animated" style="background-color: #254539;" type="button" id="sendGreeting" value="Kirim Ucapan" />
											</div>
										</div>

									</form>
									<div class="text-center">
										<img src="images/navy-rustic/section-title-after.png" alt="">
									</div>

									<div id="alertMsg" class="mt-50">
									</div>
								</div>
							</div>

						</div>
					</div>


					<?php

					$sql = "SELECT * from greeting WHERE status='1' AND order_id = 'NH0721001'";
					$greetings = mysqli_query($conn, $sql, 0);
					?>

					<div class="section-content">
						<div class="row">
							<div class="col-md-12">
								<div class="pt-10">
									<div class="testimonial-carousel" id="list-greeting">
										<?php foreach ($greetings as $greeting) : ?>
											<div class="item m-10">
												<div class="tetimonial-wrapper text-white shadow text-center border-radius-10px p-30" style="border:3px solidd #BBAD62;background: rgb(45, 90, 61); backdrop-filter: blur(20px);">
													<p class="font-16">
														<?= $greeting['greeting']; ?>
													</p>
													<p class="mt-0 mb-15 font-14 text-theme-colore">-- <?= $greeting['name']; ?> --</p>
												</div>
											</div>
										<?php endforeach ?>
										<div class=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end wrapper -->

			<!-- Footer -->
			<footer id="footer" class="footer pb-0 bg-img-center-top" data-bg-img="images/wedding/bg/bg-03.jpg">
				<div class="container pt-20 pb-30">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center wow fadeInUp animation-delay1">

							<!-- <p>Help us to Capture Our Wedding Day Use The Hashtag #Endah&BayuWedding</p> -->
							<h2>
								<span class='typed-text-carouse font-32' data-speed='300' data-back_delay='200' data-loop='true'>
									<span>Endah & Bayu</span>
								</span>
							</h2>

							<p>Dibuat Oleh <a href="https://nikahalal.com" style="color:pink" />Nikahalal.com</a> | <a target="_blank" rel="no_follow" href="http://instagram.com/nikahalaldotcom" /><img src="https://image.flaticon.com/icons/png/16/174/174855.png" /> nikahalaldotcom</a></p>

						</div>
					</div>
				</div>
			</footer>
			<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
		</div>
		<!-- end wrapper -->
		<script src="assets/js/jquery-2.2.0.min.js"></script>
		<script src="assets/js/jquery-ui.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-plugin-collection.js"></script>
		<script src="assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
		<script src="assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
		<script src="assets/js/custom.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet%401.6.0/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet%401.6.0/dist/leaflet.js"></script>
		<script src="assets/js/maps.js"></script>
		<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script>
			$(document).ready(function() {
				$('html, body').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
			$(document).on('click', '[data-toggle="lightbox"]', function(event) {
				event.preventDefault();
				$(this).ekkoLightbox();
			});
			$(document).on('click', '#buka-undangan', function() {
				$('#cover').fadeOut(1000, 'swing')
				$('body').removeClass('noscroll');
				playAudio();
			})
		</script>


		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0&appId=151237495231910&autoLogAppEvents=1" nonce="gfzwA6qw"></script>


		<script>
			$(document).ready(function(e) {
				var revapi = $(".rev_slider").revolution({
					sliderType: "standard",
					jsFileLocation: "js/revolution-slider/js/",
					sliderLayout: "fullscreen",
					dottedOverlay: "none",
					delay: 5000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						onHoverStop: "off",
						touch: {
							touchenabled: "on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						arrows: {
							style: "gyges",
							enable: true,
							hide_onmobile: false,
							hide_onleave: true,
							hide_delay: 200,
							hide_delay_mobile: 1200,
							tmp: '',
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 0,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 0,
								v_offset: 0
							}
						},
						bullets: {
							enable: true,
							hide_onmobile: true,
							hide_under: 800,
							style: "hebe",
							hide_onleave: false,
							direction: "horizontal",
							h_align: "center",
							v_align: "bottom",
							h_offset: 0,
							v_offset: 30,
							space: 5,
							tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
						}
					},
					responsiveLevels: [1240, 1024, 778],
					visibilityLevels: [1240, 1024, 778],
					gridwidth: [1170, 1024, 778, 480],
					gridheight: [700, 768, 960, 720],
					lazyType: "none",
					parallax: "mouse",
					parallaxBgFreeze: "off",
					parallaxLevels: [2, 3, 4, 5, 6, 7, 8, 9, 10, 1],
					shadow: 0,
					spinner: "off",
					stopLoop: "on",
					stopAfterLoops: 0,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			});
		</script>


		<audio loop preload='preload' allow='autoplay' type='audio/mp3' autoplay='true' id="myAudio">
			<source src="images/wedding/music/stephanie-poetri---i-love-you-3000-official-music-video.mp3">
		</audio>

		<a onclick="playAudio()" type="button" id='un-mute1' class='float'><img src='images/icon/music-mute.png' width='30px;'></a>
		<a onclick="pauseAudio()" type="button" id='mute1' class='float'><img src='images/icon/music.png' width='30px;'></a>

		<style>
			.float {
				position: fixed;
				width: 50px;
				height: 50px;
				bottom: 15px;
				left: 15px;
				background-color: #1a1b30;
				opacity: 0.8;
				color: #FFF;
				border-radius: 50px;
				text-align: center;
				padding-top: 12px;
				z-index: 99999;
			}

			.modal-body {
				padding: 0px;
			}

			.swal2-styled.swal2-confirm {
				background-color: #1a1b30;
			}
		</style>

		<script>
			document.getElementById('mute1').style.display = 'none';
			var x = document.getElementById("myAudio");

			function playAudio() {
				x.play();
				document.getElementById('un-mute1').style.display = 'none';
				document.getElementById('mute1').style.display = 'inline-block';
			}

			function pauseAudio() {
				x.pause();
				document.getElementById('mute1').style.display = 'none';
				document.getElementById('un-mute1').style.display = 'inline-block';
			}

			Hitung();

			function Hitung() {
				tahun = 2021;
				bulan = 07;
				hari = 17;
				jam = 07;
				menit = 00;
				detik = 00;


				setTimeout(function() {
					tglTarget = new Date(tahun, (bulan - 1), hari, jam, menit, detik, 00);
					tglSkrg = new Date();
					tglSkrg = new Date(tglSkrg.getFullYear(), tglSkrg.getMonth(), tglSkrg.getDate(), tglSkrg.getHours(), tglSkrg.getMinutes(), tglSkrg.getSeconds(), 00, 00);
					var sisaHari = parseInt((tglTarget - tglSkrg) / 86400000);
					var sisaJam = parseInt((tglTarget - tglSkrg) / 3600000);
					var sisaMenit = parseInt((tglTarget - tglSkrg) / 60000);
					var sisaDetik = parseInt((tglTarget - tglSkrg) / 1000);
					detik = sisaMenit * 60;
					detik = sisaDetik - detik;
					menit = sisaJam * 60;
					menit = sisaMenit - menit;
					jam = sisaHari * 24;
					jam = (sisaJam - jam) < 0 ? 0 : sisaJam - jam;
					hari = sisaHari;
					mulaiHitung(hari, jam, menit, detik, tahun);
				}, 1000);
			}

			function mulaiHitung(hari, jam, menit, detik, tahun) {
				document.getElementById("hitungmundur1").innerHTML = "" + hari + "<span>Hari</span>";
				document.getElementById("hitungmundur2").innerHTML = "" + jam + "<span>Jam</span>";
				document.getElementById("hitungmundur3").innerHTML = "" + menit + "<span>Menit</span>";
				document.getElementById("hitungmundur4").innerHTML = "" + detik + "<span>Detik</span>";
				Hitung();
			}
		</script>
		<script type="text/javascript">
			// Send greeting
			$(document).on('click', '#sendGreeting', function() {
				// alert('send');
				let name = $('#nama').val();
				let greeting = $('#greeting').val();
				if (name == '') {
					alert("Isi Nama kamu dulu ya!");
				} else if (greeting == '') {
					alert("Jangan lupa kasih Ucapan dan Do'a kamu untuk kedua mempelai!");
				} else {
					let formData = new FormData($('#form-greeting')[0])
					$.ajax({
						url: 'models/create_greeting.php',
						type: 'POST',
						data: formData,
						contentType: false,
						processData: false,
						async: false,
						dataType: 'JSON',
						beforeSend: function() {
							$('#alertMsg').html("<img src='images/loader.gif' height='40px'>").fadeIn('slow').slideDown('slow')
						},
						success: function(result) {
							if (result.code == 1) {
								$('#nama').val('');
								$('#greeting').val('');
								$('#alertMsg').html("<div class='alert alert-success'>" + result.msg + "</div>")
								$(`<div class="item m-10">
										<div class="tetimonial-wrapper text-white shadow text-center border-radius-10px p-30" style="border:3px solidd #BBAD62;background: rgb(45, 90, 61); backdrop-filter: blur(20px);">
											<p class="font-16">
												` + result.greeting + `
											</p>
											<p class="mt-0 mb-15 font-16 text-theme-colore">-- ` + result.nama + ` --</p>
										</div>
									</div>
								`).prependTo('#list-greeting').hide().fadeIn('3000');
								setTimeout(function() {
									$('.alert-success').fadeOut('slow');
								}, 2000)

							} else {
								$('#alertMsg').html("<div class='alert alert-danger'> " + result.msg + "</div>")
							}
						},
						error: function(result) {
							$('#alertMsg').html("<div class='alert alert-danger'>#Internal server error!!</div>")
						}
					})
				}
			})

			// jQuery(function($) {
			// 	$("#Registration_payment_status").bind("click init", function() {
			// 		$("#showDigitalPayment").toggle($("#Registration_payment_status").is(":checked"));
			// 	}).trigger("init");
			// 	$("#Registration_status").bind("click init", function() {
			// 		$("#showGuest").toggle($("#Registration_status").is(":checked"));
			// 	}).trigger("init");

			// 	$("#Registration_payment_id").change(function() {
			// 		var optionSelected = $(this).find("option:selected");
			// 		var valueSelected = optionSelected.val();
			// 		var textSelected = optionSelected.text();
			// 		$("#copy").val(textSelected);
			// 	});
			// });
		</script>
</body>

</html>
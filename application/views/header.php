<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<link rel="icon" href="img/favicon.ico">
	<!-- CSS FILES -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/uikit.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/marketing.css'); ?>" />
	<script src="<?php echo base_url('assets/js/uikit.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/uikit-icons.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/uikit.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nprogress.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.css'); ?>" />
    <script src="<?php echo base_url('assets/js/uikit.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/uikit-icons.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/nprogress.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.all.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js'); ?>"></script>
</head>

<div class="top-wrap uk-position-relative uk-light uk-background-secondary">
			
	<!-- NAV -->
	<div class="nav" data-uk-sticky="cls-active: uk-background-secondary uk-box-shadow-medium; top: 100vh; animation: uk-animation-slide-top">
		<div class="uk-container">
			<nav class="uk-navbar uk-navbar-container uk-navbar-transparent" data-uk-navbar>
				<div class="uk-navbar-left">
					<div class="uk-navbar-item uk-padding-remove-horizontal">
						<a class="uk-logo" title="Logo" href=""><img src="<?php echo base_url('assets/image/Logo.png'); ?>" alt="Logo"></a>
					</div>
				</div>
				<div class="uk-navbar-right">
					<ul class="uk-navbar-nav uk-visible@s">
						<li class="uk-active uk-visible@m"><a href="<?php echo base_url(); ?>" data-uk-icon="home"></a></li>
						<li><a href="<?php echo base_url('Welcome/merchandise'); ?>">Marchandise</a></li>
					</ul>
					<a class="uk-navbar-toggle uk-navbar-item uk-hidden@s" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>
				</div>
			</nav>
		</div>
	</div>
	<!-- /NAV -->
	
	<div class="uk-cover-container uk-light uk-flex uk-flex-middle top-wrap-height">
		
		<!-- TOP CONTAINER -->
		<div class="uk-container uk-flex-auto top-container uk-position-relative uk-margin-medium-top" data-uk-parallax="y: 0,50; easing:0; opacity:0.2">
			<div class="uk-width-1-2@s" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > *; delay: 150">
				<!-- <h6 class="uk-text-primary uk-margin-small-bottom"></h6> -->
				<h1 class="uk-margin-remove-top">ACCESS TEL-U</h1>
				<p class="subtitle-text uk-visible@s">Association Cirebon's Students of Telkom University</p>
				
			</div>
		</div>
		<!-- /TOP CONTAINER -->
		<!-- TOP IMAGE -->
		<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://picsum.photos/640/700/?image=816 640w,
		https://picsum.photos/960/700/?image=816 960w,
		https://picsum.photos/1200/900/?image=816 1200w,
		https://picsum.photos/2000/1000/?image=816 2000w"
		data-sizes="100vw"
		data-src="https://picsum.photos/1200/900/?image=816" alt="" data-uk-cover data-uk-img data-uk-parallax="opacity: 1,0.1; easing:0"
		>
		<!-- /TOP IMAGE -->
	</div>
	<!-- <div class="uk-position-bottom-center uk-position-medium uk-position-z-index uk-text-center">
		<a href="#content" data-uk-scroll="duration: 500" data-uk-icon="icon: arrow-down; ratio: 2"></a>
	</div> -->
</div>
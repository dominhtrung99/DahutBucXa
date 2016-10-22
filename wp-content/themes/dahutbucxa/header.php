<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
   
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
     <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" />
  
   
    
	
	<!-- Plugins Stylesheets -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/imagelightbox.css" rel="stylesheet">
	
	<!-- Theme Stylesheets -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css?ver=4" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet">
	
	<!-- User Color Stylesheets -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/default.css" rel="stylesheet">
	
	<!-- Shortcodes -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/shortcodes.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <?php wp_head(); ?>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=133409470425142";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
</head>

<body <?php body_class(); ?>>
 <!--
	==========================
	BEGIN PAGE CONTENT
	==========================
	-->
	
	<!-- BEGIN LOADING -->
	<div id="loading">
		<span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
	</div>
	<!-- END LOADING -->
	
	
	<div class="wrapper">
	
		<!-- BEGIN HEADER -->
		<?php 
        if(is_front_page()){
             $class = 'hero-image';
        }else{
             $class = '';
        }
       
        ?>
		<header class="<?php echo $class; ?> main-nav-fixed">
			<div class="container">
				<div class="header-inner">
				
					<!-- BEGIN BUTTONS -->
					<div class="search-button" id="header-search-toggle"></div>
					<div class="sidebar-menu-button" id="sidebar-menu-toggle"></div>
					<!-- END BUTTONS -->
					
					<!-- BEGIN BODY OVERLAY -->
					<div class="body-overlay" id="body-overlay-toggle"></div>
					<!-- END BODY OVERLAY -->
						
					<!--
						NOTE FOR LOGO TYPE :
						- To use logo text, please add .logo-text to .logo
						- To use logo image, please remove .logo-text from .logo
						- If you wish to remove logo background color, just add .logo-transparent to .logo
						- If you wish to remove site description, just add .disable-site-description to .logo
					-->
					<a class="logo" href="<?php echo get_option('siteurl'); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-1.png" alt="Logo" class="img-retina">
						<h1>Đá hút bức xạ</h1>
						<p>Đá hút bức xạ</p>
					</a><!-- /.logo -->
					
					<div class="social-icons">
						<a target="_blank" href="https://www.facebook.com/dahutbucxa"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="#fakelink"><i class="fa fa-instagram"></i></a>
					<a target="_blank" href="#fakelink"><i class="fa fa-youtube"></i></a>
					</div><!-- /.social-icons -->
					
					<div class="search search-form">
						<form method="get" action="<?php echo get_option('siteurl'); ?>">
							<div class="form-group">
							<button class="btn search-icon" type="submit"><i class="fa fa-search"></i></button>
							<input name="s" type="text" class="form-control" placeholder="Bạn cần tìm loại đá nào">
							</div><!-- /.form-group -->
						</form>
					</div><!-- /.search -->
					
					<div class="main-nav">
						
<?php 
$defaults = array(
	'theme_location'  => 'header-menu',
	'menu'            => '',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul>%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
			
?>

					</div><!-- /.main-nav -->
					
					<!-- BEGIN HERO CONTENT -->
					<div class="hero-content">
					
						<div id="typed-strings">
							<p>an anventist</p>
							<p>a <em>time</em> traveller</p>
							<p>a music lover</p>
							<p>a serious blogger</p>
							<p>a nature enthusiast</p>
						</div><!-- /#typed-strings -->
						
						<h1>
						Hello...<br />
						I'm <strong>@DaHutBucXa</strong><br />
						<span id="typed"></span>
						</h1>
						
					</div><!-- /.hero-content -->
					<!-- END HERO CONTENT -->
					
				</div><!-- /.header-inner -->
			</div><!-- /.container -->
		</header>
		<!-- END HEADER -->
		
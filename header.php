<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage 如心
 * @since 如心2017
 */
/*
manifest="/wp-content/themes/ruxin2017/ruxin.appcache"
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" manifest="/wp-content/themes/ruxin2017/ruxin.appcache">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="format-detection" content="telephone=no"/>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
	<title>
		<?php 
         if( $_GET['id'] ){
		   if( $post = get_post( $_GET['id'] ) ){
		      if($post->post_title){
		        echo $post->post_title;
				echo ' - ';
				bloginfo('name');
			   }else if(get_the_category($_GET['id'])[0]->cat_name){
			    echo get_the_category($_GET['id'])[0]->cat_name;
				echo ' - ';
				bloginfo('name');
		      }
		   }else{
		    bloginfo('name');
		    echo '-';
		    bloginfo('description');
		   }
		}else{
		  bloginfo('name');
		  echo '-';
		  bloginfo('description');
		}
    ?> 
	</title>
	<!-- Bootstrap -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
	<!-- Links -->
	<link href="<?php bloginfo('template_url'); ?>/css/rd-mailform.css" rel="stylesheet">
	<!--JS-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-migrate-1.2.1.min.js"></script>
	<!--[if lt IE 9]>
	<div style=' clear: both; text-align:center; position: relative;'>
	<a href="http://windows.microsoft.com/en-US/internet-explorer/..">
	  <img data-original="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
	       alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
	</a>
	</div>
	<script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<script src='<?php bloginfo('template_url'); ?>/js/device.min.js'></script>
	<script>
		var __tpl__ = '<?php bloginfo('template_url'); ?>';
		var template_url = '<?php bloginfo("template_directory"); ?>'
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="page text-center">
	  <!--========================================================
	                            HEADER
	  =========================================================-->
	  <?php if (is_home()) {?>
	  <header class="swiper-container swiper-slider pcShow" data-height="100vh">
	  	<?php  global $wpdb; $query = "SELECT * FROM ".$wpdb->prefix."huge_itslider_images where slider_id = 1 order by ordering";
            $firstrow=$wpdb->get_results($query);
    	?>
	    <!-- Swiper -->
	    <div class="swiper-wrapper">
	    	<?php  foreach($firstrow as $v){ ?>
		      <div class="swiper-slide" data-slide-bg="<?php echo $v->image_url;?>">
		      	  <div class="container container-wide bannerDom">
			        <h1 class="h1 h1--mod brand white"><?php echo $v->name; ?></h1>
			        <p class="lead white"><?php echo $v->description; ?></p>
			      </div>
		      </div>
		    <?php }?> 
	    </div>
	    <!-- Swiper Navigation -->
	    <div class="swiper-button-prev material-icons-chevron_left"></div>
	    <div class="swiper-button-next material-icons-chevron_right"></div>
	    <!-- END Swiper -->
	  </header>
	  <header class="swiper-container swiper-slider moShow" data-height="100vh">
	  	<?php  global $wpdb; $query = "SELECT * FROM ".$wpdb->prefix."huge_itslider_images where slider_id = 5 order by ordering";
            $firstrow=$wpdb->get_results($query);
    	?>
	    <!-- Swiper -->
	    <div class="swiper-wrapper">
	    	<?php  foreach($firstrow as $v){ ?>
		      <div class="swiper-slide" data-slide-bg="<?php echo $v->image_url;?>">
		      	  <div class="container container-wide bannerDom">
			        <h1 class="h1 h1--mod brand white"><?php echo $v->name; ?></h1>
			        <p class="lead white"><?php echo $v->description; ?></p>
			        <!-- <a href="<?php echo $v->sl_url; ?>" class="btn btn-sm btn-danger">了解更多 !</a> -->
			      </div>
		      </div>
		    <?php }?> 
	    </div>
	    <!-- Swiper Navigation -->
	    <div class="swiper-button-prev material-icons-chevron_left"></div>
	    <div class="swiper-button-next material-icons-chevron_right"></div>
	    <!-- END Swiper -->
	  </header>
	  <!-- Stuck Container -->
	  <div id="stuck_container" class="stuck_container">
	    <div class="navbar-wrap navbar-wrap-position">
	      <!-- Navbar -->
	      <nav class="navbar navbar-static-top">
	        <!-- Navbar Brand -->
	        <div class="navbar-header center-xs visible-sm-inline-block-skin">
	          <div class="navbar-brand">
	            <a href="<?php bloginfo('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
	          </div>
	        </div>
	        <!-- END Navbar Brand -->
	        <!-- Navbar Nav -->
	        <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
	          <li class="active">
	            <a href="<?php bloginfo('home'); ?>/">首页</a>
	          </li>
	          <!-- <li class="dropdown"> -->
	          <li>
	            <a href="<?php bloginfo('home'); ?>/service/">服务体系</a>
	          </li>
	          <li>
	            <a href="<?php bloginfo('home'); ?>/gallery?cat=20">成功案例</a>
	          </li>
	          <li>
	            <a href="<?php bloginfo('home'); ?>/about/">关于我们</a>
	          </li>
	          <li>
	            <a href="#contactUs">联系我们</a>
	          </li>
	          <li class="phoneCall">
		          <img src="<?php bloginfo('template_url'); ?>/images/phoneCall.png" />
	          </li>
	        </ul>
	        <!-- END Navbar Nav -->
	      </nav>
	      <!-- END Navbar -->
	    </div>
	  </div>
	  <?php }else{ ?>
	  <header>
    <!-- Stuck Container -->
    <div id="stuck_container" class="stuck_container">
      <div class="bg-image bg-image-3">
        <div class="navbar-wrap">
          <!-- Navbar -->
          <nav class="navbar navbar-static-top">
            <!-- Navbar Brand -->
            <div class="navbar-header center-xs">
              <div class="navbar-brand">
                <a href="<?php bloginfo('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
              </div>
            </div>
            <!-- END Navbar Brand -->
            <!-- Navbar Nav -->
            <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
              <li>
	            <a href="<?php bloginfo('home'); ?>/">首页</a>
	          </li>
	          <!-- <li class="dropdown"> -->
	          <li<?php if( is_page(4) ) echo ' class="active"'; ?>>
	            <a href="<?php bloginfo('home'); ?>/service/">服务体系</a>
	          </li>
	          <li<?php if( is_page(6) ) echo ' class="active"'; ?>>
	            <a href="<?php bloginfo('home'); ?>/gallery?cat=20">成功案例</a>
	          </li>
	          <li<?php if( is_page(8) ) echo ' class="active"'; ?>>
	            <a href="<?php bloginfo('home'); ?>/about/">关于我们</a>
	          </li>
	          <li>
	            <a href="#contactUs">联系我们</a>
	          </li>
	          <li class="phoneCall">
		          <img src="<?php bloginfo('template_url'); ?>/images/phoneCall.png" />
	          </li>
            </ul>
            <!-- END Navbar Nav -->
          </nav>
          <!-- END Navbar -->
        </div>
      </div>
    </div>
    <!-- END Stuck Container -->
  </header>
	  <?php } ?>
	  <!-- END Stuck Container -->
	  <!--========================================================
	                            CONTENT
	  =========================================================-->
	  <main>

<?php
	global $globalkorenamake;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="author" content="hzshohidul.com">
    
    <!-- Favicons
    ================================================== -->
    
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114.png">



    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

<!--	<script src="<?php //echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>-->
  </head>
  <?php wp_head(); ?>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_template_directory_uri(); ?>/index.php">
<?php if($globalkorenamake['head-logo']['url']): ?>
			<h4
				style="color: <?php echo $globalkorenamake['dead-title-color']; ?>;"
			><?php echo $globalkorenamake['dead-title']; ?></h4>
<?php else: ?>
			<img src="<?php echo $globalkorenamake['head-logo']['url']; ?>" alt="" />
<?php endif; ?>
		  </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		
		
			 <?php wp_nav_menu(array(
				'theme_location'  => 'top-menu_dilam',
				'menu_class'      => 'nav navbar-nav navbar-right',
				'container'       => '',
			 )); ?>
			
         <!-- /* <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-about" class="page-scroll">About</a></li>
            <li><a href="#tf-team" class="page-scroll">Team</a></li>
            <li><a href="#tf-services" class="page-scroll">Services</a></li>
            <li><a href="#tf-works" class="page-scroll">Portfolio</a></li>
            <li><a href="#tf-testimonials" class="page-scroll">Testimonials</a></li>
            <li><a href="#tf-contact" class="page-scroll">Contact</a></li>
          </ul> */-->
		  
		  
		  
		  
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	

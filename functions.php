<?php

	function hzshohidultheme_css_js_link(){
		wp_enqueue_style('hzshohidul-carouselcss', get_template_directory_uri(). '/css/owl.carousel.css');
		wp_enqueue_style('hzshohidul-bootstrapcss', get_template_directory_uri(). '/css/bootstrap.css');
		wp_enqueue_style('hzshohidul-fontawesome', get_template_directory_uri(). '/fonts/font-awesome/css/font-awesome.css');
		wp_enqueue_style('hzshohidul-owlthemecss', get_template_directory_uri(). '/css/owl.theme.css');
		wp_enqueue_style('hzshohidul-lightboxmincss', get_template_directory_uri().'/css/lightbox.min.css');
		wp_enqueue_style('hzshohidul-lightboxcss', get_template_directory_uri(). '/css/lightbox.css');
		wp_enqueue_style('hzshohidul-stylecss', get_template_directory_uri(). '/css/style.css');
		wp_enqueue_style('hzshohidul-responsivecss', get_template_directory_uri(). '/css/responsive.css');
		
		wp_enqueue_script('hzshohidul-cookie',get_template_directory_uri(). '/js/jquery.cookie.js',array('jquery'),'',true);
		wp_enqueue_script('hzshohidul-lightboxminjs',get_template_directory_uri(). '/js/lightbox.min.js',array('jquery'),'',true);
		wp_enqueue_script('hzshohidul-lightboxjs',get_template_directory_uri(). '/js/lightbox.js',array('jquery'),'',true);
		wp_enqueue_script('hzshohidul-bootstrap',get_template_directory_uri(). '/js/bootstrap.js',array('jquery'),'',true);
		wp_enqueue_script('hzshohidul-SmoothScroll',get_template_directory_uri(). '/js/SmoothScroll.js',array('jquery'),'',true);
		wp_enqueue_script('hzshohidul-isotope',get_template_directory_uri(). '/js/jquery.isotope.js',array('jquery'),'',true);
		wp_enqueue_script('hzshohidul-owlcarouseljs',get_template_directory_uri(). '/js/owl.carousel.js',array('jquery'),'',true);
		wp_enqueue_script('hzshohidul-main',get_template_directory_uri(). '/js/main.js',array('jquery'),'',true);
		
	}
	add_action('wp_enqueue_scripts','hzshohidultheme_css_js_link');
	
	//=================================================================
	
	function amader_hzshohidultheme(){
		add_theme_support('title-tag');
		add_theme_support('custom-header');
		add_theme_support('custom-background');
		add_theme_support('menus');
		add_theme_support('post-thumbnails');
		
		load_theme_textdomain('hzshohidultextdomain',get_template_directory().'/languages');
		
		register_nav_menus(array(
			'top-menu_dilam' => __(' এটা শীর্ষ মেনু ','hzshohidultextdomain'),
			'footer-menu-dilam'    => __(' এটা পাদচরণ মেনু ','hzshohidultextdomain'),
		));
		//----------------
		register_post_type('homepage-top',array(
			'public'        => true,
			'menu_position' => 5,
			'menu_icon'     => 'dashicons-admin-home',
			'supports'      => array('title','editor','author','thumbnail'),
			'labels'        => array(
				'menu_name'    => __(' হোম শীর্ষ পোস্ট ','hzshohidultextdomain'),
				'all_items'    => __(' সব শীর্ষ পোস্ট ','hzshohidultextdomain'),
				'add_new'      => __(' নতুন শীর্ষ পোস্ট ','hzshohidultextdomain'),
				'add_new_item' => __(' নতুন পোস্ট ','hzshohidultextdomain'),
			),
		));
		//----------------
		register_post_type('skill-area',array(
			'public'         => true,
			'menu_icon'      => 'dashicons-welcome-learn-more',
			'menu_position'  => 6,
			'supports'       => array('title','editor','author','thumbnail'), 
			'labels'         => array(
				'menu_name'        => __(' দক্ষতা সেট ','hzshohidultextdomain'),
				'all_items'        => __(' সবগুলো দক্ষতা ','hzshohidultextdomain'),
				'add_new'          => __(' নতুন দক্ষতা যোগ করুন ','hzshohidultextdomain'),
				'add_new_item'      => __(' আইটেম যোগ ','hzshohidultextdomain'),
			),
		));
		//----------------
		register_post_type('our-team',array(
			'public'     => true,
			'menu_icon' => 'dashicons-groups',
			'menu_position'  => 7,
			'supports'       => array('title','editor','author','thumbnail'),
			'labels'         => array(
				'menu_name'      => __(' দলের সদস্য সেট ','hzshohidultextdomain'),
				'all_items'      => __(' সবগুলো সদস্য ','hzshohidultextdomain'),
				'add_new'        => __(' নতুন সদস্য যোগ করুন ','hzshohidultextdomain'),
				'add_new_item'   => __(' নতুন সদস্য নাম ','hzshohidultextdomain'),
			),
		));
		//----
		register_taxonomy('team-kontype','our-team',array(
			'public'             => true,
			'label'              => __(' সদস্য শিরোনাম যোগ করুন ','hzshohidultextdomain'),
			'hierarchical'       => true,
			'show_admin_column'  => true,
		));
		//-----------------------
		register_post_type('our-service',array(
			'public'     => true,
			'menu_icon' => 'dashicons-book-alt',
			'menu_position'  => 8,
			'supports'       => array('title','editor','author','thumbnail'),
			'labels'         => array(
				'menu_name'      => __(' সেবা সেট ','hzshohidultextdomain'),
				'all_items'      => __(' সবগুলো সেবা ','hzshohidultextdomain'),
				'add_new'        => __(' নতুন সেবা যোগ করুন ','hzshohidultextdomain'),
				'add_new_item'   => __(' নতুন সেবা নাম ','hzshohidultextdomain'),
			),
		));
		//----
		register_taxonomy('service-kontype','our-service',array(
			'public'             => true,
			'label'              => __(' সেবা বিভাগ যোগ করুন ','hzshohidultextdomain'),
			'hierarchical'       => true,
			'show_admin_column'  => true,
		));
		//-----------------------
		register_post_type('our-company-logo',array(
			'public'     => true,
			'menu_icon' => 'dashicons-media-text',
			'menu_position'  => 9,
			'supports'       => array('title','editor','author','thumbnail'),
			'labels'         => array(
				'menu_name'      => __(' কোম্পানী লোগো ','hzshohidultextdomain'),
				'all_items'      => __(' সবগুলো লোগো ','hzshohidultextdomain'),
				'add_new'        => __(' নতুন লোগো ','hzshohidultextdomain'),
				'add_new_item'   => __(' নতুন কোম্পানী লোগো যোগ করুন ','hzshohidultextdomain'),
			),
		));
		//-----------------------
		register_post_type('our-portfolio',array(
			'public'     => true,
			'menu_icon' => 'dashicons-portfolio',
			'menu_position'  => 10,
			'supports'       => array('title','editor','author','thumbnail'),
			'labels'         => array(
				'menu_name'      => __(' পোর্টফোলিও সেট ','hzshohidultextdomain'),
				'all_items'      => __(' সবগুলো পোর্টফোলিও ','hzshohidultextdomain'),
				'add_new'        => __(' নতুন পোর্টফোলিও ','hzshohidultextdomain'),
				'add_new_item'   => __(' নতুন পোর্টফোলিও যোগ করুন ','hzshohidultextdomain'),
			),
		));
		//----
		register_taxonomy('portfolio-kontype','our-portfolio',array(
			'public'             => true,
			'label'              => __(' পোর্টফোলিও বিভাগ যোগ ','hzshohidultextdomain'),
			'hierarchical'       => true,
			'show_admin_column'  => true,
		));
		//-----------------------
		register_post_type('our-testimonial',array(
			'public'     => true,
			'menu_icon' => 'dashicons-testimonial',
			'menu_position'  => 11,
			'supports'       => array('title','editor','author','thumbnail'),
			'labels'         => array(
				'menu_name'      => __(' প্রশংসাপত্র সেট ','hzshohidultextdomain'),
				'all_items'      => __(' সবগুলো প্রশংসাপত্র ','hzshohidultextdomain'),
				'add_new'        => __(' নতুন প্রশংসাপত্র ','hzshohidultextdomain'),
				'add_new_item'   => __(' নতুন পোর্টফোলিও যোগ করুন ','hzshohidultextdomain'),
			),
		));
		//-----------------------
		register_post_type('contaci_us_title',array(
			'public'     => true,
			'menu_icon' => 'dashicons-editor-paste-text',
			'menu_position'  => 12,
			'supports'       => array('title','editor','author','thumbnail'),
			'labels'         => array(
				'menu_name'      => __(' যোগাযোগ শিরোনাম পরিবর্তন ','hzshohidultextdomain'),
				'add_new'        => __(' নতুন সেট ','hzshohidultextdomain'),
			),
		));
		//-----------------------
	}
	add_action('after_setup_theme','amader_hzshohidultheme');
	
	//========================================================
	require_once('CMB2/init.php');
	require_once('CMB2/amader.php');
	
	require_once('REDUX/ReduxCore/framework.php');
	require_once('REDUX/sample/amader-custom.php');

?>














































































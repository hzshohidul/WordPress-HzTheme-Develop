<?php
	function amra_cmb2_danaitasi(){
		$ourskill = new_cmb2_box(array(
			'title'         => ' শীর্ষ শিরোনাম পরিবর্তন ',
			'id'            => 'ataskillid',
			'object_types'  => array('skill-area'),
		));
		$ourskill->add_field(array(
			'name'  => __(' শীর্ষ শিরোনাম ','hzshohidultextdomain'),
			'desc'  => __(' শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_skillh',
			'type'  => 'text',
			'default' => 'MY SKILL',
		));
	}
	add_action('cmb2_admin_init','amra_cmb2_danaitasi');
	//========================================================
	
	function amra_cmb2_danaitasiteam(){
		$ourteam = new_cmb2_box(array(
			'title'         => ' শীর্ষ শিরোনাম পরিবর্তন ',
			'id'            => 'atasteamid',
			'object_types'  => array('our-team'),
		));
		$ourteam->add_field(array(
			'name'  => __(' প্রথম শীর্ষ শিরোনাম ','hzshohidultextdomain'),
			'desc'  => __(' প্রথম শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_1stteamh',
			'type'  => 'text',
			'default' => 'MEET',
		));
		$ourteam->add_field(array(
			'name'  => __(' দ্বিতীয় শীর্ষ শিরোনাম ','hzshohidultextdomain'),
			'desc'  => __(' দ্বিতীয় শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_2ndteamh',
			'type'  => 'text',
			'default' => 'OUR TEAM',
		));
		$ourteam->add_field(array(
			'name'    => __(' ব্যাকগ্রাউন্ড ইমেজ ','hzshohidultextdomain'),
			'desc'    => __(' ব্যাকগ্রাউন্ড ইমেজ পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'      => '_team_bg_img',
			'type'    => 'file',
			/* 'options' => array(
				'url'    => false,
			), */
			'default' => get_template_directory_uri().'/img/03.jpg',
		));
	}
	add_action('cmb2_admin_init','amra_cmb2_danaitasiteam');
	//========================================================
	function amra_cmb2_danatesiservice(){
		$ourservice = new_cmb2_box(array(
			'title'     => __(' সেবা শিরোনাম পরিবর্তন ','hzshohidultextdomain'),
			'id'     => 'ataserviceid',
			'object_types'  => array('our-service'),
		));
		$ourservice->add_field(array(
			'name'   => __(' প্রথম শীর্ষ শিরোনাম  ','hzshohidultextdomain'),
			'desc'  => __(' প্রথম শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_1stserh',
			'type'  => 'text',
		));
		$ourservice->add_field(array(
			'name'  => __(' দ্বিতীয় শীর্ষ শিরোনাম ','hzshohidultextdomain'),
			'desc'  => __(' দ্বিতীয় শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_2ndserh',
			'type'  => 'text',
			'default' => 'OUR SERVICES',
		));
		$ourservice->add_field(array(
			'name'  => __(' দশিরোনাম বর্ণনা ','hzshohidultextdomain'),
			'desc'  => __(' দ্শিরোনাম বর্ণনা পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_serdesc',
			'type'  => 'text',
		));
	}
	add_action('cmb2_admin_init','amra_cmb2_danatesiservice');
	//========================================================
	function amra_cmb2_danatesiportfolio(){
		$ourportfolio = new_cmb2_box(array(
			'title'     => __(' সেবা শিরোনাম পরিবর্তন ','hzshohidultextdomain'),
			'id'     => 'ataportfolioid',
			'object_types'  => array('our-portfolio'),
		));
		$ourportfolio->add_field(array(
			'name'   => __(' প্রথম শীর্ষ শিরোনাম  ','hzshohidultextdomain'),
			'desc'  => __(' প্রথম শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_1stportfolioh',
			'type'  => 'text',
		));
		$ourportfolio->add_field(array(
			'name'  => __(' দ্বিতীয় শীর্ষ শিরোনাম ','hzshohidultextdomain'),
			'desc'  => __(' দ্বিতীয় শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_2ndportfolioh',
			'type'  => 'text',
			'default' => 'OUR PORTFOLIO',
		));
		$ourportfolio->add_field(array(
			'name'  => __(' শিরোনাম বর্ণনা ','hzshohidultextdomain'),
			'desc'  => __(' শিরোনাম বর্ণনা পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_portfoliodesc',
			'type'  => 'text',
		));
	}
	add_action('cmb2_admin_init','amra_cmb2_danatesiportfolio');
	//========================================================
	function amra_cmb2_company_logo(){
		$companylogo = new_cmb2_box(array(
			'title'     => __(' কোম্পানী শিরোনাম পরিবর্তন ','hzshohidultextdomain'),
			'id'     => 'companylogoid',
			'object_types'  => array('our-company-logo'),
		));
		$companylogo->add_field(array(
			'name'   => __(' প্রথম শীর্ষ শিরোনাম  ','hzshohidultextdomain'),
			'desc'  => __(' প্রথম শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_1stcompanyh',
			'type'  => 'text',
		));
		$companylogo->add_field(array(
			'name'  => __(' দ্বিতীয় শীর্ষ শিরোনাম ','hzshohidultextdomain'),
			'desc'  => __(' দ্বিতীয় শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_2ndcompanyh',
			'type'  => 'text',
			'default' => 'COMPANY LOGO',
		));
		$companylogo->add_field(array(
			'name'    => __(' ব্যাকগ্রাউন্ড ইমেজ ','hzshohidultextdomain'),
			'desc'    => __(' ব্যাকগ্রাউন্ড ইমেজ পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'      => '_company_bg_img',
			'type'    => 'file',
			/* 'options' => array(
				'url'    => false,
			), */
			'default' => get_template_directory_uri().'/img/04.jpg',
		));
	}
	add_action('cmb2_admin_init','amra_cmb2_company_logo');
	//========================================================
	function amra_cmb2_testimonials(){
		$testimonial = new_cmb2_box(array(
			'title'     => __(' কোম্পানী শিরোনাম পরিবর্তন ','hzshohidultextdomain'),
			'id'     => 'testimonial',
			'object_types'  => array('our-testimonial'),
		));
		$testimonial->add_field(array(
			'name'    => __(' প্রথম শীর্ষ শিরোনাম  ','hzshohidultextdomain'),
			'desc'    => __(' প্রথম শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'      => '_1sttestomonialh',
			'type'    => 'text',
			'default' => 'OUR CLIENTS’',
		));
		$testimonial->add_field(array(
			'name'  => __(' দ্বিতীয় শীর্ষ শিরোনাম ','hzshohidultextdomain'),
			'desc'  => __(' দ্বিতীয় শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_2ndtestomonialh',
			'type'  => 'text',
			'default' => 'TESTIMONIALS',
		));
		$testimonial->add_field(array(
			'name'    => __(' ব্যাকগ্রাউন্ড ইমেজ ','hzshohidultextdomain'),
			'desc'    => __(' ব্যাকগ্রাউন্ড ইমেজ পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'      => '_testimonial_bg_img',
			'type'    => 'file',
			/* 'options' => array(
				'url'    => false,
			), */
			'default' => get_template_directory_uri().'/img/05.jpg',
		));
	}
	add_action('cmb2_admin_init','amra_cmb2_testimonials');
	//========================================================
	function amra_cmb2_contact_title(){
		$contact_title = new_cmb2_box(array(
			'title'     => __(' কোম্পানী শিরোনাম পরিবর্তন ','hzshohidultextdomain'),
			'id'     => 'contactus',
			'object_types'  => array('contaci_us_title'),
		));
		$contact_title->add_field(array(
			'name'    => __(' প্রথম শীর্ষ শিরোনাম  ','hzshohidultextdomain'),
			'desc'    => __(' প্রথম শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'      => '_1stcontacth',
			'type'    => 'text',
			'default' => 'OUR',
		));
		$contact_title->add_field(array(
			'name'  => __(' দ্বিতীয় শীর্ষ শিরোনাম ','hzshohidultextdomain'),
			'desc'  => __(' দ্বিতীয় শীর্ষ শিরোনাম পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_2ndcontacth',
			'type'  => 'text',
			'default' => 'CONTACT US',
		));
		$contact_title->add_field(array(
			'name'  => __(' শিরোনাম বর্ণনা ','hzshohidultextdomain'),
			'desc'  => __(' শিরোনাম বর্ণনা পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'    => '_contactusdesc',
			'type'  => 'text',
		));
		$contact_title->add_field(array(
			'name'    => __(' লোগো ','hzshohidultextdomain'),
			'desc'    => __(' লোগো পরিবর্তন করুন ','hzshohidultextdomain'),
			'id'      => '_contact_logo',
			'type'    => 'file',
			/* 'options' => array(
				'url'    => false,
			), */
			'default' => get_template_directory_uri().'/img/phone.gif',
		));
	}
	add_action('cmb2_admin_init','amra_cmb2_contact_title');
	//========================================================
	
?>












































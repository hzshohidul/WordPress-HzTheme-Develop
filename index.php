<?php
	get_header();
?>

<!--<style type="text/css">
		#tf-home{
			background-image: url('<?php echo get_template_directory_uri(); ?>./img/1.jpg'); !important;
		}
	</style> -->
	
    <!-- Home Page
    ==========================================-->
	
<?php
	$homepage_top_post = new WP_Query(array(
		'post_type'  => 'homepage-top',
	));
	while($homepage_top_post->have_posts()): $homepage_top_post->the_post();
?>
    <div id="tf-home" style="background-image: url('<?php $backgrond_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()),'full'); echo $backgrond_img [0];?>'); !important;"  class="text-center">
        <div class="overlay">
            <div class="content">
                <h1><strong><span class="color"><?php the_title(); ?></span></strong></h1>
                <p class="lead"><strong><?php the_content(); ?></strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>
<?php endwhile; ?>
    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 skill-image">
<?php
	 $skill_post_img = new WP_Query(array(
		 'post_type'  => 'skill-area',
	));
	while($skill_post_img->have_posts()): $skill_post_img->the_post();
?>
                    <?php the_post_thumbnail(); ?>
<?php endwhile; ?>
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
<?php
	$skill_title = new WP_Query(array(
		'post_type'  => 'skill-area',
		'posts_per_page' => 1,
	));
	while($skill_title->have_posts()): $skill_title->the_post();
?>
                            <!-- <h4></h4> -->
                            <h2><?php echo get_post_meta(get_the_id(),'_skillh',true)?></h2>
<?php endwhile; ?>
                        </div>
                        <!--<p class="intro">I'm a Junior Web Application Software Designer & Web Developer.</p>-->
                        <ul class="about-list">
<?php
	$skill_post = new WP_Query(array(
		'post_type'  => 'skill-area',
	));
	while($skill_post->have_posts()): $skill_post->the_post();
?>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong><?php the_title(); ?></strong><em><?php the_content(); ?></em>
                            </li>
<?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Page
    ==========================================-->
<?php
	$team_bg_image = new WP_Query(array(
		'post_type'      => 'our-team',
		'posts_per_page' => 1,
	));
	while($team_bg_image->have_posts()): $team_bg_image->the_post();
?> 
    <div id="tf-team" style="background-image: url('<?php echo get_post_meta(get_the_id(),'_team_bg_img',true); ?>;');" class="text-center">
<?php endwhile; ?>

        <div class="overlay">
            <div class="container">
                <div class="section-title center">
<?php
	$team_title = new WP_Query(array(
		'post_type'  => 'our-team',
		'posts_per_page' => 1,
	));
	while($team_title->have_posts()): $team_title->the_post();
?>
                    <h2><?php echo get_post_meta(get_the_id(),'_1stteamh',true)?> <strong><?php echo get_post_meta(get_the_id(),'_2ndteamh',true)?></strong></h2>
<?php endwhile; ?>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
<?php
	$memter_post = new WP_Query(array(
		'post_type'  => 'our-team',
	));
	while($memter_post->have_posts()): $memter_post->the_post();
?>
                    <div class="item">
                        <div class="thumbnail">
							<?php the_post_thumbnail(); ?>
                            <div class="caption">
                                <h3><?php the_title(); ?></h3>
                                <p><?php $title = get_the_terms($post->ID, 'team-kontype'); foreach($title as $mbr_skill){echo $mbr_skill->name; }?></p>
                                <p>Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                    </div>
<?php endwhile; ?>
                </div>
                
            </div>
        </div>
    </div>


    <!-- Services Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
<?php
	$service_title = new WP_Query(array(
		'post_type'   => 'our-service',
		'posts_per_page' => 1,
	));
	while($service_title->have_posts()): $service_title->the_post();
?>
            <div class="section-title center">
                <h2><?php echo get_post_meta(get_the_id(),'_1stserh',true); ?> <strong><?php echo get_post_meta(get_the_id(),'_2ndserh',true)?></strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em><?php echo get_post_meta(get_the_id(),'_serdesc',true)?></em></small>
            </div>
<?php endwhile; ?>
            <div class="space"></div>
            <div class="row">
<?php
	$service_post = new WP_Query(array(
		'post_type'  => 'our-service',
	));
	while($service_post->have_posts()): $service_post->the_post();
?>
                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-desktop"></i>
                    <h4><strong><?php the_title(); ?></strong></h4>
                     <?php the_content(); ?>
                </div>
<?php endwhile; ?>
            </div>
        </div>
    </div>

    <!-- Clients Section
    ==========================================-->
<?php
	$company_bd_img = new WP_Query(array(
		'post_type'      => 'our-company-logo',
		'posts_per_page' => 1,
	));
	while($company_bd_img->have_posts()): $company_bd_img->the_post();
?>
    <div id="tf-clients" style="background-image: url('<?php echo get_post_meta(get_the_id(),'_company_bg_img',true); ?>;');" class="text-center">
<?php endwhile; ?>

        <div class="overlay">
            <div class="container">
<?php
	$company_title = new WP_Query(array(
		'post_type'      => 'our-company-logo',
		'posts_per_page' => 1,
	));
	while($company_title->have_posts()): $company_title->the_post();
?>
                <div class="section-title center">
                    <h2><?php echo get_post_meta(get_the_id(),'_1stcompanyh',true)?> <strong><?php echo get_post_meta(get_the_id(),'_2ndcompanyh',true)?></strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
<?php endwhile; ?>
                <div id="clients" class="owl-carousel owl-theme">
<?php
	$company_logo = new WP_Query(array(
		'post_type' => 'our-company-logo',
	));
	while($company_logo->have_posts()): $company_logo->the_post();
?>
                    <div class="item">
						<?php the_post_thumbnail(); ?>
                    </div>
<?php endwhile; ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Portfolio Section
    ==========================================-->
    <div id="tf-works">
        <div class="container"> <!-- Container -->
<?php
	$portfolio_title = new WP_Query(array(
		'post_type'   => 'our-portfolio',
		'posts_per_page' => 1,
	));
	while($portfolio_title->have_posts()): $portfolio_title->the_post();
?>
            <div class="section-title text-center center">
				<h2><?php echo get_post_meta(get_the_id(),'_1stportfolioh',true); ?> <strong><?php echo get_post_meta(get_the_id(),'_2ndportfolioh',true)?></strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em><?php echo get_post_meta(get_the_id(),'_portfoliodesc',true)?></em></small></em></small>
            </div>
<?php endwhile; ?>
            <div class="space"></div>

            <div class="categories">
                
                <ul class="cat">
                    <li class="pull-right">
                        <ol class="type">
                            <li>
								<a href="<?php echo get_template_directory_uri(); ?>/#" data-filter="*" class="active">All</a>
							</li>
<?php $category_show = get_terms('portfolio-kontype'); foreach($category_show as $dog): ?>
                            <li><a href="<?php the_permalink(); ?>" data-filter=".<?php echo $dog->slug; ?>" ><?php echo $dog->name; ?></a></li>
<?php endforeach; ?>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">
<?php
	$service_post = new WP_Query(array(
		'post_type'       => 'our-portfolio',
		'posts_per_page'   => 8,
	));
	while($service_post->have_posts()): $service_post->the_post();
?>
                <div class="col-sm-6 col-md-3 col-lg-3 <?php $category = get_the_terms(get_the_id(),'portfolio-kontype'); foreach($category as $cat){ echo $cat->slug.' '; } ?>">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="<?php $imageurl = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()),'full'); echo $imageurl[0];?>" data-lightbox="image-1" data-title="My caption" >
                                <div class="hover-text">
                                    <h4><?php the_title(); ?></h4>
                                    <small><?php the_content(); ?></small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                    </div>
                </div>
<?php endwhile; ?>
            </div>
        </div>
    </div>

    <!-- Testimonials Section
    ==========================================-->
<?php
	$testimonial_bg_img = new WP_Query(array(
		'post_type'      => 'our-testimonial',
		'posts_per_page' => 1,
	));
	while($testimonial_bg_img->have_posts()): $testimonial_bg_img->the_post();
?>
    <div id="tf-testimonials" style="background-image: url('<?php echo get_post_meta(get_the_id(),'_testimonial_bg_img',true); ?>;');" class="text-center">
<?php endwhile; ?>

        <div class="overlay">
            <div class="container">
<?php
	$testimonial_title = new WP_Query(array(
		'post_type'      => 'our-testimonial',
		'posts_per_page' => 1,
	));
	while($testimonial_title->have_posts()): $testimonial_title->the_post();
?>
                <div class="section-title center">
                    <h2><strong><?php echo get_post_meta(get_the_id(),'_1sttestomonialh',true)?></strong> <?php echo get_post_meta(get_the_id(),'_2ndtestomonialh',true)?></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
<?php endwhile; ?>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">
<?php
	$testimonial = new WP_Query(array(
		'post_type' => 'our-testimonial',
	));
	while($testimonial->have_posts()): $testimonial->the_post();
?>
                            <div class="item">
                                <?php the_content(); ?>
                                <p><strong><?php the_title(); ?></strong></p>
                            </div>
<?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
<?php
	$contact_title = new WP_Query(array(
		'post_type'      => 'contaci_us_title',
		'posts_per_page' => 1,
	));
	while($contact_title->have_posts()): $contact_title->the_post();
?>
                    <div class="section-title center">
                        <img src="<?php echo get_post_meta(get_the_id(),'_contact_logo',true)?>" alt="phone-img" />
                        <h2><?php echo get_post_meta(get_the_id(),'_1stcontacth',true)?> <strong><?php echo get_post_meta(get_the_id(),'_2ndcontacth',true)?></strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em><?php echo get_post_meta(get_the_id(),'_contactusdesc',true)?></em></small>            
                    </div>
<?php endwhile; ?>
<?php
	$contact_form = new WP_Query(array(
		'post_type'      => 'contaci_us_title',
		'posts_per_page' => 1,
	));
	while($contact_form->have_posts()): $contact_form->the_post();
?>
					<?php the_content(); ?>
<?php endwhile; ?>
                    <p class="form-message"></p>
                    
                </div>
            </div>
        </div>
    </div>


 <?php get_footer(); ?>
<?php
/*
Template Name: Anxiety Landing
*/

get_header(); ?>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://brainwellnessspa.com.au/wp-content/themes/brainwellnessspa/assets/styles/newhomecss/fontawesome.css">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,900&display=swap" rel="stylesheet">
	
<div class="anexity_landingpage">
	<section class="betterlifestatic_sec text-left" style="background: url('<?php echo get_field('first_background_image'); ?>') no-repeat;">
		<div  class="container">
			<div  class="row">
				<div class="col-lg-8 col-md-8 col-sm-12">
					<h2><?php echo get_field('first_heading'); ?></h2>
					<?php echo get_field('first_content'); ?>
					<a href="https://brainwellnessspa.com.au/bookings/services.php?bId=MzI4MzQ4XzMyODU0OQ==" class="button mt-lg-5 mt-md-3 mt-2"><?php echo get_field('first_button_text'); ?></a>
				</div>
			</div>
		</div>
	</section>
	<section class="testimonialslider">
		<div class="container">
			<div class="testimonial_slide">
				<?php
				 	$args = array(  
				        'post_type' => 'case-study',
				        'post_status' => 'publish',
				        'orderby' => 'title', 
				        'order' => 'ASC',
				        
				    );

				    $loop = new WP_Query( $args ); 
				    while ( $loop->have_posts() ) : $loop->the_post(); 
				?>
				<div class="item slide_bx">
					<div class="tetestimonialslidimg"><img src="<?php echo get_field('landing_home_image');?>" alt=""></div>
					<div class="tetestimonialslidcnt">
						<h5><?php echo the_title();?></h5>
						<?php $contentblog = mb_strimwidth(get_the_content(), 0, 100, '...');  ?>
						<p><?php echo $contentblog;?> <a href="<?php the_permalink() ?>" target="_blank" class="readmore_btn">Read More »</a></p>
					</div>
					
				</div>
				<?php
    	            endwhile;
				    wp_reset_postdata(); 
			    ?>
			</div>
		</div>
	</section>
	
	<section class="asseenin_sec">
		<div class="container">
			<h2>As Seen In:</h2>
			<?php $items = get_field('first_icons');?>
			<ul class="asseein_listimg">
				<?php foreach($items as $item): ?>
					<li><img src="<?php echo $item['url'];?>" alt=""></li>
				<?php endforeach; ?>
			</ul>
		</div><!--container-->
	</section>

	<section class="bwsvideo_sec">
		<div class="container">
			<h2 class="mb-2 mb-md-3 mb-lg-4"><?php echo get_field('second_title'); ?></h2>
			<p class="mb-2 mb-md-3 mb-lg-4 bwstext"><?php echo get_field('second_content'); ?></p>
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-8 col-sm-11">
					<div class="youtube" data-embed="<?php echo get_field('video'); ?>" style="width:100%; height:481px;">
						<div class="play-button"></div>
					</div>
				</div>
			</div><!--row-->
		</div>
	</section>
	<section class=" anxiety_affect_sec" style="background:url('<?php echo get_field('third_background_image'); ?>') no-repeat;">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-lg-8 col-md-8 col-sm-12">
					<div class="anxiety_affect_text">
						<h2><?php echo get_field('third_title'); ?></h2>
						<?php echo get_field('third_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="Gordon_Transformation_sec text-center" style="background:url('<?php echo get_field('client_testmonial_background_image'); ?>') no-repeat;">
		<div class="container">
			<h2 class="mb-lg-5 mb-md-4 mb-2"><?php echo get_field('client_testmonial_title'); ?></h2>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="youtube listrebeca-video" data-embed="<?php echo get_field('client_testmonial_video'); ?>" style="width:100%; height:319px;">
						<div class="play-button"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-left">
					<div class="Gordon_Transformation_txt">
						<?php echo get_field('client_testmonial_content'); ?>
					</div>
				</div>
			</div>
			<a href="https://brainwellnessspa.com.au/success-stories/video-testimonials/" class="button mt-lg-5 mt-md-3 mt-2"><?php echo get_field('client_testmonial_button_text'); ?></a>
		</div><!--container-->
	</section>
	<section class="recovering_sec" style="background:url('<?php echo get_field('forth_background_image'); ?>') no-repeat;">
		<div class="container">
			<div class="recovering_text">
				<h2><?php echo get_field('fourth_title'); ?></h2>
				<?php echo get_field('forth_content'); ?>
			</div>
		</div>
	</section>
	
	<section class="suffering_anxiety_sec" style="background:url('<?php echo get_field('fifth_background_image'); ?>') no-repeat;">
		<div class="container">
			<div class="suffering_anxiety">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12">
						<h2 class="mb-2 mb-md-3 mb-lg-4"><?php echo get_field('fifth_title'); ?></h2>
						<?php echo get_field('fifth_content'); ?>
						<a href="#." class="button mt-lg-4 mt-md-3 mt-2"><?php echo get_field('fifth_button_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class=" anxiety_today_sec" style="background:url('<?php echo get_field('sixth_background_image'); ?>') no-repeat;">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-lg-8 col-md-8 col-sm-12">
					<div class="anxiety_today_text">
						<h2><?php echo get_field('sixth_title'); ?></h2>
						<p><?php echo get_field('sixth_content'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="natural_method_sec text-center">
		<div class="container">
			<h2 class="mb-2 mb-md-3 mb-lg-4 naturalh2"><?php echo get_field('seventh_title'); ?></h2>
			<p class="mb-2 mb-md-3 mb-lg-4 bwstext text-center"><?php echo get_field('seventh_content'); ?></p>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-10 col-sm-12">
					<div class="youtube naturmethod-video" data-embed="<?php echo get_field('seventh_video'); ?>" style="width:868px; height:489px;">
						<div class="play-button"></div>
					</div>
				</div>
				<?php echo get_field('seventh_sub_content'); ?>
			</div>
		</div>
	</section>
	<section class="first_session_sec" style="background: url('<?php echo get_field('eighth_background_image'); ?>') no-repeat">
		<div  class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2 class="text-center"><?php echo get_field('eighth_title'); ?></h2>
					<div class="first_session_txt">
						<?php echo get_field('eighth_content'); ?>
					</div>
				</div>
			</div><!--row-->
		</div>
	</section>
	<section class="Client_Testimonials_sec text-center">
		<div class="container">
			<h2 class="mb-lg-5 mb-md-4 mb-2"><?php echo get_field('client_title'); ?></h2>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="youtube listrebeca-video" data-embed="<?php echo get_field('client_video'); ?>" style="width:100%; height:319px;">
						<div class="play-button"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-left">
					<div class="Client_Testimonials_txt">
						<p><?php echo get_field('client_content'); ?></p>
					</div>
				</div>
			</div>
			<a href="https://brainwellnessspa.com.au/success-stories/video-testimonials/" class="button mt-lg-5 mt-md-3 mt-2"><?php echo get_field('client_button_text'); ?></a>
		</div>
	</section>
	
</div>
<?php echo do_shortcode('[global_popup]'); ?>
<?php get_footer(); ?>
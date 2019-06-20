<?php
/**
 * Homepage template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage WebBuilder
 * @since 1.0.0
 */

get_header();
?>

<body <?php body_class('no-loader'); ?>>

    <div id="wrapper">
        <?php get_template_part( '/template-parts/content', 'nav' ); ?>

        <div class="main-container">
			<section id="about" class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="<?php the_field('header_image'); ?>">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php if ( get_field('header_title')) : ?>
								<h1 class="text-white" style="font-weight: bold;"><?php the_field('header_title'); ?></h1>
							<?php endif; ?>
							<?php if ( get_field('header_title')) : ?>
								<p class="text-white lead" style="font-weight: bold;"><?php the_field('header_subtext'); ?></h1>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
			
			<section class="feature-divider">
		
			
				<div class="container">
					<div class="row">
						<div class="col-sm-5">
							<?php if ( get_field('1st_section_title')) : ?>
								<h1><?php the_field('1st_section_title'); ?></h1>
							<?php endif; ?>
							<?php if ( get_field('1st_section_subtext')) : ?>
								<p class="lead"><?php the_field('1st_section_subtext'); ?></p>
							<?php endif; ?>
						</div>
					
						<div class="col-sm-7" data-scroll-reveal="enter from bottom and move 100px" style="overflow: hidden;">
							<img alt="App Screenshot" src="<?php echo get_template_directory_uri() ?>/img/phone.svg" style="width: 120%; max-width: none;margin-top: -130px;margin-left: -70px;">
						</div>
					</div>
				</div>
			</section>
			
			<section id="team" class="team-1">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1>Leadership</h1>
						</div>
					</div>
					
					<div class="row space-bottom-large">
						
								<?php 
									if( have_rows('leadership') ):

										while ( have_rows('leadership') ) : the_row(); ?>
										<div class="col-sm-6">
											<div class="team-1-member">
												<img alt="Team Member" src="<?php echo get_template_directory_uri() ?>/img/team-small-3.png ">
												<h2><?php the_sub_field('name'); ?></h2>
												<h5><?php the_sub_field('title'); ?></h5>
												<p class="space-top-small">
													<?php the_sub_field('bio'); ?>
												</p>
											</div>
										</div>
										<?php
										endwhile;
									endif;
								?>
							
					</div>
				</div>
			</section>
			
			<section id="pricing" class="pricing-1 bg-secondary-1">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1 class="text-white">Pricing</h1>
						</div>
					</div>
					
					<div class="row clearfix pricing-tables">
						<div class="col-sm-6 no-pad-right col-md-4">
							<div class="pricing-table">
								<div class="price">
									<?php if ( get_field('pricing_now_title')) : ?>
										<span class="sub"><?php the_field('pricing_now_title'); ?><sup>*</sup></span>
									<?php endif; ?>
								</div>
									<?php 
										if( have_rows('now_features') ): ?>
											<ul class="features">
											<?php while ( have_rows('now_features') ) : the_row(); ?>
											
												<li><?php the_sub_field('feature'); ?></li>
											
											<?php
											endwhile; ?>
											</ul>
										<?php 
										endif;
									?>
									<div class="price price-container">
										<div class="price-grid">
											<div class="item"><span class="sub">6 Months</span></div>
											<div class="item"><span class="sub">$</span><span class="amount">148</span></div>
											<div class="item"><span class="sub">/mo</span></div>
										</div>
									</div>
									<div class="price price-container">
										<div class="price-grid">
											<div class="item"><span class="sub">9 Months</span></div>
											<div class="item"><span class="sub">$</span><span class="amount">98</span></div>
											<div class="item"><span class="sub">/mo</span></div>
										</div>
									</div>
									<div class="price price-container">
										<div class="price-grid">
											<div class="item"><span class="sub">12 Months</span></div>
											<div class="item"><span class="sub">$</span><span class="amount">48</span></div>
											<div class="item"><span class="sub">/mo</span></div>
										</div>
									</div>
							</div>
						</div>
						
						<div class="col-sm-6 no-pad col-md-4">
							<div class="pricing-table">
								<div class="price">
									<?php if ( get_field('pricing_plus_title')) : ?>
										<span class="sub"><?php the_field('pricing_plus_title'); ?><sup>*</sup></span>
									<?php endif; ?>
								</div>
								<?php 
									if( have_rows('plus_features') ): ?>
										<ul class="features">
										<?php while ( have_rows('plus_features') ) : the_row(); ?>
										
											<li><?php the_sub_field('feature'); ?></li>
										
										<?php
										endwhile; ?>
										</ul>
									<?php 
									endif;
								?>
								<div class="price price-container">
									<div class="price-grid">
										<div class="item"><span class="sub">6 Months</span></div>
										<div class="item"><span class="sub">$</span><span class="amount">198</span></div>
										<div class="item"><span class="sub">/mo</span></div>
									</div>
								</div>
								<div class="price price-container">
									<div class="price-grid">
										<div class="item"><span class="sub">9 Months</span></div>
										<div class="item"><span class="sub">$</span><span class="amount">148</span></div>
										<div class="item"><span class="sub">/mo</span></div>
									</div>
								</div>
								<div class="price price-container">
									<div class="price-grid">
										<div class="item"><span class="sub">12 Months</span></div>
										<div class="item"><span class="sub">$</span><span class="amount">98</span></div>
										<div class="item"><span class="sub">/mo</span></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 no-pad col-md-4">

							<div class="pricing-table emphasis">
								<div class="price">
									<?php if ( get_field('pricing_agent_title')) : ?>
										<span class="sub"><?php the_field('pricing_agent_title'); ?><sup>*</sup></span>
										<p class="emphasis-popular"><small>(most popular)</small></p>
									<?php endif; ?>
								</div>
								<?php 
									if( have_rows('pricing_agent_features') ): ?>
										<ul class="features">
										<?php while ( have_rows('pricing_agent_features') ) : the_row(); ?>
										
											<li><?php the_sub_field('feature'); ?></li>
										
										<?php
										endwhile; ?>
										</ul>
									<?php 
									endif;
								?>
								<div class="price price-container">
									<div class="price-grid">
										<div class="item"><span class="sub">6 Months</span></div>
										<div class="item"><span class="sub">$</span><span class="amount">248</span></div>
										<div class="item"><span class="sub">/mo</span></div>
									</div>
								</div>
								<div class="price price-container">
									<div class="price-grid">
										<div class="item"><span class="sub">9 Months</span></div>
										<div class="item"><span class="sub">$</span><span class="amount">198</span></div>
										<div class="item"><span class="sub">/mo</span></div>
									</div>
								</div>
								<div class="price price-container">
									<div class="price-grid">
										<div class="item"><span class="sub">12 Months</span></div>
										<div class="item"><span class="sub">$</span><span class="amount">148</span></div>
										<div class="item"><span class="sub">/mo</span></div>
									</div>
								</div>
							</div>
						</div>	
						
					</div>

					<div class="row pricing-info">
						<div class="col-sm-10">
							<?php if ( get_field('prices_informational_text')) : ?>
								<?php the_field('prices_informational_text'); ?>
							<?php endif; ?>
						</div>
					</div>
					
				</div>
			
			</section>
			
			<section id="contact" class="contact-thirds">
				<div class="container">
					<div class="row">
							<div class="col-sm-12 text-center">
								<h1>Contact Us<br><br></h1>
							</div>
					</div>
					
					<div class="row">
						<div class="col-sm-4">
							<h5> Enquiries</h5>
							<p>webBuilder is committed to developing relationships for web developers and companies, in order to create a network of reference-based new business for current projects. Reach out, we're here to help you!</p>
							
							
						</div>
						
						<div class="col-sm-4 text-center">
							<h5>Details</h5>
							<p class="lead">Joseph Paul<br><a href="mailto:joepaul8717@gmail.com">joepaul8717@gmail.com</a><br><a href="tel:+12159608250">215-960-8250</a><br>
								<br>Michael Cullen<br><a href="mailto:mike1395@me.com">mike1395@me.com</a><br><a href="tel:+16199424018">619-942-4018</a><br></p>
						</div>
						
						<div class="col-sm-4">
							<h5>Leave A Message</h5>
							<div class="form-wrapper clearfix">
								<?php if ( get_field('ninja_contact_form')) : ?>
									<?php the_field('ninja_contact_form'); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
    </div>

<?php
    get_footer();
?>


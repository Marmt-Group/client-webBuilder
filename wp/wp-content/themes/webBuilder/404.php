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
			<section class="no-pad error-page bg-primary fullscreen-element">
				<div class="container align-vertical">
					<div class="row">
						<div class="col-sm-12 text-center">
							<i class="icon icon-compass"></i>
							<h1 class="jumbo">404</h1>
							<h1><strong>Oh dear, we seem to have led you astray!</strong><br>Let's get back on track...</h1>
							<a href="/" class="btn btn-primary btn-white" target="default">Take Me Home</a>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
	</div>

<?php
	get_footer();
?>
				
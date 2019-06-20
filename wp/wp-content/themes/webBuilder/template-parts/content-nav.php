<?php
/**
 * Template part for displaying main navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage webBuilder
 * @since 1.0.0
 */

?>

<header class="nav-container">
    <nav class="top-bar overlay-bar">
        <div class="container">

            <div class="row nav-menu">
                <div class="col-md-3 col-sm-4 columns">
                    <img class="logo logo-light" alt="Logo" src="<?php echo get_template_directory_uri() ?>/img/wbuilder-logo.png">
                    <img class="logo logo-dark" alt="Logo" src="<?php echo get_template_directory_uri() ?>/img/wbuilder-logo.png">
                </div>
            
                <div class="col-md-9 col-sm-8 columns">
                    <ul class="menu">
                        <li><a data-href="#about">Our Mission</a></li>
                        <li><a data-href="#team">Leadership&nbsp;</a></li>
                        <li><a data-href="#pricing">Pricing</a></li>
                        <li><a data-href="#contact">Contact Us<br></a></li>
                        <li><a data-href="#contact" class="btn more-info">Request Info</a></li>
                    </ul>

                </div>
            </div>
            
            <div class="mobile-toggle">
                <i class="icon icon_menu"></i>
            </div>
            
        </div>
    </nav>
</header>
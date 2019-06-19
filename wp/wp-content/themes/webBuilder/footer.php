<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage webBuilder
 * @since 1.0.0
 */

?>

<?php wp_footer(); ?>

<div class="footer-container">
    <footer class="short bg-secondary-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <span class="sub"> &copy; <?php echo date("Y"); ?> WebBuilder</span>
                    <ul>
                        <li><a href="#">Terms Of Use</a></li>
                    </ul>
                </div>

                <div class="col-sm-2 text-right">
                    <ul class="social-icons">
                        <li>
                            <a href="https://www.linkedin.com/company/webbuilder-services-llc/about/" target="_blank">
                                <i class="icon social_linkedin"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.facebook.com/WebBuilder-Services-llc-332033397513311/?modal=admin_todo_tour" target="_blank">
                                <i class="icon social_facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/webbuilderservices/?hl=en" target="_blank">
                                <i class="icon social_instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
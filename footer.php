<?php
/**
 * The Template for displaying the footer.
 */

?>
    </div> <!-- #content END -->
        <footer id="colophon" class="site-footer">
            <div class="is-hidden-desktop pt-5">
                <?php get_template_part('template-parts/logo/logo-alt'); ?>
            </div>
            <div class="w-100 is-flex footer-elements is-justify-content-space-between py-6">
                <div class="footer-menu-left-wrapper">
                    <?php wp_nav_menu(array('menu' => 'Footer Menu', 'menu_id' => 'footer-left-menu')); ?>
                    <?php get_template_part('template-parts/contact/contact-email'); ?>
                </div>
                <div class="is-hidden-touch">
                    <?php get_template_part('template-parts/logo/logo-alt'); ?>
                </div>
                <div class="footer-menu-right-wrapper">
                    <?php get_template_part('template-parts/icon/icons-social'); ?>
                </div>
            </div>
        </footer>
    </body>
</html>
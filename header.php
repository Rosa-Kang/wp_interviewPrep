<?php
/**
 * The header for our theme.
 * 
 * @package Company_Name
 */
?>

 <!DOCTYPE html>
 <!-- 1. language_attributes() -->
 <html <?php language_attributes(); ?>>
 <head>
    <!-- 2. bloginfo('charset') -->
    <meta charset="<?php bloginfo('charset');?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
 </head>
 <body>
        <header>
            <nav>
                <div class="desktop-menu">
                    <!-- 3. wp_nav_menu(array('theme_location'=> '', 'menu_id'=> '')) -->
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                </div>
                <div class="mobile-menu">
                    <?php wp_nav_menu(array('theme_location' => 'mobile-menu', 'menu_id' => 'mobile_menu'));?>
                </div>
            </nav>
        </header>

        <div id="content" class="site-content">


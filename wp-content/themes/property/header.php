<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<?php $options = get_theme_options(); ?>
<body <?php body_class(); ?>>
<div id="page" class="site">

    <header class="site-header">
        <div class="one-header">
            <div class="container">
                <div id="logo">
                    <a href="<?php echo home_url(); ?>" title="<?php _e('Home', 'light'); ?>">

                        <img src="" alt="<?php _e('Logo', 'light'); ?>">

                    </a>
                </div>
                <div class="top-nav-block"><!--  start  top  nav  -->
                    <?php if (has_nav_menu('top_menu')) : ?>

                        <?php wp_nav_menu('menu_class=top-nav&theme_location=top_menu'); ?>
                    <?php else: ?>
                        <?php _e('No Menu', 'light'); ?>
                    <?php endif; ?>
                </div><!--  end nav top -->
                <div class="right-block-header feedback">

                </div>
            </div>

        </div>


    </header><!-- #masthead -->


    <div class="site-content-contain">
        <div id="content" class="site-content">

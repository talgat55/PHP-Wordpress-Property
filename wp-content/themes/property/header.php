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
<div id="page">

    <header class="site-header">
        <div class="one-header clearfix">
            <div class="container">
                <div id="logo">
                    <a href="<?php echo home_url(); ?>" title="<?php _e('Home page', 'light'); ?>">
                        <?php if ($options['header-logo'] && $options['header-logo']['url'] !='') {    ?>
                            <img src="<?php echo $options['header-logo']['url']; ?>" alt="<?php _e('Logo', 'light'); ?>">
                        <?php } else { ?>

                            <img src="<?php echo get_theme_file_uri('/assets/images/logo.jpg'); ?>"
                                 alt="<?php _e('Logo', 'light'); ?>">

                        <?php } ?>

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
                    <?php  if($options['header-phone-link']){  ?>
                    <div class="header-block--phone">
                        <a href="tel:<?php echo $options['header-phone-link']; ?>" class="header-phone-link">
                            <i class="fas fa-phone"></i>
                            <?php echo $options['header-phone-link']; ?>
                        </a>
                    </div>
                    <?php }   ?>
                    <?php  if($options['header-email-link']){  ?>
                        <div class="header-block--email">
                            <a href="mailto:<?php echo $options['header-email-link']; ?>" class="header-email-link">
                                <i class="fas fa-at"></i>
                                <?php echo $options['header-email-link']; ?>
                            </a>
                        </div>

                    <?php }   ?>
                </div>
            </div>

        </div>


    </header><!-- #masthead -->


    <div class="site-content-contain">
        <div id="content" class="site-content">

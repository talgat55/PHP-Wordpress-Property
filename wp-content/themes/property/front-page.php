<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php $options = get_theme_options(); ?>



<div id="primary" class="content-area">
    <?php
    $banner_home = $options['banner-home-main']['url'];

    if($banner_home  && !empty($banner_home)){
        $redyLinkBanner = $banner_home;
    }else{
        $redyLinkBanner = '';
    }
    ?>
	<section id="banner-home" style="background: url(<?php echo $redyLinkBanner; ?>); ">

    </section>
</div><!-- #primary -->

<?php get_footer();

<?php
/**
 * The template for displaying the head
 * Displays all of the head element and everything up until the content.
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php if ( is_singular() && pings_open() ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  }
  ?>

  <div class="site-container">

    <?php get_template_part( 'template-parts/header-nav' ); ?>

    <header id="site-header">
      <div id="site-branding">
        <?php
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }
        ?>

        <?php if ( get_theme_mod( 'display_site_title', true ) ) : ?>
          <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
            <?php bloginfo( 'name' ); ?>
          </a><!-- .site-title -->
        <?php endif; ?>


        <?php if ( get_theme_mod( 'display_tagline', true ) ) : ?>
          <span class="site-tagline">
            <?php bloginfo( 'description' ); ?>
          </span><!-- .site-tagline -->
        <?php endif; ?>
      </div><!-- #site-branding -->

      <?php bidnis_phone_email(); ?>

      <?php bidnis_social_links(); ?>
    </header><!-- #site-header -->

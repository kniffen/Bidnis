<?php
/**
 * Template for displaying the Site's header
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

?>
<header class="site-header">

  <div class="site-branding">
    <?php
    if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
    }
    ?>

    <?php if ( get_theme_mod( 'display_site_title', true ) ) : ?>
      <?php if ( is_front_page() && ! is_paged() ) : ?>
        <h1 class="site-branding__title"><?php bloginfo( 'name' ); ?></h1><!-- .site-branding__title -->
      <?php elseif ( is_front_page() || is_home() ) : ?>
        <h1 class="site-branding__title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
        </h1><!-- .site-branding__title -->
      <?php else : ?>
        <p class="site-branding__title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
        </p><!-- .site-branding__title -->
      <?php endif; ?>
    <?php endif; ?>

    <?php if ( get_theme_mod( 'display_tagline', true ) ) : ?>
      <p class="site-branding__tagline"><?php bloginfo( 'description' ); ?></p><!-- .site-branding__tagline -->
    <?php endif; ?>
  </div><!-- .site-branding -->

  <?php bidnis_phone_email(); ?>

  <?php bidnis_social_links(); ?>

</header><!-- .site-header -->

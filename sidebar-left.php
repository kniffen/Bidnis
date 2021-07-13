<?php
/**
 * Template for displaying the sidebar widget area
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>

<?php if ( is_active_sidebar( 'sidebar-left-widget-area' ) ) : ?>

  <aside class="widget-area widget-area-left-sidebar" role="complementary">
    <?php dynamic_sidebar( 'sidebar-left-widget-area' ); ?>
  </aside>

<?php endif; ?>

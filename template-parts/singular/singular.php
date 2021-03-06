<?php
/**
 * Template for displaying singular content
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php bidnis_entry_meta(); ?>
    <?php edit_post_link(); ?>
  </header>

  <?php the_post_thumbnail(); ?>

  <section class="entry-content">
    <?php the_content(); ?>

    <?php
    wp_link_pages(
      array(
        'before'      => '<div class="page-links">' . __( 'Pages:', 'bidnis' ),
        'after'       => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
      )
    );
    ?>
  </section><!-- .entry-content -->

  <?php if ( has_tag() && get_theme_mod( 'entry_meta_tags', true ) ) : ?>
    <?php
    // TODO: find a way to add aria-label or screen-reader-text for this.
    the_tags( '<div class="entry-tags"><i class="fa fa-tags"></i>', ', ', '</div><!-- .entry-tags -->' );
    ?>
  <?php endif; ?>

  <?php get_template_part( 'template-parts/author-bio' ); ?>

  <?php
  the_post_navigation(
    array(
      'prev_text' => '<span class="screen-reader-text">' . __( 'Previous post', 'bidnis' ) . '</span><i class="fa fa-long-arrow-alt-left"></i>%title',
      'next_text' => '<span class="screen-reader-text">' . __( 'Next post', 'bidnis' ) . '</span>%title<i class="fa fa-long-arrow-alt-right"></i>',
    )
  );
  ?>

</article>

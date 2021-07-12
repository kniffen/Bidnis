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

  <?php bidnis_the_post_thumbnail(); ?>

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
    <?php the_tags( '<div class="entry-tags">', '', '</div><!-- .entry-tags -->' ); ?>
  <?php endif; ?>

  <?php get_template_part( 'template-parts/author-bio' ); ?>

  <?php
  the_post_navigation(
    array(
      'prev_text' => '<span class="screen-reader-text">' . __( 'Previous post', 'bidnis' ) . '</span><span>' . __( 'Previous', 'bidnis' ) . '</span><span>%title</span>',
      'next_text' => '<span class="screen-reader-text">' . __( 'Next post', 'bidnis' ) . '</span><span>' . __( 'Next', 'bidnis' ) . '</span><span>%title</span>',
    )
  );
  ?>

</article>

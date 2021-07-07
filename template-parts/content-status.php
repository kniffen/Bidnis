<?php
/**
 * Template for displaying status content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php if ( is_single() ): ?>

    <?php get_template_part( 'template-parts/header', 'entry' ); ?>

  <?php else: ?>

    <header class="entry-header">
      
      <div class="entry-meta">
        
        <?php
        printf(
          '<span>' . __( '%1$s @ %2$s', 'bidnis' ) . '</span>',
          '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a>',
          '<a href="' . esc_url( get_permalink() ) . '">' . get_the_date() . '</a>'
        );
        ?>

        <?php
        edit_post_link(
          sprintf(
            '%1$s<span class="screen-reader-text">%1$s "%2$s"</span>',
            __( 'Edit', 'bidnis' ),
            get_the_title()
          )
        );
        ?>
     
      </div><!-- .entry-meta -->
    
    </header><!-- .entry-header -->
    
  <?php endif; ?> 

  <?php if ( 
    get_the_post_thumbnail() !== '' &&
    (
      (  is_singular() && get_theme_mod( 'thumbnail_content', true ) ) ||
      ( !is_singular() && get_theme_mod( 'thumbnail_index',   true ) )
    )
  ): ?>
    
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      
      <?php the_post_thumbnail( 'bidnis-featured-image' ); ?>
    
    </a><!-- .post-thumbnail -->
  
  <?php endif; ?>

  <section class="entry-content">
    
    <?php the_content(); ?>
    
    <?php
    if ( is_single() ) {
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'bidnis' ),
        'after' => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after' => '</span>',
      ) );
    }
    ?>

  </section><!-- .entry-content -->

  <?php if ( is_single() ) get_template_part('template-parts/footer', 'entry'); ?>
  
</article>
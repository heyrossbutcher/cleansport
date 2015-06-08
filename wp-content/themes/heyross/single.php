<?php get_header(); ?>


<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php echo get_avatar( get_the_author_meta('user_email'), 80); ?>
      <p>Posted by <?php the_author_posts_link() ?> On <?php echo get_the_date();  ?> (<?php echo get_the_time();  ?>)</p>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php 
            //WE CREATE AN ARRAY OF OPTION FOR OUR UPCOMING POST THUMBNAIL
            $attr = array(
              'class' => 'hackeryou',
            );
            the_post_thumbnail('medium',$attr); ?>
          <h1 class="entry-title"><?php the_title(); ?></h1><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>

          <div class="entry-meta">
          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
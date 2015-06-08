<?php get_header();  ?>

<div class="main">
  <div class="container">
  <p>
    <?php 
      echo home_url();
     ?>
  </p>
  <p>URL for this page<?php echo get_permalink(); ?></p>
  <p>The ID URL for this page<?php echo get_permalink(9); ?></p>
    <div class="content">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


         <h2>Post title: <?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
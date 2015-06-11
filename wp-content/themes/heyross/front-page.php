<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">


	<section class="intro">
		<?php //we are going to pull in the filler piece ?>
		  <?php $latestPosts = new wp_query(array(
		    'post_type' => 'intro',//we only want filler piece
		    'posts_per_page' => 1
		  )) ?> 
		  <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
		    <?php the_content(); ?>
		  <?php endwhile; // end of the loop. ?>
		  <?php wp_reset_postdata(); ?>
		<?php //End of Thanks ?>
	</section>
	<!-- // -->
	<section class="how clearfix" id="how">
			
		<div class="howItWorks clearfix">
					<?php $latestPosts = new wp_query(array(
					  'post_type' => 'how',//we only want portfolio pieces
					  'posts_per_page' => -1
					)) ?> 
					<?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
						<h2><?php the_title(); ?></h2>
						<ul>
							<?php while( has_sub_field('how_it_works') ): ?>
							<li class="clearfix">
								<div class="illustration">
									<?php $image = get_sub_field('illustration'); ?>
								    <img src="<?php echo $image['sizes']['medium'] ?>">
								</div>
								<div class="description">
									<p><?php the_sub_field('description');  //Get the Client Name ?></p>
								</div>
						    </li>
						    <?php endwhile; ?>
						</ul>
				    <?php endwhile; ?>
		</div>
		<div class="we">
			<div class="weAre">
					<?php $latestPosts = new wp_query(array(
					  'post_type' => 'we_are',//we only want portfolio pieces
					  'posts_per_page' => -1
					)) ?> 
					<?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<ul>
							<?php while( has_sub_field('we_are') ): ?>
							<li class="clearfix">
								<div class="description">
									<p><?php the_sub_field('list_name');  //Get the Client Name ?></p>
								</div>
								<div class="illustration">
										<?php $image = get_sub_field('list_img'); ?>
									    <img src="<?php echo $image['sizes']['medium'] ?>">
								</div>
									<?php //pre_r($num) ?>
						    </li>
						    <?php endwhile; ?>
						</ul>
				    <?php endwhile; ?>
			</div>
			<div class="weAreNot clearfix">
					<?php $latestPosts = new wp_query(array(
					  'post_type' => 'we_are_not',//we only want portfolio pieces
					  'posts_per_page' => -1
					)) ?> 
					<?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<ul>
							<?php while( has_sub_field('list') ): ?>
							<li class="clearfix">
								<div class="weAreNotList">
									<p><?php the_sub_field('list_item');  //Get the Client Name ?></p>
								</div>
								<div class="not">
										<?php $image = get_sub_field('icon_item'); ?>
									    <img src="<?php echo $image['sizes']['medium'] ?>">
								</div>
						    </li>
						    <?php endwhile; ?>
						</ul>
				    <?php endwhile; ?>
			</div>
			
		</div>
	</section>
	<!-- // -->
	<section class="about clearfix" id="about">
	  <?php $latestPosts = new wp_query(array(
	    'post_type' => 'about',//we only want portfolio pieces
	    'posts_per_page' => 1
	  )) ?> 
	  <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
	    <h2><?php the_title(); ?></h2>
		<div class="prLogo">
			<?php the_post_thumbnail( "full" ); ?>
		</div>
		<div class="prCopy">
			<?php the_content(); ?> 
		</div>
	    
	  <?php endwhile; // end of the loop. ?>
	  <?php wp_reset_postdata(); ?>
	<?php //End of grabbing Contact pieces ?>
	</section>
	<!-- // -->
	<section class="partners clearfix" id="partners">
		<?php $latestPosts = new wp_query(array(
		  'post_type' => 'partners',//we only want portfolio pieces
		  'posts_per_page' => -1
		)) ?> 
		<?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
			<h2><?php the_title(); ?></h2>
				<?php while( has_sub_field('partner_logos') ): ?>
				<div class="partCol">
					<?php $image = get_sub_field('partner_logo_column'); ?>
					 <!-- <pre><?php print_r($image);?></pre> -->
				    <img src="<?php echo $image['sizes']['medium'] ?>">
			    </div>
			    <?php endwhile; ?>
	    <?php endwhile; ?>
	</section>
	<!-- // -->
	<section class="contact clearfix" id="contact">
		  <?php $latestPosts = new wp_query(array(
		    'post_type' => 'contact',//we only want portfolio pieces
		    'posts_per_page' => 1
		  )) ?> 
		  <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
		    <h2><?php the_title(); ?></h2>
		    <?php the_content(); ?> 
		  <?php endwhile; // end of the loop. ?>
		  <?php wp_reset_postdata(); ?>
		<?php //End of grabbing Contact pieces ?>
	</section>




    <?php // Start the loop ?>
    <?php //if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php //the_title(); ?></h2>
      <?php //the_content(); ?>

    <?php //endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">


	<section class="intro">
		This is the intro copy
	</section>
	<!-- // -->
	<section class="how clearfix">
		<div class="howItWorks">
			This is the How It Works section
		</div>
		<div class="weAre">
			This is the We Are section
		</div>
	</section>
	<!-- // -->
	<section class="about clearfix">
		<div class="prLogo">
			this is the parent logo
		</div>
		<div class="prCopy">
			this is the parent compnay write up
		</div>
	</section>
	<!-- // -->
	<section class="partners clearfix">
		This is the partners section
		<ul>
			<li>row 01</li>
			<li>row 02</li>
			<li>row 03</li>
			<li>row 04</li>
		</ul>
	</section>
	<!-- // -->
	<section class="contact clearfix">
		This is the Contact section
		<div class="cred">
			This is for the credentials
		</div>
		<div class="form">
			This is for the form
		</div>
	</section>




    <?php // Start the loop ?>
    <?php //if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php //the_title(); ?></h2>
      <?php //the_content(); ?>

    <?php //endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
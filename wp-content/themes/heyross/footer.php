<footer>
  <div class="container clearfix">
	  <div class="footContain clearfix">
	    <div class="footNav clearfix">
		    <?php wp_nav_menu(array('theme_location'  => 'footer')); ?>
	    </div>
	    <div class="copyright">
	    	<?php echo date('Y'); ?> The Stewart Group Ltd. All Rights Reserved
	    </div>
    </div>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->
	<br>
	<br>
	<footer id="colophon" class="site-footer row align-center">
		<div id='ftrSearch' class="column large-2">
			<h5>Search</h5>

			<form>
				<input class="w3" type="text" name="searchBar" placeholder="Search">
				<br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="column large-3">
			<h5>Roundabout</h5>

			<audio class ="pr4"controls>
				<source src="/testsite/wp-content/uploads/2019/10/00-Yes-Roundabout-2008-Remastered-Version.mp3" type="audio/mpeg">
			</audio>
			


		</div>
		<div class="column large-3">
			<h5>Recent Posts</h5>
			<ul>
				<?php $args = array('post_type' => 'jojos_characters');

				$the_query = new WP_Query($args);
				$count = 1;
					
				while(($the_query -> have_posts()) & ($count<=3) ): $the_query -> the_post(); 
				
				?>

				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
					$count++;
					endwhile;
					wp_reset_postdata();
					?>
					
			</ul>
		</div>
		<div class="column large-2">
			<h5>Contact Us</h5>
			<ul>
				<li><a href="http://localhost/testsite/contact">HMU</a></li>
				<li><a href="http://localhost/testsite/privacy-policy/">Privacy</a></li>
				<li><a href="http://localhost/testsite/archives/">Archives</a></li>
			</ul>
		</div>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
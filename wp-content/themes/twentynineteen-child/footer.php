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



	<footer id="colophon" class="site-footer row align-center">
		
		<div id='ftrSearch' class="column large-2">
			<h4>Search</h4>

			<label style>
				<div class="align-center"> 
					<?php get_search_form(); ?>
					</div>
			</label>
			

			
			<!--<form>
				<input class="w3" type="text" name="searchBar" placeholder="Search">
				<br><br>
				<input type="submit" value="Submit">
			</form>-->

		</div>
		<div class="column large-3 medium-2">
			<h4>Roundabout</h4>

			<!--<?php the_widget('WP_Widget_Media_Audio'); ?>-->

			<audio class ="aligh-center" controls muted>
				<source src="/testsite/wp-content/uploads/2019/10/00-Yes-Roundabout-2008-Remastered-Version.mp3" type="audio/mpeg">
			</audio>
			<br>
			<a href="http://localhost/testsite/lyrics-to-roundabout/">Lyrics to Roundabout</a>


		</div>
		<div class="column large-3">
			<h4>Recent Posts</h4>
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
			<h4>Contact Us</h4>
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
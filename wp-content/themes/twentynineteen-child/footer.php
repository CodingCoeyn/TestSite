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
		<div class="column large-2">
			<h5>Search</h5>

			<form>
				<input typr="text" name="searchBar" value="Search">
				<br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="column large-2">
			<h5>Songs</h5>

			<ul>
				<li>Song1</li>
				<li>Song2</li>
				<li>Song3</li>
			</ul>
		</div>
		<div class="column large-2">
			<h5>Recent Posts</h5>
			<ul>
				<?php $args = array('post_type' => 'jojos_characters');

				$the_query = new WP_Query($args);
					
				while($the_query -> have_posts()): $the_query -> the_post(); ?>

				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
					endwhile;
					wp_reset_postdata();
					?>
			</ul>
		</div>
		<div class="column large-2">
			<h5>s'more stuffs</h5>
			<ul>
				<li>Social 1</li>
				<li>Social 2</li>
				<li>Social 3</li>
			</ul>
		</div>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

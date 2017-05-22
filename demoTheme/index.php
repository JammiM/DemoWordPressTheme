<?php

get_header();

	if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>

			<article class="post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-info"><em>
					<?php the_time('F jS, Y g:i a'); ?> / by
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></em>
				</p>
				<p class="post-info"><em>
					Posted in : <?php
												 	$categories = get_the_category();
												 	$seperator = ", ";
												 	$output = '';

												 	//If there is content in $categories
												 	if ($categories) {
												 		foreach ($categories as $category) {
												 			// .= adds onto the output variable rather than overriding it.
												 			$output .= '<a href="' . get_category_link($category->term_id) .'">' . $category->cat_name . '</a>'  . $seperator;

												 		}

														//trim is used to remove the final comma.
												 		echo trim($output, $seperator);
												 	}

											  ?></em></p>

				<?php the_content(); ?>
			</article>

		<?php endwhile;
		else :
			echo '<p>No content found</p>';
		endif;

get_footer();

?>

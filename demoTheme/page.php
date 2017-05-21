<?php

get_header();

if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>

		<article class="post page">



			<?php

				// If this page has children or is a child itself
				if ( has_children() OR $post->post_parent > 0 ) {?>

						<nav class="site-nav children-links clearfix">
							<span class="parent-link"><a href="<?php echo get_the_permalink(get_parent_page_id()); ?>"><?php echo get_the_title(get_parent_page_id()); ?></a></span>
							<ul>
								<?php

									$args = array(
										'child_of' => get_parent_page_id(),
										'title_li' => '' // Removes 'Pages' text from the title.
									);

								?>
								<?php wp_list_pages($args); ?>
							</ul>
						</nav>
			<?php } ?>

			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>

		</article>

	<?php endwhile;
		else :
			echo '<p>No content found</p>';
		endif;

get_footer();

?>

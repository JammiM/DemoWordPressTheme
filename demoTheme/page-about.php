<?php

get_header();

if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>

		<article class="post page">

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

      <div class="column-container clearfix">

        <div class="title-column">
          <h2><?php the_title(); ?></h2>
        </div><!-- title-column -->

        <div class="text-column">
          <?php the_content(); ?>
        </div><!-- text-column -->

      </div><!-- column-container clearfix -->

		</article>

	<?php endwhile;
	else :
		echo '<p>No content found</p>';
	endif;

get_footer();

?>

<?php

get_header();

if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>

		<article class="post page">
			<!--<h2><?php the_title(); ?></h2> -->

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

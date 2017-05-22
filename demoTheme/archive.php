<?php

get_header();

	if ( have_posts() ) :


    ?>

    <h2>
        <?php

/*
          switch ( is_category() ) {

            case is_author():
                echo 'author';
                break;

            case is_tag():
                echo 'Tags';
                break;


            case is_day():
                echo 'Day';
                break;


            case is_month():
                echo 'Month';
                break;

            case is_year():
                echo 'Year';
                break;

            default:
                echo "Archives :";
                break;
          }
*/

        // TODO: There is some unknown bug in the switch statement so I'm using a if/else for now.

          if (is_category()) {
                single_cat_title();
          } elseif (is_tag()) {
                single_tag_title();
          } elseif (is_author()) {
                the_post();
                echo "Author Archives: " . get_the_author();
                rewind_posts();
          } elseif (is_day()) {
                echo "Daily Archives: " . get_the_date();
          } elseif (is_month()) {
                echo "Monthly Archives: " . get_the_date('F Y');
          } elseif (is_year()) {
                echo "early Archives: " . get_the_date('Y');
          } else {
                echo "Archives :";
          }

       ?>
    </h2>

    <?php
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

				<?php the_excerpt(); ?>
			</article>

		<?php endwhile;
		else :
			echo '<p>No content found</p>';
		endif;

get_footer();

?>

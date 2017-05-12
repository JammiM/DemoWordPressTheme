<?php
/*
Template Name: info Layout
*/

get_header();

if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>

		<article class="post page">
			<h2><?php the_title(); ?></h2>

      <div class="info-box">
        <h4>Disclaimer</h4>
        <p>Bacon ipsum dolor amet picanha turducken venison frankfurter fatback sausage leberkas meatloaf bresaola spare ribs kielbasa. Biltong pork chop corned beef, andouille landjaeger ground round t-bone pork loin venison sirloin burgdoggen short ribs. Bacon burgdoggen venison filet mignon swine shank meatball.</p>
      </div><!-- info-box -->
			<?php the_content(); ?>
		</article>

	<?php endwhile;
	else :
		echo '<p>No content found</p>';
	endif;

get_footer();

?>

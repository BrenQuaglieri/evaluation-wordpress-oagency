<?php

get_header();

if ( have_posts() ) :
	the_post();

	get_template_part(
		'template-parts/posts/post'
	);
endif;

get_footer();

<?php
/**
 * @package martial
 */
?>
<div class="block_cont">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'martial-frontpage-blog' ); ?></a>

	<div class="block_cont_in">
		<h5><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
        <div class="postmeta">
		<ul>
			<li>
				<i class="fa fa-calendar-check-o"></i>

				<p><?php the_time( 'F j, Y' ) ?></p>
			</li>
			<li>
				<?php
				$martial_category = get_the_category();
				if ( !empty( $martial_category ) ):
					?>
					<i class="fa fa-folder-open-o"></i>
					<p><?php the_category( ', ' ) ?></p>
				<?php endif; ?>
			</li>
			<li>
				<?php the_tags( __( '<i class="fa fa-tags"></i><p>Tags: ', 'martial-lite' ), ', ', '</p>' ); ?>
			</li>
			<li>
				<?php if ( !post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
					<i class="fa fa-comments-o"></i>
					<p><?php comments_popup_link( __( 'Leave a comment', 'martial-lite' ), __( '1 Comment', 'martial-lite' ), __( '% Comments', 'martial-lite' ) ); ?></p>
				<?php endif; ?>
			</li>
		</ul>
        </div>
		<div class="clear"></div>
        <div class="content">
		<?php the_excerpt(); ?>
		<a class="read_more" href="<?php the_permalink(); ?>"><?php _e('Read More', 'martial-lite') ?></a>
        </div>
	</div>
</div>
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-3 category-ads'); ?>>
	<a href="<?php the_permalink() ?>" class="block__img">
		<span class="overlay">
			<svg version="1.1" class="icon icon__plus" xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="6px" height="6px" viewBox="0 0 6 6"
				style="enable-background:new 0 0 6 6;" xml:space="preserve">
				<polygon points="6,2.6 3.4,2.6 3.4,0 2.6,0 2.6,2.6 0,2.6 0,3.4 2.6,3.4 2.6,6 3.4,6 3.4,3.4 6,3.4 ">
				</polygon>
			</svg>
		</span>

		<img width="360" height="240" src="<?php the_post_thumbnail_url() ?>"
			class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
	</a>
	<div class="content">
		<h3 class="title"><a href="<?php the_permalink() ?>" target="_blank"><?php the_title() ?></a></h3>
		<div><?php the_content() ?></div>
	</div>
</article>

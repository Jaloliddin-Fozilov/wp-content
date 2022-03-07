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
			
			<img width="360" height="240" src="<?php the_post_thumbnail_url() ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
		</a>
		<div class="content">
			<h3 class="title"><a href="<?php the_permalink() ?>" target="_blank"><?php the_title() ?></a></h3>
			<div></div>
		</div>
</article>
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="node__content o-blocks" id="articleBody">
		<div class="o-editor">
			<div class="o-editor__id">
				<div class="o-editor_sticky">
					<div class="o-editor__img">
						<img src="images/abduramanov.png" class="image-style-author-square">
					</div>
					<div class="o-editor__name">
						<h1 class="f-h6"><?php the_title(); ?></h1>								
					</div>
				</div>
			</div>

			<div class="o-editor__content">
				<div class="o-editor__description o-blocks f-article">							
					<?php  the_content(); ?>					
				</div>
			</div>
		</div>
	</div>

</article>



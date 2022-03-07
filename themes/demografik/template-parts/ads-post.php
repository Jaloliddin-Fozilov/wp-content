<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

?>


<div class="ads-post">
	<section id="block-breadcrumbs" class="block block-system block-breadcrumbs">
		<nav role="navigation" class="container breadcrumbs-nav" aria-labelledby="system-breadcrumb">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
			?>
		</nav>
	</section>
	<section class="block block-system block-hq-content">
		<article id="post-<?php the_ID(); ?>" <?php post_class('ads-post'); ?>>

			<header class="entry-header">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-8">
							<header class="story-header">


								<h1 class="story-title"><?php the_title(); ?></h1>



								<div class="story-author-date">

									<div
										class="field field--name-field-story-publication-date field--type-datetime field--label-hidden field__item">
										<time
											datetime="<?php echo get_the_date('j F Y'); ?>"><?php echo get_the_date('j F Y'); ?></time>
									</div>

								</div>
								<ul
									class="social-sharing-buttons social-media-links--platforms platforms list horizontal">
									<!-- Facebook share button -->
									<li>
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"
											target="_blank" title="Share to Facebook" aria-label="Share to Facebook"
											class="social-sharing-buttons__button" rel="noopener">
											<i class="fa fa-facebook"><span class="d-none">Share to Facebook</span></i>
										</a>
									</li>

									<!-- Instagram share button -->
									<li>
										<a href="https://www.instagram.com/?url=<?php the_permalink() ?>"
											target="_blank" title="Share to Twitter" aria-label="Share to Instagram"
											class="social-sharing-buttons__button" rel="noopener">
											<i class="fa fa-instagram"><span class="d-none">Share to
													Instagram</span></i>
										</a>
									</li>

									<!-- Telegram share button -->
									<li>
										<a href="https://t.me/share/url?url=<?php the_permalink() ?>&text=<?php the_title(); ?>"
											class="social-sharing-buttons__button" rel="noopener">
											<i class="fa fa-telegram"><span class="d-none">Share to Telegram</span></i>
										</a>
									</li>

									<!-- Email share button -->
									<li>
										<a href="mailto:?subject=<?php the_title(); ?> &amp;body=<?php the_permalink() ?>"
											title="Share to E-mail" aria-label="Share to E-mail"
											class="social-sharing-buttons__button" target="_blank" rel="noopener">
											<i class="fa fa-envelope-o"><span class="d-none">Share to E-mail</span></i>
										</a>
									</li>
								</ul>



							</header>
						</div>
					</div>
				</div>
			</header><!-- .entry-header -->
			<div class="paragraph-list">
				<section class="paragraph--section--image">
					<?php demografik_post_thumbnail(); ?>
				</section>
				<section class="container paragraph--section--basic-text">
					<?php the_content(); ?>
				</section>
			</div>
		</article>
	</section>
</div>


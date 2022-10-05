<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

get_header();
?>

<main id="main" class="white-bg">

<?php
if ( have_posts() ) :
	?>
	<article class="page type-page status-publish hentry">
		<header class="m-section-header m-section-header--f-h0 ">
			<h1 class="m-section-header__title f-h0"><?php echo  get_the_archive_title(); ?></h1>
		</header>
		<div class="container">
			<div class="post-row pt-5 pb-5">
				<?php

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				$pagination = paginate_links([
					"show_all"           => false,            // настраивается end_size и mid_size (или показ всех страниц)
					"prev_next"          => true,             // показ ссылок предыдущая/следующая
					"prev_text"          => '<svg xmlns="http://www.w3.org/2000/svg" class="btn--icon" fill="none"viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>',  // анкор ссылки на предыдущую страницу
					"next_text"          => '<svg xmlns="http://www.w3.org/2000/svg" class="btn--icon" fill="none"viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round"d="M9 5l7 7-7 7"/></svg>',  // анкор ссылки на следующую страницу
					"end_size"           => 1,                // кол-во ссылок в начале и конце
					"mid_size"           => 2,                // кол-во ссылок до и после текущей страницы
					"type"               => "plain",          // в каком виде вернуть результат ("plain", "array", "list")
				]);
				?>

			   
			</div>
		</div>
		<!-- .entry-footer -->
	</article><!-- #post-50 -->
	<?php
else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>
 <?php echo "<div class='pagination'>" . $pagination . "</div>"; ?>

</main><!-- #main -->

<?php
get_footer('white');
<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="row">
	<div class="front-page-left seven columns"><img src="http://www.rgl.dev/wp-content/themes/calypso/images/coming-soon-message.png"/>
	</div>
</div>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="row">
				<div class="seven columns">
					<div class="lesson-library">
						<a href="http://www.rgl.dev/acoustic_lessons" title="Acoustic Lesson Library" class="red-button-1"></a>
						<a href="http://www.rgl.dev/electric_lessons" title="Electric Lesson Library" class="red-button-2"></a>					
					</div>
				</div>
			</div>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>
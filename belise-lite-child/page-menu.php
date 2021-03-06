<?php
/**
 * Template Name: page-menu
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Belise
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container single-container">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>

            <div id="access-footer">
                <?php // access-footer挿入
                $my_post = get_page_by_title ( 'access-footer' );
                echo apply_filters ( 'the_content', $my_post -> post_content );
                ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

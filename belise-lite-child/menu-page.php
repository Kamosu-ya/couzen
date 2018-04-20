<?php
/**
 * Template Name: menu-page
 *
 * Template that displays pages full width with big header section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Belise
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">



				<?php
				while ( have_posts() ) :
					the_post();
				    ?>

                <div class="eye-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">




                </div>
                    <h1><?php echo get_the_title(); ?></h1>
                <?php

					get_template_part( 'template-parts/content', 'page-full-width' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

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


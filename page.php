<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package solo
 * @since solo 1.0
 */

get_header(); ?>

<div id="maincontentcontainer">

	<div id="primary" class="site-content row" role="main">

		<div class="col grid_12_of_12">
                    
                    <div class="main-content">
                     
			<?php if ( have_posts() ) : ?>

				<?php // Start the Loop ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; ?>

			<?php endif; // end have_posts() check ?>
                        
                        <?php get_sidebar(); ?>
                                
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() ) {
                                comments_template( '', true );
                        }
                        ?>

                    </div> <!-- /.main-content -->
                    
		</div> <!-- /.col.grid_12_of_12 -->
		

	</div> <!-- /#primary.site-content.row -->

</div> <!-- /#maincontentcontainer -->

<?php get_footer(); ?>

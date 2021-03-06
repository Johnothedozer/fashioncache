<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="container content blog standardContainer">
	    <div class="SiteContentSection">
	        <div class="SiteContentLeft">            
				<div class="blogPostContainer">
					<!-- <h1>BLOG</h1>-->					
					<div class="blogPostContainer">
					<?php /* ?>
					<div class="leftAligned blogAuthorDetail">					
						<?php 
						if (has_post_thumbnail( $post_id )) {?> 
							<?php the_post_thumbnail( array(225,225) );
						} 
						?>												
					</div>
					<?php */  ?>
					<div>					
					<div class="categoryHeading blogPostHeading">												
						<h1><?php the_title();?></h1>						
						<div class="blogAuthorNameSection">BY 
							<?php if ( have_posts() ) : ?>
								<?php while ( have_posts() ) : the_post(); ?>									
									<?php echo get_the_author(); ?>
								<?php endwhile; ?>
							<?php else : ?>
															
							<?php endif;?> <span class="pipeSeperator">|</span>
						</div>
						<div class="blogTimeStamp"><?php echo date('F d, Y', strtotime($post->post_date)); ?></div>
						<div class="cb"></div>
					</div>
						<div class="blogSection"> 						
							<?php if ( have_posts() ) : ?>
								<?php while ( have_posts() ) : the_post(); ?>									
									<?php get_template_part( 'content', get_post_format() ); 
									?>
									<!-- <div class="blogSocialIcons">				
										<span class="countContainer"><?php comments_number( '0', '1', '% ' ); ?></span>
									</div>-->
									
								<?php endwhile; ?>
							<?php else : ?>
								No posts to show.
							<?php endif;?>
							<div class="olderPost"><?php twentytwelve_content_nav( 'nav-below' ); ?></div>
							<!-- <div class="olderPost"><a href="#">Older Posts&#x003E;</a></div> -->
							<?php //posts_nav_link(); ?>
						</div> 
					</div>
					<div class="cb"></div>
					 </div>
					 </div>
					<div class="cb"></div>
					<?php comments_template( '', true ); ?><!-- For the comments panel to be shown -->
			   </div>						
				<?php get_sidebar();?>
				<?php //@todo put fashion experts here ?>				
	    </div>   
	</div>
	<?php /*?>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


<div class="container content blog standardContainer">
	    <div class="SiteContentSection">
	        <div class="SiteContentLeft">            
	            <div class="categoryHeadingWithMargins"><h1>BLOG</h1></div>
	            <div class="blogSection"> 
	           		<?php if ( have_posts() ) : ?>
		           		<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>
					<?php else : ?>
						<div class="noPostMessage">No posts to show.</div>
	           		<?php endif;?>
	           		<div class="olderPost"><?php twentytwelve_content_nav( 'nav-below' ); ?></div>
	                <!-- <div class="olderPost"><a href="#">Older Posts&#x003E;</a></div> -->
	                <?php //posts_nav_link(); ?></p>
	            </div>  
	            <div class="cb"></div>   
		   </div>
	        <?php get_sidebar();?>
			<?php //@todo put fashion experts here ?>
	    </div>   
	</div>
	
<?php /*?>
	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php
				the_post();
			?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Author Archives: %s', 'twentytwelve' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
			</header><!-- .archive-header -->

			<?php
				rewind_posts();
			?>

			<?php twentytwelve_content_nav( 'nav-above' ); ?>

			<?php
			// If a user has filled out their description, show a bio on their entries.
			if ( get_the_author_meta( 'description' ) ) : ?>
			<div class="author-info">
				<div class="author-avatar">
					<?php
					$author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
					echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
					?>
				</div><!-- .author-avatar -->
				<div class="author-description">
					<h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
					<p><?php the_author_meta( 'description' ); ?></p>
				</div><!-- .author-description	-->
			</div><!-- .author-info -->
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
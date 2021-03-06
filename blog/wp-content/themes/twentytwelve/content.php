<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
 <?php 
/* 
 if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail( array(150,150) ); ?>
   </a>
 <?php endif; */?>
<?php 
if(!is_single()){
?>
	<div class="blogContentContainer">	
		<div class="blogContentContainerLeft notResponsive">
			<div class="blogPicture"><a href="<?php the_permalink(); ?>">
			<?php 
			if (has_post_thumbnail( $post_id )) {?> 
				<?php the_post_thumbnail( array(225,325) );
			}
			else{ ?>
				<img src="<?php echo SITE_URL; ?>img/hangerIcon.png">
			<?php 
			}?>
			</a></div>
		</div>
		<div class="blogContentContainerRight">
				<div class="blogCategory">			
					<div><a href="<?php the_permalink(); ?>"><?php the_category(', ');?></a></div>
				</div>
				<div class="blogTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>				
				<div class="blogInfo">
					<div class="blogAuthor"><!--<img src="<?php echo SITE_URL;?>img/authorIcon.png" class="authorIcon" alt=""/>--> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) )?>">By <?php echo get_the_author(); ?></a></div>
					<div class="postDate"><!--&#x00A0;&#x00A0;<img src="<?php echo SITE_URL;?>img/comments.png" class="commentsIcon" alt="No."/> <a href="<?php the_permalink();?>/#comments"><?php echo get_comments_number(); ?> Comment<?php $Comments = get_comments_number(); if ($Comments >= 2) {?>s<?php } ?></a>-->| <!--&#x00A0;&#x00A0;<img src="<?php echo SITE_URL;?>img/calender.png" alt="" class="PostedOn" />--> <?php echo date('F d, Y', strtotime($post->post_date)); ?></div>
				</div>
				<div class="blogContentContainerLeft isResponsive">
					<div class="blogPicture">
						<a href="<?php the_permalink(); ?>">
						<?php 
						if (has_post_thumbnail( $post_id )) {?> 
							<?php the_post_thumbnail( array(225,325) );
						}
						else{ ?>
							<img src="<?php echo SITE_URL;?>img/hangerIcon.png">
						<?php 
						}?>
						</a>
					</div>					
				</div>
				<div class="blogDescription">
					 <?php the_content('read more...');?>
				</div>
		</div>
		<div class="cb"></div>
	</div>
	<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
<?php 
}elseif(is_single()){
?>
<?php //the_title(); ?>

<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
<?php 	
	
}
?>

<?php /* ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<?php the_post_thumbnail(); ?>
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php twentytwelve_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
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
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
<?php */ ?>

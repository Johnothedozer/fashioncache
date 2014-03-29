<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
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
	            <h1>BLOG</h1>
	            <div class="blogSection"> 
	                <div class="blogContentContainer">
	                    <div class="blogContentContainerLeft">
	                        <div class="blogPicture"><a href="#"><img src="<?php echo SITE_IMG;?>blog1.jpg" alt=""/></a></div>
	                    </div>
	                    <div class="blogContentContainerRight">
	                        <div class="postDate">JANUARY 5, 2014</div>
	                        <div class="blogCategory">
	                            <div><a href="#"><i>CELEBRITIES</i></a></div>
	                            <div class="blogAuthor"></div>			        
	                        </div>
	                        <div class="blogTitle"><a href="#">THE BEST BABY BUMP STYLE IN HOLLYWOOD</a></div>
	                        <div class="blogDescription">With recent pregnancy announcements of Olivia Wilde and Drew Barrymore &#x2013; and rumors about mom-to-be Kerry Washington &#x2013; it seems that Hollywood...</div>
	                        <div class="blogReadMore"><a href="#"><i>Read More</i></a></div>
	                        <div class="blogSocialIcons">
	                            <a href="#"><img src="<?php echo SITE_IMG;?>blog/fb.png" alt=""/></a>
	                                <a href="#"><img src="<?php echo SITE_IMG;?>blog/twitter.png" alt=""/></a>
	                                    <a href="#"><img src="<?php echo SITE_IMG;?>blog/pinterest.png" alt=""/></a>
	                                        <a href="#"><img src="<?php echo SITE_IMG;?>blog/comments.png" alt=""/></a>
								<span class="countContainer">2</span>
	                        </div>
	                    </div>
	                    <div class="cb"></div>
	                </div>
	                <div class="blogContentContainer">
	                    <div class="blogContentContainerLeft">
	                        <div class="blogPicture"><a href="#"><img src="<?php echo SITE_IMG;?>blog1.jpg" alt=""/></a></div>
	                    </div>
	                    <div class="blogContentContainerRight">
	                        <div class="postDate">JANUARY 5, 2014</div>
	                        <div class="blogCategory">
	                            <div><a href="#"><i>CELEBRITIES</i></a></div>
	                            <div class="blogAuthor"><a href="#">By Jordan Christensen</a></div>			        
	                        </div>
	                        <div class="blogTitle"><a href="#">THE BEST BABY BUMP STYLE IN HOLLYWOOD</a></div>
	                        <div class="blogDescription">With recent pregnancy announcements of Olivia Wilde and Drew Barrymore &#x2013; and rumors about mom-to-be Kerry Washington &#x2013; it seems that Hollywood...</div>
	                        <div class="blogReadMore"><a href="#"><i>Read More</i></a></div>
	                        <div class="blogSocialIcons">
	                            <a href="#"><img src="<?php echo SITE_IMG;?>blog/fb.png" alt=""/></a>
	                                <a href="#"><img src="<?php echo SITE_IMG;?>blog/twitter.png" alt=""/></a>
	                                    <a href="#"><img src="<?php echo SITE_IMG;?>blog/pinterest.png" alt=""/></a>
	                                        <a href="#"><img src="<?php echo SITE_IMG;?>blog/comments.png" alt=""/></a>		        
	                                            <span class="countContainer">2</span></div>
	                    </div>
	                    <div class="cb"></div>
	                </div>
	                <div class="olderPost"><a href="#">Older Posts&#x003E;</a></div>
	            </div>  
	            <div class="cb"></div>   
		        <?php if ( have_posts() ) : ?>
	
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
	
				<?php twentytwelve_content_nav( 'nav-below' ); ?>
				<?php endif;?>                 
		        </div>
	        <?php get_sidebar();?>
	        <!-- <div class="fashionExpertSection">
	            <div class="titleSection">
	                <div>
	                    <img alt="" src="<?php echo SITE_IMG;?>FashionExpertsIcon.jpg" />
	                </div>
	                <div class="title">
	                    MEET OUR <span>FASHION</span> <span class="pink">EXPERTS</span>
	                </div>
	            </div>
	            <div class="expertList">			
	                    <ul class="expertSectoinSlider">
	                        <li>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                        </li>
	                        <li>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                        </li>
	                        <li>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                            <div class="expertInformation">
	                                <div class="expertThumb">
	                                    <a href="#"><img alt="" src="<?php echo SITE_IMG;?>FashionExperts.jpg" /></a>
	                                </div>
	                                <div class="expertName"><a href="#">SHELLY S.</a></div>
	                                <div class="expertLocation">Sandy, Utah</div>
	                                <div class="expertBlog">Read her blog posts:</div>
	                            </div>
	                        </li>
	                    </ul>
	                    <div class="cb"></div>
	                </div>
	            <div class="cb"></div>
	        </div> -->
	    </div>   
	</div>


	<?php /* ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php */ ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
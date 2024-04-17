<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Sugar & Spice
 */

get_header(); ?>

        <div id="primary" class="content-area site-content" role="main">
			<?php if(function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/article">
                	<header class="entry-header">
						<!--<div class="avatar">
							<img class="entry-header-img" itemprop="image" src="<?php echo get_thumb($POST->ID); ?>" alt="<?php the_title(); ?>"/>
						</div>-->
						<div class="entry-header-main">
							<h1 class="entry-title"><span itemprop="name"><?php the_title(); ?></span></h1>
							
							<div class="entry-meta">
								<div class="socials-single">
									<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
									<a href="<?php the_permalink(); ?>" class="twitter-share-button">Tweet</a>
									<div class="g-plusone" data-size="medium"></div>
								</div>
								<?php ht_posted_on(); ?>
							</div><!-- .entry-meta -->
						</div>
					</header><!-- .entry-header -->
				<?php 
				 $gallery = get_post_meta($post->ID,'ht_post_gallery', true);
				 if($gallery){
				?>
					<div id="property-slider" class="flexslider" style="width: 80%; margin: auto;">
				<?php 
					
					preg_match('/(\[gallery ids=")(.*)("\])/i', $gallery, $matches); 
					if(isset($matches[2])){
						$array_ids = explode(',',$matches[2]);
						if($array_ids){
							?>
							<ul class="slides">
								<?php 
								foreach($array_ids as $k=>$id){
									$img = get_post( $id );
								?>
								<li class="slide" >
								
					               <img  src="<?php echo $img->guid; ?>" alt="<?php echo $img->post_title; ?>" title="<?php echo $img->post_excerpt; ?>" />	
								
								</li>
								<?php
								} ?>
							</ul> <?php
						}
					} else {
					}
				?>
			</div>
			<?php } ?>
			 			<?php $link_file = get_post_meta($post->ID,'ht_document_file',true);
						if($link_file){
						?>	
						<div class="document">
						        <?php
									
									echo '<a class="view" target="_blank" title="'.__('Click vào xem chi tiết..!','ht').'" href="'.$link_file.'"><i class="fa fa-file-excel-o"></i> '.__('Xem','ht').'</a>';
									echo ' | <a class="download" target="_blank" title="'.__('Click chuột phải chọn save taget download..!','ht').'" href="'.$link_file.'"><i class="fa fa-file-excel-o"></i> '.__('Tải Về','ht').'</a>';
						       ?>
						    </div>
						 <?php } ?>
					<div class="entry-content" itemprop="articleBody">
				        <?php the_content( __('Continue reading &rarr;', 'ht') ) ?>
					</div><!-- .entry-content -->
				    <?php echo get_post_meta($post->ID,'ht_post_video', true); ?>
				   
					<footer class="entry-meta bottom">
						<?php ht_post_meta(); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post-## -->
                
				<?php if(have_comments() || comments_open()){ ?>
					<div id="comment" class="clear"></div> 
					<div class="cmt-facebook">
						
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;s
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="685px" data-height="90px" data-numposts="10" data-colorscheme="light"></div>
					</div> 
					<div class="comments_template"><?php comments_template('',true); ?></div>
				<?php } ?>
				<?php
					if(is_singular( 'abroad' ))
						ht_posts_related(6,10,'video','abroad','abroad_taxonomy');
					else if(is_singular( 'document'))
						ht_posts_related(6,10,'video','document','document_taxonomy');
					else if(is_singular( 'lesson'))
						ht_posts_related(6,10,'video','lesson','lesson_taxonomy');
					else
						 ht_posts_related(6,10,'video');
				  ?>
            <?php endwhile; // end of the loop. ?>
        </div><!-- #primary -->

<?php 
do_action( 'before_sidebar' ); ?>

<div id="sidebar" class="widget-area" role="complementary">        
<?php get_sidebar(); ?>
<?php get_footer(); ?>
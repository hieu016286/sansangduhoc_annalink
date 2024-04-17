<?php 
/* Template Name: Page about */
get_header(); ?>
<!--HEADER END-->  
   
    <div id="primary" class="main-content column page template-about-us level1" role="main">
        	<?php if(function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    		<h1 class="widget-title"><?php echo the_title(); ?></h1>
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php 
            $parents = get_post_ancestors( $post->ID );
            $idprent = ($parents) ? $parents[count($parents)-1]: $post->ID;
            $parent = get_page( $idprent );
			
			echo '<p>'.the_content().'</p>';
        ?>
    </div>  
    
    <div id="sidebar">
   		<section class="spec-page">	
			        <ol class="circles-list">
			            <?php // wp_list_pages( array('child_of'=> $idprent, 'title_li' => '' ) );
						 	$mypages = get_pages( array( 'child_of' => $idprent) );
					foreach( $mypages as $page ) {		
							$content = $page->post_content;
							if ( ! $content ) // Check for empty page
								continue;
							$content = apply_filters( 'the_content', $content );
						 ?>
						 <li>
						 	<h3 class="widget-title"><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h3>
						 	<? //$trimmed_content = wp_trim_words( $content,20 );
						?>
						 <!--	<div class="entry"><?php echo $trimmed_content; ?></div>-->
						 </li>
						 <?php
							}	
						?>
						
						<?php
						$taxonomy = 'genre';
						$tax_terms = get_terms($taxonomy);
						?>
			        </ol>
   		</section>
    </div>
            
  
<?php endwhile; else: ?>
	<h4><?php _e('Đang cập nhật...','ht'); ?></h4>
<?php endif; ?>
<?php get_footer(); ?>
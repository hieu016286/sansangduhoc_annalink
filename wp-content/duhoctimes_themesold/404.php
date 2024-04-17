<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Sugar & Spice
 */

get_header(); ?>

	<div id="primary" class="content-area">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><span class="name"><?php _e( 'KHÔNG TÌM THẤY TRANG BẠN CẦN TÌM.', 'ht' ); ?></span></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Rất tiếc trang web bạn cần tìm không tồn tại hoặc có thể đã được chuyển sang địa chỉ khác.!', 'ht' ); ?></p>
					<p><?php _e( 'Hãy thử sử dụng chức năng tìm kiếm.!', 'ht' ); ?></p>

					<?php if ( ht_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widgettitle"><?php _e( 'Xem Qua Danh Mục', 'ht' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

 </div><!-- #primary -->

<?php 
do_action( 'before_sidebar' ); ?>

<div id="sidebar" class="widget-area" role="complementary">        
<?php get_sidebar(); ?>
<?php get_footer(); ?>
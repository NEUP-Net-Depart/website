<?php
get_header(); 
$order_by = 'date'; /* 按照何种方式排序*/

$order = 'DESC';/*降序排列*/

$posts_per_page = 1;/*每页显示文章数*/

$cat = '5';/*显示哪个分类ID下的文章*/


global $post;
$post_title = $post->post_title;
if( $show_content || $paged == 1  ) $post_content = apply_filters('the_content', $post->post_content);

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$post_list = new WP_Query(
	"posts_per_page=" . $posts_per_page .
	"&orderby=" . $order_by .
	"&order=" . $order .
	"&cat=" . $cat .
	"&paged=" . $paged
);

?>
				
				<?php if( $show_content || $paged == 1  ) : ?>
				<?php endif; ?>
				
			<?php if ( $post_list->have_posts() ) : ?>
			<?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
						
						<?php
						$title =  preg_replace("'[\n\r\s\t]'","",strip_tags( get_the_content() )); 
						$title = mb_strimwidth( $title, 0, 160, ' ...');
						?>			
						
							
						<a href="<?php the_permalink() ?>" title="<?php echo $title; ?>" target="_blank"><?php the_title(); ?></a>
						<?php echo esc_html( get_the_date() ); ?>
						<?php endwhile; ?>
					
					<?php if ( function_exists('wp_pagenavi') ) wp_pagenavi( array('query' => $post_list) ); /*使用了wp—pagenavi插件*/ ?> 

					
				
				<?php endif; ?>
				

<?php get_footer(); ?>

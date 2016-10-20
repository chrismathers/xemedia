<?php
/**
 * The Loop for single posts
 *
 * @package WordPress
 * @subpackage Minimatica
 * @since Minimatica 1.0
 */
 ?>
 
 <?php if( have_posts() ) : the_post(); ?>
	<div class="title-container">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div><!-- .title-container -->
	<div id="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php
       $categories = get_the_category();
       $separator = ' ';
       $output = '';
       if($categories){
        foreach($categories as $category) {
          $output .= '<a class="cat-link" href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">see more <span>'.$category->cat_name.'</span></a>'.$separator;
        }
       echo trim($output, $separator);
       }
       ?>
      </a>
		</article><!-- .post -->
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div><!-- #container -->
<?php endif; ?>

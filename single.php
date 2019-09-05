<?php
/**
 * The template for displaying all single posts
 *
 * @package aob
 */

get_header();
?>

<?php
    while ( have_posts() ) :
	the_post();?>

<!-- ******************* Hero Content ******************* -->

<?php $heroImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<div class="hero" style="background-image: url(<?php echo $heroImage[0]; ?>);">
    <div class="hero__content">      
        <h1 class="heading heading__lg"><?php the_title(); ?></h1>
        <p class="heading heading__sm"><?php the_date( 'jS F Y' );?></p>
    </div>       
</div><!--hero-->

<!-- ******************* Hero Content END ******************* -->
 
<div class="container cols-8-4">
    <div class="col">			
        <article>				
        	<?php the_content();
        	endwhile; ?>
        		<?php get_template_part('template-parts/additional', 'articles');?>
        </article>
    </div>
    <div class="col">
        <div class="related-posts">    
            <p class="heading heading__sm heading__caps font500">Related Articles</p>
            
            <?php $related = get_posts( 
            array( 
                'category__in' => wp_get_post_categories( $post->ID ), 
                'numberposts'  => 3, 
                'post__not_in' => array( $post->ID ) 
                ) 
            );

            if( $related ) { 
                foreach( $related as $post ) {
                    setup_postdata($post);
                    $imageid = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );$featimage = $imageid['0'];?>
            
                        <a href="<?php the_permalink();?>" class="article-wrapper">
                            <div class="item">
                                <div class="image" style="background-image: url(<?php echo $featimage; ?>);"></div>
                                <div class="content">
                                    <?php the_title('<h2 class="heading heading__sm">', '</h2>');?>
                                </div>
                            </div>
                        </a>
                <?php }
                wp_reset_postdata();
            }?>

        </div>
    </div>
</div><!--c-->


<?php get_footer();

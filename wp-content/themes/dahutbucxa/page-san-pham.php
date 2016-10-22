<?php 
	/*Template Name: Product Page*/


get_header();?>
    



    <!-- BEGIN MAIN CONTENT -->
    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <div class="content">
<div class="featured-carousel-wrapper">
            <div class="featured featured-carousel">
                
    <?php 
    $args = array(
        'post_type'         => 'san-pham',
        'post_status'       =>  'publish', 
        'orderby'           => 'post_date',
        'order'             => 'DESC',
        'posts_per_page'    => -1
    );
$query = new WP_Query($args);
if (  $query->have_posts() ) :
while ( $query->have_posts() ) : $query->the_post(); ?> 
                   
                  <div class="item">
                    <div class="post-likes">
                        <a href="<?php the_permalink() ?>">
                            <i class="fa fa-heart-o"></i>
                            <span>23</span>
                        </a>
                    </div>
                    <!-- /.post-likes -->
                    <div class="caption">
                        <p class="date"><span><?php echo number_format(get_post_meta( $post->ID, 'wpcf-gia', true ),0,',','.'); ?> VNĐ</span></p>
                        <h5 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                    </div>
                    <!-- /.caption -->
                    <a href="#fakelink"><?php echo get_the_post_thumbnail($post->ID,'thumb_360x240',array( 'class' => '' )); ?></a>
                </div>
                
                
    
<?php 
endwhile; 
endif;
wp_reset_query(); 
?>
                  
                
             <div class="clearfix"></div>   
            </div>
            <div class="clearfix"></div>   
            <!-- /.featured featured-carousel -->
        </div>
                    
                   
                </div>
                <!-- /.content -->
            </div>
           
        </div>
        <!-- /.row -->
    </div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php get_footer(); ?>
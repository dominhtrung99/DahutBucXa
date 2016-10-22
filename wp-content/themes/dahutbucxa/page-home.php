<?php 
	/*Template Name: Home Page*/

get_header(); ?>




    <!-- BEGIN MAIN CONTENT -->
    <div class="container">

        <!-- BEGIN FEATURED POST CAROUSEL -->
        <h3 class="large-heading"><span>SẢN PHẨM</span></h3>
        <div class="featured-carousel-wrapper">
            <div class="featured featured-carousel">
                
 <?php 
    $args = array(
        'post_type'         => 'san-pham',
        'post_status'       =>  'publish', 
        'orderby'           => 'post_date',
        'order'             => 'DESC',
        'posts_per_page'    => 6
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
        <!-- /.featured-carousel-wrapper -->
        <!-- END FEATURED POST CAROUSEL -->


        <div class="row">

            <div class="col-md-8">
                <div class="content">

                    <ul class="archive-list list-style">
                       
                       
                        <?php 
    $args = array(
        'post_type'         => 'post',
        'post_status'       =>  'publish', 
        'orderby'           => 'post_date',
        'order'             => 'DESC',
        'posts_per_page'    => 9
    );
$query = new WP_Query($args);
if (  $query->have_posts() ) :
while ( $query->have_posts() ) : $query->the_post(); ?>     
                            
                             
                               <li class="post-format gallery-post">
                            <div class="featured-img">
                                <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($post->ID,'thumb_400x266',array( 'class' => '' )); ?></a>
                            </div>
                            <!-- /.featured-img -->
                            <div class="caption">
                                <p class="category">
                                    <?php
                                 $cats = get_the_category( $post->ID) ;   
                                     foreach( $cats as  $cat){
                                    ?>
                                       <a href="<?php echo get_term_link($cat->term_id) ; ?>" rel="category tag"><?php echo $cat->name ?></a>
                                 <?php  } ?>
                                </p>
                                <h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                <p>
                                    <?php echo the_excerpt_max_charlength(160) ; ?>
                                </p>
                                
                            </div>
                            <!-- /.caption -->
                        </li>
                        <?php 
endwhile; 
endif;
wp_reset_query(); 
?>  
                    </ul>
                    <!-- /.archive-list -->

                    <!-- BEGIN NUMBERING PAGINATION -->
                    <nav class="centered-numbering-pagination">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">Xem thêm<i class="fa fa-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END NUMBERING PAGINATION -->

                </div>
                <!-- /.content -->
            </div>
            <!-- /.col-md-8 -->

            <?php  get_sidebar() ; ?>
            <!-- /.col-md-4 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- END MAIN CONTENT -->

    <?php get_footer(); ?>
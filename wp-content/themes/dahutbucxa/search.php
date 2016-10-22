<?php
get_header();?>
    <!-- BEGIN MAIN CONTENT -->
    <div class="container">

        <div class="row">

            <div class="col-md-8">
                <div class="content">

                    <ul class="archive-list list-style">
                       
                       
 <?php  if (have_posts())  :  while (have_posts()) : the_post(); ?>   
                            
                             
                               <li class="post-format gallery-post">
                            <div class="featured-img">
                                <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($post->ID,'thumb_400x266',array( 'class' => '' )); ?></a>
                            </div>
                            <!-- /.featured-img -->
                            <div class="caption">
                                <h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                <p>
                                    <?php echo the_excerpt_max_charlength(160) ; ?>
                                </p>
                                
                            </div>
                            <!-- /.caption -->
                        </li>
                <?php endwhile; 
                        ?>
                         <nav class="centered-numbering-pagination">
                       <?php  wp_pagenavi(); ;?>
                    </nav>
                       
                        <?php 
			else : ?>
                            <h2>Không tìm thấy!</h2>
                            <?php endif; ?> 
                    </ul>
                    <!-- /.archive-list -->

                    <!-- BEGIN NUMBERING PAGINATION -->
                   
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

    <?php get_footer(); ?>
<?php
get_header();?>
    <!-- BEGIN MAIN CONTENT -->
    <div class="container">

        <div class="row">

            <div class="col-md-8">
                <div class="content">
                    <div class="post-heading">
                        <p class="category">
                           <?php
                             $cats = get_the_category( $post->ID) ;   
                                 foreach( $cats as  $cat){
                                ?>
                                   <a href="<?php echo get_term_link($cat->term_id) ; ?>" rel="category tag"><?php echo $cat->name ?></a>
                             <?php  } ?>
                        </p>
                        <h2 class="post-title"><?php the_title(); ?></h2>
                    </div>
                   
                    <div class="post-detail-gallery-slideshow">
                    <?php 
                        $images = get_post_meta( $post->ID, 'wpcf-hinh-anh', false );
                        if(count($images) > 0){
                        foreach($images as $image){ ?>
                           <div class="item"><img src="<?php echo $image; ?>" alt="Image"></div> 
                       <?php  }
                        } else{
                            ?>
                            <div class="item"><?php echo get_the_post_thumbnail($post->ID,'large',array( 'class' => '' )); ?></div> 
                        <?php }
                        ?>
						</div><!-- /.featured featured-slideshow -->

                   <div class="post-meta-box">
							<div class="post-likes">
								<a href="#fakelink">
									<i class="fa fa-heart-o"></i>
									<span>23</span>
								</a>
							</div><!-- /.post-likes -->
							<p class="post-meta post-meta-price">
							Giá : <?php echo number_format(get_post_meta( $post->ID, 'wpcf-gia', true ),0,',','.'); ?>
							 VNĐ</p>
							<p class="share-icons">
								Share :
								<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-facebook"></i></a>
							</p>
						</div>
                    <?php the_content(); ?>
                    <div class="post-detail-sharing">
                         <div class="fb-like" data-href="<?php echo get_permalink($post->ID); ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                    </div>
                    <div class="post-detail-tags">
                            <p>
                            Tags : 
                            <?php 
                            $post_tags = wp_get_post_tags( $post->ID ) ;
                            foreach($post_tags as $post_tag){ ?>
                                <span><a href="<?php echo get_term_link($post_tag->term_id) ; ?>"><?php echo $post_tag->name; ?></a></span>
                            <?php } ?>
                            </p>
                    </div>
                    <?php 
                    $next_post = get_next_post();
                    $prev_post = get_previous_post();
                    ?>
                    <div class="row">
                    <?php if (!empty( $prev_post )): ?>
							<div class="col-sm-6">
								<div class="widget post-list-widget prev-next-posts">
									<h4 class="widget-heading">Bài trước</h4>
									<ul>
										<li>
											<div class="post-likes">
												<a href="#fakelink">
													<i class="fa fa-heart-o"></i>
													<span>23</span>
												</a>
											</div><!-- /.post-likes -->
											<div class="featured-img">
												<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo get_the_post_thumbnail($prev_post->ID,'thumb_169x169',array( 'class' => '' )); ?></a>
											</div><!-- /.featured-img -->
											<div class="caption">
												<p class="date"><span><?php echo get_the_date( 'd.m.Y', $prev_post->ID ); ?></span></p>
												<h5 class="post-title"><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a></h5>
											</div><!-- /.caption -->
										</li>
									</ul>
								</div><!-- /.widget post-list-widget -->
							</div><!-- /.col-sm-6 -->
							<?php endif ?>
							<?php if (!empty( $next_post )): ?>
							<div class="col-sm-6">
								<div class="widget post-list-widget prev-next-posts next-post">
									<h4 class="widget-heading">Bài tiếp theo</h4>
									<ul>
										<li>
											<div class="post-likes">
												<a href="#fakelink">
													<i class="fa fa-heart-o"></i>
													<span>23</span>
												</a>
											</div><!-- /.post-likes -->
											<div class="featured-img">
												<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_post_thumbnail($next_post->ID,'thumb_169x169',array( 'class' => '' )); ?></a>
											</div><!-- /.featured-img -->
											<div class="caption">
												<p class="date"><span><?php echo get_the_date( 'd.m.Y', $next_post->ID ); ?></span></p>
												<h5 class="post-title"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a></h5>
											</div><!-- /.caption -->
										</li>
									</ul>
								</div><!-- /.widget post-list-widget -->
							</div><!-- /.col-sm-6 -->
							<?php endif ?>
						</div>
                        <div class="widget about-widget post-author">
							<div class="avatar"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo_2.png" alt="Avatar"></div>
							<h5 class="name">@Đá hút bức xạ</h5>
							<p class="subtitle">Hotline: <a href="tel:0916785335">091 678 53 35</a><br />Chung cư B1, đường Trường Sa, P.17, Q.Bình Thạnh, HCM</p>
							<p>
							Đá thạch anh giúp chống bức xạ từ máy tính, smartphone, wifi, bảo vệ sức khỏe. Thạch anh là món quà tinh tế cho những người bạn yêu thương.
							</p>
							<div class="social-icon-links">
								<a target="_blank" href="https://www.facebook.com/dahutbucxa"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#fakelink"><i class="fa fa-instagram"></i></a>
                                <a target="_blank" href="#fakelink"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
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
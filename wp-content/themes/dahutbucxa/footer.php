
		<!-- BEGIN FOOTER -->
		<footer>
		
			<!-- BEGIN INSTAGRAM STATIC GALLERY -->
			<div class="instagram-static-gallery">
				 <?php 
    $args = array(
        'post_type'         => 'gallery',
        'post_status'       =>  'publish', 
        'orderby'           => 'rand',
        'posts_per_page'    => 8
    );
$query = new WP_Query($args);
if (  $query->have_posts() ) :
while ( $query->have_posts() ) : $query->the_post();
    $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
    $thumb_169x169 = wp_get_attachment_image_src($img_id, 'thumb_169x169');    
    $thumb_large = wp_get_attachment_image_src($img_id, 'large'); 
                
                ?>  
				
				<div class="item"><a class="imagelightbox" href="<?php echo $thumb_large[0]; ?>"><img src="<?php echo $thumb_169x169[0]; ?>" alt="<?php the_title(); ?>" /></a></div>
				       <?php 
endwhile; 
endif;
wp_reset_query(); 
?>
				
			</div><!-- /.instagram-static-gallery -->
			<!-- END INSTAGRAM STATIC GALLERY -->
			
			<!-- BEGIN FOOTER SOCIAL ICONS -->
			<div class="footer-social-icons">
				<div class="social-icons">
					<a target="_blank" href="https://www.facebook.com/dahutbucxa"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="#fakelink"><i class="fa fa-instagram"></i></a>
					<a target="_blank" href="#fakelink"><i class="fa fa-youtube"></i></a>
				</div><!-- /.social-icons -->
			</div><!-- /.footer-social-icons -->
			<!-- END FOOTER SOCIAL ICONS -->
			
			<div class="footer-copy">
										
<?php 
$defaults = array(
	'theme_location'  => 'extra-menu',
	'menu'            => '',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="footer-menu">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
			
?>
            <p>Hotline: <a href="tel:0916785335">091 678 53 35</a></p>
				<p>&copy; 2016 Đá Hút Bức Xạ. Designed by <a href="https://fb.com/dominhtrung">DT</a></p>
			</div><!-- /.footer-copy -->
		</footer>
		<!-- END FOOTER -->
		
	</div><!-- /.wrapper -->
	
	
	<!-- BEGIN BACK TO TOP -->
	<div class="back-to-top back-top">
		<i class="fa fa-chevron-up"></i>
	</div><!-- /.back-to-top -->
	<!-- END BACK TO TOP -->
	
	<script>
    jQuery( function()
    {
        jQuery( '.imagelightbox' ).imageLightbox({
            preloadNext:    true,                   // bool;            silently preload the next image
            enableKeyboard: true,                   // bool; 
        });
    });
</script>

    <!-- Required Javascript-->
     
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/TweenMax.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ScrollToPlugin.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/smooth-scrolling-mousewheel.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/imagelightbox.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/parallax.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/typed.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ameera.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
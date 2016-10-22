<?php 
	/*Template Name: Contact Page*/

get_header(); ?>
    <div class="wrapper service-page content-page contact-page">
        <div id="contentwrapper">
            <div class="pagewrapper">
                <div class="container">
                  
                       <h2 class="title" style="margin: 5px 0;text-transform: uppercase;color: #84C4C0;font-weight: 900;font-size: 30px;"><?php the_title(); ?></h2>
                      <div class="main-content" style="margin-top:15px">
                                 <?php the_content();?>
                                 <div class="social-contact">
                                     <h4 >Social: </h4><a href="https://www.facebook.com/Allure-Esthetic"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                 </div>
                          <div class="newsletter"><h4>Newsletter: </h4><?php
                          echo do_shortcode('[wysija_form id="2"]');
                          ?>
                          </div>
                         <div class="clearfix"></div>
                          </div>
                         <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>
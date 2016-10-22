<?php
get_header();?>
    <!-- BEGIN MAIN CONTENT -->
    <div class="container">

        <div class="row">

            <div class="col-md-8">
                <div class="content">

                     <?php the_content();?>
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
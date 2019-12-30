<?php get_header();?>
    <!--Main Slider-->
<?php if (have_posts()) : while (have_posts()):the_post();?>


    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2><?php the_title()?></h2>
                        <?php the_content();?>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-area">
                                <h2 class="page-header">Comments</h2>
                                <div class="comment-list">
                                    <?php comments_template();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php get_template_part('sidebar');?>
            </div>
        </div>
    </div>
    <?php endwhile;endif;?>
    <?php get_footer();?>
<?php
/*
 Template Name: Full Width
 */
get_header();?>
    <!--Main Slider-->
<?php if (have_posts()) : while (have_posts()):the_post();?>


    <!-- News / Blog section
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2><?php the_title()?></h2>
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;endif;?>
<?php get_footer();?>
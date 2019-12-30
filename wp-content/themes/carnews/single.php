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

<!--					<div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <div class="bio-info-area">-->
<!--                                <h4><span>Author : </span> <a href="http://localhost/mywordpress/blog/author/admin/" title="Posts by Ruhul amin" rel="author">Ruhul amin</a> <strong>Total post : 14</strong></h4>-->
<!--                                <img alt="" src="http://1.gravatar.com/avatar/42bb3bedeb706e06a38757a8126eb5e9?s=96&amp;r=g" srcset="http://1.gravatar.com/avatar/42bb3bedeb706e06a38757a8126eb5e9?s=96&amp;r=g 2x" class="avatar avatar-96 photo" width="96" height="96">                            -->
<!--                                <p>Now testing Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.</p>-->
<!--                                <div class="author-info">-->
<!--                                    <ul>-->
<!--                                        <li><a href="#">View Author All Post</a> </li>-->
<!--                                        <li><a href="http://www.twitter.com/ruhul2s">Twitter</a> </li>-->
<!--                                        <li><a href="http://www.facebook.com/ruhul2s">Facebook</a> </li>-->
<!--                                        <li><a href="http://www.googlePlus.com/ruhul2s">Google Plus</a> </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
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
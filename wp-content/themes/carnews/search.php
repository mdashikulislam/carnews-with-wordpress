<?php get_header();?>
<!-- News / Blog section
   ============================================= -->
<div id="news-area" class="section-gray pdb-28 news-section-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                <h1 class="headbar">Your Keyword : <span><?php _e('');echo $s;?></span> Results are bellow </h1>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                <div class="row">
                    <?php if (have_posts()) : while (have_posts()):the_post();?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('feature-image',array('class'=>'img-responsive transition7s'))?></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> <?php the_author();?></li>
                                                <li><i class="fa fa-calendar"></i><?php the_time('M d, Y');?> </li>
                                                <li><i class="fa fa-comment"></i> <?php comments_popup_link('No Comment »','1 Comment »','% Comments »');?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?> </a></h3>
                                        <div class="text-des">
                                            <?php the_excerpt();?>
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                            <a class="btn btn-primary transition7s" href="<?php the_permalink();?>"><i class="fa fa-calendar"></i> <?php the_time('M d, Y');?></a>
                                        </div>
                                        <div class="pull-right">
                                            <a class="btn btn-primary transition7s" href="<?php the_permalink();?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;else:?>
                        <p><?php esc_html_e("Sorry no post math in your criteria");?></p>
                    <?php endif;?>


                    <div class="col-md-12">
                        <?php the_posts_pagination(array('class'=>'pagination-area tac'));?>

                    </div>
                </div>
            </div>
            <?php get_template_part('sidebar');?>
        </div>
    </div>
</div>
<?php get_footer()?>

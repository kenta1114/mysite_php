<?php get_header(); ?>
        <div id="main" class="container">
            <div id="posts">


                <?php
                if(have_post()):
                    while(have_posts()):
                        the_post();
                ?>

                 <div class="post">
                    <div class="post-header"></div>
                         <h2>
                            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="post-meta">
                            <?php echo get_the_date();?> 【<?php the_category(',');?> 】
                         </div>
                    </div>
                        <div class="post-content">
                                <?php the_content(); ?>
                        </div>
                </div><!-- /post -->

                <div class="navigation">
                    <div class="prev"><?php previous_posts_link(); ?></div>
                    <div class="next"><?php next_posts_link(); ?></div>
                </div>


                <?php
                    endwhile;
                else:
                ?>

                <p>記事はありません!</p>

                <?php      
                endif;
                ?>

            </div>
            <?php get_sidebar(); ?>
        </div>
<?php get_footer(); ?>
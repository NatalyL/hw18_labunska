<?php get_header(); ?>
    <div class="container">
        <div class="clearfix m-page">
            <div class="blog-post">
                <?php

                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <?php the_post_thumbnail(); ?>

                        <article class="post">
                            <h2><?php the_title(); ?></h2>

                            <p><?php the_content(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="more">Continue Reading</a>
                        </article>

                    <?php endwhile;

                else:
                    echo '<p>No content found</p>';

                endif;
                ?>
            </div>
            <div class="sidebar">
                <?php dynamic_sidebar('sidebar1'); ?>
            </div>
        </div>
        <div class="links clearfix">
            <a href="#" class="prev"><span class="fa fa-long-arrow-left"></span>Previous</a>
            <a href="#" class="next">Next<span class="fa fa-long-arrow-right"></span></a>
        </div>
    </div>
<?php get_footer(); ?>
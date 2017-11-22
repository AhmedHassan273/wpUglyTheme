<?php get_header(); ?>
<div class="container">
    <div class="main">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <article class="newPost">
                    <h2>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                        </a>
                    </h2>
                    <div class="meta">
                        Created By <a href="<?php get_author_posts_url(get_the_author_link); ?>"><?php the_author();?></a> On <?php the_time(); echo ' '; the_date('Y');?>
                    </div>
                    <?php if(has_post_thumbnail()): ?> 
                        <div class="thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="button">
                        Read More
                    </a>
            </article>
                <?php
            endwhile;
            else :
                echo wpautop( 'Sorry, no posts were found' );
            endif;
            ?>
    </div>
    <div class="sidebar">
            <?php if(is_active_sidebar('sidebar')) {
                dynamic_sidebar('sidebar');
            } 
            ?>
    </div>
    <div class="clr"></div>
</div>
<?php get_footer(); ?>
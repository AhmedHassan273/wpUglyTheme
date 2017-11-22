<?php get_header(); ?>
<div class="container">
    <div class="main">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <article class="newPost">
                    <h2>
                        <?php the_title(); ?>                     
                    </h2>
                    <?php if(has_post_thumbnail()): ?> 
                        <div class="thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <p><?php the_content(); ?></p>
            </article>
                <?php
            endwhile;
            else :
                echo wpautop( 'Sorry, no posts were found' );
            endif;
            ?>
    </div>
</div>
<?php get_footer(); ?>
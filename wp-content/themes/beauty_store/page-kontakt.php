
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-4">
            <?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
                <!-- post -->
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>

            <?php endwhile; ?>
                <!-- post navigation -->
            <?php else: ?>
                <!-- no posts found -->
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
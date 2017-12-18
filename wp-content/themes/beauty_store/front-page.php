<?php get_header(); ?>

    <section>
        <div class="container">

            <ul class="slider">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- post -->
                    <li class="slide" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'full')); ?>); height: 500px; background-size: cover; background-repeat: no-repeat">

                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>

                        <button><a href="">SPRAWDŹ OFERTĘ</a></button>

                    </li>
                <?php endwhile; ?>
                    <!-- post navigation -->
                <?php else: ?>
                    <!-- no posts found -->
                <?php endif; ?>
            </ul>

        </div>
    </section>


<section id="mainInfo">

    <div class="infoContent">

        <div class="delivery">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delivery.svg" alt="delivery" height="80px" width="80px">
            <h6>SZYBKA DOSTAWA</h6>
            <p>DARMOWA PRZESYŁKA OD 200ZŁ</p>
        </div>

        <div class="guarantee">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/warranty.svg" alt="guarantee" height="80px" width="80px">
            <h6>GWARANCJA ZWROTU DO 30 DNI </h6>
        </div>

        <div class="support">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/support.svg" alt="headphones" height="80px" width="80px">
            <h6>INFOLINIA: 501 101 101 </h6>
            <p> OD PN DO PT, 9 - 17</p>
        </div>

    </div>

</section>


    <section id="topProducts">

        <h6>Nowości</h6>

        <div class="newProductsLoop">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //paginacja
            $qry	=	new	WP_Query([
                'post_type'	=>	'product',
                'paged' => $paged,
                'posts_per_page' => 4
            ]);
            ?>

            <?php	if	($qry->have_posts()	)	:
                while	($qry->have_posts()	)	:
                    $qry->the_post();	?>


                    <?php	woocommerce_get_template_part( 'content', 'product' );	?>


                <?php endwhile;	?>

            <?php else:	?>

            <?php endif; ?>
        </div>




        <h6>Bestsellery</h6>

        <div class="newProductsLoop">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 4;
            $qry	=	new	WP_Query([
                'post_type'	=>	'product',
                'paged' => $paged,
                'posts_per_page' => 4
            ]);
            ?>

            <?php	if	($qry->have_posts()	)	:
                while	($qry->have_posts()	)	:
                    $qry->the_post();	?>


                    <?php	woocommerce_get_template_part( 'content', 'product' );	?>


                <?php endwhile;	?>

            <?php else:	?>

            <?php endif; ?>
        </div>


        <h6>Wyprzedaż</h6>

        <div class="newProductsLoop">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 6;
            $qry	=	new	WP_Query([
                'post_type'	=>	'product',
                'paged' => $paged,
                'posts_per_page' => 4
            ]);
            ?>

            <?php	if	($qry->have_posts()	)	:
                while	($qry->have_posts()	)	:
                    $qry->the_post();	?>


                    <?php	woocommerce_get_template_part( 'content', 'product' );	?>


                <?php endwhile;	?>

            <?php else:	?>

            <?php endif; ?>
        </div>

    </section>


<?php get_footer(); ?>
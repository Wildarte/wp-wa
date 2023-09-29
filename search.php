<?php get_header(); ?>
    
    <main>
        
        <section class="">
            <div class="container header_post_page head_default">
                <h1 class="color-white">Pesquisa por: <span><?= get_search_query() ?></span></h1>
            </div>
        </section>

        <section class="container p-10">
            <div class="hr-gray"></div>
        </section>

        <section class="">
            <section class="container list_post_simple d-flex">

                <?php

                    if(have_posts()):
                        while(have_posts()):
                            the_post();

                ?>

                <article class="card_post_simple">
                    <a href="<?= get_the_permalink(); ?>">
                        <?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>

                        <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="<?= get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>" title="<?= get_the_title($post_thumbnail_id); ?>">
                        
                    </a>

                    <h3><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>

                    <p><?= get_the_excerpt(); ?></p>
                </article>

                <?php endwhile; endif; ?>
                
            </section>

            <div class="container more_post">
            <?php

                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => __( 'Anterior', 'textdomain' ),
                    'next_text' => __( 'Próximo', 'textdomain' ),
                ) );

            ?>
            </div>

        </section>
    </main>

<?php get_footer(); ?>
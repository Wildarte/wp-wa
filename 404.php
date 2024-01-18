<?php get_header(); ?>


<main>
    <section>
        <div class="container">
            <section class="head_archive">
                <div class="container header_post_page head_default">
                    <h1 class="color-white">Erro: <strong>404</strong></h1>
                </div>
            </section>
            <div class="content_post">
                <h4 class="p-10">Não econtramos conteúdo nessa página, mas encontramos o seguinte conteúdo para você!</h4>
            </div>
            <section class="container list_post_simple d-flex">

                <?php

                    $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    ];

                    $results = new WP_Query($args);

                    if($results->have_posts()):
                        while($results->have_posts()):
                            $results->the_post();

                ?>

                <article class="card_post_simple">
                    <a href="<?= get_the_permalink(); ?>">
                        <?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>

                        <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="<?= get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>" title="<?= get_the_title($post_thumbnail_id); ?>">
                        
                    </a>

                    <h3><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>

                    <p><?= get_the_excerpt(); ?></p>
                </article>

                <?php endwhile; endif; wp_reset_postdata(); ?>

                
            </section>

            <div class="container more_post d-flex">
                <a href="<?= home_url() ?>/blog">Ver todos</a>
            </div>

        </div>
    </section>
</main>


<?php get_footer(); ?>
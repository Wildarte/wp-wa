<?php get_header();
//Template Name: Home
?>
    
    <main>
        <section class="section_hero">

            <?php 
                
                $post_destaque = get_field('post_destaque');
                $post_destaque2 = get_field('post_destaque_2');

                if(!empty($post_destaque) && !empty($post_destaque2)):

                    $args = [
                        'post_type' => 'post',
                        'post__in' => [$post_destaque->ID, $post_destaque2->ID]
                    ];

                    $results = new WP_Query($args);

                    if($results->have_posts()):
                        
            
            ?>
            <section class="container d-flex container_hero">

                <?php
                    while($results->have_posts()):
                        $results->the_post();
                ?>
    
                <article class="card_post_destaque">
                    <a href="<?= get_the_permalink(); ?>">
                        <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                    </a>

                    <h2><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h2>


                    <div class="list_cat_post">
                        <?php

                            $categories = get_the_tags();

                            ?>
                            <ul class="list_cat_post">
                            <?php

                            if ($categories) {
                                echo '<ul class="lista-de-categorias">';
                                foreach ($categories as $category) {
                                    echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </ul>
                    </div>

                </article>

                <?php endwhile;  ?>

                <!-- 
                <article class="card_post_destaque">
                    <a href="">
                        <img src="https://cdn.pixabay.com/photo/2018/01/17/20/22/analytics-3088958_1280.jpg" alt="">
                    </a>

                    <h2><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a></h2>

                    <div class="list_cat_post">
                        <ul>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">XAMPP</a></li>
                            <li><a href="#">Linux</a></li>
                        </ul>
                    </div>
                   
                </article>
                 -->

                
            </section>

            <?php endif; endif; wp_reset_postdata(); ?>
        </section>

        <section class="container p-10">
            <div class="hr-gray"></div>
        </section>

        <section class="">
            <section class="container list_post_simple d-flex">

                <?php

                    $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 9
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

        </section>
    </main>

    <?php get_footer();?>
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<main>
    <section>
        <div class="container">
            <header class="content_post">
                <h2><?= get_the_title() ?></h2>
            </header>
            <div class="content_post p-10">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
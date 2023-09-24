<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<main>
    <section>
        <div class="container">
            <header>
                <?php the_title() ?>
            </header>
            <div class="content_post">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
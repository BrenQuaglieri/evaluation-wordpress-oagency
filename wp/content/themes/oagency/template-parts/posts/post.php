<?php get_header(); ?>
<section class="container col-12">
    <article class="fullarticle col-4">
        <header>
            <h1><?php the_title(); ?> <span>écrit par <?php the_author(); ?></span></h1>
        </header>
        <main>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="col-12">
            <p><?php the_content(); ?></p>
        </main>
    </article>
</section>
<?php get_footer();?>

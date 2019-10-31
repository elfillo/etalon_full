<?php get_header();?>
    <div class="page--projects">
        <section class="banner">
            <div class="title"><?php the_title()?></div>
            <p class="excerpt">
                <?php the_excerpt()?>
            </p>
        </section>
        <section class="gallery">
            <?php the_content()?>
        </section>
    </div>
<?php get_footer();?>
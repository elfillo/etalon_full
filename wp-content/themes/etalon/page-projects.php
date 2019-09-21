<?php get_header();?>
    <div class="page--projects">
        <section class="banner">
            <div class="title"><?php the_title()?></div>
            <p class="excerpt"><?php the_excerpt()?>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </section>
        <section class="gallery">
            <?php the_content()?>
        </section>
    </div>
<?php get_footer();?>
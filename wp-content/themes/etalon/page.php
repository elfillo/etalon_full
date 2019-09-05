<?php get_header(); ?>
    <div class="container">
        <h2><?php the_title()?></h2>
        <br />
        <section>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </section>
        <br />
    </div>
<?php get_footer(); ?>
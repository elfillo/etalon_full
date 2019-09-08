<?php get_header()?>
    <section class="sale--banner">
        <div class="container flex">
            <div class="sidebar">
                <div class="sidebar_menu">
                    <?php wp_nav_menu(array('theme_location'=>'cat_catalog', 'menu_class'=>'sidebar_menu--list') );?>
                </div>
            </div>
            <div class="content">
                <div class="title">ЭТАЛОН</div>
            </div>
        </div>
    </section>
    <div class="container flex">
        <div class="sidebar"></div>
        <div class="content">
            <div class="title">
                “Тот случай, когда название
                говорит само за себя.”
            </div>
            <div>
                <p>
                    В переводе с французского «эталон» - образец, мерило, особая форма идеала, которому должно подражать. Наш мебельный центр – это «Эталон» мебельной моды.

                    Почему мы так уверенно заявляем об этом? Потому что об этом говорят наши покупатели!
                </p>
            </div>
        </div>
    </div>

<?php get_footer()?>

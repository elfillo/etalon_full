    <section class="map" id="map"></section>
    <footer class="footer">
        <div class="container">
            <div class="logo"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo"></div>
            <?php
                function getMenuName($location){
                    $menu_location = $location;
                    $menu_locations = get_nav_menu_locations();
                    $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
                    $menu_name = (isset($menu_object->name) ? $menu_object->name : '');
                    return esc_html($menu_name);
                }
            ?>
            <div class="footer--menu">
                <div class="footer--menu__column">
                    <div class="footer--menu__title"><?php echo getMenuName('Footer_col_1')?></div>
                    <?php wp_nav_menu(array('theme_location'=>'Footer_col_1', 'menu_class'=>'footer--menu__list') );?>
                </div>
                <div class="footer--menu__column">
                    <div class="footer--menu__title"><?php echo getMenuName('Footer_col_2')?></div>
                    <?php wp_nav_menu(array('theme_location'=>'Footer_col_2', 'menu_class'=>'footer--menu__list') );?>
                </div>
                <div class="footer--menu__column">
                    <div class="footer--menu__title"><?php echo getMenuName('Footer_col_3')?></div>
                    <?php wp_nav_menu(array('theme_location'=>'Footer_col_3', 'menu_class'=>'footer--menu__list') );?>
                </div>
                <div class="footer--menu__column">
                    <div class="footer--menu__title">Наши соцсети:</div>
                    <div class="socials">
                        <a href="https://vk.com/etalon_irk" target="_blank" class="item"><img src="<?php echo get_template_directory_uri() ?>/img/icons/vk.png" alt="#"></a>
                        <a href="https://www.facebook.com/groups/etalonirk/" target="_blank" class="item"><img src="<?php echo get_template_directory_uri() ?>/img/icons/fb.png" alt="#"></a>
                        <a href="https://www.instagram.com/etalon_irkutsk/" target="_blank" class="item"><img src="<?php echo get_template_directory_uri() ?>/img/icons/inst.png" alt="#"></a>
                    </div>
                    <div class="callback">
                        <div class="title">Хочу обратный звонок!</div>
                        <div class="callback_form">
                            <input type="tel" placeholder="Введите номер телефона">
                            <input type="submit" value="Ok!">
                        </div>
                        <div class="info">
                            <a href="tel:+73952707131">8 (3952) 707-131</a>
                            <span>(c 10:00 до 19:00)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGO73JZuXDz8xt_zvygl0FreR9cfQ9THE&callback=initMap"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(54914854, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/54914854" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <?php wp_footer(); ?>
</body>
</html>

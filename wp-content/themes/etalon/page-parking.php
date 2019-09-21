<?php get_header();?>
    <div class="page--parking">
        <section class="banner">
            <div class="title"><?php the_title()?></div>
        </section>
        <section class="content">
            <div class="title">
                “Выбирайте мебель.
                Об остальном мы
                позаботились.”
            </div>
            <div class="map"></div>
            <div class="flex flex_sb">
                <div class="parking--column">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/parking_1.png" alt="#">
                    </div>
                    <div class="title">Бесплатная 2-х
                        часовая парковка</div>
                    <div class="desc">
                        <p>МЦ «Эталон» заботится не только о том, чтобы Вы смогли найти нужную Вам мебель, но и о том, чтобы, зайдя в мебельный центр, Вы не беспокоились о сохранности своего автомобиля.</p>

                        <p>Поэтому к Вашим услугам имеется закрытая автоматизированная парковка, оборудованная системой видеонаблюдения. Для удобного и неспешного выбора мебели мы сделали парковку бесплатной на 2 часа.</p>
                    </div>
                </div>
                <div class="parking--column">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/parking_2.png" alt="#">
                    </div>
                    <div class="title">Круглосуточная
                        платная стоянка</div>
                    <div class="desc">
                        <p>Удобная, просторная, асфальтированная стоянка для жителей ближайших домов!</p>

                        <p>Территория огорожена забором, въезд через шлагбаум.</p>

                        <p>Машиноместо: 3*6 м. (18 м2)</p>


                        <p><span>Оплата: 3000 руб/мес</span></p>
                    </div>
                </div>
                <div class="parking--column">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/parking_3.png" alt="#">
                    </div>
                    <div class="title">Возможна почасовая
                        оплата</div>
                    <div class="desc">
                        <p>первые 2 часа бесплатно, третий час — 30 руб, последующие — 15 руб.</p>

                        <p><span>Телефон КПП: +7 984 279 8708, круглосуточно</span></p>
                    </div>
                </div>
            </div>
            <div class="parking--button">
                <div class="btn btn--full btn--dark">Хочу арендовать парковку!</div>
            </div>
            <div class="parking--pic"></div>
        </section>
    </div>
<?php get_footer();?>
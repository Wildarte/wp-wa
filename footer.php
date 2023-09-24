
    <footer class="footer">
        <div class="container content_footer d-flex">
            <div class="col_footer">
                <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                    if (has_custom_logo()) {
                        echo '<a href="' . esc_url(home_url('/')) . '" rel="home"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
                    } else {
                        echo '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
                    }
                ?>
            </div>
            <div class="col_footer">
                <h4>Menu</h4>

                <?php

                    wp_nav_menu(array(
                        'theme_location' => 'menu-rodape',
                        'menu_class' => 'menu',
                        'container' => false,
                    ));

                ?>
            </div>
            <div class="col_footer">
                <h4>Categorias</h4>

                <?php

                    wp_nav_menu(array(
                        'theme_location' => 'menu-rodape2',
                        'menu_class' => 'menu',
                        'container' => false,
                    ));

                ?>
            </div>
            <div class="col_footer">
                <ul>
                    <li><a href="">Políticas de Privacidade</a></li>
                </ul>
            </div>
        </div>
        <div class="bottom_footer">
            <p>© Todos os direitos reservados - por <a href="#">wildarte.com.br</a></p>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
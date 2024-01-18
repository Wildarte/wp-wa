<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post();  ?>
    <main>
        <section class="header_post_page" style="background-image: url(<?= get_the_post_thumbnail_url(null, 'head_post_top') ?>);">
            <div class="container content_header_post_page">
                <h1><?= get_the_title() ?></h1>
            </div>
        </section>

        <section class="body_page_post">
            <div class="container d-flex header_post">

                <div class="left_content d-flex">
                    <div class="header_post">
                        <h2><?= get_the_title() ?></h2>

                        <div class="info_header_post">
                            <?php
                                $user = wp_get_current_user();
                            ?>
                            <span class="user_post"><i class="bi bi-person"></i>  &nbsp;<?= $user->user_nicename; ?></span>

                            <?php

                                $categories = get_the_category();

                                // Verifica se há categorias
                                if (!empty($categories)) {
                                    echo '<ul>';
                                    foreach ($categories as $category) {
                                        echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo 'Nenhuma categoria encontrada.';
                                }

                            ?>

                            <span class="date_post"><i class="bi bi-calendar"></i> &nbsp;<?= get_the_date(`j F Y`) ?></span>
                        </div>

                        <img src="<?= get_the_post_thumbnail_url(null, 'head_post') ?>" alt="">
                    </div>

                    <div class="share_post">

                    </div>

                    <div class="content_post">

                        <?php the_content() ?>

                        <p>Com o aumento do uso de dispositivos móveis para acessar a internet, é crucial que os desenvolvedores testem seus sites em diferentes plataformas, navegadores e dispositivos para prever possíveis incompatibilidades e para garantir que eles funcionem corretamente para todos os usuários. Se você deseja testar seu site no iPhone e no Safari, mas não possui um iPhone, existem diversas opções disponíveis.</p>

                        <p>Essa dificuldade vem do fato de muitos desenvolvedores que trabalham com Windows ou Linux não possuírem um dispositivo iPhone para testar a compatibilidade dos seus seus projetos. O ideal mesmo seria possuir um iPhone, mas caso você não tenha existem algumas alternativas para driblar essa barreira.</p>

                        <img src="https://media.istockphoto.com/id/1156946229/vector/5g-superspeed-data-channel-wireless-speed-loop-connect-particle-motion-trails.webp?b=1&s=612x612&w=0&k=20&c=jf03jzsAB8DpkUVk_ITuHXhSVXFzTLVYifoIGSmx_Uc=" alt="">

                        <pre class="wp-block-code"><code>sudo apt update</code></pre>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, eius quis. Sed itaque illo quaerat a eveniet, aliquam sapiente esse, consequatur ipsa inventore commodi officia nulla iste eius cum iure?</p>

                        <pre class="wp-block-code"><code>sudo apt install git</code></pre>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium natus exercitationem, itaque illum rem cupiditate! Praesentium reiciendis, assumenda accusantium sint molestiae minima perferendis doloribus voluptas nobis cupiditate est aut quisquam animi libero, explicabo fugiat corrupti suscipit magni asperiores itaque temporibus a ipsam. Maxime non explicabo accusantium iste architecto a sit perferendis quas aliquam nisi provident, debitis voluptate delectus, placeat saepe ipsam. Voluptatum nihil fugit nesciunt labore. Ratione ipsa aliquam voluptatum.</p>

                        <pre class="wp-block-code"><code>git config --global user.email "email@address.com"</code></pre>

                        <pre class="wp-block-code"><code><script>const add = document.querySelectorAll('add');</script></code></pre>

                        <pre class="wp-block-code"><code>
                            &lt;script&gt;
                                $(document).ready(function(){
                                    $('#telefone').inputmask('(99) 99999-9999')
                                })
                            &lt;/script&gt;</code>
                        </pre>

                        <figure class="wp-block-table"><table><thead><tr><th>Requiremento</th><th>Mínimo</th><th>Recomendado</th></tr></thead><tbody><tr><td>RAM</td><td>2 GB</td><td>8 GB RAM</td></tr><tr><td>CPU</td><td>Qualquer CPU moderno</td><td>CPU multi-core. PhpStorm suporta multithreading para diferentes operações e processos, tornando-o mais rápido quanto mais núcleos de CPU puder usar.</td></tr><tr><td>Espaço de disco</td><td>3.5 GB</td><td>SSD com pelo menos 5 GB de espaço livre</td></tr><tr><td>Resolução monitor</td><td>1024×768</td><td>1920×1080</td></tr><tr><td>Sistema operacional</td><td>Versões de 64 bits lançadas oficialmente do seguinte:Microsoft Windows 10 1809 ou posteriorWindows Server 2019 ou posteriormacOS 10.15 ou posteriorQualquer distribuição Linux compatível com Gnome, KDE ou Unity DE.PhpStorm não está disponível para distribuições Linux que não incluem&nbsp;GLIBC&nbsp;2.27 ou mais tarde.Versões de pré-lançamento não são suportadas.</td><td>Versão mais recente de 64 bits do Windows, macOS ou Linux (por exemplo, Debian, Ubuntu ou RHEL)</td></tr></tbody></table></figure>

                        <ul>
                            <li><strong>Ambiente completo de desenvolvimento</strong>: Muitos programadores PHP não trabalham apenas com essa linguagem, eles trabalham com HTML, CSS e Javascript. O PHPStorm oferece suporte para essas tecnologias</li>
                            <li><strong>Suporte para múltiplos Frameworks</strong>: O PHPStorm é a escolha perfeita para trabalhar com os principais frameworks PHP, ele permite a integração com os mais populares frameworks PHP como <strong>Laravel, CakePHP, Symfony2, e Yii</strong>.</li>
                            <li><strong>Integração Git e GitHub:</strong> PHPStorm oferece suporte para muitos sistemas de controle de versão, incluindo Git e GitHub.</li>
                            <li><strong>Suporte a banco de dados:</strong> PHPStorm oferece ferramentas e funcionalidades para se trabalhar com SQL e banco de dados nos seus projetos.</li>
                            <li><strong>Debugging and Testing</strong>: A depuração de configuração zero facilita a depuração do seu código PHP. PhpStorm oferece muitas opções para depuração de código com Visual Debugger, permitindo inspecionar variáveis ​​e inspeções definidas pelo usuário.</li>
                        </ul>

                        <h2>H2 Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>

                        <h3>h3 Lorem ipsum dolor sit amet consectetur adipisicing.</h3>

                        <h4>h4 Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>

                        <h5>h5 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non.</h5>

                        <h6>h6 Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, nihil ipsam!</h6>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="">Commodi amet, inventore eaque</a> in adipisci consectetur, quidem qui maxime nisi pariatur blanditiis, molestias sit aut. Facilis obcaecati neque in nostrum dolorum.</p>

                        <table><thead><tr><th>Requiremento</th><th>Mínimo</th><th>Recomendado</th></tr></thead><tbody><tr><td>RAM</td><td>2 GB</td><td>8 GB RAM</td></tr><tr><td>CPU</td><td>Qualquer CPU moderno</td><td>CPU multi-core. PhpStorm suporta multithreading para diferentes operações e processos, tornando-o mais rápido quanto mais núcleos de CPU puder usar.</td></tr><tr><td>Espaço de disco</td><td>3.5 GB</td><td>SSD com pelo menos 5 GB de espaço livre</td></tr><tr><td>Resolução monitor</td><td>1024×768</td><td>1920×1080</td></tr><tr><td>Sistema operacional</td><td>Versões de 64 bits lançadas oficialmente do seguinte:Microsoft Windows 10 1809 ou posteriorWindows Server 2019 ou posteriormacOS 10.15 ou posteriorQualquer distribuição Linux compatível com Gnome, KDE ou Unity DE.PhpStorm não está disponível para distribuições Linux que não incluem&nbsp;GLIBC&nbsp;2.27 ou mais tarde.Versões de pré-lançamento não são suportadas.</td><td>Versão mais recente de 64 bits do Windows, macOS ou Linux (por exemplo, Debian, Ubuntu ou RHEL)</td></tr></tbody></table>

                    </div>
                    <div class="hr-gray m-20-0"></div>
                    <section class="">
                        <section class="container list_post_simple_single d-flex">

                        <?php
                            // Obtém as categorias do post atual
                            $categories = get_the_category();

                            if (!empty($categories)) {
                                $category_ids = array(); // Array para armazenar os IDs das categorias

                                // Obtém os IDs das categorias
                                foreach ($categories as $category) {
                                    $category_ids[] = $category->term_id;
                                }

                                // Configura os argumentos da consulta para listar posts na(s) categoria(s) do post atual
                                $args = array(
                                    'post_type' => 'post', // Tipo de post que você deseja listar
                                    'posts_per_page' => 5, // Número de posts para listar (ajuste conforme necessário)
                                    'category__in' => $category_ids, // IDs das categorias
                                    'post__not_in' => array(get_the_ID()), // Exclui o post atual da lista
                                    'posts_per_page' => 2
                                );

                                // Realiza a consulta
                                $related_posts_query = new WP_Query($args);

                                // Loop para exibir os posts relacionados
                                if ($related_posts_query->have_posts()) {
                                    echo '<h3>Posts Relacionados</h3>';
                                    while ($related_posts_query->have_posts()) {
                                        $related_posts_query->the_post();
                                        

                        ?>

                        <article class="card_post_simple">
                            <a href="<?= get_the_permalink(); ?>">
                                <?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>

                                <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="<?= get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>" title="<?= get_the_title($post_thumbnail_id); ?>">
                                
                            </a>

                            <h3><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>

                            <p><?= get_the_excerpt(); ?></p>
                        </article>

                        <?php     }
                                    
                                }

                                wp_reset_postdata();
                            } else {
                                echo 'Este post não tem categorias.';
                            }
                        ?>

                        </section>

                        <div class="container more_post">
                        <?php

                        the_posts_pagination( array(
                            'mid_size' => 2,
                            'prev_text' => __( 'Anterior', 'textdomain' ),
                            'next_text' => __( 'Próximo', 'textdomain' ),
                        ) );

                        ?>
                        </div>
                    </section>
                </div>

                <div class="right_sidebar">
                    <div class="content_right_sidebar">
                    <?php 
                        
                        if(is_active_sidebar('barra-lateral')):
                            dynamic_sidebar('barra-lateral');
                        endif;

                    ?>
                    </div>
                   
                </div>
                
            </div>

        </section>

    </main>

<?php endwhile; endif; ?>

    <script>
        
        function copiarTexto(el) {
            var elemento = document.getElementById('test-code');
            var texto = elemento.innerText;

            navigator.clipboard.writeText(texto)
                .then(() => console.log('Texto copiado com sucesso.'))
                .catch(console.error);
        }

        const codes = document.querySelectorAll('.content_post .wp-block-code');

        codes.forEach((item) => {

            let head_code = document.createElement('div')
            head_code.classList.add('head_code');

            head_code.innerHTML = '<button><i class="bi bi-clipboard"></i> Copy</button>';

            item.append(head_code);

            item.addEventListener('click', () => {

                console.log(item.querySelector('code').innerHTML);

                var elemento = item.querySelector('code');
                var texto = elemento.innerText;

                navigator.clipboard.writeText(texto)
                    .then(() => {

                        codes.forEach((item2) => {
                            item2.querySelector('i').classList.remove('bi-clipboard-check-fill');
                            item2.querySelector('i').classList.add('bi-clipboard');
                        })
                        item.querySelector('i').classList.replace('bi-clipboard','bi-clipboard-check-fill') 
                    })
                    .catch(console.error);
            })

        });
    </script>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post();  ?>
    <main>
        <section class="header_post_page" style="background-image: url(https://cdn.pixabay.com/photo/2020/02/03/20/49/technology-4816658_1280.jpg);">
            <div class="container content_header_post_page">
                <h1><?= get_the_title() ?></h1>
            </div>
        </section>

        <section class="body_page_post">
            <div class="container d-flex header_post">

                <div class="f-70 left_content">
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

                        <img src="https://cdn.pixabay.com/photo/2020/02/03/20/49/technology-4816658_1280.jpg" alt="">
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

                    </div>
                </div>

                <div class="f-30 left_sidebar">
                    <?php 
                        
                        if(is_active_sidebar('barra-lateral')):
                            dynamic_sidebar('barra-lateral');
                        endif;

                    ?>
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
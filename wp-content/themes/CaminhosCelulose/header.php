<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">    
	<?php wp_head(); ?>
</head>

<body>

    <nav id="menu" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>/">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_caminhos_da_celulose.svg" alt="" class="img-fluid">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <?php
                function pagina_publicada($slug) {
                    $page = get_page_by_path($slug);
                    return ($page && $page->post_status === 'publish');
                }

                $rodovia_itens = [
                    'a-rodovia'        => 'A Rodovia',
                    'pedagios'         => 'Pedágios',
                    'pesos-dimensoes'  => 'Pesos e Dimensões',
                    'acessos'          => 'Acessos',
                    'atracoes'         => 'Atrações',
                ];

                $rodovia_publicadas = array_filter(array_keys($rodovia_itens), 'pagina_publicada');
                $rodovia_active = !empty($rodovia_publicadas) && is_page($rodovia_publicadas);
                ?>
                
                <ul class="navbar-nav align-items-center">
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page('inicial') ? 'active' : ''; ?>" href="<?php bloginfo('url'); ?>/">Home</a>
                    </li>

                    <?php if (pagina_publicada('quem-somos')) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page('quem-somos') ? 'active' : ''; ?>" href="<?php bloginfo('url'); ?>/quem-somos">Quem Somos</a>
                    </li>
                    <?php endif; ?>
                        
                    <?php if (!empty($rodovia_publicadas)) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $rodovia_active ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown">
                            Rodovia
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($rodovia_itens as $slug => $titulo) : ?>
                                <?php if (pagina_publicada($slug)) : ?>
                                <li>
                                    <a class="dropdown-item <?php echo is_page($slug) ? 'active' : ''; ?>" href="<?php bloginfo('url'); ?>/<?php echo $slug; ?>">
                                        <?php echo $titulo; ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <?php if (pagina_publicada('boletins')) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page('boletins') ? 'active' : ''; ?>" href="<?php bloginfo('url'); ?>/boletins">Boletins</a>
                    </li>
                    <?php endif; ?>

                    <?php if (pagina_publicada('mapa')) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page('mapa') ? 'active' : ''; ?>" href="<?php bloginfo('url'); ?>/mapa">Mapa</a>
                    </li>
                    <?php endif; ?>

                    <?php if (pagina_publicada('obras')) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page('obras') ? 'active' : ''; ?>" href="<?php bloginfo('url'); ?>/obras">Obras</a>
                    </li>
                    <?php endif; ?>

                    <?php
                    $page_for_posts_id = get_option('page_for_posts');
                    $page_for_posts_status = $page_for_posts_id ? get_post_status($page_for_posts_id) : false;
                    $page_for_posts_url = $page_for_posts_id ? get_permalink($page_for_posts_id) : home_url('/noticias');
                    ?>

                    <?php if ($page_for_posts_id && $page_for_posts_status === 'publish') : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (is_home() || is_post_type_archive('post') || is_singular('post')) ? 'active' : ''; ?>" href="<?php echo esc_url($page_for_posts_url); ?>">
                            Notícias
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if (pagina_publicada('contato')) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page('contato') ? 'active' : ''; ?>" href="<?php bloginfo('url'); ?>/contato">Contato</a>
                    </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>

    <!--Botão "Whatsapp"-->
<!--     <a target="_blank" class="whatsapp_float" href="https://wa.me/5567999999999">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/whatsapp.svg" alt="ícone whatsapp">
    </a> -->
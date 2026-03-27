<?php get_header(); ?>

<section id="hero-slider" class="mt-5">
    <div class="owl-carousel owl-theme main-slider">

        <?php if (have_rows('slider')) : ?>
            <?php while (have_rows('slider')) : the_row(); 
                $titulo      = get_sub_field('titulo');
                $descricao   = get_sub_field('descricao');
                $imagem      = get_sub_field('imagem');
                $texto_botao = get_sub_field('texto_botao');
                $link_botao  = get_sub_field('link_botao');

                $bg_image = !empty($imagem['url']) ? $imagem['url'] : get_bloginfo('template_url') . '/img/no-banner.jpg';
            ?>
                <div class="item slide-item" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
                    <div class="overlay-dark"></div>

                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-md-8 col-lg-6">
                                <div class="slide-content animate-fade">

                                    <?php if ($titulo) : ?>
                                        <h2 class="display-4 fw-bold text-white">
                                            <?php echo nl2br(esc_html($titulo)); ?>
                                        </h2>
                                    <?php endif; ?>

                                    <?php if ($descricao) : ?>
                                        <p class="fs-4 text-white mt-3">
                                            <?php echo esc_html($descricao); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if ($texto_botao && $link_botao) : ?>
                                        <a href="<?php echo esc_url($link_botao); ?>" class="btn btn-custom rounded-pill px-4 py-2 mt-4">
                                            <?php echo esc_html($texto_botao); ?>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</section>

<?php 
    $titulo_sobre  = get_field('titulo_sobre');
    $subtitulo_sobre = get_field('subtitulo_sobre');
    $descricao_sobre      = get_field('descricao_sobre');
    $imagem_sobre      = get_field('imagem_sobre');
?>
<section id="sobre" class="section-padding py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title"><?php echo esc_html($titulo_sobre); ?></h2>
                <p class="lead"><?php echo esc_html($subtitulo_sobre); ?></p>
                <p><?php echo esc_html($descricao_sobre); ?></p>
                <a href="<?php bloginfo('url'); ?>/quem-somos" class="btn btn-primary bg-primary rounded-pill border-0 px-3 mt-3">Conheça</a>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="<?php echo esc_url($imagem_sobre['url']); ?>" class="img-fluid rounded shadow" alt="Estrada">
            </div>
        </div>
    </div>
</section>

<?php if (have_rows('numeros')) : ?>
<section id="numeros" class="section-padding numbers-section">
    <div class="container">
        <div class="row text-center">

            <?php while (have_rows('numeros')) : the_row(); 
                $principal  = get_sub_field('principal');
                $secundario = get_sub_field('secundario');
                $icone      = get_sub_field('icone');
            ?>
                <div class="col-md-3 mb-4 mb-md-0 counter-box">
                    <?php if ($icone) : ?>
                        <i class="fa-solid fa-<?php echo esc_attr($icone); ?> fa-3x mb-3 text-white"></i>
                    <?php endif; ?>

                    <?php if ($principal) : ?>
                        <h3><?php echo esc_html($principal); ?></h3>
                    <?php endif; ?>

                    <?php if ($secundario) : ?>
                        <p><?php echo esc_html($secundario); ?></p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<?php endif; ?>

<!-- <section id="atracoes" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Atrações Turísticas</h2>
            <p>Descubra o que visitar ao longo da nossa rodovia.</p>
        </div>

        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="card info-card">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/atracao01.avif"
                        class="card-img-top" alt="Cachoeira" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Ecoturismo Local</h5>
                        <p class="card-text">Trilhas e cachoeiras preservadas a poucos km da rodovia.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card info-card">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/atracao01.avif"
                        class="card-img-top" alt="Centro Histórico" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Culinária Regional</h5>
                        <p class="card-text">Os melhores restaurantes de comida típica na rota.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card info-card">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/atracao01.avif"
                        class="card-img-top" alt="Museu" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Museu da Celulose</h5>
                        <p class="card-text">Conheça a história da indústria na região.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php if (have_rows('informacoes')) : ?>
<section id="informacoes" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Informações ao Usuário</h2>
        </div>
        <div class="row">

            <?php while (have_rows('informacoes')) : the_row(); 
                $principal   = get_sub_field('principal');
                $secundario  = get_sub_field('secundario');
                $icone       = get_sub_field('icone');
                $texto_link  = get_sub_field('texto_link');
                $link        = get_sub_field('link');
            ?>
                <div class="col-md-3 mb-4">
                    <div class="card info-card p-4 text-center">

                        <?php if ($icone) : ?>
                            <div class="icon-box">
                                <i class="fa-solid fa-<?php echo esc_attr($icone); ?>"></i>
                            </div>
                        <?php endif; ?>

                        <?php if ($principal) : ?>
                            <h5><?php echo esc_html($principal); ?></h5>
                        <?php endif; ?>

                        <?php if ($secundario) : ?>
                            <p class="small text-muted"><?php echo esc_html($secundario); ?></p>
                        <?php endif; ?>

                        <?php if ($texto_link && $link) : ?>
                            <a href="<?php echo esc_url($link); ?>" class="btn btn-sm btn-primary rounded-pill bg-primary border-0">
                                <?php echo esc_html($texto_link); ?>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<?php endif; ?>

<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
?>
<section id="noticias" class="section-padding bg-light">
    <div class="container">
        <h2 class="section-title mb-5">Últimas Notícias</h2>
        <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
                
                <div class="col-md-4 mb-4">
                    <div class="card rounded-3 h-100 border-0 shadow-sm">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => get_the_title()]); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" class="card-img-top" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </a>
                        <div class="card-body">
                            <small class="text-body-tertiary fw-bold">
                                <?php echo get_the_date('d M Y'); ?>
                            </small>
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                <h5 class="fw-bold text-primary mt-2"><?php the_title(); ?></h5>
                            </a>
                            <p class="card-text text-muted">
                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="text-secondary icon-link icon-link-hover text-decoration-none fw-bold">
                                Ler mais
                                <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>
    </div>
</section>
<?php
endif;
wp_reset_postdata();
?>

<?php get_footer(); ?>
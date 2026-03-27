<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">                
                <?php the_content(); ?>
            </div>
            <div class="col-lg-6">
                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded shadow-lg" alt="Vista aérea da rodovia">
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-bg">
    <div class="container text-center">
        <span class="section-title">Abrangência</span>
        <h2 class="fw-bold mb-5">Mapa da Concessão</h2>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow rounded overflow-hidden">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/6d0a3ea1a6449c3be0cbea6d12cf5b9ec67edf97.webp" alt="Mapa da Concessão Caminhos da Celulose"
                        class="img-fluid w-100">
                    
                    <div class="card-footer bg-white p-4 border-0">
                        <p class="mb-3 text-muted">Visualize as bases operacionais, praças de pedágio e municípios
                            atendidos.</p>
                        <a href="<?php bloginfo('url'); ?>/mapa" class="btn btn-secondary rounded-pill px-4">
                            <i class="fa-solid fa-map-location-dot me-2"></i> Acesse o Mapa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="informacoes" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Informações ao Usuário</h2>
        </div>
        <div class="row">

            <?php if (have_rows('informacoes', 69)) : ?>
                <?php while (have_rows('informacoes', 69)) : the_row();  
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
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
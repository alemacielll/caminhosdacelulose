<?php get_header(); ?>

<section class="section-padding pb-5" style="margin-top: 80px;">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mb-5 mb-lg-0 pe-lg-5">

                <nav id="galeria" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start">
                        <li class="breadcrumb-item">
                            <a href="<?php bloginfo('url');?>" class="text-primary text-decoration-none">Inicial</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php bloginfo('url');?>/atracoes" class="text-primary text-decoration-none">Atrações</a>
                        </li>
                    </ol>
                </nav>

                <header class="mb-4">
                    <h1 class="fw-bolder text-primary mb-3" style="font-size: 2.5rem; line-height: 1.2;">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <figure class="mb-5 position-relative">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded-4 shadow-sm w-100" style="max-height: 500px; object-fit: cover;" alt="Balneário Municipal">
                </figure>

                <article class="text-secondary-emphasis" style="font-size: 1.1rem; line-height: 1.8;">
                    <h4 class="fw-bold text-primary mb-3">Sobre o local</h4>
                    <?php the_content(); ?>

                    <h4 class="fw-bold text-primary mt-5 mb-3">Infraestrutura Oferecida</h4>
                    <div class="row g-3 mb-5">
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Quiosques com
                                    churrasqueira</li>
                                <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Banheiros com
                                    duchas</li>
                                <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Estacionamento
                                    amplo</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Área de banho
                                    demarcada</li>
                                <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Quadras de areia
                                </li>
                                <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Lanchonete no local
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>

            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px; z-index: 1;">

                    <div class="card border-0 shadow-lg rounded-4 p-4 mb-4">
                        <h5 class="fw-bold text-primary mb-4 border-bottom pb-3">Informações Úteis</h5>

                        <ul class="list-unstyled mb-4">
                            <li class="d-flex mb-3">
                                <i class="fa-solid fa-map-location-dot text-secondary mt-1 me-3 fa-lg"></i>
                                <div>
                                    <span class="d-block fw-bold text-primary text-uppercase"
                                        style="font-size: 0.8rem;">Endereço</span>
                                    <span class="small text-muted"><?php the_field('endereco'); ?></span>
                                </div>
                            </li>
                            <li class="d-flex mb-3">
                                <i class="fa-solid fa-clock text-secondary mt-1 me-3 fa-lg"></i>
                                <div>
                                    <span class="d-block fw-bold text-primary text-uppercase"
                                        style="font-size: 0.8rem;">Funcionamento</span>
                                    <span class="small text-muted"><?php the_field('funcionamento'); ?></span>
                                </div>
                            </li>
                            <li class="d-flex mb-3">
                                <i class="fa-solid fa-ticket text-secondary mt-1 me-3 fa-lg"></i>
                                <div>
                                    <span class="d-block fw-bold text-primary text-uppercase"
                                        style="font-size: 0.8rem;">Entrada</span>
                                    <span class="small text-muted"><?php the_field('entrada'); ?></span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <i class="fa-solid fa-phone text-secondary mt-1 me-3 fa-lg"></i>
                                <div>
                                    <span class="d-block fw-bold text-primary text-uppercase"
                                        style="font-size: 0.8rem;">Contato</span>
                                    <span class="small text-muted"><?php the_field('contato'); ?></span>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
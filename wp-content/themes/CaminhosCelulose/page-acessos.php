<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-title">Planejamento</span>
            <h2 class="fw-bold mb-4">Guia de Localização</h2>
            <p class="text-secondary-emphasis mx-auto" style="max-width: 800px;">
                Confira abaixo a relação dos principais acessos aos municípios, retornos operacionais e bases de
                atendimento (BSO) divididos por rodovia.
            </p>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-lg-9">
                <div class="d-flex align-items-center mb-4">
                    <span class="badge bg-primary fs-5 me-3"><?php the_field('br');?></span>
                    <h4 class="fw-bold mb-0 text-secondary"><?php the_field('titulo');?></h4>
                </div>

                <div class="list-group shadow-sm rounded-4 overflow-hidden border-0">
					
					<?php if (have_rows('acessos')) : ?>
					<?php while (have_rows('acessos')) : the_row(); 
						$km  = get_sub_field('km');
						$posicao = get_sub_field('posicao');
						$titulo      = get_sub_field('titulo');
						$descricao      = get_sub_field('descricao');
					?>
                    <div class="list-group-item p-4 border-0 border-bottom">
                        <div class="d-flex align-items-center">
                            <div class="me-4 text-center" style="min-width: 60px;">
                                <h5 class="fw-bold text-primary mb-0"><?php echo esc_attr($km); ?></h5>
                                <small class="text-muted"><?php echo esc_attr($posicao); ?></small>
                            </div>
                            <div class="border-start ps-4">
                                <h6 class="fw-bold mb-1"><?php echo esc_attr($titulo); ?></h6>
                                <p class="mb-0 small text-muted"><?php echo esc_attr($descricao); ?></p>
                            </div>
                        </div>
                    </div>
							<?php endwhile; ?>
					<?php endif; ?>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="section-padding pt-0">
    <div class="container">
        <div
            class="card bg-primary text-white border-0 rounded-4 p-4 p-md-5 text-center position-relative overflow-hidden mt-5">
            <div class="position-relative z-2">
                <h3 class="fw-bold mb-3">Precisando de ajuda na rodovia?</h3>
                <p class="mb-4 text-white-50">Nossas bases operacionais estão estrategicamente posicionadas para atender
                    você rapidamente.</p>
                <div class="d-inline-block bg-white text-primary rounded-pill px-4 px-md-5 py-3 shadow">
                    <a href="#" class="text-decoration-none text-primary" target="_blank"><i class="fa-solid fa-phone me-2"></i> <strong>Ligue <?php the_field('telefone', 69);?></strong></a>
                </div>
            </div>

            <i class="fa-solid fa-life-ring position-absolute top-50 start-0 translate-middle-y opacity-50 d-none d-md-block"
                style="font-size: 15rem; margin-left: -50px;"></i>
            <i class="fa-solid fa-road position-absolute top-50 end-0 translate-middle-y opacity-50 d-none d-md-block"
                style="font-size: 15rem; margin-right: -50px;"></i>
        </div>
    </div>
</section>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section class="section-padding">
    <div class="container">

        <div class="text-center mb-5">
            <?php the_content(); ?>
        </div>

        <div class="row g-5">

            <div class="col-lg-5">

                <?php 
                $telefone = get_field('telefone', 69); 
                $endereco = get_field('endereco', 69); 
                $email = get_field('e-mail', 69); 
                $horario_funcionamento = get_field('horario_funcionamento', 69); 
                
                $link_facebook = get_field('link_facebook', 69); 
                $link_instagram = get_field('link_instagram', 69); 
                $link_linkedin = get_field('link_linkedin', 69); 
                
                if ( $telefone ) : ?>

                    <div class="card bg-primary text-white border-0 shadow-sm rounded-4 p-4 mb-4 position-relative overflow-hidden">
                        <div class="position-relative z-2">
                            <h5 class="fw-bold mb-3">
                                <i class="fa-solid fa-phone-volume me-2 text-success"></i> Contato
                            </h5>
                        
                            <h2 class="display-5 fw-bold text-white mb-0">
                                <?php echo $telefone; ?>
                            </h2>
                            
                        </div>
                        <i class="fa-solid fa-headset position-absolute bottom-0 end-0 opacity-10" style="font-size: 8rem; transform: translate(20%, 20%); color: #fff;"></i>
                    </div>

                <?php endif; ?>

                <div class="d-flex flex-column gap-4 ps-2">
                    <?php if ( $telefone ) : ?>
                    <div class="d-flex">
<!--                         <div class="flex-shrink-0">
                            <div class="icon-box-sm bg-light text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-location-dot fa-lg"></i>
                            </div>
                        </div> -->
<!--                         <div class="flex-grow-1 ms-3">
                            <h6 class="fw-bold mb-1">Endereço</h6>
                            <p class="text-secondary-emphasis small mb-0">
                                <?php echo $endereco; ?>
                            </p>
                        </div> -->
                    </div>
                    <?php endif; ?>

                    <?php if ( $email ) : ?>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="icon-box-sm bg-light text-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-envelope fa-lg"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fw-bold mb-1">E-mail</h6>
                            <p class="text-secondary-emphasis small mb-0">
                                <a href="mailto:<?php echo $email; ?>" class="text-decoration-none text-secondary-emphasis"><?php echo $email; ?></a><br>
                            </p>
                        </div>
                    </div>
                    <?php endif; ?>
					
					<div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="icon-box-sm bg-light text-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-clock fa-lg"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fw-bold mb-1">Horário Atendimento</h6>
                            <p class="text-secondary-emphasis small mb-0">
                                <span class="text-muted" style="font-size: 0.8rem;"><?php echo $horario_funcionamento; ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="mt-2">
                        <h6 class="fw-bold mb-3">Siga-nos:</h6>
                        <?php if ( $link_linkedin ) : ?>
                        <a href="<?php echo $link_linkedin  ; ?>" class="btn bg-primary border-0 btn-primary rounded-circle me-2" style="width: 40px; height: 40px; padding: 0; line-height: 38px;">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <?php endif; ?>
                        <?php if ( $link_instagram ) : ?>
                        <a href="<?php echo $link_instagram  ; ?>" class="btn bg-primary border-0 btn-primary rounded-circle me-2" style="width: 40px; height: 40px; padding: 0; line-height: 38px;">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>

            <div class="col-lg-7">
                <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 bg-white">
                    <h4 class="fw-bold text-primary mb-4">Envie sua mensagem</h4>

                    <?php echo do_shortcode('[contact-form-7 id="1258d3b" title="Contato Site"]'); ?>
					
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
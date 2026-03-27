        <footer>
            <div class="container">
                <div id="rodape" class="row d-flex justify-content-between align-items-start border-bottom border-dark-subtle">
                    <?php
                        if (!function_exists('pagina_publicada')) {
                            function pagina_publicada($slug) {
                                $page = get_page_by_path($slug);
                                return ($page && $page->post_status === 'publish');
                            }
                        }
                    ?>
    
                    <div class="col-lg-4 mb-4">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_branca.svg" alt="" class="img-fluid mb-3" width="200">
                        </a>
                        <p class="text-white-50">A Caminhos da Celulose é responsável pela gestão de 870 quilômetros de rodovias estaduais e federais em Mato Grosso do Sul, conectando regiões produtivas, fortalecendo a logística e contribuindo diretamente para o desenvolvimento econômico e social do estado.</p>
                        <div class="mt-3">
                            <?php if (get_field('link_facebook', 69)) : ?>
                                <a href="<?php the_field('link_facebook', 69); ?>" class="d-inline me-3">
                                    <i class="fa-brands fa-facebook fa-lg"></i>
                                </a>
                            <?php endif; ?>

                            <?php if (get_field('link_instagram', 69)) : ?>
                                <a href="<?php the_field('link_instagram', 69); ?>" class="d-inline me-3">
                                    <i class="fa-brands fa-instagram fa-lg"></i>
                                </a>
                            <?php endif; ?>

                            <?php if (get_field('link_linkedin', 69)) : ?>
                                <a target="_blank" href="<?php the_field('link_linkedin', 69); ?>" class="d-inline me-3">
                                    <i class="fa-brands fa-linkedin fa-lg"></i>
                                </a>
                            <?php endif; ?>

                            <?php if (get_field('link_whatsapp', 69)) : ?>
                                <a href="<?php the_field('link_whatsapp', 69); ?>" class="d-inline me-3">
                                    <i class="fa-brands fa-whatsapp fa-lg"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <h5>Institucional</h5>

                        <?php if (pagina_publicada('quem-somos')) : ?>
                            <a href="<?php bloginfo('url'); ?>/quem-somos">Quem Somos</a>
                        <?php endif; ?>

                        <?php if (pagina_publicada('governanca')) : ?>
                            <a href="<?php bloginfo('url'); ?>/governanca">Governança</a>
                        <?php endif; ?>

                        <?php if (pagina_publicada('sustentabilidade')) : ?>
                            <a href="<?php bloginfo('url'); ?>/sustentabilidade">Sustentabilidade</a>
                        <?php endif; ?>

                        <?php if (pagina_publicada('trabalhe-conosco')) : ?>
                            <a href="<?php bloginfo('url'); ?>/trabalhe-conosco">Trabalhe Conosco</a>
                        <?php endif; ?>
                    </div>
					
					<?php if (pagina_publicada('pedagios')) : ?>
                    <div class="col-lg-4 mb-4">
                        <h5>Serviços</h5>

                        
                            <a href="<?php bloginfo('url'); ?>/pedagios">Pedágios</a>
                        

                        <?php if (pagina_publicada('pesos-dimensoes')) : ?>
                            <a href="<?php bloginfo('url'); ?>/pesos-dimensoes">Pesos e Dimensões</a>
                        <?php endif; ?>

                        <?php if (pagina_publicada('fale-conosco')) : ?>
                            <a href="<?php bloginfo('url'); ?>/fale-conosco">Fale Conosco</a>
                        <?php endif; ?>

                        <?php if (pagina_publicada('ouvidoria')) : ?>
                            <a href="<?php bloginfo('url'); ?>/ouvidoria">Ouvidoria</a>
                        <?php endif; ?>
                    </div>
					<?php endif; ?>

                    <div class="col-lg-4 mb-4">
						<h5>Contato</h5>

						<?php if (get_field('telefone', 69)) : ?>
							<p class="mb-1">
								<i class="fa-solid fa-phone me-2 text-secondary"></i>
								<?php the_field('telefone', 69); ?>
							</p>
						<?php endif; ?>

						<?php if (get_field('e-mail', 69)) : ?>
							<p class="mb-1">
								<i class="fa-solid fa-envelope me-2 text-secondary"></i>
								<?php the_field('e-mail', 69); ?>
							</p>
						<?php endif; ?>

						<?php if (get_field('endereco', 69)) : ?>
							<p>
								<i class="fa-solid fa-location-dot me-2 text-secondary"></i>
								<?php the_field('endereco', 69); ?>
							</p>
						<?php endif; ?>
					</div>
                </div>

                <div style="font-size: 13px;color: #ffffff85 !important;" class="row d-flex justify-content-center align-items-center py-3 d-inline ">
                    <div class="col-md-12 text-center">
                        <span class="mb-0">&copy; 2026 Caminhos da Celulose. Todos os direitos reservados. <br> Desenvolvido por <a href="https://argosolucoes.com.br" target="_blank">Argo Soluções</a></span>
                    </div>
                </div>
            </div>

        </footer>
        
        <?php wp_footer(); ?>

    </body>

</html>
<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section id="boletim" class="bg-light-bg section-padding">
    <div class="container">             
    
        <div class="row d-flex align-items-center justify-content-start">
            
            <?php
            // 1. Definindo os argumentos da consulta
            $args = array(
                'post_type'      => 'boletim',
                'posts_per_page' => -1, // -1 traz todos os posts
                'orderby'        => 'date',
                'order'          => 'DESC'
            );

            $query = new WP_Query($args);

            // 2. O Loop
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); 
                    
                    // Pegando o campo ACF do tipo arquivo
                    $arquivo = get_field('arquivo_pdf');
                    // Exemplo de data formatada (opcional)
                    $data_boletim = get_the_date('F Y'); 
                    ?>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card info-card p-4 h-100 border-0 shadow-sm">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-secondary rounded-pill">
                                    <?php echo $data_boletim; ?>
                                </span>
                            </div>
                            
                            <h5 class="fw-bold text-primary"><?php the_title(); ?></h5>
                            
                            <div class="small text-muted mb-4">
                                <?php the_excerpt(); // Ou the_content() se preferir ?>
                            </div>

                            <?php if( $arquivo ): ?>
                                <a href="<?php echo $arquivo['url']; ?>" target="_blank" class="btn btn-outline-secondary btn-sm rounded-pill w-100 mt-auto">
                                    <i class="fa-solid fa-download me-2"></i> Baixar PDF
                                </a>
                            <?php else: ?>
                                <button class="btn btn-sm btn-light disabled rounded-pill w-100 mt-auto">Arquivo indisponível</button>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata(); // Sempre limpe a query global
            else : ?>
                <div class="col-12">
                    <p class="text-center">Nenhum boletim encontrado.</p>
                </div>
            <?php endif; ?>

        </div>
            
    </div>
</section>

<?php get_footer(); ?>
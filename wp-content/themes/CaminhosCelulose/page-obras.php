<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section class="section-padding">
    <div class="container">
        <div class="row">

            <?php
            // 1. Configuração da consulta para o Post Type "obra"
            $args_obras = array(
                'post_type'      => 'obra',
                'posts_per_page' => -1, // Ajuste a quantidade conforme necessário
                'orderby'        => 'title',
                'order'          => 'ASC'
            );

            $query_obras = new WP_Query($args_obras);

            // 2. Início do Loop
            if ($query_obras->have_posts()) :
                while ($query_obras->have_posts()) : $query_obras->the_post(); 
                    
                    // Pegando a URL da imagem destacada (Thumbnail)
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    // Caso não tenha imagem, definimos um placeholder
                    if (!$thumbnail_url) {
                        $thumbnail_url = get_template_directory_uri() . '/assets/img/default-obra.jpg';
                    }
                ?>

                <div class="col-md-4 mb-4">
                    <div class="card rounded-3 h-100 border-0 shadow-sm">
                        
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo $thumbnail_url; ?>" class="card-img-top" alt="<?php the_title(); ?>" style="height: 200px; object-fit: cover;">
                        </a>

                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                <h5 class="fw-bold text-primary mt-2"><?php the_title(); ?></h5>
                            </a>
                            
                            <div class="card-text text-muted mb-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 15); // Limita o resumo a 15 palavras ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="text-secondary icon-link icon-link-hover text-decoration-none fw-bold">
                                Ver Galeria
                                <svg xmlns="http://www.w3.org/2000/svg" class="bi" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <?php 
                endwhile;
                wp_reset_postdata(); // Limpa a query
            else : 
            ?>
                <div class="col-12">
                    <p class="text-center">Nenhuma obra cadastrada no momento.</p>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
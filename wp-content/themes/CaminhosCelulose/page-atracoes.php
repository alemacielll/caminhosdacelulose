<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section class="section-padding pb-0">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-title">Rota de Lazer</span>
            <h2 class="fw-bold mb-4">Descubra o Mato Grosso do Sul</h2>
            <p class="text-secondary-emphasis mx-auto" style="max-width: 800px;">
                Muito além de um corredor logístico, a nossa rodovia conecta você a belezas naturais, patrimônios
                históricos e a rica gastronomia regional. Planeje sua parada e aproveite a viagem.
            </p>
        </div>
    </div>
</section>

<section class="section-padding pt-0 bg-light-bg">
    <div class="container">
        <div class="row g-4">

            <?php
            // Lógica para paginação
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type'      => 'atracao',
                'posts_per_page' => 6, // Ajuste a quantidade por página aqui
                'paged'          => $paged
            );

            $query_atracoes = new WP_Query($args);

            if ($query_atracoes->have_posts()) :
                while ($query_atracoes->have_posts()) : $query_atracoes->the_post(); 
            ?>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', ['class' => 'card-img-top', 'style' => 'height: 250px; object-fit: cover;']); ?>
                            <?php else : ?>
                                <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </a>

                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold"><?php the_title(); ?></h5>
                            <p class="card-text text-secondary">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary rounded-pill px-4">
                                Ver Detalhes
                            </a>
                        </div>
                    </div>
                </div>

            <?php 
                endwhile;
            else :
                echo '<p class="text-center">Nenhuma atração encontrada.</p>';
            endif;
            ?>

        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <?php
                echo paginate_links(array(
                    'total'        => $query_atracoes->max_num_pages,
                    'current'      => $paged,
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'list',
                    'prev_next'    => true,
                    'prev_text'    => '<i class="fa-solid fa-chevron-left"></i>',
                    'next_text'    => '<i class="fa-solid fa-chevron-right"></i>',
                    'class'        => 'pagination justify-content-center' // Nota: WordPress gera classes próprias, você pode precisar ajustar via CSS
                ));
                ?>
            </div>
        </div>

        <?php wp_reset_postdata(); ?>

    </div>
</section>

<?php get_footer(); ?>
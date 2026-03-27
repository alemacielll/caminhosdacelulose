<?php get_header(); ?>

<section class="page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/capa2.png');">
    <div class="container page-header-content">
        <h2 class="display-4 fw-bold">Notícias</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white-50">
                <li class="breadcrumb-item">
                    <a href="<?php echo home_url(); ?>" class="text-white text-decoration-none">Inicial</a>
                </li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">
                    Notícias
                </li>
            </ol>
        </nav>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">            
            <p class="text-secondary-emphasis mx-auto" style="max-width: 700px;">
                Acompanhe as últimas novidades e comunicados oficiais da Caminhos da Celulose.
            </p>
        </div>

        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card rounded-3 h-100 border-0 shadow-sm">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => get_the_title()]); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/segurança-transito.jpg" class="card-img-top" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </a>
                        <div class="card-body">
                            <small class="text-body-tertiary fw-bold text-uppercase">
                                <?php echo get_the_date('d M Y'); ?>
                            </small>
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                <h5 class="fw-bold text-primary mt-2"><?php the_title(); ?></h5>
                            </a>
                            <p class="card-text text-muted">
                                <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
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

            <?php else : ?>
                <div class="col-12 text-center">
                    <p>Nenhuma notícia publicada no momento.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Navegação de páginas">
                    <ul class="pagination justify-content-center">
                        <?php
                        $pagination = paginate_links(array(
                            'type'      => 'array',
                            'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
                            'next_text' => '<i class="fa-solid fa-chevron-right"></i>',
                        ));

                        if ($pagination) {
                            foreach ($pagination as $page) {
                                // Adicionando as classes do Bootstrap via str_replace
                                $page = str_replace('page-numbers', 'page-link border-0 rounded-circle mx-1', $page);
                                $page = str_replace('current', 'active bg-secondary text-white', $page);
                                
                                // Verifica se é a página ativa para aplicar a classe no <li>
                                $active_class = strpos($page, 'active') !== false ? 'active' : '';
                                
                                echo '<li class="page-item ' . $active_class . '">' . $page . '</li>';
                            }
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
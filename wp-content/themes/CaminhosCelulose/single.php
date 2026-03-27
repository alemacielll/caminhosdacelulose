<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section id="blog-interna" class="section-blog pt-4">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mb-5 mb-lg-0 pe-lg-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start">
                        <li class="breadcrumb-item">
                            <a href="<?php echo home_url(); ?>" class="text-primary text-decoration-none">Inicial</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo get_post_type_archive_link('post'); ?>" class="text-primary text-decoration-none">Notícias</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Leitura</li>
                    </ol>
                </nav>

                <header class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) : ?>
                            <span class="badge bg-secondary rounded-pill me-3">
    <?php 
    $categorias = get_the_category();
    if (!empty($categorias)) {
        // Testamos se o primeiro índice é um objeto antes de pedir o name
        if (is_object($categorias)) {
            echo esc_html($categorias->name);
        } elseif (is_array($categorias) && isset($categorias['name'])) {
            // Caso raro onde o WP retorna array em vez de objeto
            echo esc_html($categorias['name']);
        } else {
            echo 'Institucional'; // Fallback seguro
        }
    } else {
        echo 'Institucional'; // Caso o post não tenha categoria
    }
    ?>
</span>
                        <?php endif; ?>
                        <small class="text-muted"><i class="fa-regular fa-calendar me-1"></i> <?php echo get_the_date(); ?></small>
                    </div>
                    
                    <h1 class="fw-bold text-primary mb-3" style="line-height: 1.2;"><?php the_title(); ?></h1>
                    
                    <div class="lead text-secondary-emphasis mb-4">
                        <?php the_excerpt(); ?>
                    </div>

                    <div class="d-flex align-items-center border-top border-bottom py-2 mb-4">
                        <span class="small fw-bold text-muted me-3">Compartilhe:</span>
                        <a href="https://api.whatsapp.com/send?text=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank" class="btn btn-sm btn-outline-primary rounded-circle me-2" style="width: 32px; height: 32px; padding: 0; line-height: 30px;">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank" class="btn btn-sm btn-outline-primary rounded-circle me-2" style="width: 32px; height: 32px; padding: 0; line-height: 30px;">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px; padding: 0; line-height: 30px;">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                </header>

                <figure class="mb-5">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded-4 shadow-sm w-100', 'alt' => get_the_title()]); ?>
                    <?php endif; ?>
                    <figcaption class="small text-muted mt-2 fst-italic text-end">
                        <?php echo get_post(get_post_thumbnail_id())->post_excerpt; // Legenda da imagem ?>
                    </figcaption>
                </figure>

                <article class="text-secondary-emphasis" style="font-size: 1.1rem; line-height: 1.8;">
                    <?php the_content(); ?>
                </article>

                <div class="mt-5 pt-4 border-top">
                    <?php 
                    $tags = get_the_tags();
                    if ($tags) :
                        echo '<span class="fw-bold small text-muted me-2">Tags:</span>';
                        foreach ($tags as $tag) : ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge bg-light text-primary text-decoration-none border me-1 p-2">#<?php echo $tag->name; ?></a>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px; z-index: 1;">
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-light-bg">
                        <h6 class="fw-bold text-primary mb-3">Buscar Notícias</h6>
                        <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                            <div class="input-group">
                                <input type="text" name="s" class="form-control border-0 bg-white" placeholder="O que procura?">
                                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
    <h6 class="fw-bold text-primary mb-4">Últimas Publicações</h6>
    <?php
    $recent_posts = new WP_Query(array(
        'posts_per_page' => 3, 
        'post__not_in'   => array(get_the_ID())
    ));
    
    if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="d-flex align-items-center text-decoration-none mb-3 pb-3 border-bottom">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="me-3">
                        <?php the_post_thumbnail(array(70, 70), array('class' => 'rounded-3', 'style' => 'object-fit:cover; width:70px; height:70px;')); ?>
                    </div>
                <?php endif; ?>
                <div>
                    <small class="text-secondary fw-bold d-block mb-1" style="font-size: 0.75rem;">
    <?php 
    $cats = get_the_category(); 
    // Verifica se o array não está vazio e se o primeiro item é um objeto
    if (!empty($cats) && is_object($cats)) { 
        echo esc_html($cats->name); 
    } else {
        echo 'Notícias'; // Fallback caso não tenha categoria
    }
    ?>
</small>
                    <h6 class="text-primary mb-0 fw-bold" style="font-size: 0.9rem; line-height: 1.3;"><?php the_title(); ?></h6>
                </div>
            </a>
        <?php endwhile; 
        wp_reset_postdata(); 
    endif; ?>
</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-bg">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <h3 class="fw-bold text-primary mb-0">Leia Também</h3>
            <a href="<?php echo get_post_type_archive_link('post'); ?>" class="btn btn-outline-primary rounded-pill btn-sm d-none d-md-block">Ver todas</a>
        </div>

        <div class="row g-4">
            <?php
            $orig_post = $post;
            global $post;
            $categories = get_the_category($post->ID);
            if ($categories) {
                $category_ids = array();
                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                $args = array(
                    'category__in'     => $category_ids,
                    'post__not_in'     => array($post->ID),
                    'posts_per_page'   => 3,
                    'ignore_sticky_posts' => 1
                );
                $my_query = new wp_query($args);
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card rounded-3 h-100 border-0 shadow-sm">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                            </a>
                            <div class="card-body">
                                <small class="text-body-tertiary fw-bold"><?php echo get_the_date('d M Y'); ?></small>
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                    <h5 class="fw-bold text-primary mt-2"><?php the_title(); ?></h5>
                                </a>
                                <p class="card-text text-muted"><?php echo wp_trim_words(get_the_excerpt(), 12); ?></p>
                                <a href="<?php the_permalink(); ?>" class="text-secondary icon-link icon-link-hover text-decoration-none fw-bold">Ler mais...</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            }
            $post = $orig_post;
            wp_reset_query(); ?>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
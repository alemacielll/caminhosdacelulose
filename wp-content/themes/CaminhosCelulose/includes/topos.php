<section class="page-header" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/capa2.png');">
    <div class="container page-header-content">
        <h2 class="display-4 fw-bold"><?php the_title(); ?></h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white-50">
                <li class="breadcrumb-item">
                    <a href="<?php bloginfo('url'); ?>" class="text-white text-decoration-none">Inicial</a>
                </li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">
                    <?php the_title(); ?>
                </li>
            </ol>
        </nav>
    </div>
</section>
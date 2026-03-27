<?php get_header(); ?>

<section class="page-header" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/capa3.avif');">
    <div class="container page-header-content">
        <h2 class="display-4 fw-bold"><?php the_title(); ?></h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white-50">
                <li class="breadcrumb-item">
                    <a href="index.php" class="text-white text-decoration-none">Inicial</a>
                </li>
                <li class="breadcrumb-item active text-white-50" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
    </div>

</section>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <span class="section-title"><?php the_title(); ?></span>
                <div class="text-secondary-emphasis">
                   <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
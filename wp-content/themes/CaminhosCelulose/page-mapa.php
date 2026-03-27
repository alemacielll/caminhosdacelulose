<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section class="section-padding">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="text-center mb-5">
                    <p class="text-secondary-emphasis mx-auto" style="max-width: 800px;">
                        <?php echo get_the_content(); ?>
                    </p>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-5">
                    <div class="card-body p-3 position-relative bg-light-bg text-center">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Mapa" class="img-fluid w-100 d-none d-md-block" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">            
            <p class="text-secondary-emphasis mx-auto" style="max-width: 700px;">
                Acompanhe as últimas novidades, cronogramas de obras, avisos de tráfego e
                comunicados oficiais da Caminhos da Celulose.
            </p>
        </div>
        <div class="row">

            <?php include("includes/cards_blog.php"); ?>
            <?php include("includes/cards_blog.php"); ?>
            <?php include("includes/cards_blog.php"); ?>
            <?php include("includes/cards_blog.php"); ?>
            <?php include("includes/cards_blog.php"); ?>


        </div>
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Navegação de páginas">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link text-secondary border-0 rounded-circle mx-1" href="#"><i
                                    class="fa-solid fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link bg-secondary border-0 rounded-circle mx-1" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-secondary border-0 rounded-circle mx-1" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-secondary border-0 rounded-circle mx-1" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link text-secondary border-0 rounded-circle mx-1" href="#"><i
                                    class="fa-solid fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section class="section-padding">
    <div class="container">

        <div class="row">
            <?php
            // 1. Verifica se o repeater "galeria_de_fotos" possui dados
            if( have_rows('galeria_de_fotos') ):
                
                // 2. Loop pelo repeater
                while( have_rows('galeria_de_fotos') ) : the_row();
                    
                    // 3. Pega o sub-campo "imagem" (considerando retorno como Array)
                    $foto = get_sub_field('imagem');
                    
                    if( $foto ): ?>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card rounded-3 h-100 border-0 shadow-sm">
                                <a href="<?php echo $foto['url']; ?>" data-fancybox="gallery" data-caption="<?php echo $foto['alt']; ?>">
                                    <img src="<?php echo $foto['sizes']['medium_large']; // Versão otimizada da imagem ?>" 
                                         class="card-img-top" 
                                         alt="<?php echo $foto['alt']; ?>"
                                         style="height: 250px; object-fit: cover;">
                                </a>
                                
                                <?php if($foto['caption']): ?>
                                    <div class="card-body p-2 text-center">
                                        <p class="small text-muted mb-0"><?php echo $foto['caption']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endif;
                endwhile;

            else : ?>
                <div class="col-12">
                    <div class="alert alert-light text-center">Nenhuma foto cadastrada nesta galeria.</div>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="row mt-4">
            <div class="col-12">
                <a href="javascript:history.back()" class="btn btn-outline-primary rounded-pill">
                    <i class="fa-solid fa-arrow-left me-2"></i> Voltar para Obras
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
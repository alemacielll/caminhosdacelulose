<?php get_header(); ?>

<section class="page-header" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/capa3.avif');">
    <div class="container page-header-content">
        <h2 class="display-4 fw-bold">Quem Somos</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white-50">
                <li class="breadcrumb-item">
                    <a href="<?php bloginfo('url'); ?>" class="text-white text-decoration-none">Inicial</a>
                </li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Quem Somos</li>
            </ol>
        </nav>
    </div>

</section>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <span class="section-title"><?php the_title(); ?></span>
                <?php the_content(); ?>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="position-relative">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded shadow" alt="">
                    <div class="bg-white p-4 shadow rounded position-absolute bottom-0 start-0 translate-middle-x mb-4 d-none d-md-block border-start border-5 border-success">
                        <p class="mb-0 fw-bold text-dark"><?php the_field('slogan'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (have_rows('numeros')) : ?>
<section id="numeros" class="section-padding numbers-section">
    <div class="container">
        <div class="row text-center">

            <?php while (have_rows('numeros')) : the_row(); 
                $principal  = get_sub_field('principal');
                $secundario = get_sub_field('secundario');
                $icone      = get_sub_field('icone');
            ?>
                <div class="col-md-3 mb-4 mb-md-0 counter-box">
                    <?php if ($icone) : ?>
                        <i class="fa-solid fa-<?php echo esc_attr($icone); ?> fa-3x mb-3 text-white"></i>
                    <?php endif; ?>

                    <?php if ($principal) : ?>
                        <h3><?php echo esc_html($principal); ?></h3>
                    <?php endif; ?>

                    <?php if ($secundario) : ?>
                        <p><?php echo esc_html($secundario); ?></p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<?php endif; ?>

<?php
$missao  = get_field('missao');
$visao   = get_field('visao');
$valores = get_field('valores');

if ($missao || $visao || $valores) :
    $lista_valores = $valores ? preg_split('/\r\n|\r|\n/', $valores) : [];
?>
<section class="section-padding bg-light-bg">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-title">Identidade Corporativa</span>
            <h2 class="fw-bold">O que nos move</h2>
        </div>

        <div class="row">

            <?php if ($missao) : ?>
            <div class="col-lg-4 mb-4">
                <div class="info-card p-4 rounded text-center">
                    <div class="obras-icon mx-auto">
                        <i class="fa-solid fa-bullseye text-secondary"></i>
                    </div>
                    <h4 class="mb-3">Missão</h4>
                    <p class="text-secondary-emphasis"><?php echo esc_html($missao); ?></p>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($visao) : ?>
            <div class="col-lg-4 mb-4">
                <div class="info-card p-4 rounded text-center">
                    <div class="obras-icon mx-auto">
                        <i class="fa-solid fa-eye text-secondary"></i>
                    </div>
                    <h4 class="mb-3">Visão</h4>
                    <p class="text-secondary-emphasis"><?php echo esc_html($visao); ?></p>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($valores) : ?>
            <div class="col-lg-4 mb-4">
                <div class="info-card p-4 rounded text-center">
                    <div class="obras-icon mx-auto">
                        <i class="fa-solid fa-hand-holding-heart text-secondary"></i>
                    </div>
                    <h4 class="mb-3">Valores</h4>

                    <ul class="list-unstyled text-secondary-emphasis text-start d-inline-block">
                        <?php foreach ($lista_valores as $valor) : 
                            $valor = trim($valor);
                            if (!$valor) continue;
                        ?>
                            <li class="mb-2">
                                <i class="fa-solid fa-check text-success me-2"></i>
                                <?php echo esc_html($valor); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php endif; ?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 order-lg-1 pe-lg-5">
                <span class="section-title"><?php the_field('titulo_governanca'); ?></span>
                <h2 class="fw-bold mb-4"><?php the_field('subtitulo_governanca'); ?></h2>
                <div class="text-secondary-emphasis">
                    <p><?php the_field('descritivo_governanca'); ?></p>

                    <div class="mt-4">
                        <?php $link_1 = get_field('link_1'); ?>
                        <?php $link_2 = get_field('link_2'); ?>

                        <?php if ($link_1) : ?>
                            <a href="<?php echo esc_url($link_1['url']); ?>" id="btn-politicas" class="btn btn-outline-dark rounded-pill py-2 px-4 me-3" target="<?php echo esc_attr($link_1['target'] ?: '_self'); ?>">
                                <?php echo esc_html($link_1['title']); ?>
                            </a>
                        <?php endif; ?>

						<a target="_blank" href="https://caminhosdacelulose.com.br/wp-content/uploads/2026/02/Politica-de-Transacoes-Partes-Relacionadas-260226-SITE.pdf" id="btn-transacoes" class="btn btn-outline-dark rounded-pill py-2 px-4 me-3" style="display: none;">
							Política de Transações com Partes Relacionadas
						</a>
                        <script>
							const btnPoliticas = document.getElementById('btn-politicas');
							const btnTransacoes = document.getElementById('btn-transacoes');

							btnPoliticas.addEventListener('click', function(event) {
								event.preventDefault(); // Evita que a página recarregue ao clicar no link #

								// Faz o segundo botão aparecer
								btnTransacoes.style.display = 'inline-block';
							});
						</script>
						  
                        <?php if ($link_2) : ?>
                            <a href="<?php echo esc_url($link_2['url']); ?>" id="btn-politicas" class="btn btn-secondary rounded-pill px-4" target="<?php echo esc_attr($link_2['target'] ?: '_self'); ?>">
                                <?php echo esc_html($link_2['title']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-lg-2 mb-4 mb-lg-0">                
				<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2026/02/quem-somos22.jpg" class="img-fluid rounded shadow" alt="Reunião Governança">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
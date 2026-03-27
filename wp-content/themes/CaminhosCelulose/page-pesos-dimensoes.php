<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <?php the_content(); ?>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="card bg-primary text-white border-0 rounded-4 p-4 text-center shadow-lg">
                    <h4 class="fw-bold mb-4">Dimensões Máximas Gerais</h4>

                    <div class="row g-3">
                        <div class="col-4">
                            <div class="p-3 bg-white bg-opacity-10 rounded">
                                <i class="fa-solid fa-arrows-left-right fa-2x mb-2 text-success"></i>
                                <h3 class="fw-bold mb-0"><?php the_field('altura'); ?>m</h3>
                                <small class="text-white-50">Largura</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 bg-white bg-opacity-10 rounded">
                                <i class="fa-solid fa-arrows-up-down fa-2x mb-2 text-success"></i>
                                <h3 class="fw-bold mb-0"><?php the_field('largura'); ?>m</h3>
                                <small class="text-white-50">Altura</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 bg-white bg-opacity-10 rounded">
                                <i class="fa-solid fa-truck-moving fa-2x mb-2 text-success"></i>
                                <h3 class="fw-bold mb-0"><?php the_field('comprimento'); ?>m</h3>
                                <small class="text-white-50">Comp. Simples</small>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <small class="text-white-50 fst-italic">* Para veículos padrão (não especiais).</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="section-padding bg-light-bg">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-title">Pesagem</span>
            <h2 class="fw-bold">Limites de Peso por Eixo</h2>
            <p class="text-muted">Confira abaixo o peso bruto máximo permitido de acordo com a configuração dos eixos.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 text-center">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col" class="py-3 ps-4 text-start">Tipo de Eixo</th>
                                    <th scope="col" class="py-3">Rodagem</th>
                                    <th scope="col" class="py-3">Ilustração</th>
                                    <th scope="col" class="py-3 pe-4 text-end">Limite Legal (t)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4 text-start fw-bold text-secondary">Eixo Isolado</td>
                                    <td>Simples (2 pneus)</td>
                                    <td><i class="fa-solid fa-grip-lines-vertical fa-2x text-muted"></i></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">6 t</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 text-start fw-bold text-secondary">Eixo Isolado</td>
                                    <td>Dupla (4 pneus)</td>
                                    <td><i class="fa-solid fa-grip-lines-vertical fa-2x text-dark"></i></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">10 t</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 text-start fw-bold text-secondary">Eixo Duplo (Tandem)</td>
                                    <td>Dupla</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <i class="fa-solid fa-grip-lines-vertical fa-2x text-dark"></i>
                                            <i class="fa-solid fa-grip-lines-vertical fa-2x text-dark"></i>
                                        </div>
                                    </td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">17 t</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 text-start fw-bold text-secondary">Eixo Triplo</td>
                                    <td>Dupla</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <i class="fa-solid fa-grip-lines-vertical fa-2x text-dark"></i>
                                            <i class="fa-solid fa-grip-lines-vertical fa-2x text-dark"></i>
                                            <i class="fa-solid fa-grip-lines-vertical fa-2x text-dark"></i>
                                        </div>
                                    </td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">25,5 t</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bg-white p-4 border-top">
                        <small class="text-muted fst-italic">
                            * Tolerância de 5% sobre os limites de peso bruto total (PBT) e 10% sobre os limites de peso
                            por eixo, conforme legislação vigente.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="card bg-success-subtle border-0 rounded-4 p-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="fw-bold text-success mb-3">Transporte de Cargas Excedentes</h3>
                    <p class="mb-4 mb-lg-0 text-secondary-emphasis">
                        Se o seu veículo ou carga ultrapassa os limites de peso e dimensões estabelecidos pelo CONTRAN,
                        é obrigatória a obtenção de uma <strong>Autorização Especial de Trânsito (AET)</strong> para
                        trafegar na rodovia.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="https://www.gov.br/dnit/pt-br/assuntos/transito/aet" target="_blank"
                        class="btn btn-success btn-lg rounded-pill px-5 fw-bold text-white shadow">
                        Solicitar AET <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
                    </a>                    
                </div>
            </div>
        </div>
    </div> 
</section> -->

<?php get_footer(); ?>
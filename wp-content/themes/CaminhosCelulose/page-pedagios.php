<?php get_header(); ?>

<?php include('includes/topos.php') ?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <?php the_content(); ?>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="card bg-light-bg border-0 rounded-4 p-4 text-center">
                    <h5 class="fw-bold text-primary mb-3">Tarifa Quilométrica Base</h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="bg-white p-3 rounded shadow-sm">
                                <small class="text-muted d-block mb-1">Pista Simples</small>
                                <h3 class="fw-bold text-success mb-0">R$ <?php the_field('valor_km');?></h3>
                                <small class="text-muted">por km</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center g-4">

            <div class="col-md-4">
                <div class="h-100 p-3">
                    <i class="fa-solid fa-tags fa-3x text-white mb-3"></i>

                    <h2 class="fw-bold text-secondary display-5 mb-0">5%</h2>

                    <h5 class="fw-bold mt-2 mb-2">Desconto de TAG</h5>
                    <p class="small text-white-50 mx-auto" style="max-width: 250px;">
                        Usuários com TAG ativo recebem desconto automático na tarifa básica.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-3 border-start border-end border-white border-opacity-10"> <i
                        class="fa-solid fa-rotate-left fa-3x text-white mb-3"></i>

                    <h2 class="fw-bold text-secondary display-5 mb-0">Até 20%</h2>

                    <h5 class="fw-bold mt-2 mb-2">Usuário Frequente</h5>
                    <p class="small text-white-50 mx-auto" style="max-width: 250px;">
                        Descontos progressivos para veículos de passeio que usam o mesmo pórtico.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-3">
                    <i class="fa-solid fa-motorcycle fa-3x text-white mb-3"></i>

                    <h2 class="fw-bold text-secondary display-5 mb-0">100%</h2>

                    <h5 class="fw-bold mt-2 mb-2">Isenção para Motos</h5>
                    <p class="small text-white-50 mx-auto" style="max-width: 250px;">
                        Motocicletas, motonetas e bicicletas motorizadas são isentas.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section> -->

<!-- <section class="section-padding bg-light-bg" id="tabela-tarifas">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-title">Valores Vigentes</span>
            <h2 class="fw-bold">Tabela de Tarifas por Praça</h2>
            <p class="text-muted">Valores referentes à Categoria 1 (Automóveis, Caminhonetes e Furgões).</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col" class="py-3 ps-4">Pórtico</th>
                                    <th scope="col" class="py-3">Localização</th>
                                    <th scope="col" class="py-3">Km Ref.</th>
                                    <th scope="col" class="py-3 pe-4 text-end">Tarifa Básica (Cat. 1)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P1</td>
                                    <td>Três Lagoas</td>
                                    <td><span class="badge bg-light text-dark border">Km 25</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 14,20</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P2</td>
                                    <td>Água Clara</td>
                                    <td><span class="badge bg-light text-dark border">Km 90</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 12,50</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P3</td>
                                    <td>Ribas do Rio Pardo</td>
                                    <td><span class="badge bg-light text-dark border">Km 150</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 11,80</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P4</td>
                                    <td>Ribas do Rio Pardo</td>
                                    <td><span class="badge bg-light text-dark border">Km 190</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 11,80</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P5</td>
                                    <td>Campo Grande</td>
                                    <td><span class="badge bg-light text-dark border">Km 250</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 13,00</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P6</td>
                                    <td>Campo Grande</td>
                                    <td><span class="badge bg-light text-dark border">Km 300</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 13,00</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P7</td>
                                    <td>Santa Rita do Pardo</td>
                                    <td><span class="badge bg-light text-dark border">Km 50</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 10,50</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P8</td>
                                    <td>Santa Rita do Pardo</td>
                                    <td><span class="badge bg-light text-dark border">Km 100</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 10,50</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P9</td>
                                    <td>Bataguassu</td>
                                    <td><span class="badge bg-light text-dark border">Km 30</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 9,90</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P10</td>
                                    <td>Bataguassu</td>
                                    <td><span class="badge bg-light text-dark border">Km 80</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 9,90</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P11</td>
                                    <td>Nova Andradina</td>
                                    <td><span class="badge bg-light text-dark border">Km 120</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 15,10</td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">P12</td>
                                    <td>Nova Alvorada do Sul</td>
                                    <td><span class="badge bg-light text-dark border">Km 200</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary fs-5">R$ 14,50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-white p-4 border-top">
                        <h6 class="fw-bold mb-3"><i class="fa-solid fa-circle-info me-2 text-primary"></i>Categorias e
                            Multiplicadores</h6>
                        <div class="row g-3 small text-secondary-emphasis">
                            <div class="col-md-3"><i class="fa-solid fa-car me-1"></i> <strong>Cat 1 (Carro):</strong>
                                Tarifa x 1</div>
                            <div class="col-md-3"><i class="fa-solid fa-truck me-1"></i> <strong>Cat 2 (Caminhão 2
                                    eixos):</strong> Tarifa x 2</div>
                            <div class="col-md-3"><i class="fa-solid fa-truck-moving me-1"></i> <strong>Cat 3 (Caminhão
                                    3 eixos):</strong> Tarifa x 3</div>
                            <div class="col-md-3"><i class="fa-solid fa-bus me-1"></i> <strong>Cat 4 (Ônibus 2
                                    eixos):</strong> Tarifa x 2</div>
                            <div class="col-12 text-muted mt-2 fst-italic">
                                * Para veículos comerciais, a tarifa é multiplicada pelo número de eixos.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<!--         <div class="text-center mt-5">
            <a href="#" class="btn btn-primary bg-primary border-0 rounded-pill px-4 text-white">
                <i class="fa-solid fa-file-pdf me-2"></i> Baixar Tabela Completa (PDF)
            </a>            
        </div> -->

    </div>
</section>

<?php get_footer(); ?>
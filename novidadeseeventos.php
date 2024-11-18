<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astronomia hoje</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
</head>
<body style="background-color: black;">

<?php include 'header.php'; ?>



<div class="nebulosas text-center" style="background-color:#820000; color:white; padding: 2px;">
    <h2>Eventos</h2>
</div>

<!-- Início do carrossel -->
<div id="carouselExample" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="8000">
    <div class="carousel-inner">
        <!-- Evento 1 -->
        <div class="carousel-item active" data-bs-toggle="modal" data-bs-target="#modalEvento1">
            <figure class="nebulosa-figure">
                <img class="nebulosa-img d-block w-100" src="images/cometa.webp" alt="Cometa do Século">
                <figcaption class="p-3" style="color:white;">
                    <h3 class="nebulosa-title">Observação do Cometa do Século</h3>
                    <p class="nebulosa-date"><strong>Data:</strong> 15 de Dezembro de 2024</p>
                    <p class="nebulosa-location"><strong>Local:</strong> Observatório Nacional, Brasília</p>
                </figcaption>
            </figure>
        </div>

        <!-- Evento 2 -->
        <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#modalEvento2">
            <figure class="nebulosa-figure">
                <img class="nebulosa-img d-block w-100" src="images/eclipse.webp" alt="Eclipse Total">
                <figcaption class="p-3" style="color:white;">
                    <h3 class="nebulosa-title">Eclipse Solar Total</h3>
                    <p class="nebulosa-date"><strong>Data:</strong> 8 de Abril de 2025</p>
                    <p class="nebulosa-location"><strong>Local:</strong> Parque Estadual da Serra do Cipó</p>
                </figcaption>
            </figure>
        </div>

        <!-- Evento 3 -->
        <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#modalEvento3">
            <figure class="nebulosa-figure">
                <img class="nebulosa-img d-block w-100" src="images/chuva-de-meteoros.webp" alt="Chuva de Meteoros">
                <figcaption class="p-3" style="color:white;">
                    <h3 class="nebulosa-title">Chuva de Meteoros Perseidas</h3>
                    <p class="nebulosa-date"><strong>Data:</strong> 12 de Agosto de 2025</p>
                    <p class="nebulosa-location"><strong>Local:</strong> Praia do Forte, Bahia</p>
                </figcaption>
            </figure>
        </div>
    </div>

    <!-- Controles do carrossel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>
<!-- Fim do carrossel -->

<!-- Modais -->
<!-- Modal Evento 1 -->
<div class="modal fade" id="modalEvento1" tabindex="-1" aria-labelledby="modalEvento1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#820000; color:white;">
                <h5 class="modal-title" id="modalEvento1Label">Observação do Cometa do Século</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <p><strong>Data:</strong> 15 de Dezembro de 2024</p>
                <p><strong>Local:</strong> Observatório Nacional, Brasília</p>
                <p>Participe de uma noite inesquecível para observar o “cometa do século” e aprender sobre fenômenos raros que ocorrem em sua cauda. Haverá telescópios de alta potência, especialistas em astronomia e atividades interativas para o público de todas as idades.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Evento 2 -->
<div class="modal fade" id="modalEvento2" tabindex="-1" aria-labelledby="modalEvento2Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#820000; color:white;">
                <h5 class="modal-title" id="modalEvento2Label">Eclipse Solar Total</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <p><strong>Data:</strong> 8 de Abril de 2025</p>
                <p><strong>Local:</strong> Parque Estadual da Serra do Cipó</p>
                <p>Venha presenciar um dos fenômenos mais impressionantes da astronomia: um eclipse solar total. O evento incluirá palestras de especialistas, observação guiada e explicações detalhadas sobre os efeitos e a ciência por trás dos eclipses.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Evento 3 -->
<div class="modal fade" id="modalEvento3" tabindex="-1" aria-labelledby="modalEvento3Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#820000; color:white;">
                <h5 class="modal-title" id="modalEvento3Label">Chuva de Meteoros Perseidas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <p><strong>Data:</strong> 12 de Agosto de 2025</p>
                <p><strong>Local:</strong> Praia do Forte, Bahia</p>
                <p>Acompanhe um espetáculo celeste com a chuva de meteoros Perseidas. A noite contará com guias especializados, apresentações multimídia e uma experiência imersiva para observar o céu noturno em sua plenitude.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>



    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

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
    
    <img class="d-flex mx-auto banner-img" src="images/banner.png" alt="Banner">

    <div class="nebulosas text-center" style="background-color:#820000; color:white;">
        <h2>Notícias em Destaque</h2>
    </div>

    <!-- Início do carrossel -->
    <div id="carouselExample" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="8000"> <!-- Intervalo de 5 segundos -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <figure class="nebulosa-figure">
                    <img class="nebulosa-img d-block w-100" src="images/cometa.webp" alt="Cometa do Século">
                    <p class="nebulosa-text">Imagem do “cometa do século” revela fenômeno inesperado em sua cauda</p>
                </figure>
            </div>
            <div class="carousel-item">
                <figure class="nebulosa-figure">
                    <img class="nebulosa-img d-block w-100" src="images/cometa.webp" alt="Cometa do Século">
                    <p class="nebulosa-text">Imagem do “cometa do século” revela fenômeno inesperado em sua cauda</p>
                </figure>
            </div>
            <div class="carousel-item">
                <figure class="nebulosa-figure">
                    <img class="nebulosa-img d-block w-100" src="images/cometa.webp" alt="Cometa do Século">
                    <p class="nebulosa-text">Imagem do “cometa do século” revela fenômeno inesperado em sua cauda</p>
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

    

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

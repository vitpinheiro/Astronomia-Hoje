<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astronomia Hoje</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        .carousel-item img {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 500px;
            object-fit: cover;
        }
        .carousel-caption h5 {
            font-family: 'Courgette', cursive;
            font-size: 2.5rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .carousel-caption p {
            font-family: 'Rock Salt', cursive;
            font-size: 1.3rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        
        @media (max-width: 767px) {
            .carousel-caption h5 {
                font-size: 1.8rem;
            }
            .carousel-caption p {
                font-size: 1rem;
            }
        }

        .carousel-control-prev, .carousel-control-next {
            top: 50%;
            transform: translateY(-50%);
        }
        .carousel-inner {
            position: relative;
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
        }
        .nebulosas {
            background-color: #2a2a2a;
            color: white;
            padding: 10px 0;
            border-radius: 5px;
        }

        .carousel-control-prev {
            left: -4%; 
        }
        .carousel-control-next {
            right: -4%; 
        }
        .carousel-control-prev, .carousel-control-next {
            background-color: transparent;
            border: none;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: transparent; 
            border: none;
        }

    </style>
</head>
<body style="background-color: black;">

<?php include 'header.php'; ?>

<div class="nebulosas text-center">
    <h2>Multimídia Astronômica</h2>
</div>

<!-- Início da Seção de Carrossel de Imagens Astronômicas -->
<div class="container mt-5 mb-5">
    <div id="eventsCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            
            <div class="carousel-item active animate__animated animate__fadeIn">
                <img src="images/banner1.png" class="d-block w-100" alt="Exploração do Cosmos">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Exploração do Cosmos</h5>
                    <p>Uma jornada incrível para descobrir os mistérios do cosmos e das estrelas distantes.</p>
                </div>
            </div>
            
            <div class="carousel-item animate__animated animate__fadeIn">
                <img src="images/vastidaocosmos.jpg" class="d-block w-100" alt="Olhares para o Infinito">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Olhares para o Infinito</h5>
                    <p>Observações detalhadas de nebulosas e planetas, expandindo nossa compreensão do universo.</p>
                </div>
            </div>
            
            <div class="carousel-item animate__animated animate__fadeIn">
                <img src="images/estrelavialactea.jpg" class="d-block w-100" alt="A Dança das Estrelas">
                <div class="carousel-caption d-none d-md-block">
                    <h5>A Dança das Estrelas</h5>
                    <p>Imagens impressionantes de estrelas em formação e o nascimento de novas galáxias.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#eventsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#eventsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</div>
<!-- Fim da Seção de Carrossel de Imagens Astronômicas -->

<!-- Início da Seção de Vídeos Astronômicos -->
<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="text-white">Vídeos de Cosmos - Carl Sagan</h2>
        <p class="text-white">Explore o universo com Carl Sagan e sua visão sobre o cosmos e a ciência.</p>
    </div>
    
    <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://youtube.com/embed/N1CQQLSJfwQ?si=uWOiMiZm01QFXQ9d" allowfullscreen></iframe>
                        </div>
                        <h5 class="text-center mt-2 text-white">Os Limites do Oceano Cósmico</h5>
                    </div>
                    <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nEax6pI4nMc?si=5hwc1rCgI9Q67wCI" allowfullscreen></iframe>
                        </div>
                        <h5 class="text-center mt-2 text-white">Uma Voz na Sinfonia Cósmica</h5>
                    </div>
                    <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DJzEAt2AjHo?si=l3WjqM-jRg35Sfw_" allowfullscreen></iframe>
                        </div>
                        <h5 class="text-center mt-2 text-white">Viagens no Espaço e no Tempo</h5>
                    </div>
                </div>
            </div>

            
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FVc1Y5H6T9w?si=fTR5l0nkg7ptYYPp" allowfullscreen></iframe>
                        </div>
                        <h5 class="text-center mt-2 text-white">A Jornada dos Planetas</h5>
                    </div>
                    <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jwXfq2HH0r0?si=RvdznxlNOElJb72g" allowfullscreen></iframe>
                        </div>
                        <h5 class="text-center mt-2 text-white">O Cosmos de Carl Sagan</h5>
                    </div>
                    <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/B1oG6frrzmg?si=dmkN6RQQIkl0g8Er" allowfullscreen></iframe>
                        </div>
                        <h5 class="text-center mt-2 text-white">A Magia do Universo</h5>
                    </div>
                </div>
            </div>

            
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/M6BzFuQ91w0?si=n71-qvN3jsFyfzQj" allowfullscreen></iframe>
                        </div>
                        <h5 class="text-center mt-2 text-white">Mistérios do Sistema Solar</h5>
                    </div>
                    <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ptQz_Udi7Jg?si=gD4AosZ6eRVjxK1Q" allowfullscreen></iframe>
                        </div>
                        <h5 class="text-center mt-2 text-white">A História do Universo</h5>
                    </div>
                    <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A47F-WzR8DQ?si=lh3ywdMFH1NxZv1X" allowfullscreen></iframe>
                        </div>
                        <h5 class="text-center mt-2 text-white">Vida Fora da Terra?</h5>
                    </div>
                </div>
            </div>

            
        </div>

        
        <a class="carousel-control-prev" href="#videoCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#videoCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
</div>
<!-- Fim da Seção de Vídeos Astronômicos -->






<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

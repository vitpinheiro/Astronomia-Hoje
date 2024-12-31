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
    <style>
        .card img {
            height: 250px;
            object-fit: cover; 
            width: 100%; 
            border: none; 
            padding: 0; 
            margin: 0; 
        }
        .card {
            height: 100%; 
            border: none; 
        }
        .card-body {
            background-color: aliceblue;
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            height: 100%;
        }
        .card-title, .card-text {
            margin: 0;
        }
        .carousel-control-prev, .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 5%; 
            height: 100%;
            background: rgba(0, 0, 0, 0.5); 
        }
        .carousel-control-prev {
            left: -2%; 
        }
        .carousel-control-next {
            right: -2%; 
        }

        .btn-primary {
            background: linear-gradient(45deg, #1e3c72, #2a5298); 
            color: white; 
            border: none; 
            border-radius: 5px; 
            padding: 10px 20px;
            font-size: 16px; 
            text-transform: uppercase; 
            cursor: pointer; 
            transition: background 0.3s ease, transform 0.3s ease; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #2a5298, #1e3c72); 
            transform: scale(1.05); 
        }

    </style>
</head>

<body style="background-color: black;">
    <?php include 'header.php'; ?>
    
    <div class="banner-container">
        <img class="d-flex mx-auto banner-img" src="images/banner1.png" alt="Banner">
        <div class="banner-text">
            Desvendando os mistérios do cosmos, uma estrela de cada vez.
        </div>
    </div>

    <div style="background-color: black; width: 85.4%; height: 50em; display: flex; justify-content: center; align-items: center; padding: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); overflow: hidden;">
        <figure style="display: flex; align-items: center; width: 100%; max-width: 1200px; padding: 20px; background-color: black; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
            <img src="images/vastidaocosmos.jpg" alt="Cometa" style="width: 50em; border-radius: 10px; object-fit: cover; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
            <div style="margin-left: 30px; max-width: 500px; text-align: left;">
                <h2 style="font-family: 'Arial', sans-serif; font-size: 2.5em; color: white; margin-bottom: 15px;"><strong>Sobre o Astronomia Hoje</strong></h2>
                <p style="font-family: 'Arial', sans-serif; font-size: 1.2em; color: #777; line-height: 1.6; text-align: justify;">Esta página é dedicada a promover o fascínio pela astronomia, oferecendo conteúdo enriquecedor sobre as últimas descobertas, fenômenos celestes e a vastidão do cosmos. Nosso objetivo é inspirar curiosidade e aprofundar o entendimento do universo, compartilhando curiosidades, artigos e recursos para que todos possam explorar as maravilhas do céu e refletir sobre nosso lugar no universo.</p>
            </div>
        </figure>
    </div>

    <div class="container">
        <h3 class="text-center my-4" style="color: white;">Próximos Eventos</h3>
        <div id="eventsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="images/ft1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Chuva de meteoros Perseidas</h5>
                                    <p class="card-text">12 de agosto de 2025</p>
                                    <a href="#" class="btn btn-primary mt-auto">SAIBA MAIS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="images/ft2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Eclipse solar total</h5>
                                    <p class="card-text">12 de agosto de 2045</p>
                                    <a href="#" class="btn btn-primary mt-auto">SAIBA MAIS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="images/ft3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Oposição de Marte</h5>
                                    <p class="card-text">16 de janeiro de 2025</p>
                                    <a href="#" class="btn btn-primary mt-auto">SAIBA MAIS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        
                        <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="images/ft1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Evento Astronômico 4</h5>
                                    <p class="card-text">Data do Evento</p>
                                    <a href="#" class="btn btn-primary mt-auto">SAIBA MAIS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="images/ft2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Evento Astronômico 5</h5>
                                    <p class="card-text">Data do Evento</p>
                                    <a href="#" class="btn btn-primary mt-auto">SAIBA MAIS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="images/ft3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Evento Astronômico 6</h5>
                                    <p class="card-text">Data do Evento</p>
                                    <a href="#" class="btn btn-primary mt-auto">SAIBA MAIS</a>
                                </div>
                            </div>
                        </div>
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

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
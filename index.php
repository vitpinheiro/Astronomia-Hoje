<!DOCTYPE html>
<html lang="pt-br">
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
 
        .carousel-control-prev-icon, .carousel-control-next-icon {
            border-radius: 50%;
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
            <?php
            
            $events = [
                [
                    'title' => 'Chuva de meteoros Perseidas',
                    'date' => '12 de agosto de 2025',
                    'image' => 'images/ft1.png',
                    'link' => '#',
                ],
                [
                    'title' => 'Eclipse solar total',
                    'date' => '12 de agosto de 2045',
                    'image' => 'images/ft2.png',
                    'link' => '#',
                ],
                [
                    'title' => 'Oposição de Marte',
                    'date' => '16 de janeiro de 2025',
                    'image' => 'images/ft3.png',
                    'link' => '#',
                ],
                [
                    'title' => 'Evento Astronômico 4',
                    'date' => 'Data do Evento',
                    'image' => 'images/ft1.png',
                    'link' => '#',
                ],
                [
                    'title' => 'Evento Astronômico 5',
                    'date' => 'Data do Evento',
                    'image' => 'images/ft2.png',
                    'link' => '#',
                ],
                [
                    'title' => 'Evento Astronômico 6',
                    'date' => 'Data do Evento',
                    'image' => 'images/ft3.png',
                    'link' => '#',
                ],
                
            ];

         
            $chunks = array_chunk($events, 3);

            $isActive = true;
            foreach ($chunks as $index => $chunk) {
                echo '<div class="carousel-item ' . ($isActive ? 'active' : '') . '">';
                echo '<div class="row">';
            
                // Cria os 3 div por slide
                foreach ($chunk as $event) {
                    echo '<div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">';
                    echo '<div class="card" style="width: 18rem; border-radius: 10px; overflow: hidden;">';
                    echo '<img src="' . $event['image'] . '" class="card-img-top" alt="..." >';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $event['title'] . '</h5>';
                    echo '<p class="card-text">' . $event['date'] . '</p>';
                    echo '<a href="' . $event['link'] . '" class="btn btn-primary mt-auto">SAIBA MAIS</a>';
                    echo '</div></div></div>';
                }
            
                echo '</div></div>';
                $isActive = false;
            }
            
            ?>
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

    <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card" style="background-image: url('images/'); background-size: cover; background-repeat: repeat; background-position: center; height: 250px; border-radius: 10px; margin-top: 20px;"> <!-- Adicionada margin-top para descer o cartão -->
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
                    <h5 class="card-title text-white">Descubra mais sobre Astronomia</h5>
                    <p class="card-text text-white mb-4">Explore uma seleção de livros sobre astronomia e aumente seu conhecimento sobre o cosmos.</p>
                    <a href="livros.php" class="btn btn-secondary">Ver Mais</a>
                </div>
            </div>
        </div>
    </div>
</div>


    

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.querySelectorAll('.btn-primary').forEach(button => {
            button.setAttribute('href', 'novidadeseeventos.php');
        });
    </script>

</body>
</html>
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

</head>
<body style="background-color: black;">

<?php include 'header.php'; ?>

<div class="nebulosas text-center" style="background-color:#820000; color:white; padding: 2px;">
    <h2>Eventos</h2>
</div>

<?php

$events = [
    ["title" => "Observação do Cometa do Século", "date" => "15 de Dezembro de 2024", "location" => "Observatório Nacional, Brasília", "description" => "Um evento único para observar o Cometa do Século com telescópios avançados."],
    ["title" => "Eclipse Solar Total", "date" => "8 de Abril de 2025", "location" => "Parque Estadual da Serra do Cipó", "description" => "Aproveite o raro eclipse total em um dos melhores locais para observação."],
    ["title" => "Chuva de Meteoros Perseidas", "date" => "12 de Agosto de 2025", "location" => "Praia do Forte, Bahia", "description" => "Um espetáculo celeste com dezenas de meteoros por hora."],
    ["title" => "Chuva de Meteoros Perseidas", "date" => "12 de Agosto de 2025", "location" => "Praia do Forte, Bahia", "description" => "Um espetáculo celeste com dezenas de meteoros por hora."],
    // Adicionar mais eventos aqui
];


$events_per_page = 10;
$total_events = count($events);
$total_pages = ceil($total_events / $events_per_page);


$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$current_page = max(1, min($total_pages, $current_page));


$start_index = ($current_page - 1) * $events_per_page;
$events_to_display = array_slice($events, $start_index, $events_per_page);
?>


<div class="events-container d-flex flex-column align-items-center mb-5">
    <?php foreach ($events_to_display as $index => $event): ?>
        <div class="event-item my-3 animate__animated animate__fadeIn" data-bs-toggle="modal" data-bs-target="#modalEvento<?= $start_index + $index ?>" style="max-width: 600px; animation-delay: <?= $index * 0.8 ?>s;">
            <figure class="nebulosa-figure">
                <img class="nebulosa-img d-block w-100" src="images/cometa.webp" alt="<?= $event['title'] ?>">
                <figcaption class="p-3" style="color:white;">
                    <h3 class="nebulosa-title"><?= $event['title'] ?></h3>
                    <p class="nebulosa-date"><strong>Data:</strong> <?= $event['date'] ?></p>
                    <p class="nebulosa-location"><strong>Local:</strong> <?= $event['location'] ?></p>
                </figcaption>
            </figure>
        </div>
    <?php endforeach; ?>
</div>



<?php foreach ($events_to_display as $index => $event): ?>
<div class="modal fade" id="modalEvento<?= $start_index + $index ?>" tabindex="-1" aria-labelledby="modalLabel<?= $start_index + $index ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #820000; color: white;">
                <h5 class="modal-title" id="modalLabel<?= $start_index + $index ?>"><?= $event['title'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Data:</strong> <?= $event['date'] ?></p>
                <p><strong>Local:</strong> <?= $event['location'] ?></p>
                <p><?= $event['description'] ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>



<div class="pagination d-flex justify-content-center mb-5">
    <nav>
        <ul class="pagination">
            <?php if ($current_page > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $current_page - 1 ?>">Anterior</a>
                </li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?= $i === $current_page ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
            <?php if ($current_page < $total_pages): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $current_page + 1 ?>">Próxima</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

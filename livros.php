<?php
$books = [
    ['src' => 'images/cosmos.jpg', 'title' => 'Cosmos', 'author' => 'Carl Sagan', 'year' => 1980, 'genre' => 'Ciência', 'description' => 'Cosmos é uma obra que explora o universo, sua criação, evolução e os mistérios que ele contém. Através de uma abordagem científica e acessível, Carl Sagan nos leva a uma jornada para entender o nosso lugar no cosmos.'],
    ['src' => 'images/cosmos.jpg', 'title' => 'Uma Breve História do Tempo', 'author' => 'Stephen Hawking', 'year' => 1988, 'genre' => 'Astronomia, Física', 'description' => 'Stephen Hawking explora temas como o Big Bang, buracos negros, a teoria das cordas e a natureza do tempo de maneira acessível e envolvente, tornando a ciência moderna compreensível para o público geral.'],
    ['src' => 'images/cosmos.jpg', 'title' => 'O Universo numa Casca de Noz', 'author' => 'Stephen Hawking', 'year' => 2001, 'genre' => 'Astronomia, Física', 'description' => 'Em "O Universo numa Casca de Noz", Hawking aborda conceitos complexos da física e cosmologia de forma mais acessível, explorando teorias sobre a origem do universo, buracos negros e a estrutura do cosmos.'],
    ['src' => 'images/cosmos.jpg', 'title' => 'Astrofísica para Pessoas Apressadas', 'author' => 'Neil deGrasse Tyson', 'year' => 2017, 'genre' => 'Astronomia', 'description' => 'Neil deGrasse Tyson apresenta a astrofísica de uma forma concisa e clara, abordando desde os princípios básicos do universo até as últimas descobertas científicas, tudo em uma linguagem simples e direta.'],
    ['src' => 'images/cosmos.jpg', 'title' => 'A Dança do Universo', 'author' => 'Mario Novello', 'year' => 2007, 'genre' => 'Astronomia', 'description' => 'Mario Novello explora as descobertas modernas sobre a origem e a evolução do universo, explicando a teoria do Big Bang, a natureza da gravidade e a possibilidade de um multiverso.'],
    ['src' => 'images/cosmos.jpg', 'title' => 'O Gene: Uma História Íntima', 'author' => 'Siddhartha Mukherjee', 'year' => 2016, 'genre' => 'Ciência, Genética', 'description' => 'Mukherjee explora a história e os mistérios do gene, desde as primeiras descobertas até os avanços modernos na genética, revelando como o gene molda a vida e a identidade humana.'],
    ['src' => 'images/cosmos.jpg', 'title' => 'O Andar do Bêbado', 'author' => 'Leonard Mlodinow', 'year' => 2008, 'genre' => 'Ciência, Probabilidade', 'description' => 'Mlodinow explora o impacto do acaso em nossas vidas, mostrando como as probabilidades e o acaso influenciam os eventos do dia a dia, a partir de exemplos da física e da estatística.'],
    ['src' => 'images/cosmos.jpg', 'title' => 'O Universo Elegante', 'author' => 'Brian Greene', 'year' => 1999, 'genre' => 'Física, Cosmologia', 'description' => 'Greene apresenta de maneira acessível a teoria das cordas, uma proposta para unificar as leis da física e explicar fenômenos como a gravidade e as partículas subatômicas.'],
    ['src' => 'images/cosmos.jpg', 'title' => 'O Grande Projeto', 'author' => 'Stephen Hawking e Leonard Mlodinow', 'year' => 2010, 'genre' => 'Física, Cosmologia', 'description' => 'Este livro busca explicar as leis fundamentais que governam o universo, incluindo a física quântica e a teoria das cordas, sem recorrer a uma explicação divina para a origem do cosmos.'],
    ['src' => 'images/cosmos.jpg', 'title' => 'A Trilha do Saber', 'author' => 'Richard Dawkins', 'year' => 2006, 'genre' => 'Ciência, Filosofia', 'description' => 'Dawkins investiga a história da ciência e como o conhecimento humano evoluiu, explorando os conceitos de evolução e seleção natural, além de discutir o papel da ciência na sociedade moderna.']
    
];


$booksPerPage = 25;


$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;


$startIndex = ($page - 1) * $booksPerPage;

$booksToShow = array_slice($books, $startIndex, $booksPerPage);

$totalBooks = count($books);
$totalPages = ceil($totalBooks / $booksPerPage);
?>

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
</head>
<body style="background-color: black;">

<?php include 'header.php'; ?>

<div class="nebulosas text-center" style="background-color:#820000; color:white; padding: 2px;">
    <h2>Livros</h2>
</div>

<div class="container mt-5">
    <div class="row justify-content-center g-3">
        <?php foreach ($booksToShow as $index => $book): ?>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3 mb-4 d-flex justify-content-center">
                <img src="<?= $book['src']; ?>" alt="<?= $book['title']; ?>" class="img-fluid" data-bs-toggle="modal" data-bs-target="#bookModal<?= $index + 1 ?>" style="max-width: 80%; height: auto;">
            </div>
        <?php endforeach; ?>
    </div>
</div>






<?php foreach ($booksToShow as $index => $book): ?>
    <div class="modal fade" id="bookModal<?= $index + 1 ?>" tabindex="-1" aria-labelledby="bookModalLabel<?= $index + 1 ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookModalLabel<?= $index + 1 ?>"><?= $book['title']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6><strong>Autor:</strong> <?= $book['author']; ?></h6>
                    <h6><strong>Ano de Publicação:</strong> <?= $book['year']; ?></h6>
                    <h6><strong>Gênero:</strong> <?= $book['genre']; ?></h6>
                    <p><strong>Resumo:</strong></p>
                    <p><?= $book['description']; ?></p>
                    <p><strong>Por que ler este livro?</strong></p>
                    <p>Este livro oferece uma visão profunda sobre <?= strtolower($book['genre']); ?>, abordando temas relevantes de uma maneira envolvente e acessível. Uma leitura que com certeza expandirá sua compreensão sobre o mundo e além.</p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<div class="d-flex justify-content-center mt-4">
    <ul class="pagination">
        <?php if ($page > 1): ?>
            <li class="page-item"><a class="page-link" href="?page=1">&laquo; Primeira</a></li>
            <li class="page-item"><a class="page-link" href="?page=<?= $page - 1 ?>">Anterior</a></li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
            </li>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <li class="page-item"><a class="page-link" href="?page=<?= $page + 1 ?>">Próxima</a></li>
            <li class="page-item"><a class="page-link" href="?page=<?= $totalPages ?>">Última &raquo;</a></li>
        <?php endif; ?>
    </ul>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

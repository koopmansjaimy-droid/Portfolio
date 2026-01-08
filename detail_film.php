<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=netland;charset=utf8mb4',
    'bit_academy',
    'JK123456',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$id = $_GET['id'];

$stmt = $pdo->prepare(
    "SELECT * FROM movies WHERE id = :id"
);
$stmt->execute(['id' => $id]);
$movie = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<a href="index.php">Terug</a>
<h1><?= $movie['title']; ?></h1

<p>Duur: <?= $movie['length']; ?>minuten</p>
<p><?= $movie['description']; ?></p>

<?php if (!empty($movie['youtube_trailer'])) : ?>
    <iframe width="560" height="315"
        src="https://www.youtube.com/embed/<?= $movie['youtube_trailer']; ?>">
    </iframe>
<?php endif; ?>

<br><br>
<a href="edit_film.php?id=<?= $movie['id']; ?>">Bewerken</a>
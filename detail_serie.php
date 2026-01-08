<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=netland;charset=utf8mb4',
    'bit_academy',
    'JK123456',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$id = $_GET['id'];

$stmt = $pdo->prepare(
    "SELECT * FROM series WHERE id = :id"
);
$stmt->execute(['id' => $id]);
$serie = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<a href="index.php"> Terug</a>
<h1><?= $serie['title']; ?></h1>

<p>Rating: <?= $serie['rating']; ?></p>
<p><?= $serie['description']; ?></p>

<a href="edit_serie.php?id=<?= $serie['id']; ?>">Bewerken</a>
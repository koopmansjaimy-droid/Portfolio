<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=netland;charset=utf8mb4',
    'bit_academy',
    'JK123456',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare(
        "UPDATE movies
        SET title = :title,
            length = :length,
            description = :description,
            youtube_trailer = :youtube_trailer
        WHERE id = :id"
    );

    $stmt->execute([
        'title' => $_POST['title'],
        'Length' => $_POST['length'],
        'description' => $_POST['description'],
        'youtube_trailer' => $_POST['youtube_trailer'],
        'id' => $id
    ]);

    header("Location: detail_film.php?id=$id");
    exit;
}

$stmt = $pdo->prepare(
    "SELECT * FROM movies WHERE id = :id"
);
$stmt->execute(['id' => $id]);
$movie = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h1>Film wijzingen</h1>

<form method="post">
    Titel:<br>
    <input type="text" name="title" value="<?= $movie['title']; ?>"><br><br>

    Duur (minuten):<br>
    <input type="number" name="length" value="<?= $movie['length']; ?>"><br><br>

    Beschrijving:<br>
    <textarea name="description"><?= $movie['description']; ?></textarea><br><br>

    Youtube trailer ID:<br>
    <input type="text" name="youtube_trailer" value="<?= $movie['youtube_trailer']; ?>"><br><br>

    <button type="sumbit">Opslaan</button>
</form>
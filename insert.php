<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=netland;charset=utf8mb4',
    'bit_academy',
    'JK123456',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare(
        "INSERT INTO media
        (title, description, rating, length, youtube_trailer, type)
        VALUES (:title, :description, :rating, :length, :youtube_trailer, :type)"
    );

    $stmt->execute([
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'rating' => $_POST['rating'] ?: null,
        'length' => $_POST['length'] ?: null,
        'youtube_trailer' => $_POST['youtube_trailer'],
        'type' => $_POST['type']
    ]);

    header('Location: index.php');
    exit;
}
?>

<h1>Media toevoegen</h1>

<form method="post">
    Type:<br>
    <select name="type">
        <option value="movie">Film</option>
        <option value="serie">Serie</option>
    </select><br><br>

    Titel:<br>
    <input type="text" name="title"><br><br>

    Beschrijving:<br>
    <textarea name="description"></textarea><br><br>

    Rating (serie):<br>
    <input type="number" step="0.1" name="rating"><br><br>

    Duur (film):<br>
    <input type="number" name="length"><br><br>

    YouTube trailer ID:<br>
    <input type="text" name="youtube_trailer"><br><br>

    <button type="submit">Toevoegen</button>
</form>
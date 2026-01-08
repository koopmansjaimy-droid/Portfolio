<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=netland;charset=utf8mb4',
    'bit_academy',
    'JK123456',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare(
        "INSERT INTO movies (title, length, description, youtube_trailer)
        VALUES (:title, :length, :description, :youtube_trailer)"
    );

    $stmt->execute([
        'title' => $_POST['title'],
        'length' => $_POST['length'],
        'description' => $_POST['description'],
        'youtube_trailer' => $_POST['youtube_trailer']
    ]);

    header('Location: index.php');
    exit;
}
?>

<h1>Film toevoegen</h1>

<from method="post">
    Titel:<br>
    <input type="text" name="length" required><br><br>

    Duur (minuten):<br>
    <input type="number" name="length" required><br><br>

    Beschrijving:<br>
    <textarea name="description" required></textarea><br><br>

    Youtube trailer ID:<br>
    <input type="text" name="youtube_trailer"><br><br>

    <button type="submit">Toevoegen</button>
</from>
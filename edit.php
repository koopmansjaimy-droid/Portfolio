<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=netland;charset=utf8mb4',
    'bit_academy',
    'JK123456',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$id = $_GET['id'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare(
        "UPDATE media
        SET title = :title,
            description = :description,
            rating = :rating,
            length = :length,
            youtube_trailer = :youtube_trailer
        WHERE id = :id"
    );

    $stmt->execute([
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'rating' => $_POST['rating'] ?: null,
        'length' => $_POST['length'] ?: null,
        'youtube_trailer' => $_POST['youtube_trailer'],
        'id' => $id
    ]);

    header("Location: detail.php?id=$id");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM media WHERE id = :id");
$stmt->execute(['id' => $id]);
$item = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h1>Media Wijzingen</h1>

<form method="post">
    Titel:<br>
    <input type="text" name="title" value="<?= $item['title']; ?>"><br><br>

    Beschrijving:<br>
    <textarea name="description"><?= $item['description']; ?></textarea><br><br>

    Rating (serie):<br>
    <input type="number" step="0.1" name="rating" value="<?= $item['rating']; ?>"><br><br>

    Duur (film):<br>
    <input type="number" name="length" value="<?= $item['length']; ?>"><br><br>

    Youtube trailer ID:<br>
    <input type="text" name="youtube_trailer" value="<?= $item['youtube_trailer']; ?>"><br><br>

    <button type="submit">Opslaan</button>
</form>
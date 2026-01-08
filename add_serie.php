<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=netland;charset=utf8mb4',
    'bit_academy',
    'JK123456',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare(
        "INSERT INTO series (title, rating, description)
        VALUES (:title, :rating, :description)"
    );

    $stmt->execute([
        'title' => $_POST['title'],
        'rating' => $_POST['rating'],
        'description' => $_POST['description']
    ]);

    header('Location: index.php');
    exit;
}
?>

<h1>Serie toevoegen</h1>

<form method="post">
    Titel:<br>
    <input type="text" name="title" required><br><br>

    Rating:<br>
    <input type="number" step="0.1" name="rating" required><br><br>

    Beschrijving:<br>
    <textarea name="description" required></textarea><br><br>

    <button type="submit">Toevoegen</button>
</form>
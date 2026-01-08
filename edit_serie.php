<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=netland;charset=utf8mb4',
    'bit_academy',
    'JK123456',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$id = $_GET['id'] ?? '';

if (!is_numeric($id)) {
    die('Ongeldig ID');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare(
        "UPDATE series
         SET title = :title,
             rating = :rating,
             description = :description
         WHERE id = :id"
    );

    $stmt->execute([
        'title' => $_POST['title'],
        'rating' => $_POST['rating'],
        'description' => $_POST['description'],
        'id' => $id
    ]);

    header("Location: detail_serie.php?id=$id");
    exit;
}

$stmt = $pdo->prepare(
    "SELECT * FROM series WHERE id = :id"
);
$stmt->execute(['id' => $id]);
$serie = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Serie wijzigen</title>
</head>
<body>

<h1>Serie wijzigen</h1>

<form method="post">
    Titel:<br>
    <input type="text" name="title" value="<?= $serie['title']; ?>"><br><br>

    Rating:<br>
    <input type="number" step="0.1" name="rating" value="<?= $serie['rating']; ?>"><br><br>

    Beschrijving:<br>
    <textarea name="description"><?= $serie['description']; ?></textarea><br><br>

    <button type="submit">Opslaan</button>
</form>

</body>
</html>

<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=netland;charset=utf8mb4',
    'bit_academy',
    'JK123456',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$id = $_GET['id'] ?? '';

$stmt = $pdo->prepare(
    "SELECT * FROM series WHERE id = :id"
);
$stmt->execute(['id' => $id]);
$item = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<a href="index.php">Terug</a>

<h1><?= $item['title']; ?></h1>

<p><?= $item['description']; ?></p>

<?php if ($item['type'] === 'serie') : ?>
    <p>Rating: <?= $item['rating']; ?></p>
<?php else : ?>
    <p>Duur: <?= $item['length']; ?> minuten</p>

    <?php if (!empty($item['youtube_trailer'])) : ?>
        <iframe width="560" height="315"
            src="https://www.youtube.com/embed/<?= $item['youtube_trailer']; ?>">
        </iframe>
    <?php endif; ?>
<?php endif; ?>

<br><br>
<a href="edit.php?id=<?= $item['id']; ?>">Bewerken</a>
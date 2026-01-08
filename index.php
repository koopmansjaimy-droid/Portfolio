<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=netland;charset=utf8mb4',
    'bit_academy',
    'JK123456',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$series = $pdo->query(
    "SELECT id, title, rating FROM series"
)->fetchALL(PDO::FETCH_ASSOC);

$movies = $pdo->query(
    "SELECT id, title, length FROM movies"
)->fetchall(PDO::FETCH_ASSOC);

?>

<h1>Netland</h1>

<a href="insert.php">Media toevoegen</a>

<?php foreach ($media as $item) : ?>
    <a href="detail.php?id=<?= $item['id']; ?>">
        <?= $item['title']; ?>
    </a>
    (<?= $item['type']; ?>)<br>
<?php endforeach; ?>
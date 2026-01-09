<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_COOKIE["count"])) {
        setcookie("count", 1);
    } else {
        $count = $_COOKIE["count"];
        $count++;
        setcookie("count", $count);
    }
    echo "Je hebt de pagina " . $_COOKIE["count"] . " keer bekeken.";
    ?>
</body>
</html>
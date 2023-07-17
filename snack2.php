<?php

$name = $_GET["name"] ?? "";
$email = $_GET["mail"] ?? "";
$age = $_GET["age"] ?? "";

var_dump($name);
var_dump($email);
var_dump($age);

if (strlen($name) <= 3 || !strpos($email, "@") || !strpos($email, ".")) {
    $message = "Accesso negato";
} else {
    $message = "Accesso riuscito";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <h1>Snack 2 </h1>
    <h2><?= $message ?></h2>
</body>

</html>
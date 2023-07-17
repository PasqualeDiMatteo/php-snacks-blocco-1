<?php

$match_schedule = [
    [
        "home" => [
            "name" => "frosinone",
            "points" => 12
        ],
        "guest" => [
            "name" => "napoli",
            "points" => 24
        ]
    ],
    [
        "home" => [
            "name" => "genoa",
            "points" => 22
        ],
        "guest" => [
            "name" => "fiorentina",
            "points" => 18
        ]
    ],
    [
        "home" => [
            "name" => "empoli",
            "points" => 16
        ],
        "guest" => [
            "name" => "verona",
            "points" => 17
        ]
    ],
    [
        "home" => [
            "name" => "inter",
            "points" => 20
        ],
        "guest" => [
            "name" => "monza",
            "points" => 11
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <h1>Snack 1</h1>
    <ul>
        <?php foreach ($match_schedule as $match) : ?>
            <li>
                <?php echo ucfirst($match["home"]["name"]) ?> - <?php echo ucfirst($match["guest"]["name"]) ?> | <?php echo ucfirst($match["home"]["points"]) ?> - <?php echo ucfirst($match["guest"]["points"]) ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>
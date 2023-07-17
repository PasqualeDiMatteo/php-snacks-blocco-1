<?php

$paragraph = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta, impedit ullam? Enim, voluptas. Veritatis, voluptatum nam repellat, eos suscipit, consectetur ad nobis voluptates voluptatem fuga beatae ea dolorum ex itaque! Harum exercitationem magnam dignissimos deleniti. Excepturi sint, laudantium magnam temporibus ut, sunt ipsum, omnis in iure reiciendis modi eos dignissimos consectetur nam eligendi error ducimus ab non. Nam, odio quo. Perspiciatis, quia quos beatae sapiente laborum eum ut eligendi repudiandae architecto sint eveniet. Animi dolores adipisci omnis soluta harum est, molestias minus asperiores maiores quo rerum quae dignissimos autem odio";

$array_paragraph = explode(".", trim($paragraph));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus</title>
</head>

<body>
    <h1>Bonus</h1>
    <p><?= $paragraph ?></p>
    <ul>
        <?php foreach ($array_paragraph as $item) : ?>
            <li>
                <?= $item ?>.
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>
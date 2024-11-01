<?php

$app['database']->insert('groceries', [
    'NAME' => $_POST['NAME'],
    'NUMBER' => $_POST['NUMBER'],
    'price' => $_POST['price']
]);

header('Location: /');
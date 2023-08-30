<?php

$id = $_GET['id'] ?? null;

if (!$id) {
    throw new HttpRequestException();
}

$name = Yii::$app->request->get('name');

if (!$name) {
    // ...
}

// ... лапша с получением и валидацией параметров

class Client {

}

$client = new Client();

echo $client->notExistenField;
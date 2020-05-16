<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('module4');

$app->add(new \App\Task1);

$app->add(new \App\Task2);

$app->add(new \App\Task3);

$app->run();

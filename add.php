<?php

$task = $_POST['task'];

if (empty($_POST['task'])) {
    echo 'Введите задание';
    exit();
}

require "configBD.php";

$sql = "INSERT INTO tasks(task) VALUES (:task)";
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header("Location: /");
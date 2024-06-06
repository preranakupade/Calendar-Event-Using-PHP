<?php
include 'config.php';

$title = $_POST['title'];
$description = $_POST['description'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

$stmt = $pdo->prepare("INSERT INTO events (title, description, start_date, end_date) VALUES (?, ?, ?, ?)");
$stmt->execute([$title, $description, $start_date, $end_date]);

header("Location: index.php");
exit;
?>  
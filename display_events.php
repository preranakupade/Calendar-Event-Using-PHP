<?php
include 'config.php';

$stmt = $pdo->query("SELECT * FROM events");
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
foreach ($events as $event) {
    echo "<li>";
    echo "<strong>{$event['title']}</strong> - {$event['start_date']} to {$event['end_date']}";
    echo "</li>";
}
echo "</ul>";
?> 
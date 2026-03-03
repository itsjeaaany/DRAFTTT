<?php
$stmt = $pdo->query("
    SELECT users.users_id, users.name, users.email, 
           orders.product, orders.amount
    FROM users
    JOIN orders ON users.users_id = orders.users_id
");

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
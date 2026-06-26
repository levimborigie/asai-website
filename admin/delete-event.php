<?php

require_once 'auth.php';
require_once __DIR__ . '/../api/db.php';

$id = (int)($_GET['id'] ?? 0);

if ($id > 0) {

    $stmt = $conn->prepare(
        "DELETE FROM events WHERE id = ?"
    );

    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: events.php");
exit;
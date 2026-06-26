<?php

require_once 'auth.php';
require_once __DIR__ . '/../api/db.php';

$result = $conn->query("
SELECT *
FROM contacts
ORDER BY created_at DESC
");

?>

<!DOCTYPE html>
<html>
<head>

<title>Contact Messages</title>

<style>

body{
font-family:Arial;
padding:20px;
}

table{
width:100%;
border-collapse:collapse;
}

th,td{
border:1px solid #ddd;
padding:10px;
vertical-align:top;
}

th{
background:#f4f4f4;
}

</style>

</head>

<body>

<h1>Contact Messages</h1>

<table>

<tr>
<th>Name</th>
<th>Email</th>
<th>Interest</th>
<th>Message</th>
<th>Date</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>

<tr>

<td><?= htmlspecialchars($row['name']) ?></td>

<td><?= htmlspecialchars($row['email']) ?></td>

<td><?= htmlspecialchars($row['interest']) ?></td>

<td><?= nl2br(htmlspecialchars($row['message'])) ?></td>

<td><?= htmlspecialchars($row['created_at']) ?></td>

</tr>

<?php endwhile; ?>

</table>

<br>

<a href="dashboard.php">
Back to Dashboard
</a>

</body>
</html>
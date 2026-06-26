<?php

require_once 'auth.php';
require_once __DIR__ . '/../api/db.php';

$result = $conn->query(
    "SELECT * FROM events ORDER BY event_date DESC"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Events</title>

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
}

a.button{
background:#0b5ed7;
color:white;
padding:10px;
text-decoration:none;
display:inline-block;
margin-bottom:20px;
}
</style>

</head>
<body>

<h1>ASAI Event Management</h1>

<p>
<a class="button" href="add-event.php">
+ Add New Event
</a>
</p>

<table>

<tr>
<th>Title</th>
<th>Date</th>
<th>Time</th>
<th>Location</th>
<th>Action</th>
</tr>

<?php while($event = $result->fetch_assoc()): ?>

<tr>

<td><?= htmlspecialchars($event['title']) ?></td>

<td><?= htmlspecialchars($event['event_date']) ?></td>

<td><?= htmlspecialchars($event['event_time']) ?></td>

<td><?= htmlspecialchars($event['location']) ?></td>

<td>
<a href="delete-event.php?id=<?= $event['id'] ?>">
Delete
</a>
</td>

</tr>

<?php endwhile; ?>

</table>

<br>

<a href="dashboard.php">
Back to Dashboard
</a>

</body>
</html>
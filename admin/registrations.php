<?php

require_once 'auth.php';
require_once __DIR__ . '/../api/db.php';

$result = $conn->query("
    SELECT *
    FROM registrations
    ORDER BY created_at DESC
");

?>

<!DOCTYPE html>
<html>
<head>

<title>Student Registrations</title>

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
text-align:left;
}

th{
background:#f5f5f5;
}

</style>

</head>

<body>

<h1>Student Registrations</h1>

<table>

<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>University</th>
<th>City</th>
<th>Course</th>
<th>Study Year</th>
<th>Date</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>

<tr>

<td><?= htmlspecialchars($row['full_name']) ?></td>

<td><?= htmlspecialchars($row['email']) ?></td>

<td><?= htmlspecialchars($row['phone']) ?></td>

<td><?= htmlspecialchars($row['university']) ?></td>

<td><?= htmlspecialchars($row['city']) ?></td>

<td><?= htmlspecialchars($row['course']) ?></td>

<td><?= htmlspecialchars($row['study_year']) ?></td>

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
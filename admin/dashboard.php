<?php
require_once 'auth.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>ASAI Dashboard</title>
<style>
body{
font-family:Arial;
padding:20px;
}
.card{
padding:15px;
border:1px solid #ddd;
margin-bottom:15px;
}
a{
display:inline-block;
margin-top:10px;
}
</style>
</head>
<body>

<h1>ASAI Executive Dashboard</h1>

<div class="card">

<h2>
<?= $_SESSION['executive_name']; ?>
</h2>

<p>
Role:
<strong>
<?= $_SESSION['executive_role']; ?>
</strong>
</p>

</div>

<div class="card">
<h3>Event Management</h3>
<a href="events.php">Manage Events</a>
</div>

<div class="card">
<h3>Student Registrations</h3>
<a href="registrations.php">View Registrations</a>
</div>

<div class="card">
<h3>Contact Messages</h3>
<a href="contacts.php">View Messages</a>
</div>

<div class="card">
<a href="logout.php">Logout</a>
</div>

</body>
</html>
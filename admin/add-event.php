<?php

require_once 'auth.php';
require_once __DIR__ . '/../api/db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = trim($_POST['title']);
    $date = trim($_POST['event_date']);
    $time = trim($_POST['event_time']);
    $location = trim($_POST['location']);
    $details = trim($_POST['details']);

    $stmt = $conn->prepare(
        "INSERT INTO events
        (title,event_date,event_time,location,details)
        VALUES (?,?,?,?,?)"
    );

    $stmt->bind_param(
        "sssss",
        $title,
        $date,
        $time,
        $location,
        $details
    );

    if ($stmt->execute()) {
        $message = "Event created successfully.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Add Event</title>

<style>
body{
font-family:Arial;
max-width:800px;
margin:auto;
padding:20px;
}

input, textarea{
width:100%;
padding:10px;
margin-bottom:15px;
}

button{
padding:10px 20px;
}
</style>

</head>
<body>

<h1>Add New Event</h1>

<?php if($message): ?>
<p><?= $message ?></p>
<?php endif; ?>

<form method="POST">

<label>Event Title</label>
<input type="text" name="title" required>

<label>Date</label>
<input type="date" name="event_date" required>

<label>Time</label>
<input type="time" name="event_time" required>

<label>Location</label>
<input type="text" name="location" required>

<label>Details</label>
<textarea name="details" rows="5" required></textarea>

<button type="submit">
Save Event
</button>

</form>

<br>

<a href="events.php">
Back to Events
</a>

</body>
</html>
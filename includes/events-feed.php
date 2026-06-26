<?php

require_once __DIR__ . '/../api/db.php';

$result = $conn->query("
SELECT *
FROM events
ORDER BY event_date DESC
LIMIT 20
");

while($event = $result->fetch_assoc()):
?>

<article>

    <time>
        <?= date('F d, Y', strtotime($event['event_date'])); ?>
    </time>

    <h3>
        <?= htmlspecialchars($event['title']); ?>
    </h3>

    <p>
        <strong>Time:</strong>
        <?= htmlspecialchars($event['event_time']); ?>
    </p>

    <p>
        <strong>Location:</strong>
        <?= htmlspecialchars($event['location']); ?>
    </p>

    <p>
        <?= nl2br(htmlspecialchars($event['details'])); ?>
    </p>

</article>

<?php endwhile; ?>
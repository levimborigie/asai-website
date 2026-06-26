<?php
declare(strict_types=1);

require_once __DIR__ . '/storage.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'POST requests only.']);
    exit;
}

require_fields(['eventTitle', 'eventDate', 'eventTime', 'eventLocation', 'eventDetails']);

try {
    save_csv(
        'events.csv',
        ['submitted_at', 'event_title', 'event_date', 'event_time', 'event_location', 'event_details'],
        [
            date('c'),
            clean_value('eventTitle'),
            clean_value('eventDate'),
            clean_value('eventTime'),
            clean_value('eventLocation'),
            clean_value('eventDetails', 4000),
        ]
    );

    respond_success('Event posting saved successfully.');
} catch (Throwable $exception) {
    handle_failure($exception);
}

<?php
declare(strict_types=1);

header('Content-Type: application/json');

function clean_value(string $key, int $maxLength = 2000): string
{
    $value = trim((string)($_POST[$key] ?? ''));
    $value = preg_replace('/\s+/', ' ', $value) ?? '';
    return substr($value, 0, $maxLength);
}

function require_fields(array $fields): void
{
    $missing = [];

    foreach ($fields as $field) {
        if (clean_value($field) === '') {
            $missing[] = $field;
        }
    }

    if ($missing !== []) {
        http_response_code(422);
        echo json_encode([
            'success' => false,
            'message' => 'Please complete all required fields.',
            'missing' => $missing,
        ]);
        exit;
    }
}

function save_csv(string $filename, array $headers, array $row): void
{
    $directory = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data';

    if (!is_dir($directory) && !mkdir($directory, 0775, true)) {
        throw new RuntimeException('Unable to create data directory.');
    }

    $path = $directory . DIRECTORY_SEPARATOR . $filename;
    $isNewFile = !file_exists($path);
    $handle = fopen($path, 'ab');

    if ($handle === false) {
        throw new RuntimeException('Unable to open data file.');
    }

    if (!flock($handle, LOCK_EX)) {
        fclose($handle);
        throw new RuntimeException('Unable to lock data file.');
    }

    if ($isNewFile) {
        fputcsv($handle, $headers);
    }

    fputcsv($handle, $row);
    fflush($handle);
    flock($handle, LOCK_UN);
    fclose($handle);
}

function respond_success(string $message): void
{
    echo json_encode([
        'success' => true,
        'message' => $message,
    ]);
}

function handle_failure(Throwable $exception): void
{
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'The form could not be saved. Please check that XAMPP has permission to write to the data folder.',
    ]);
}

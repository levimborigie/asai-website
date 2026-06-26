<?php

header('Content-Type: application/json');

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    http_response_code(405);

    echo json_encode([
        'success' => false,
        'message' => 'POST requests only.'
    ]);

    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$interest = trim($_POST['interest'] ?? '');
$message = trim($_POST['message'] ?? '');

$stmt = $conn->prepare("
INSERT INTO contacts
(
name,
email,
interest,
message
)
VALUES
(?,?,?,?)
");

$stmt->bind_param(
"ssss",
$name,
$email,
$interest,
$message
);

if($stmt->execute()){

    echo json_encode([
        'success'=>true,
        'message'=>'Message sent successfully.'
    ]);

}else{

    http_response_code(500);

    echo json_encode([
        'success'=>false,
        'message'=>'Database error.'
    ]);
}
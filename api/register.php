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

$fullName = trim($_POST['fullName'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$university = trim($_POST['university'] ?? '');
$city = trim($_POST['city'] ?? '');
$course = trim($_POST['course'] ?? '');
$studyYear = trim($_POST['studyYear'] ?? '');
$support = trim($_POST['support'] ?? '');

$stmt = $conn->prepare("
INSERT INTO registrations
(
full_name,
email,
phone,
university,
city,
course,
study_year,
support_needed
)
VALUES
(?,?,?,?,?,?,?,?)
");

$stmt->bind_param(
"ssssssss",
$fullName,
$email,
$phone,
$university,
$city,
$course,
$studyYear,
$support
);

if($stmt->execute()){

    echo json_encode([
        'success'=>true,
        'message'=>'Registration saved successfully.'
    ]);

}else{

    http_response_code(500);

    echo json_encode([
        'success'=>false,
        'message'=>'Database error.'
    ]);
}
<?php
session_start();

if (!isset($_SESSION['executive_id'])) {
    header("Location: login.php");
    exit;
}
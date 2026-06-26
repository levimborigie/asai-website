<?php
session_start();
require_once '../api/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare(
        "SELECT * FROM executives WHERE username = ?"
    );

    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {

        if (password_verify($password, $row['password_hash'])) {

            $_SESSION['executive_id'] = $row['id'];
            $_SESSION['executive_name'] = $row['full_name'];
            $_SESSION['executive_role'] = $row['role'];

            header("Location: dashboard.php");
            exit;
        }
    }

    $error = "Invalid username or password.";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>ASAI Executive Login</title>
<style>
body{
font-family:Arial;
max-width:450px;
margin:60px auto;
}
input{
width:100%;
padding:10px;
margin:10px 0;
}
button{
padding:10px 20px;
}
.error{
color:red;
}
</style>
</head>
<body>

<h2>ASAI Executive Login</h2>

<?php if($error): ?>
<p class="error"><?= $error ?></p>
<?php endif; ?>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button type="submit">
Login
</button>

</form>

</body>
</html>
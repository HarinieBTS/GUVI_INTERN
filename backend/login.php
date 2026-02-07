<?php
include 'db_mysql.php';
include 'redis.php';

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT password FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    if (password_verify($password, $row['password'])) {
        $redis->set("session_email", $email);
        echo "success";
    } else {
        echo "invalid";
    }
} else {
    echo "notfound";
}
?>

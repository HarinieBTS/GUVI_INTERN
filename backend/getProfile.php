<?php
include 'db_mongo.php';
include 'redis.php';

$email = $redis->get("session_email");

$data = $collection->findOne(["email" => $email]);
echo json_encode($data);
?>

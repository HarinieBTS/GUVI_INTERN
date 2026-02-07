<?php
include 'db_mongo.php';
include 'redis.php';

$email = $redis->get("session_email");

$collection->updateOne(
    ["email" => $email],
    [
        '$set' => [
            "age" => $_POST['age'],
            "dob" => $_POST['dob'],
            "contact" => $_POST['contact'],
            "email" => $email
        ]
    ],
    ["upsert" => true]
);

echo "updated";
?>

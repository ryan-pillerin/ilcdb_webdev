<?php
require_once('../../connection.php');

$cmd = $conn->prepare("INSERT INTO registration(
        first_name, 
        middle_name, 
        last_name,
        birthdate,
        age,
        street,
        province,
        city,
        barangay,
        email,
        phone,
        username,
        password
    ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$password = md5($_POST['password']);
$birthdate = date_create($_POST['birthdate']);
$birthdate = date_format($birthdate,"Y-m-d");

$cmd->bind_param(
    'ssssissssssss', 
    $_POST['firstname'], 
    $_POST['middlename'], 
    $_POST['lastname'],
    $birthdate,
    $_POST['age'],
    $_POST['street'],
    $_POST['province'],
    $_POST['city'],
    $_POST['barangay'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['username'],
    $password
);
$cmd->execute();
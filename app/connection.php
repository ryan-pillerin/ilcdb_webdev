<?php

$db = new mysqli("localhost", "root", "", "sakila");

if ($db->connect_errno) {
    echo 'Connection Failed: ' . $db->connect_error();
    exit();
}

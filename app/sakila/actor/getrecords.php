<?php
require_once('../../connection.php');

// SELECT TOP 100 Records
if ( $_POST['firstname'] != '' && $_POST['lastname'] != '' ) {
    $cmd = $conn->prepare("SELECT first_name, last_name FROM actor 
                        WHERE first_name = ? AND last_name = ? LIMIT 0, 100");
    $cmd->bind_param('ss', $_POST['firstname'], $_POST['lastname']);
} else {
    $cmd = $conn->prepare("SELECT first_name, last_name FROM actor LIMIT 0, 100");
}
$cmd->execute();
$rows = $cmd->get_result();
$results = array();
while($row = $rows->fetch_assoc()) {
    $results[] = $row;
}

echo json_encode($results);
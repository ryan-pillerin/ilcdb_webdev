<?php
require('connection.php');

/**
 * SELECT Query Actor
 */

 /**
  * SELECT without parameters
  */
/*$stmt = $db->prepare('SELECT * FROM actor');
$stmt->execute();
$result = $stmt->get_result();

$json_array = array();
while ($row = $result->fetch_assoc()) {
   $json_array[] = $row;
}

echo json_encode($json_array);*/

$stmt = $db->prepare("SELECT actor_id, last_name, first_name FROM actor WHERE last_name LIKE '%" . $_POST['search'] . "%' OR first_name LIKE '%" . $_POST['search'] . "%'");
$stmt->execute();
$result = $stmt->get_result();

$json_array = array();
while($row = $result->fetch_assoc()) {
    $json_array[] = $row;
}

echo json_encode($json_array);
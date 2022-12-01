<?php
require('connection.php');

// SELECT with WHERE
$cmd = $conn->prepare("SELECT first_name, last_name FROM actor WHERE first_name = ?");
$name = 'PENELOPE';
$cmd->bind_param('s', $name);
$cmd->execute();

// Get the result
$rows = $cmd->get_result();
while ($row = $rows->fetch_assoc()) {
  var_dump($row);
}

echo '<br> WITH AND condition <br>';

$cmd = $conn->prepare("SELECT first_name, last_name FROM actor WHERE first_name = ? AND last_name = ?");
$name = array('PENELOPE', 'GUINESS');
$cmd->bind_param('ss', $name[0], $name[1]);
$cmd->execute();

$rows = $cmd->get_result();
while ($row = $rows->fetch_assoc()) {
  var_dump($row);
}
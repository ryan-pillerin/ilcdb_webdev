<?php
require_once('../../connection.php');

// SELECT TOP 100 Records
/*if ( $_POST['search'] != '' ) {
    $cmd = $conn->prepare("SELECT first_name, last_name FROM actor 
                        WHERE first_name = ? AND last_name = ? LIMIT 0, 100");
    $cmd = $conn->prepare("SELECT first_name, last_name FROM actor
                            WHERE first_name = ? OR last_name = ?
                            LIMIT 0, 100");
    $cmd = $conn->prepare("SELECT first_name, last_name FROM actor
                            WHERE NOT first_name = ? OR NOT last_name = ?
                            LIMIT 0, 100");
    $cmd->bind_param('ss', $_POST['firstname'], $_POST['lastname']);
} else {
    $cmd = $conn->prepare("SELECT first_name, last_name FROM actor LIMIT 0, 100");
}*/

//$searchText = '%' . $_POST['search'] . '%';
// Search by keywords
if ( $_POST['search'] != '') {
    $searchValues = explode(" ", $_POST['search']);
    $sqlWhere = "WHERE ";
    $index =  1;
    foreach($searchValues as $value) {
        $sqlWhere .= "(first_name LIKE '%" . $value . "%' OR last_name LIKE '%" . $value ."%')";
        if ( $index < count($searchValues) ) {
            $sqlWhere .= " AND ";
        }
        $index += 1;
    }
} else {
    $sqlWhere = '';
}

$cmd = $conn->prepare("SELECT first_name, last_name FROM actor " . $sqlWhere . " LIMIT 0, 100");

//$cmd->bind_param('ss', $searchText, $searchText);
$cmd->execute();
$rows = $cmd->get_result();
$results = array();
while($row = $rows->fetch_assoc()) {
    $results[] = $row;
}

echo json_encode($results);
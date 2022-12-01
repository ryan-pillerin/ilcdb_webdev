<?php
require_once('../../connection.php');

// Search by keywords
if ( $_POST['search'] != '') {
    $searchValues = explode(" ", $_POST['search']);
    $sqlWhere = "WHERE ";
    $index =  1;
    foreach($searchValues as $value) {
        $sqlWhere .= "(title LIKE '%" . $value . "%' OR description LIKE '%" . $value ."%' OR  release_year LIKE '%" . $value ."%' OR  rating LIKE '%" . $value ."%' OR  special_features LIKE '%" . $value ."%')";
        if ( $index < count($searchValues) ) {
            $sqlWhere .= " AND ";
        }
        $index += 1;
    }
} else {
    $sqlWhere = '';
}

$cmd = $conn->prepare("SELECT title, description, release_year, rating, special_features FROM film " . $sqlWhere . " LIMIT 0, 100");

//$cmd->bind_param('ss', $searchText, $searchText);
$cmd->execute();
$rows = $cmd->get_result();
$results = array();
while($row = $rows->fetch_assoc()) {
    $results[] = $row;
}

echo json_encode($results);
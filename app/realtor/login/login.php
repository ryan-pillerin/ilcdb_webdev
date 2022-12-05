<?php
require_once('../../connection.php');
session_start();

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    // Do the authentication    
    $password = md5($_POST['password']);
    $cmd = $conn->prepare("SELECT id, first_name, last_name, last_updated FROM registration WHERE username = ? AND password = ?");
    $cmd->bind_param('ss', $_POST['username'], $password);
    $cmd->execute();
    $rows = $cmd->get_result();

    $arrResult = array();
    while($row = $rows->fetch_assoc()) {
        $arrResult = $row;
    }
    
    //echo json_encode($arrResult);
    if ( count($arrResult) > 0 ) {
        // User exists and authenticated
        $_SESSION['accesstoken'] = hash('sha256', $arrResult['id'] . "#" . $arrResult['last_updated']);
        echo json_encode(array(
            'status' => 1,
            'body' => array(
                'message' => 'The User was successfully login.',
                'accesstoken' => $_SESSION['accesstoken'],
                'user_info' => array(
                    'id' => $arrResult['id'],
                    'name' => $arrResult['first_name'] . " " . $arrResult['last_name'],
                    'username' => $_POST['username']
                )
            )
        ));
    } else {
        echo json_encode(array(
            'status' => -1,
            'body' => array(
                'message' => 'Authentication Failed!',
            )
        ));
    }

} else {
    header('Location: /ilcdb_webdev/login.php');
}
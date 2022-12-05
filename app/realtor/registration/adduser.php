<?php
require_once('../../connection.php');

try {

    // Validation of email, phone and username
    // Email
    $errorValidation = array(
        'status' => 0,
        'messages' => array()
    );

    $cmd = $conn->prepare("SELECT id FROM registration WHERE email = ?");
    $cmd->bind_param('s', $_POST['email']);
    $cmd->execute();

    $rows = $cmd->get_result();

    $arrResult = array();
    while ($row = $rows->fetch_assoc()) {
        $arrResult[] = $row;  
    } 

    if ( count($arrResult) > 0 ) {
        if ( $errorValidation['status'] == 0 ) {
            $errorValidation['status'] = 1;
        }
        $errorValidation['messages'][] = array(
            'type' => 'email',
            'message' => 'This email address already existed. Please choose another email.'
        );
    } 

    // Phone
    $cmd = $conn->prepare("SELECT id FROM registration WHERE phone = ?");
    $cmd->bind_param('s', $_POST['phone']);
    $cmd->execute();

    $rows = $cmd->get_result();

    $arrResult = array();
    while ($row = $rows->fetch_assoc()) {
        $arrResult[] = $row;  
    } 

    if ( count($arrResult) > 0 ) {
        if ( $errorValidation['status'] == 0 ) {
            $errorValidation['status'] = 1;
        }
        $errorValidation['messages'][] = array(
            'type' => 'phone',
            'message' => 'This phone number already existed. Please choose another phone number.'
        );
    } 

    // Username
    $cmd = $conn->prepare("SELECT id FROM registration WHERE username = ?");
    $cmd->bind_param('s', trim($_POST['username']));
    $cmd->execute();

    $rows = $cmd->get_result();

    $arrResult = array();
    while ($row = $rows->fetch_assoc()) {
        $arrResult[] = $row;  
    } 

    if ( count($arrResult) > 0 ) {
        if ( $errorValidation['status'] == 0 ) {
            $errorValidation['status'] = 1;
        }
        $errorValidation['messages'][] = array(
            'type' => 'username',
            'message' => 'This username already existed. Please choose another username.'
        );
    } 

    if ( $errorValidation['status'] == 0 ) {
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

        $username = trim($_POST['username']);
        $password = md5(trim($_POST['password']));
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
            $username,
            $password
        );
        $cmd->execute();

        echo json_encode(array(
            'status' => 1,
            'message' => 'New user was successfully added!'
        ));
    } else {
        echo json_encode(array(
            'status' => 0,
            'messages' => $errorValidation['messages']
        ));
    }

} catch (\Throwable $th) {
    //throw $th;
    echo json_encode(array(
        'status' => -1,
        'message' => 'Something is not right!'
    ));
}


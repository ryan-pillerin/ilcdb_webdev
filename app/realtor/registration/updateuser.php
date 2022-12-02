<?php
require_once('../../connection.php');

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    try {
        $cmd = $conn->prepare("UPDATE registration 
            SET first_name = ?,
            middle_name = ?,
            last_name = ?,
            birthdate = ?,
            age = ?,
            street = ?,
            province = ?,
            city = ?,
            barangay = ?,
            email = ?,
            phone = ?
        WHERE id = ?");
        $cmd->bind_param('ssssissssssi',
            $_POST['firstname'],
            $_POST['middlename'],
            $_POST['lastname'],
            $_POST['birthdate'],
            $_POST['age'],
            $_POST['street'],
            $_POST['province'],
            $_POST['city'],
            $_POST['barangay'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['id']
        );
        $cmd->execute();

        echo json_encode(array(
            'status' => 1,
            'message' => 'Your account was successfully updated!'
        ));
    } catch (\Throwable $th) {
        var_dump($th);
        /*echo json_encode(array(
            'status' => -1,
            'message' => 'Something is not right!',
        ));*/
    }
}

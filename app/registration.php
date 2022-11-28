<?php

/*if ( isset($_GET['firstname']) ) {
    // GET METHOD
    echo "GET METHOD <br>";
    echo $_GET['firstname'], $_GET['middlename'], $_GET['lastname'];
    echo $_GET['email'], $_GET['address'];
    echo $_GET['username'], $_GET['password'];
} else if ( isset($_POST['firstname']) ) {
    // POST METHOD
    echo "POST METHOD <br>";
    echo $_POST['firstname'], $_POST['middlename'], $_POST['lastname'];
    echo $_POST['email'], $_POST['address'];
    echo $_POST['username'], $_POST['password'];
}*/

/*if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    
    /*$name = $_POST['lastname'] . ", " . $_POST['firstname'] . " " . $_POST['middlename'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = array($name, $email, $address, $username, $password);


    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    
    if ( $email != '' ) {
        $result = array([
            'code' => 1,
            'message' => 'valid email'
        ]);
    } else {
        $result = array([
            'code' => -1,
            'message' => 'invalid email'
        ]);
    }

    echo json_encode($result);
    // echo json_encode(array($name, $email, $address, $username, $password));

}*/

$users = array('John Doe', 'Ryan', 'Rhianna', 'David', 'Mark');

var_dump($users);

echo "<br>";

$users = array(
    'firstname' => 'John',
    'lastname'=> 'Doe'
);

var_dump($users);
echo "<br>";
$users = array(
    array(
        'firstname' => 'John',
        'lastname'=> 'Doe'
    ),
    array(
        'firstname' => 'Ryan',
        'lastname'=> 'Pillerin'
    )
);

$json_string = json_encode($users);
$data = json_decode($json_string);

var_dump($data);

echo "<br>";
foreach($data as $person) {
    echo $person->firstname, " ", $person->lastname, "<br>";
}
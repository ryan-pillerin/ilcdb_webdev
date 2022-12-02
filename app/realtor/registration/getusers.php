<?php
require_once('../../connection.php');

if ( $_SERVER['REQUEST_METHOD'] === 'GET' ) {
    try {
        $id = $_GET['id'];

        $cmd = $conn->prepare("SELECT * FROM registration WHERE id = ?");
        $cmd->bind_param('i', $id);
        $cmd->execute();
        $rows = $cmd->get_result();

        $arrResult = array();
        while ($row = $rows->fetch_assoc()) {
            $arrResult[] = $row;
        }

        echo json_encode($arrResult);

    } catch (\Throwable $th) {
        //throw $th;
    }
}
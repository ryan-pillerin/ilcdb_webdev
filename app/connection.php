<?php

try {
    $conn = new mysqli(getenv('HOSTNAME'), getenv('USERNAME'), getenv('PASSWORD'), getenv('DATABASE'));
} catch (\Throwable $th) {
    var_dump($th);
}

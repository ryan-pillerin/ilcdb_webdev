<?php
session_start();

unset($_SESSION['accesstoken']);
header('Location: /ilcdb_webdev/');
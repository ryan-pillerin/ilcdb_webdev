<?php
    $pageTitle = 'Dashboard';
    session_start();
    if ( !isset($_SESSION['accesstoken']) ) {
        header('Location: /ilcdb_webdev/');
    }
?>
<?php require_once('layouts/header.php'); ?>
<!-- HTML Body -->

<!-- /HTML Body -->
<?php require_once('layouts/footer.php'); ?>
<?php
$sourcePath = $_FILES['image']['tmp_name'];
$targetPath = "../assets/images/" . $_FILES['image']['name'];
move_uploaded_file($sourcePath, $targetPath);

$imagedata = file_get_contents($targetPath);
echo base64_encode($imagedata);
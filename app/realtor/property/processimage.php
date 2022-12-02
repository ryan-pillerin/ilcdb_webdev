<?php

$sourceImage = $_FILES['propertyimage']['temp_name'];
$targetPath = "../assets/images/" . $_FILES['propertyimage']['name'];
move_uploaded_file($sourceImage , $targetPath);

// Convert the image into base64 string
$imagedata = file_get_contents($targetPath);
$imageBase64Data = base64_encode($imagedata);

// Delete the image
unlink($targetPath);

echo json_encode($imageBase64Data);
<?php

//$name = $_GET['name'];
//$age = $_GET['age'];
//
//echo "Name: $name Age: $age <br>";

//$name = $_POST['name'];
//$age = $_POST['age'];
//
//echo "Name: $name Age: $age <br>";

//
//echo "<pre>";
//print_r($_POST);
//echo "<pre>";

//$method = $_SERVER['REQUEST_METHOD'];
//if ($method !== 'GET') {
//    header('Location: http://localhost:8080/');
//    exit;
//}
//
//$type = $_GET['response_type'];
//$info = [
//  'method' => $method,
//  'course' => 'PHP Basic',
//  'date' => date('Y-m-d')
//];
//if ($type === 'json') {
//    header('Content-Type: application/json');
//    echo json_encode($info);
//} elseif ($type === 'xml') {
//    header('Content-Type: application/xml');
//
/*    $xml = '<?xml version="1.0" encoding="UTF-8"?>';*/
//    $xml .= '<response>';
//    foreach ($info as $name => $value) {
//        $xml .= "<$name>$value</$name>";
//    }
//    $xml .= '</response>';
//    echo $xml;
//} elseif ($type === 'png') {
//    $image = file_get_contents('test.png');
//    header('Content-Type: image/png');
//    echo $image;
//}

//echo "<pre>";
//print_r($_FILES);
//echo "<pre>";

$uploadsDir = './uploads';

$result = false;
foreach ($_FILES as $inputName => $fileData) {
    if ($fileData['error'] == UPLOAD_ERR_OK) {
        $tmpName = $fileData['tmp_name'];
        $name = $fileData['name'];
        $result = move_uploaded_file($tmpName, $uploadsDir . '/' . $name);
        break;
    }
}

if ($result === true) {
   echo "File uploaded successfully";
} else {
    echo "Something went wrong :(";
}
exit;


//['home' => 'index.php']
//['users' => ['UsersController.php', 'index']]

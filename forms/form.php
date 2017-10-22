<?php


// 1. PHP Super Global variables

// 1. $_REQUEST

// 2. $_POST

// 3. $_GET

// 4. $_SERVER

// print_r()

//$name = 'rashed';

/*echo '<pre>';

print_r($_POST);

echo '</pre>';*/


echo 'Hello ' . $_POST['fullname'];

echo '<br>';

echo 'You wrote:' . $_POST['message'];
//Hello <name>

//You wrote: <message>

?>
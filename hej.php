<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Laboration 1');
$log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));	
$log->info("Hello,  wlecome here!");
//var_dump($argv);
/*
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];
echo "";
echo "name :", $name;
echo "age: ", $age;
echo "email: ", $email;
*/
?>

<?php
include('./Medoo.php');
$config=[
    'database_type' => 'mysql',
    'database_name' => 'demo',
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => '123456',
    'charset' => 'utf8',
    'port' => 3306, 
];
$m = new Medoo\Medoo($config);


$id = $_POST['id'];

unset($_POST['id']);

$m->update('nav',$_POST,['id[=]'=>$id]);

?>
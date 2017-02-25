<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 25/02/17
 * Time: 2:19 PM
 */
ini_set('display_errors', 1);

$connect = mysqli_connect('localhost', 'root', 'password');

if (!$connect){
    die('Connection Error: '. mysqli_connect_error($connect));
}

mysqli_select_db($connect, 'feed');
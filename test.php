<?php
ini_set('display_errors', 1);

$connect = mysqli_connect('localhost', 'root', 'password');

if (!$connect){
    die('Connection Error: '. mysqli_connect_error($connect));
}

mysqli_select_db($connect, 'feed');

$query = mysqli_query($connect, "SELECT * FROM posts"); //" WHERE id IN (1,4)");
//$rows = mysqli_fetch_object($query);

while ($post = mysqli_fetch_object($query)){
//echo $rows->id;      //, $rows['title'];

    echo '<pre>';
    var_dump($post);
    echo '</pre>';
}


<?php
/*This fiel contain database configruation your are running */
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');
//Try connectiing to the database
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($conn == false){
    dir('Error:Cannot connect');
}
?>
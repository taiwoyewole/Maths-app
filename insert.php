<?<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", '', 'databasename');
 
// Check connection
if(!$link){
    echo 'Not connected to server';
}

if (!mysqli_select_db($link, 'tutorial)) {
  echo 'Database not selected';
}

 
$email = $_POST['email'];

$sql = INSERT INTO person (Email) VALUE ('Email)

if (!mysqli_query($link, $sql)) {
  echo 'Not inserted';
} else {
  echo 'inserted';
}

header("refresh:2; url=index.html");
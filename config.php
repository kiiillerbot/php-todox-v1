<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "php-todox";

  $conn = mysqli_connect($server, $username, $password, $database);
  if(!$conn){
    die("<script>Database connection failed!</script>");
  }
?>
<?php

$connex = mysqli_connect('localhost', 'root', '', 'forum', '3306');

if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  mysqli_set_charset($connex,"utf8");

?>
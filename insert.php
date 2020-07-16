<?php

  $con = mysqli_connect('127.0.0.1','root','');

  if (!$con) {
    echo 'Not connected to server';
  }

  if (!mysql_select_db)
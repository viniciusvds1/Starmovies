<?php

  session_start();

  $db_name = 'spacestarmovie_ref';
  $db_host = 'localhost';
  $db_user = 'newuser';
  $db_pass = '123456';

  $conn = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
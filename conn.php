<?php

  try {

    // Dit wordt gebruikt voor local connection
  	// $host = "localhost";
  	// $dbname = "todos";
  	// $user = "root";
  	// $pass = "";


    // Dit wordt gebruikt voor server connection via RemoteMysql.com
    // Remote Database Connection
      $host = "remotemysql.com";
      $dbname = "NAxelPhr8x";
      $user = "NAxelPhr8x";
      $pass = "ovARljwqZb";

  	$conn = new PDO ("mysql:host=$host;dbname=$dbname",$user,$pass);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {

  	echo "error is: " . $e->getMessage();

  }
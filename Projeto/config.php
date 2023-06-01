<?php
      
      define('HOST','localhost');
      define('USER', 'root');
      define('PASS','');
      define('Base', 'trabalhobancodados');
      define('PORT', 3306);

      $conn = new MySQLi(HOST,USER,PASS,Base,PORT);
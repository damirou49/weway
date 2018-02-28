<?php

  class db
  {
    public function connectDatabase()
    {
      return new PDO('mysql:host=localhost;dbname=weWay;charset=utf8','root', 'root');
    }
  }
?>

<?php
  session_start();

  require_once("../systems/config.php");
  require_once "controllers/home.php";  
  $controller = new home;
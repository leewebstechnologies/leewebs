<?php
session_start();

function errorMessage(){
  if(isset($_SESSION["errorMessage"])){
    $output = "<div class=\"alert alert-danger\">";
    $output .= htmlentities($_SESSION["errorMessage"]);
    $output .= "</div>";
    $_SESSION["errorMessage"] = null;
    return $output;
  }
}

function successMessage(){
  if(isset($_SESSION["successMessage"])){
    $output = "<div class=\"alert alert-success\">";
    $output .= htmlentities($_SESSION["successMessage"]);
    $output .= "</div>";
    $_SESSION["successMessage"] = null;
    return $output;
  }
}

?>
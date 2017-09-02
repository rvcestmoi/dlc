<?php session_start();
 require 'config.php';
 //Connection à la bdd
 $connect = connectBdd($dbName,$dbUser,$dbPassword);
require 'fonctions.php';
// Chargement des modeles
 require DS.'model'.DS.'Date.php';
 require DS.'model'.DS.'Produit.php';
 require DS.'model'.DS.'Liste.php';

?>
 

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->   
    <link href="style/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="style/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="style/jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
    
    
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>-->
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="style/jquery/jquery.js"></script>
    <script src="style/jquery/jquery-ui.js"></script>
    <script src="style/js/custom.js"></script>
  
  </head> 
   
   
   <body>
<div class="container-fluid"> 
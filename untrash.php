<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'head.php';

if (isset($_GET['id'])) {
$id = $_GET['id'];
$liste = new Liste();
$liste->setUnTrash($connect, $id);
header('Location : accueil.php');
}


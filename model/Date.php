<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Date
 *
 * @author RV
 */
class Date {

    //put your code here
    public function getAll() {
        echo 'prout';
    }

    public function add($connect) {

        $connect->beginTransaction();
        try {
            $req = $connect->prepare("INSERT INTO date (date_achat,date_per) VALUES (?,?) ");
            $req->execute(array($_POST["date_achat"], $_POST["date_per"]));
            $connect->commit();
        } catch (Exception $e) { //en cas d’erreur
            //on annule la transation
            $connect->rollback();
            //on affiche un message d’erreur ainsi que les erreurs
            echo 'Tout ne s’est pas bien passé, voir les erreurs ci-dessous <br/>';
            echo 'Erreur : ' . $e->getMessage() . '<br />';
            echo 'N° : ' . $e->getCode();
            //on arrête l’exécution s’il y a du code après
            exit();
        }
        $produit_id = $_POST['produit_id'];
        $stmt = $connect->prepare("SELECT MAX(date_id) FROM date");
        $stmt->execute();
        $fetch = $stmt->fetch();
        $date_id = $fetch[0];

        $listeModel = new Liste();
        $listeModel->add($connect, $produit_id, $date_id, 0);
        
    }

}

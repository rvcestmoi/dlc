<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produit
 *
 * @author RV
 */
class Produit {

    public function getAll($connect) {
       $stmt = $connect->prepare("SELECT * FROM produit p WHERE 1 ORDER BY p.libelle ASC");
       $stmt->execute();
        return $stmt->fetchAll();
        
    }

    public function add($connect) {

        $connect->beginTransaction();
        try {
            $req = $connect->prepare("INSERT INTO produit (libelle) VALUES (?) ");
            $req->execute(array($_POST["libelle_produit"]));
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

    }

}

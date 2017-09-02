<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Liste
 *
 * @author RV
 */
class Liste {

    public function add($connect, $produit_id, $date_id, $is_trash) {
        $connect->beginTransaction();
        try {
            $req = $connect->prepare("INSERT INTO liste (produit_id, date_id, is_trash) VALUES (?,?,?) ");
            $req->execute(array($produit_id, $date_id, $is_trash));
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

    public function getAllUntrash($connect) {
        $stmt = $connect->prepare("SELECT * FROM liste l "
                . "LEFT JOIN produit p ON l.produit_id=p.produit_id "
                . "LEFT JOIN date d ON l.date_id=d.date_id "
                . "WHERE is_trash=0 "
                . "ORDER BY d.date_per ASC"
                
                );
        $stmt->execute();
        return $stmt->fetchAll();
    }

}

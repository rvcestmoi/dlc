<?php
// récupération des produits disponibles
$produitModel = new Produit();
$listeModel = new Liste();
$produits = $produitModel->getAll($connect);
$listes = $listeModel->getAllUntrash($connect);
//echo '<pre>'.print_r($_SERVER).'</pre>';
?>

<div class="row">
    <div class ="col-md-6">
        <a class="btn_ajout row">
            <button type="button" class="bouton_ajout btn btn-primary btn-block">Ajouter un nouvel article</button> 
        </a>
    </div>
    <div class ="col-md-6">
        <a class="btn_ajout_liste row">
            <button type="button" class="bouton_ajout_liste btn btn-primary btn-block">Alimenter le frigo</button> 
        </a>
    </div>
</div>
<div id="form_ajout_produit">
    <form action="<?php echo HOME; ?>" method="post" name='ajoutProduit' >
        <div class='form form-group'>
            <p> Libellé :
                <input  type ='text' name="libelle_produit" placeholder="Nom du produit" class="form-control"></p>           
            <input class ="btn btn-default" name="submit_ajout_produit" value="Ajouter" type ='submit'>
        </div>
    </form>
</div>


<div id="form_ajout_liste">
    <form action="<?php echo HOME ?>" method="post" name='ajoutListe' >
        <div class='form form-group'>
            <p> Produit: <select name='produit_id' class="form-control">
                    <option value="">--</option>;
                    <?php
                    foreach ($produits as $produit) {
                        echo "<option value=" . $produit['produit_id'] . ">" . $produit['libelle'] . "</option>";
                    }
                    ?>
                </select></p>
            Date d'achat :
            <input type="date" name="date_achat" id="date_achat">         
            Date de peremption :
            <input type="date" name="date_per" id="date_per"><br>
            <input class ="btn btn-default" name="submit_ajout_liste" value="Ajouter" type ='submit'>
        </div>
    </form>
</div>

<div class ='row'>
    <div class ="col-md-6">
        <?php
        foreach ($listes as $liste) {
            echo '<a href="?id='.$liste['produit_id'].'"'.'><div class="item_liste" style="background-color:'.getCouleur($liste).'"'.'>' . $liste['libelle'] . ' à consommer avant :' . getInterval($liste). ' jours</div></a>';
        }
        ?>
    </div>
</div>

<?php
if (isset($_POST["submit_ajout_produit"]) && $_POST["submit_ajout_produit"] == "Ajouter") {
    if (!empty($_POST["libelle_produit"])) {
        //Tout est valide (les champs sont remplis et le kilometrage est numerique)
        $Produit = new Produit();
        $Produit->add($connect);
    } else
        echo 'Veuillez renseigner un libelle';
}

if (isset($_POST["submit_ajout_liste"]) && $_POST["submit_ajout_liste"] == "Ajouter") {
    if (!empty($_POST["date_achat"]) && !empty($_POST["date_per"]) && !empty($_POST["produit_id"])) {
        $Date = new Date();
        $Date->add($connect);
    } else
        echo 'Veuillez renseigner les deux dates et un produit';
}
?>

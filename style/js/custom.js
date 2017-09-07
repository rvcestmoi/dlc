/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function recupererId(classes) {

    var id = classes.split(" ");
    return id = id[1];




}
$(document).ready(function () {

    $('.item_liste_trash').click(function () {

        $(this).hide();
       
        var classes = ($(this).attr('class'));
        var id = recupererId(classes);
        //alert(id)
        $.ajax({
            url: 'untrash.php',
            type: "GET",
            data: 'id=' + id,
            succes: function (test) {
                alert(test);
            },
            error: function (resultat, statut, erreur) {
                alert(statut);
            },
            complete: function (test) {
                window.location.reload();

            },
            async: false

        });

    });

    $('.item_liste').click(function () {
        $(this).hide();
        // div.item_liste:nth-child(1)
        //html body div.container-fluid div.row div.col-md-6 div.item_liste.6
        var classes = ($(this).attr('class'));
        var id = recupererId(classes);
        //alert(id)
        $.ajax({
            url: 'trash.php',
            type: "GET",
            data: 'id=' + id,
            succes: function (test) {
                alert(test);
            },
            error: function (resultat, statut, erreur) {
                alert(statut);
            },
            complete: function (test) {

                window.location.reload();
            },
            async: false

        });

    });



    $('#date_achat').datepicker({
        dateFormat: 'yy-mm-dd'
    });
    $('#date_per').datepicker({
        dateFormat: 'yy-mm-dd'
    });
    $('#form_ajout_produit').hide();
    $('#form_ajout_liste').hide();
    $('.bouton_ajout').click(function () {
        $('#form_ajout_produit').toggle();
    });
    $('.bouton_ajout_liste').click(function () {
        $('#form_ajout_liste').toggle();
    });
});


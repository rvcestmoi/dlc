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
    $('.item_liste').click(function () {
        var classes = ($(this).attr('class'));
        var id = recupererId(classes);
        //alert(id)
        $.ajax({
            url: 'http://localhost/dlc/trash.php',
            type: 'GET',
            //data: 'id=' + id,
            succes: function (test) {
                alert(test);
            },
            error: function (resultat, statut, erreur) {
                alert(statut);
            },
            complete: function (test) {
                console.debug(test.statusCode);
            },

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


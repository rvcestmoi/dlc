/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
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


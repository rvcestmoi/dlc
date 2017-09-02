<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getCouleur($liste) {

    $interval = getInterval($liste);

    if ($interval < 0)
        return 'grey';
    elseif ($interval == 0)
        return 'red';
    elseif ($interval < 3)
        return 'orange';
    elseif ($interval < 7)
        return 'lightgreen';
    else
        return 'green';
}

function getInterval($liste) {
    $datetime2 = new DateTime(date($liste['date_per']));
    $datetime1 = new DateTime(date('Y-m-d'));
    $interval = $datetime1->diff($datetime2);
    $interval = (int) $interval->format('%r%a');
    return $interval;
}

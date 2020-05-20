<?php

//si la fonction page_title n'existe pas on va la définir
if(! function_exists('page_title')) {
    
    function page_title($title) { // Définition de la fonction
        $base_title = 'Laracarte -List of artisan'; //titre par défaut
        if ($title = '') {
            return $base_title;
        
        }else {
            return $title.'|' . $base_title;
        }

    }

}
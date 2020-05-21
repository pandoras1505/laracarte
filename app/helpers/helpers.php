<?php

//si la fonction page_title n'existe pas on va la définir
if(!function_exists('page_title')) {
    
    function page_title($title) { // Définition de la fonction
        $base_title = 'Laracarte List of artisan'; //titre par défaut
        if ($title === '') {
            return $base_title;
        
        }else {
            return $title . ' - ' . $base_title;
        }
    }
}

//si la fonction set_active_route n'existe pas on va la définir
if(!function_exists('set_active_route')) {
    
    function set_active_route($route) { // Définition de la fonction
       
            return Route::is($route) ? 'active':''; //vérifie si il existe une rout alors on l'active aucas contraire on ne fait rien
        
    }
}
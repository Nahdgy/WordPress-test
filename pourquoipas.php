<?php
/*
Plugin Name: Hello World Shortcode
Description: Un plugin simple qui crée un shortcode [hello_world] pour afficher "Hello World".
Version: 1.0
Author: Léon DESIR
*/

// Sécurité : empêcher l'accès direct au fichier
if (!defined('ABSPATH')) {
    exit;
}

// Fonction qui retourne le texte du shortcode
function hw_hello_world_shortcode($atts) {
    return '<div class="hello-world">Merci bien</div>';
}

// Enregistrement du shortcode
add_shortcode('aller', 'hw_hello_world_shortcode');

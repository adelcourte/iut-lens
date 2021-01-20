<?php
//------------------------------------------------------------
//
// NOTE:
//
// Try NOT to add any code line in this file.
//
// Use "app\Main.php" to add your hooks.
//
//------------------------------------------------------------
require_once( __DIR__ . '/app/Boot/bootstrap.php' );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Pages d'option
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title' => __('Réglages du thème IUT Lens'),
        'menu_title' => __('Réglages du thème IUT Lens'),
        'menu_slug' => 'theme-general-settings',
        'parent' => 'options-general.php',
        'capability' => 'edit_posts',
        'update_button' => __('Mettre à jour'),
        'updated_message' => __('Réglages mis à jour'),
    ]);
}

// Formations
\register_post_type('courses', [
    'labels'                => [
        'name'                  => __('Formations', 'iut_lens'),
        'singular_name'         => __('Formation', 'iut_lens'),
        'all_items'             => __('Toutes les Formations', 'iut_lens'),
        'archives'              => __('Page liste des Formations', 'iut_lens'),
        'attributes'            => __('Attributs de', 'iut_lens'),
        'insert_into_item'      => __('Insérer dans la formation', 'iut_lens'),
        'uploaded_to_this_item' => __('Téléchargé sur cette formation', 'iut_lens'),
        'filter_items_list'     => __('Filtrer les formations', 'iut_lens'),
        'items_list_navigation' => __('Navigation dans la liste des formations', 'iut_lens'),
        'items_list'            => __('Liste des formations', 'iut_lens'),
        'new_item'              => __('Nouvelle formation', 'iut_lens'),
        'add_new'               => __('Ajouter', 'iut_lens'),
        'add_new_item'          => __('Ajouter une nouvelle formation', 'iut_lens'),
        'edit_item'             => __('Éditer la formation', 'iut_lens'),
        'view_item'             => __('Voir la formation', 'iut_lens'),
        'view_items'            => __('Voir les formations', 'iut_lens'),
        'search_items'          => __('Rechercher une formation', 'iut_lens'),
        'not_found'             => __('Aucune formation trouvée', 'iut_lens'),
        'not_found_in_trash'    => __('Aucune formation trouvée dans la corbeille', 'iut_lens'),
        'parent_item_colon'     => __('Formation parente :', 'iut_lens'),
        'menu_name'             => __('Formations', 'iut_lens'),
    ],
    'public'                => true,
    'hierarchical'          => false,
    'show_ui'               => true,
    'show_in_nav_menus'     => true,
    'supports'              => ['title', 'thumbnail'],
    'has_archive'           => true,
    'rewrite'               => true,
    'query_var'             => true,
    'menu_position'         => null,
    'menu_icon'             => 'dashicons-awards',
    'show_in_rest'          => true,
    'rest_base'             => 'courses',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'rewrite'               => [
        'slug' => __('formations', 'iut_lens'),
    ],
]);

// Pôles
register_taxonomy('fields', ['courses'], [
    'hierarchical'          => false,
    'public'                => true,
    'show_in_nav_menus'     => true,
    'show_ui'               => true,
    'show_admin_column'     => false,
    'query_var'             => true,
    'rewrite'               => true,
    'capabilities'          => [
        'manage_terms' => 'edit_posts',
        'edit_terms'   => 'edit_posts',
        'delete_terms' => 'edit_posts',
        'assign_terms' => 'edit_posts',
    ],
    'labels'                => [
        'name'                       => __('Pôles', 'iut_lens'),
        'singular_name'              => __('Pôle', 'taxonomy general name', 'iut_lens'),
        'search_items'               => __('Rechercher un pôle', 'iut_lens'),
        'popular_items'              => __('Pôles populaires', 'iut_lens'),
        'all_items'                  => __('Tous les pôles', 'iut_lens'),
        'parent_item'                => __('Pôle parent', 'iut_lens'),
        'parent_item_colon'          => __('Pôle parent:', 'iut_lens'),
        'edit_item'                  => __('Éditer le pôle', 'iut_lens'),
        'update_item'                => __('Mettre à jour le pôle', 'iut_lens'),
        'view_item'                  => __('Voir le pôle', 'iut_lens'),
        'add_new_item'               => __('Ajouter un nouveau pôle', 'iut_lens'),
        'new_item_name'              => __('Nouveau pôle', 'iut_lens'),
        'separate_items_with_commas' => __('Séparer les pôles par une virgule', 'iut_lens'),
        'add_or_remove_items'        => __('Ajouter ou supprimer un pôle', 'iut_lens'),
        'choose_from_most_used'      => __('Choisir parmi les pôles les plus utilisés', 'iut_lens'),
        'not_found'                  => __('Aucun pôle trouvé.', 'iut_lens'),
        'no_terms'                   => __('Aucun pôle', 'iut_lens'),
        'menu_name'                  => __('Pôles', 'iut_lens'),
        'items_list_navigation'      => __('Navigation dans la liste des pôles', 'iut_lens'),
        'items_list'                 => __('Liste des pôles', 'iut_lens'),
        'back_to_items'              => __('&larr; Revenir aux pôles', 'iut_lens'),
    ],
    'show_in_rest'          => true,
    'rest_base'             => 'fields',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'rewrite'               => [
        'slug' => __('poles', 'iut_lens'),
    ],
]);
<?php
  // Récupération données
  $title = \get_field('_hp_others_title');
  $categories = \get_field('_hp_others_categories');

  // Ajustement des données
  if(!empty($title)) {
      $title = $title;
  } else {
      $title = '';
  }

  if(!empty($categories)) {
      $categories = $categories;
  } else {
      $categories = '';
  }

  // Génération du tableau
  $data_etu = [
    'title' => $title,
    'categories' => $categories,
  ];

  // debug
  //var_dump($data_etu);
  // var_dump($categories);
  
  // let's go
  include(get_template_directory().'/template-parts/homepage/Etu.php');
?>

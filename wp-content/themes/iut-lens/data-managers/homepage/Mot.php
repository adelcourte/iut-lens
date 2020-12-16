<?php
  // Récupération données
  $surtitle = \get_field('_hp_speech_uptitle');
  $title = \get_field('_hp_speech_title');
  $content = \get_field('_hp_speech_content');
  $author = \get_field('_hp_speech_author_id');

  // Ajustement des données
  if(!empty($surtitle)) {
      $surtitle = $surtitle;
  } else {
      $surtitle = '';
  }

  if(!empty($title)) {
      $title = $title;
  } else {
      $title = '';
  }

  if(!empty($content)) {
      $content = $content;
  } else {
      $content = '';
  }

  if(!empty($author)) {
      $author = $author;
  } else {
      $author = '';
  }

  // Génération du tableau
  $data_mot = [
    'surtitle' => $surtitle,
    'title' => $title,
    'content' => $content,
    'author' => $author
  ];

  // debug
  // var_dump($data_mot);

  // let's go
  include(get_template_directory().'/template-parts/homepage/Mot.php');
?>

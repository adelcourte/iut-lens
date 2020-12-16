<section>
  <h1>Section mot de la directrice</h1>
  
  <!-- Sous titre -->
  <?php if(!empty($surtitle)) : ?>
      <span><?=$surtitle; ?></span>
  <?php endif;?>

  <!-- Titre -->
  <?php if(!empty($title)) : ?>
      <span><?=$title; ?></span>
  <?php endif;?>

  <!-- Affichage des paragraphes -->
  <?php
    if(!empty($content)){
      // Pour chaque para ...
      foreach($content as $row){
        echo "<div>";
        // Titre du pargraphe
        if(!empty($row["title"])){
          echo "<span>". $row["title"] ."</span>";
        }

        // Contenu du paragraphe
        // Le paragraphe est un <p> de base
        if(!empty($row["content"])){
          echo $row["content"];
        }

        echo "</div>";
      }
      }
  ?>

  <!-- Nom de l'auteur -->
  <?php if(!empty($author)) : ?>
      <span><?=get_user_by('ID', $author)->display_name; ?></span>
  <?php endif;?>
</section>

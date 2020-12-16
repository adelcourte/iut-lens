<section>
  <h1>Section non étudiants</h1>
  
  <!-- Titre -->
  <?php if(!empty($title)) : ?>
      <span><?=$title; ?></span>
  <?php endif;?>

  <!-- Liens - Je les ai fait en UL ici, mais tu peux changer -->
  <?php
    if(!empty($categories)){
      echo "<ul>";
      // Pour chaque lien ...
      foreach($categories as $row){
        // Tu vas surtout personnaliser ici, vu que c'est là qu'est le lien. Le reste c'est du blabla technique.
        echo "<li><a href ='";
        // Url
        if(!empty($row["link"]["url"])){
          echo $row["link"]["url"] ."'>";
        } else {
          echo "'>";
        }

        // Image
        if(!empty($row["image_id"])){
          echo "<img alt='";

          // Texte alt de l'image
          if(!empty($row["title"])){
            echo $row["title"];
          }
          echo "' src='" . wp_get_attachment_url( $row["image_id"], "full") . "'></img>";


        }

        echo "</li>";
      }
      echo "</ul>";
      }
  ?>
</section>

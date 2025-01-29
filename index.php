<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>La lunetterie Senlisienne</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/headerFooter.css" />
  <link rel="stylesheet" href="assets/css/index.css" />
</head>

<body>
  <?php include('header.php') ?>
  <div class="name">
    <h1>La lunetterie Senlisienne</h1>
  </div>

  <!---------------------------------------- section main sous le header avec 3 photos * nom du de l'enseigne--------------------->

  <main>
    <section>
      <div class="container_guide">

        <div class="post-it">

          <div class="scotch"></div>
          <img
            src="assets/img/table-de-vente.jpg"
            alt="amétropie"
            class="guide_img" />
          <a href="shop.php">
            <p class="guide-text">Le magasin</p>
          </a>

        </div>

        <div class="post-it">
          <div class="scotch"></div>

          <img
            src="assets/img/entretien-lunettes-en-corne-astuces-essentielles-1708421620.jpg"
            alt="Bien choisir ses lunettes"
            class="guide_img" />
          <a href="glasses.php">
            <p class="guide-text">Guide pratique</p>
          </a>
        </div>

        <div class="post-it">
          <div class="scotch"></div>

          <img
            src="assets/img/sur-mesure2.jpg"
            alt="examen_de_vue"
            class="guide_img" />
          <a href="custom_made.php">
            <p class="guide-text">Le sur-mesure</p>
          </a>

        </div>
      </div>
    </section>
    <!--- -------------1ere section : offer------------ --->
    <section class="container-offre">

      <a href="offers.php">
        <h2>Offre du magasin</h2>
      </a>


      <div class="post-it-offre">
        <div class="scotch-offre"></div>
        <img
          src="assets/img/offre-tandem.jpg"
          alt="offre"
          class="photo_offre" />
      </div>
    </section>
    <!--- -------------2e section : les marques ------------ --->
    <section>

      <a href="brands.php">
        <h2>Nos marques</h2>
      </a>



      <div class="grid_container">

        <div class="photos-post-it2" id="friendly_frenchy">
          <a href="brands.php">
            <div class="scotch"></div>
            <img
              src="assets/img/friendly-coquillage.jpg"
              alt="friendly_frenchy" />
            <p><b>Friendly_Frenchy</b> </p>
          </a>
        </div>
        <div class="photos-post-it" id="woodys"><a href="brands.php">
            <div class="scotch"></div>
            <img src="assets/img/woodyz-scooter.jpg" alt="woodys" />
            <p><b>Woodys</b> </p>
          </a>
        </div>
        <div class="photos-post-it2" id="brique"><a href="brands.php">
            <div class="scotch"></div>
            <img src="assets/img/brique-violette-lunette.webp" alt="brique" />
            <p><b>La brique et la violette</b> </p>
          </a>
        </div>
        <div class="photos-post-it" id="sunday"><a href="brands.php">
            <div class="scotch"></div>
            <img src="assets/img/sunday-som-car.jpg" alt=" sunday-somewhere">
            <p><b>Sunday somewhere</b> </p>
          </a>
        </div>
        <div class="photos-post-it2" id="ic_berlin"><a href="brands.php">
            <div class="scotch"></div>
            <img src="assets/img/ic-berlin-montagne.jpg" alt="ic_berlin" />
            <p><b>Ic_Berlin</b> </p>
          </a>
        </div>
        <div class="photos-post-it" id="brett"><a href="brands.php">
            <div class="scotch"></div>
            <img src="assets/img/brett-porsche.jpg" alt="brett" />
            <p><b>Brett</b> </p>
          </a>
        </div>
      </div>

      </div>
    </section>
    <!--- -------------3e section : le sur mesrure------------ --->
    <section>
      <a href="custom_made.php">
        <h2>Le sur-mesure</h2>
      </a>
      <div class="container-section">

        <div class="post-it-custom_made_img">
          <div class="scotch-custom-made-img"></div>

          <img src="assets/img/sur-mesure2.jpg" alt="gab's atelier" />
          <p>
            Le sur-mesure, est l'art de rendre un objet unique. L’alliance de
            savoir faire et de technicité dont la finalité est la conception
            d’un produit aux propriétés exclusives. Du visagisme à la
            fabrication, en passant par des mesures précises, du dessin, des
            échanges, nos lunettes sont le fruit d’un travail conjoint entre
            l’artisan et le porteur.
          </p>
        </div>
      </div>
    </section>
  </main>

</body>
<?php include('footer.php') ?>

</html>
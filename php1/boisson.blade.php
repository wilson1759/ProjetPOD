<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page d'accueil</title>
  
  <!-- Liens CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Styles CSS personnalisés -->
  <style>
    .image-container {
      width: 200px;
      height: 200px;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .image-wrapper {
      display: flex;
      justify-content: flex-end;
    }
    .image-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 20px;
    }
    .image-name {
      font-size: 14px;
      margin-top: 10px;
    }

  
    .image-container img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
    }

    .align-right .image-wrapper {
      justify-content: flex-end;
    }
  </style>
  <style>
    /* Styles pour la barre de navigation verticale */
    .vertical-nav {
      width: 180px;
      height: 100%;
      background-color: #333;
      position: fixed;
      left: 0;
      top: 0;
      padding-top: 5px;
    }

    .vertical-nav a {
      display: block;
      color: #fff;
      padding: 16px;
      text-decoration: none;
    }

    .vertical-nav a:hover {
      background-color: #555;
    }

    /* Styles pour la barre de navigation horizontale */
    .horizontal-nav {
      background-color: #333;
      overflow: hidden;
    }

    .horizontal-nav a {
      float: left;
      display: block;
      color: #fcfafa;
      text-align: center;
      padding: 12px 66px;
      text-decoration: none;
    }

    .horizontal-nav a:hover {
      background-color: #555;
    }

    /* Contenu principal */
    .main-content {
      margin-left: 200px;
      padding: 20px;
    }
  </style>
</head>
<body>
  <!-- Barre de navigation verticale -->
  <div class="vertical-nav">
    <a href="/afrique">AFRIQUE</a>
    <a href="/europe">EUROPE</a>
    <a href="/amerique">AMERIQUE</a>
    <a href="/asi">ASIE</a>
  </div>
  <!-- Barre de navigation horizontale -->

  <div class="horizontal-nav">
    <a href="#">AFRIQUE</a>
    <a href="/dessert">DESSERT</a>
    <a href="/boisson">BOISSON</a>
    <a href="/aperitif">APERITIF</a>
  </div>
  <!-- Contenu principal -->
  <div class="main-content">
    <h1>Bienvenue sur ma page</h1>
    <p>Voici le contenu principal de ma page.</p>
  </div>
  <div class="container my-5">
    <h1 class="text-center mb-5">Tableau d'images</h1>

    <div class="row" id="image-grid">
      <!-- Les images et leurs noms seront insérés ici dynamiquement -->
    </div>

    <div class="d-flex justify-content-center mt-4">
      <button id="align-images" class="btn btn-primary">Appeler le 683-04-18-14</button>
    </div>
  </div>

  <!-- Liens JavaScript Bootstrap et jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Script JavaScript personnalisé -->
  <script>
    // Liste des chemins des images locales et de leurs noms
    var imageData = [
      { path: 'img/chateau latour 1990.png', name: 'chateau latour 1990' },
      { path: 'img/el mundo.jpg', name: 'el mundo' },
      { path: 'img/san simon.jpg', name: 'san simon' },
      { path: 'img/vin rose.jpg', name: 'vin rose' },
      { path: 'img/vin malgash.jpg', name: 'vin malgash' },
      { path: 'img/puch-haut.jpg', name: 'puch-haut' }
    ];

    var isAlignedRight = false;

    // Fonction pour créer et insérer les éléments d'image dans le tableau
    function displayImages() {
      var imageGrid = $('#image-grid');
      imageGrid.empty(); // Vider le tableau avant d'ajouter de nouvelles images

      for (var i = 0; i < imageData.length; i++) {
        var imageWrapper = $('<div>').addClass('col-md-4 image-wrapper');
        var imageContainer = $('<div>').addClass('image-container');
        var image = $('<img>').attr('src', imageData[i].path).attr('alt', imageData[i].name);
        var imageName = $('<div>').addClass('image-name').text(imageData[i].name);
        imageContainer.append(image);
        imageWrapper.append(imageContainer);
        imageWrapper.append(imageName);
        imageGrid.append(imageWrapper);
      }

      toggleImageAlignment();
    }

    function toggleImageAlignment() {
      if (isAlignedRight) {
        $('#image-grid').removeClass('align-right');
      } else {
        $('#image-grid').addClass('align-right');
      }
      isAlignedRight = !isAlignedRight;
    }

    // Appeler la fonction pour afficher les images
    displayImages();

    // Ajouter un écouteur d'événement pour le bouton "Aligner les images à droite"
    $('#align-images').click(function() {
      toggleImageAlignment();
    });
  </script>
</body>
</html>
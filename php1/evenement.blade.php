<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Bienvenue sur notre site</title>

    <!-- Chargement des bibliothèques CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="custom.css">
  
    <!-- Chargement des bibliothèques JavaScript et jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="custom.js"></script>

    <style>
        /* Styles généraux */
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
        }
    
        /* Styles du carrousel */
        .carousel {
          display: flex;
          flex-direction: row;
          align-items: center;
          justify-content: center;
          height: 400px;
          width: 100%;
          overflow: hidden;
        }
    
        .carousel-image {
          width: 60%;
          height: 100%;
          object-fit: cover;
        }
    
        .carousel-description {
          width: 20%;
          height: 100%;
          display: flex;
          flex-direction: column;
          justify-content: center;
          padding: 0 20px;
        }
    
        .carousel-description-left {
          text-align: right;
        }
    
        .carousel-description-right {
          text-align: left;
        }
    
        /* Styles des sections */
        .section {
          padding: 40px;
        }
    
        .section h2 {
          text-align: center;
        }
      </style>

</head>
<body>
    
 <!-- Barre de navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">HOTEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/chambre">Chambres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/afrique">Se nourrir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/evenement">Événements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/service">Services</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Contenu principal -->
  <div class="container my-5">
    <h1>Bienvenue sur notre site</h1>
    <p>Découvrez nos offres et réservez dès maintenant !</p>
    <!-- Ajoutez ici le contenu de votre page d'accueil -->
  </div>


  <header>
    <h1>Événements et réunions</h1>
  </header>

  <section class="section">
    <div class="carousel">
      <img class="carousel-image" src="{{asset('img/7647ba0603812cff78686f5ff0828114.jpg')}}" alt="Salle de conférence">
      <div class="carousel-description carousel-description-left">
        <h2>Salle de conférence</h2>
        <p>Notre salle de conférence est équipée des dernières technologies pour accueillir vos réunions professionnelles.</p>
      </div>
      <div class="carousel-description carousel-description-right">
        <h2>Célébration de mariage</h2>
        <p>Célébrez votre mariage dans notre magnifique salle de réception, parfaitement aménagée pour l'occasion.</p>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="carousel">
      <img class="carousel-image" src="{{asset('img/01deec2c2ff107c4389eeb33cee86829.jpg')}}" alt="Salle de mariage">
      <div class="carousel-description carousel-description-left">
        <h2>Salle de mariage</h2>
        <p>Nos salles de mariage peuvent accueillir jusqu'à 200 invités pour célébrer votre union dans les meilleures conditions.</p>
      </div>
      <div class="carousel-description carousel-description-right">
        <h2>Salle de réunion</h2>
        <p>Nos salles de réunion sont conçues pour faciliter vos échanges et vos collaborations dans un cadre professionnel.</p>
      </div>
    </div>
  </section>

  <script>
    // Sélectionner tous les éléments du carrousel
    const carouselImages = document.querySelectorAll('.carousel-image');
    const carouselDescriptions = document.querySelectorAll('.carousel-description');

    // Tableau d'images et de descriptions
    
    const descriptions = [
      {
        left: 'Salle de conférence',
        right: 'Célébration de mariage'
      },
      {
        left: 'Salle de mariage',
        right: 'Salle de réunion'
      },
      {
        left: 'Salle de réunion',
        right: 'Salle de conférence'
      }
    ];

    // Fonction pour mettre à jour le carrousel
    function updateCarousel(index) {
      carouselImages.forEach((image, i) => {
        image.src = images[i];
      });

      carouselDescriptions.forEach((description, i) => {
        description.children[0].textContent = descriptions[i].left;
        description.children[1].textContent = descriptions[i].right;
      });
    }

    // Défilement automatique du carrousel
    let currentIndex = 0;
    setInterval(() => {
      currentIndex = (currentIndex + 1) % images.length;
      updateCarousel(currentIndex);
    }, 5000);
  </script>

  <!-- Pied de page -->
 

  <footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; 2023 Mon Site. Tous droits réservés.</p>
        </div>
        <div class="col-md-6 text-md-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="text-white">Mentions légales</a></li>
            <li class="list-inline-item"><a href="#" class="text-white">Politique de confidentialité</a></li>
            <li class="list-inline-item"><a href="#" class="text-white">Contactez-nous</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
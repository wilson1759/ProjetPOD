<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue sur notre site</title>

  <!-- Chargement des bibliothèques CSS navbar -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="custom.css">

  <!-- Chargement des bibliothèques JavaScript et jQuery pour la navbar -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="custom.js"></script>
  
  <!-- Chargement des bibliothèques CSS accueil -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="custom.css">

  <!-- Chargement des bibliothèques JavaScript et jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="custom.js"></script>
  <!--geolocalisation-->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <style>
    #map {
      height: 300px;
      width: 100%;
    }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
    .carousel-item {
      height: 300px;
    }
    .carousel-item img {
      object-fit: cover;
      height: 100%;
      width: 100%;
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
        <li class="nav-item active">
          <a class="nav-link" href="/chambre">Chambres</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/afrique">Se nourrir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/evenement">Événements</a>
        </li>
        <li class="nav-item active">
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
  <div class="container my-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://picsum.photos/id/1057/1920/1080" alt="Première image">
          <div class="carousel-caption d-none d-md-block">
            <h5>Bienvenue à l'Hôtel Grand Luxe</h5>
            <p>Profitez de notre hébergement de luxe.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://picsum.photos/id/1060/1920/1080" alt="Deuxième image">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chambres spacieuses et confortables</h5>
            <p>Laissez-vous séduire par notre hôtel.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://picsum.photos/id/1055/1920/1080" alt="Troisième image">
          <div class="carousel-caption d-none d-md-block">
            <h5>Réservez dès maintenant !</h5>
            <p>Profitez de nos tarifs avantageux.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
    <hr>
    <section>
<P align="center">RESERVER ICI</p>
   <form class="row g-3" method="post" action="/traitement/reservation">
   @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">NOM Du Client</label>
    <input type="text" class="form-control" id="inputPassword4" name="nom">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">standing</label>
   <input type="text" class="form-control" id="inputPassword4" name="standing">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Numero CNI</label>
    <input type="text" class="form-control" id="inputPassword4" name="cni">
  </div>
<hr>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Date Arrivee</label>
   <input type="date" class="form-control" id="inputPassword4" name="arrivee">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Date Depart</label>
    <input type="date" class="form-control" id="inputPassword4" name="depart">
  </div>  
   <div class="col-12">
    <label for="inputAddress" class="form-label">Nombre De Chambre</label>
    <input type="number" class="form-control" id="inputAddress" name="chambre">
  </div>
  <hr>
  <div class="col-12">
  <hr>
    <button type="submit" class="btn btn-primary">Reserver</button>
  </div>
</form>
</section>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{asset('img/pexels-pixabay-262048.jpg')}}" alt="Chambre d'hôtel">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('img/pexels-jvdm-1457847.jpg')}}" alt="Toilette d'hôtel">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('img/hamacs-pres-piscine_1203-693.jpg')}}" alt="Balcon d'hôtel">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <h2>Chambre d'hôtel au Cameroun</h2>
        <p>Découvrez notre chambre d'hôtel spacieuse et confortable au Cameroun. Avec une superficie de 25 m², elle offre tout le confort nécessaire pour un séjour agréable. Vous apprécierez son grand lit double, son espace de travail, son coin salon et son balcon privé avec vue sur le jardin.</p>
        <p>La salle de bain privative est équipée d'une douche et de tous les équipements de premier choix pour votre bien-être.</p>
        <p>Profitez également des nombreux services de l'hôtel pour rendre votre séjour inoubliable.</p>
      </div>
    </div>
  </div>

  <h1>Géolocalisation de l'hôtel au Cameroun</h1>
  <div id="map"></div>

  <script>
    // Coordonnées de l'hôtel au Cameroun
    const hotelLatitude = 4.0419;
    const hotelLongitude = 9.7674;

    // Création de la carte
    const map = L.map('map').setView([hotelLatitude, hotelLongitude], 11);

    // Ajout de la couche de tuiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Ajout du marqueur de l'hôtel
    const hotelMarker = L.marker([hotelLatitude, hotelLongitude]).addTo(map);
    hotelMarker.bindPopup("<b>Hôtel au Cameroun</b><br>Voici la géolocalisation de l'hôtel.").openPopup();
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
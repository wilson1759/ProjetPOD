<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  <!-- Chargement des bibliothèques CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="custom.css">

  <!-- Chargement des bibliothèques JavaScript et jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="custom.js"></script>


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


<hr>
<section>
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
                  <img class="d-block w-100" src="{{asset('img/pexels-pixabay-164595.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/pexels-hakimsatoso-3634742.jpg')}}" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/tre.webp')}}" alt="Balcon d'hôtel">
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
<section>
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
                  <img class="d-block w-100" src="{{asset('img/pexels-enginakyurt-1579253.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/pexels-olly-3770884.jpg')}}" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/imh.jpg')}}" alt="Balcon d'hôtel">
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
<section>
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
                  <img class="d-block w-100" src="{{asset('img/pexels-jonathanborba-3144580.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/pexels-heyho-6585741.jpg')}}" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/60954d9d20224feaf1425dc977698362.jpg')}}" alt="Balcon d'hôtel">
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
<section>
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
<section>
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
                  <img class="d-block w-100" src="{{asset('img/pexels-fotoaibe-1743229.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/06133df2e5fb44236e564cfc65bd530b.jpg')}}" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/d208e734275e1a2f8064aaf5cd13c513.jpg')}}" alt="Balcon d'hôtel">
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
<section>
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
                  <img class="d-block w-100" src="{{asset('img/3c3ccfe3952c234768b96c612ece803e.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/1615b5fe9a1cfcc90d9536c35e4f3840.jpg')}}" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/406067b657e75c724a221b8d9f1a3105.jpg')}}" alt="Balcon d'hôtel">
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
<section>
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
                  <img class="d-block w-100" src="{{asset('img/fdb33652a516d21327d1bd232a236d9a.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/17a733b258e00071753daadd6c147ce5.jpg')}}" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/ef8ddf9b2843c64fef6b21ce1dd0911f.jpg')}}" alt="Balcon d'hôtel">
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
<section>
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
                  <img class="d-block w-100" src="{{asset('img/47d98973498d32cf90a4f6d5e6b107c6.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/663fdc9e2b94073bd276c7f1a3d097fd.jpg')}}" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/dbad5c911e237b409fa849fdc2533459.jpg')}}" alt="Balcon d'hôtel">
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
<section>
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
                  <img class="d-block w-100" src="{{asset('img/pexels-wdnet-97083.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/297df1a3e44717f86ea41f42f552494d.jpg')}}" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/f1cb82c2a71059ade9f2886d842984a7.jpg')}}" alt="Balcon d'hôtel">
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
<section>
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
                  <img class="d-block w-100" src="pexels-andrew-3201761.jpg" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="06133df2e5fb44236e564cfc65bd530b.jpg" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="251a96208351b80bb5cd04bbbe6ebd06.jpg" alt="Balcon d'hôtel">
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
<section>
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
                  <img class="d-block w-100" src="pexels-pixabay-279746.jpg" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="663fdc9e2b94073bd276c7f1a3d097fd.jpg" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="tre.webp" alt="Balcon d'hôtel">
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
            <a href="cccs.html" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
</section>

<hr>
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
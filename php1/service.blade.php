<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Mon Site</a>
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
          <a class="nav-link" href="/se nourrir">Se nourrir</a>
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
                  <img class="d-block w-100" src="{{asset('img/d4bf8b80ed2cd422a99c856a72d5ec6d.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/80c9e336a7921a2435e268613d3878ab.jpg')}}" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/dbc047878b7a04df3f37b5b5def277c2.jpg')}}" alt="Balcon d'hôtel">
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
            <h2> FITNESS ROOM & ROOFTOP TENNIS COURT</h2>
            <p>
       

                The fitness room has ubiquitous natural light. It is equipped with high-end and latest generation equipments.

                The stuning view of our rooftop tennis court is ready to welcome you and your friends for an invigorating set.

                Open daily from 6:00 am to 10:00 pm
            </p>
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
                  <img class="d-block w-100" src="{{asset('img/e525ca53110619c0fa19445c5b83194d.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/bcf7365dc40a0627f60800c89080ef7d.jpg')}}" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/6aeca001df3d81235451d52fec92231a.jpg')}}" alt="Balcon d'hôtel">
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
            <h2>SWIMMING-POOL</h2>
            <p>

                If you want to lower stress level, reduce anxiety and depression and improve your sleep patterns, offer you a refreshing experience in our swimming pool. .</p>
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
                  <img class="d-block w-100" src="{{asset('img/c3ebc026cc86ac2922b859fc4fbc50c1.jpg')}}" alt="Chambre d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/3c88b94cbde954f8a810af1fc79abff0.jpg')}}'" alt="Toilette d'hôtel">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('tre.webp')}}" alt="Balcon d'hôtel">
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
            <h2>SPA</h2>
            <p>

                Enjoy your stay with our gentle treatments offered by our sauna, steam room and jacuzzi facilities.
                Solo or as a couple, take the time to relax in one of our massage rooms..</p>
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
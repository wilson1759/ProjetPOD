<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Employes</title>
     <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
    <style>
        .sdk {
            display: block;
            position: absolute;
            background-position: center;
            text-align: center;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <script>
        function checkout() {
            CinetPay.setConfig({
                apikey: '15528400396660f45d1ad381.33698397',//   YOUR APIKEY
                site_id: '5873321',//YOUR_SITE_ID
                notify_url: 'http://mondomaine.com/notify/',
                mode: 'PRODUCTION'
            });
            CinetPay.getCheckout({
                transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
                amount: 15.000,
                currency: 'XOF',
                channels: 'ALL',
                description: 'Test de paiement',   
                 //Fournir ces variables pour le paiements par carte bancaire
                customer_name:"bissa",//Le nom du client
                customer_surname:"williams",//Le prenom du client
                customer_email: "wilsonlove995@gmail.com",//l'email du client
                customer_phone_number: "683041814",//l'email du client
                customer_address : "BP 0024",//addresse du client
                customer_city: "Yaounde",// La ville du client
                customer_country : "CM",// le code ISO du pays
                customer_state : "CM",// le code ISO l'état
                customer_zip_code : "06510", // code postal

            });
            CinetPay.waitResponse(function(data) {
                if (data.status == "REFUSED") {
                    if (alert("Votre paiement a échoué")) {
                        window.location.reload();
                    }
                } else if (data.status == "ACCEPTED") {
                    if (alert("Votre paiement a été effectué avec succès")) {
                        window.location.reload();
                    }
                }
            });
            CinetPay.onError(function(data) {
                console.log(data);
            });
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Bienvenue!!!</h1>
   <section>
   <div class="form-check form-switch">
  <a href="/session" type="checkbox"><input class="form-check-input" type="submit" role="switch" id="flexSwitchCheckChecked">
  <label class="form-check-label" for="flexSwitchCheckChecked">Session</label>
  </a>
</div>
<P align="center">RESERVER ICI</p>
   <form class="row g-3" method="post" action="/traitement/presentielle">
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
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Date Arrivee</label>
   <input type="date" class="form-control" id="inputPassword4" name="arrivee">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Date Depart</label>
    <input type="date" class="form-control" id="inputPassword4" name="depart">
  </div>  
   <div class="col-md-6">
    <label for="inputAddress" class="form-label">Nombre De Chambre</label>
    <input type="number" class="form-control" id="inputAddress" name="chambre">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Mode de Payement</label>
    <input type="text" class="form-control" id="inputAddress" name="paiement">
  </div>
  
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary">Valider</button>
  </div>
   <div class="col-md-6">
    <button type="submit" class="btn btn-danger" onclick="checkout() ">Payer</button>
  </div>
</form>
</section>
<section>
<P align="center">RESTAURATION</p>
   <form class="row g-3" method="post" action="/traitement/resto">
   @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nom Duclient</label>
    <input type="text" class="form-control" id="inputEmail4" name="nom">
  </div>
   <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Numero CNI</label>
    <input type="text" class="form-control" id="inputPassword4" name="cni">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Repas</label>
   <input type="text" class="form-control" id="inputPassword4" name="repas">
  </div>
 
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Complement</label>
    <input type="text" class="form-control" id="inputPassword4" name="complement">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Date </label>
   <input type="date" class="form-control" id="inputPassword4" name="jour">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Heure</label>
    <input type="time" class="form-control" id="inputPassword4" name="heure">
  </div>  
   <div class="col-md-6">
    <label for="inputAddress" class="form-label">Nombre De Plat</label>
    <input type="number" class="form-control" id="inputAddress" name="plat">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Mode de Payement</label>
    <input type="text" class="form-control" id="inputAddress" name="paiement">
  </div>
  
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary">Valider</button>
  </div>
   <div class="col-md-6">
    <button type="submit" class="btn btn-danger" onclick="checkout()">Payer</button>
  </div>
</form>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
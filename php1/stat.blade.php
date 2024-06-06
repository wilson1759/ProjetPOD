<!DOCTYPE html>
<html>
<head>
  <title>Statistiques d'activité employé d'hôtel</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
</head>
<body>
  <h1>Statistiques d'activité sur 24h</h1>

  <h2>Temps de travail</h2>
  <canvas id="graphique-temps-travail"></canvas>

  <h2>Pauses</h2>
  <canvas id="graphique-pauses"></canvas>

  <h2>Productivité</h2>
  <canvas id="graphique-productivite"></canvas>

  <h2>Répartition des tâches</h2>
  <canvas id="graphique-repartition"></canvas>

  <script>
    // Données pour le temps de travail
    var labelsTempsTravail = ['00h-04h', '04h-08h', '08h-12h', '12h-16h', '16h-20h', '20h-00h'];
    var donneesTempsTravail = [2, 4, 6, 5, 3, 4];

    // Données pour les pauses
    var labelsPauses = ['Pause déjeuner', 'Pause café matin', 'Pause café après-midi'];
    var donneesPauses = [1, 2, 1];

    // Données pour la productivité
    var labelsProductivite = ['Très productif', 'Productif', 'Peu productif'];
    var donneesProductivite = [6, 10, 8];

    // Données pour la répartition des tâches
    var labelsRepartition = ['Accueil', 'Ménage', 'Service', 'Autres'];
    var donneesRepartition = [30, 40, 20, 10];

    // Fonction pour créer un graphique
    function creerGraphique(id, labels, donnees, type = 'bar') {
      var ctx = document.getElementById(id).getContext('2d');
      new Chart(ctx, {
        type: type,
        data: {
          labels: labels,
          datasets: [{
            label: '',
            data: donnees,
            backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(54, 162, 235, 1)',
              'rgba(255, 99, 132, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    }

    // Créer les graphiques
    creerGraphique('graphique-temps-travail', labelsTempsTravail, donneesTempsTravail);
    creerGraphique('graphique-pauses', labelsPauses, donneesPauses);
    creerGraphique('graphique-productivite', labelsProductivite, donneesProductivite);
    creerGraphique('graphique-repartition', labelsRepartition, donneesRepartition, 'doughnut');
  </script>
</body>
</html>
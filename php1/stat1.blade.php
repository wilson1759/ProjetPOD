<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Statistiques de l'hôtel</title>
  <script src="https://cdn.plot.ly/plotly-2.18.0.min.js"></script>
  <style>
    /* Styles CSS inclus ici */
  </style>
</head>
<body>
  <div class="container">
    <h1>Statistiques de l'hôtel</h1>
    <div class="chart-container">
      <div class="chart" id="occupancyRateChart"></div>
      <div class="chart" id="roomsBookedChart"></div>
      <div class="chart" id="revenueChart"></div>
      <div class="chart" id="reviewsChart"></div>
    </div>
  </div>

  <script>
    // Données fictives pour les statistiques de l'hôtel
    const occupancyRateData = [85, 90, 92, 88, 91, 87, 89];
    const roomsBookedData = [120, 135, 140, 125, 130, 118, 128];
    const revenueData = [15000, 17500, 18000, 16000, 17000, 15500, 16800];
    const reviewsData = [87, 92, 95, 90, 91, 88, 93];

    // Fonctions pour créer les graphiques
    function createOccupancyRateChart() {
      // Configuration du diagramme de taux d'occupation
      const occupancyRateTrace = {
        x: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
        y: occupancyRateData,
        type: 'bar',
        marker: {
          color: '#007bff'
        }
      };

      const occupancyRateLayout = {
        title: 'Taux d\'occupation',
        xaxis: { title: 'Jour' },
        yaxis: { title: 'Taux d\'occupation (%)' }
      };

      Plotly.newPlot('occupancyRateChart', [occupancyRateTrace], occupancyRateLayout);
    }

    function createRoomsBookedChart() {
      // Configuration du diagramme de chambres réservées
      const roomsBookedTrace = {
        x: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
        y: roomsBookedData,
        type: 'bar',
        marker: {
          color: '#28a745'
        }
      };

      const roomsBookedLayout = {
        title: 'Chambres réservées',
        xaxis: { title: 'Jour' },
        yaxis: { title: 'Nombre de chambres' }
      };

      Plotly.newPlot('roomsBookedChart', [roomsBookedTrace], roomsBookedLayout);
    }

    function createRevenueChart() {
      // Configuration du diagramme de revenu
      const revenueTrace = {
        x: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
        y: revenueData,
        type: 'line',
        marker: {
          color: '#ffc107'
        }
      };

      const revenueLayout = {
        title: 'Revenu',
        xaxis: { title: 'Jour' },
        yaxis: { title: 'Revenu (€)' }
      };

      Plotly.newPlot('revenueChart', [revenueTrace], revenueLayout);
    }

    function createReviewsChart() {
      // Configuration du diagramme d'avis
      const reviewsTrace = {
        x: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
        y: reviewsData,
        type: 'line',
        marker: {
          color: '#dc3545'
        }
      };

      const reviewsLayout = {
        title: 'Avis',
        xaxis: { title: 'Jour' },
        yaxis: { title: 'Nombre d\'avis' }
      };

      Plotly.newPlot('reviewsChart', [reviewsTrace], reviewsLayout);
    }

    // Appel des fonctions pour créer les graphiques
    createOccupancyRateChart();
    createRoomsBookedChart();
    createRevenueChart();
    createReviewsChart();
  </script>
</body>
</html>
/* MediCitas: gráfico ilustrativo. Valores ficticios, no conectados a una base de datos. */
(function () {
    if (typeof Chart === 'undefined') return;
    var canvas = document.getElementById('myAreaChart');
    if (!canvas) return;
    new Chart(canvas, {
        type: 'line',
        data: {
            labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4', 'Semana 5', 'Semana 6'],
            datasets: [{
                label: 'Citas',
                data: [8, 12, 10, 16, 14, 19],
                fill: true,
                lineTension: 0.3,
                backgroundColor: 'rgba(13, 148, 136, 0.11)',
                borderColor: '#0d9488',
                pointBackgroundColor: '#0d9488',
                pointBorderColor: '#ffffff',
                pointRadius: 4,
                pointHoverRadius: 6,
                borderWidth: 3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            legend: {display: false},
            tooltips: {mode: 'index', intersect: false},
            scales: {
                xAxes: [{gridLines: {display: false}}],
                yAxes: [{ticks: {beginAtZero: true, precision: 0}, gridLines: {color: 'rgba(15, 23, 42, .06)'}}]
            }
        }
    });
})();

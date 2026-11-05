/* MediCitas: gráfico ilustrativo. Valores ficticios. */
(function () {
    if (typeof Chart === 'undefined') return;
    var canvas = document.getElementById('myBarChart');
    if (!canvas) return;
    new Chart(canvas, {
        type: 'bar',
        data: {
            labels: ['General', 'Cardiología', 'Pediatría', 'Dermatología', 'Ginecología', 'Traumatología'],
            datasets: [{
                label: 'Pacientes',
                data: [2, 2, 1, 1, 1, 1],
                backgroundColor: ['#0d9488', '#22b8aa', '#60a5fa', '#93c5fd', '#cbd5e1', '#7dd3fc'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            legend: {display: false},
            scales: {
                xAxes: [{gridLines: {display: false}}],
                yAxes: [{ticks: {beginAtZero: true, precision: 0}, gridLines: {color: 'rgba(15, 23, 42, .06)'}}]
            }
        }
    });
})();

// Controles de las tablas traducidos al español para MediCitas.
window.addEventListener('DOMContentLoaded', () => {
    const tabla = document.getElementById('datatablesSimple');
    if (tabla && typeof simpleDatatables !== 'undefined') {
        new simpleDatatables.DataTable(tabla, {
            labels: {
                placeholder: 'Buscar...',
                searchTitle: 'Buscar dentro de la tabla',
                perPage: 'registros por página',
                noRows: 'No hay registros para mostrar',
                noResults: 'No se encontraron resultados',
                info: 'Mostrando {start} a {end} de {rows} registros'
            }
        });
    }
});

# MediCitas — Panel Administrativo (proyecto académico)

Dashboard médico adaptado de **SB Admin / Start Bootstrap** para la práctica de HTML a PHP y despliegue en la nube. Contiene las secciones **Dashboard**, **Pacientes**, **Doctores**, **Agendar Cita** e **Historial Clínico**.

## Ejecución local en Laragon

1. Descomprime la carpeta `app-medica` dentro de `C:\laragon\www`.
2. Abre Laragon y pulsa **Iniciar todo** (Apache).
3. Visita `http://localhost/app-medica/index.php` en el navegador.
4. Abre los cinco enlaces del menú lateral y verifica que las páginas se carguen.

**Alternativa con PHP instalado:** abre una terminal en la carpeta `app-medica`, ejecuta `php -S localhost:8000` y visita `http://localhost:8000/`.

## Estructura

- `index.php`: inicio y resumen gráfico.
- `pacientes.php`: listado de pacientes ficticios.
- `doctores.php`: directorio médico ficticio.
- `agendar-cita.php`: formulario PHP de demostración con validaciones y vista previa (no guarda citas).
- `historial-clinico.php`: historial de ejemplo, sin datos médicos reales.
- `css/`: CSS local de Bootstrap/SB Admin y personalización MediCitas.
- `js/`: comportamiento del menú y tablas interactivas.
- `assets/demo/`: datos ficticios de los gráficos del dashboard.

## Notas importantes

- **Todos los pacientes, médicos, fechas y estadísticas son ficticios.** No se conectan a una base de datos y no se registran citas reales.
- Los archivos `.php` y sus rutas internas son relativos; no dependen de la ubicación de Windows.
- La hoja principal `css/styles.css` está en el proyecto. Las bibliotecas de iconos, gráficos y tablas usan CDN, por lo que requieren conexión a Internet.
- Usa un servidor que ejecute PHP, no abras los archivos `.php` con doble clic ni con Live Server de HTML.
- La plantilla original SB Admin es de Start Bootstrap y tiene licencia MIT. Información: https://github.com/StartBootstrap/startbootstrap-sb-admin

## Publicación y entrega

Sube esta carpeta a tu repositorio (GitHub) y a una plataforma compatible con PHP. Comprueba el enlace público **antes** de enviarlo. Adjunta tus capturas reales de Laragon/código y de la página publicada. Copia la URL pública también en el campo de texto del aula virtual.

## Actualización de presentación

- Los gráficos usan datos ficticios coherentes con las ocho fichas de demostración.
- Los controles de las tablas están en español.
- Las etiquetas `?v=20261105-2` de los scripts evitan mostrar gráficos antiguos guardados en la caché del navegador.
- Las próximas citas de ejemplo están coordinadas entre el Dashboard y la sección Pacientes.


<?php
// Mantener fechas de la demostración consistentes entre Laragon y el servidor remoto.
date_default_timezone_set('America/Santo_Domingo');
$pacientes = [
    'P001' => 'Paciente 001',
    'P002' => 'Paciente 002',
    'P003' => 'Paciente 003',
    'P004' => 'Paciente 004',
    'P005' => 'Paciente 005',
    'P006' => 'Paciente 006',
    'P007' => 'Paciente 007',
    'P008' => 'Paciente 008'
];

$doctores = [
    'D001' => 'Dra. Laura Fernández - Medicina General',
    'D002' => 'Dr. Carlos Martínez - Cardiología',
    'D003' => 'Dra. Ana Rodríguez - Pediatría',
    'D004' => 'Dr. Miguel Pérez - Dermatología',
    'D005' => 'Dra. Sofía Ramírez - Ginecología',
    'D006' => 'Dr. José Castillo - Traumatología',
    'D007' => 'Dra. María López - Medicina General',
    'D008' => 'Dr. Andrés Gómez - Cardiología'
];

$motivos = [
    'Consulta general',
    'Evaluación inicial',
    'Consulta de seguimiento',
    'Chequeo preventivo'
];

$paciente = is_string($_POST['paciente'] ?? null) ? $_POST['paciente'] : '';
$doctor = is_string($_POST['doctor'] ?? null) ? $_POST['doctor'] : '';
$fecha = is_string($_POST['fecha'] ?? null) ? $_POST['fecha'] : '';
$hora = is_string($_POST['hora'] ?? null) ? $_POST['hora'] : '';
$motivo = is_string($_POST['motivo'] ?? null) ? $_POST['motivo'] : '';
$errores = [];
$confirmacion = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!array_key_exists($paciente, $pacientes)) {
        $errores[] = 'Selecciona un paciente válido.';
    }

    if (!array_key_exists($doctor, $doctores)) {
        $errores[] = 'Selecciona un doctor válido.';
    }

    $fechaValida = DateTimeImmutable::createFromFormat('!Y-m-d', $fecha);

    if (!$fechaValida || $fechaValida->format('Y-m-d') !== $fecha || $fecha < date('Y-m-d')) {
        $errores[] = 'Selecciona una fecha válida que no sea anterior a hoy.';
    }

    if (!preg_match('/^(?:0[8-9]|1[0-7]):(?:00|30)$/', $hora)) {
        $errores[] = 'Selecciona una hora disponible entre las 8:00 y las 17:30.';
    }

    if (!in_array($motivo, $motivos, true)) {
        $errores[] = 'Selecciona un motivo de consulta.';
    }

    $confirmacion = count($errores) === 0;
}

function mostrar($valor): string
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendar Cita - MediCitas</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/medicitas.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.php"><i class="fas fa-heart-pulse me-2" aria-hidden="true"></i>MediCitas</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" type="button">
            <i class="fas fa-bars"></i>
        </button>
        <span class="navbar-text ms-auto me-4 text-white">Panel Administrativo <span class="ms-2 badge rounded-pill text-bg-light">DEMO</span></span>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">General</div>

                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <div class="sb-sidenav-menu-heading">Gestión médica</div>

                        <a class="nav-link" href="pacientes.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Pacientes
                        </a>

                        <a class="nav-link" href="doctores.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-md"></i></div>
                            Doctores
                        </a>

                        <a class="nav-link active" aria-current="page" href="agendar-cita.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-plus"></i></div>
                            Agendar Cita
                        </a>

                        <a class="nav-link" href="historial-clinico.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-medical"></i></div>
                            Historial Clínico
                        </a>
                    </div>
                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Sistema de demostración</div>
                    MediCitas
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">
                        <i class="fas fa-calendar-plus text-primary me-2"></i>
                        Agendar Cita Médica
                    </h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Agendar Cita</li>
                    </ol>

                    <div class="alert alert-info" role="alert">
                        <i class="fas fa-info-circle me-2"></i>
                        Formulario de demostración de MediCitas.
                        Utiliza únicamente pacientes ficticios.
                        Las citas no se guardan ni se envían a ningún servicio.
                    </div>

                    <?php if ($errores): ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Revisa los siguientes campos:</strong>
                            <ul class="mb-0 mt-2">
                                <?php foreach ($errores as $error): ?>
                                    <li><?= mostrar($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if ($confirmacion): ?>
                        <div class="alert alert-success" role="status">
                            <h5>
                                <i class="fas fa-check-circle me-2"></i>
                                Vista previa de cita creada
                            </h5>

                            <p class="mb-1">
                                <strong>Paciente:</strong>
                                <?= mostrar($pacientes[$paciente]) ?>
                            </p>

                            <p class="mb-1">
                                <strong>Doctor:</strong>
                                <?= mostrar($doctores[$doctor]) ?>
                            </p>

                            <p class="mb-1">
                                <strong>Fecha:</strong> <?= mostrar($fecha) ?>
                            </p>

                            <p class="mb-1">
                                <strong>Hora:</strong> <?= mostrar($hora) ?>
                            </p>

                            <p class="mb-1">
                                <strong>Motivo:</strong> <?= mostrar($motivo) ?>
                            </p>

                            <p class="mb-0 mt-2">
                                <strong>Importante:</strong>
                                Esta es una vista previa. No se ha guardado ni reservado ninguna cita real.
                            </p>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-calendar-check me-1"></i>
                                    Formulario de Programación de Citas
                                </div>

                                <div class="card-body">
                                    <form method="post" action="agendar-cita.php">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="paciente" class="form-label">Paciente</label>
                                                <select name="paciente" id="paciente" class="form-select" required>
                                                    <option value="">Seleccionar paciente</option>

                                                    <?php foreach ($pacientes as $id => $nombre): ?>
                                                        <option value="<?= mostrar($id) ?>" <?= $paciente === $id ? 'selected' : '' ?>>
                                                            <?= mostrar($nombre) ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="doctor" class="form-label">Doctor y especialidad</label>
                                                <select name="doctor" id="doctor" class="form-select" required>
                                                    <option value="">Seleccionar doctor</option>

                                                    <?php foreach ($doctores as $id => $nombre): ?>
                                                        <option value="<?= mostrar($id) ?>" <?= $doctor === $id ? 'selected' : '' ?>>
                                                            <?= mostrar($nombre) ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="fecha" class="form-label">Fecha de la cita</label>
                                                <input
                                                    type="date"
                                                    name="fecha"
                                                    id="fecha"
                                                    class="form-control"
                                                    min="<?= date('Y-m-d') ?>"
                                                    value="<?= mostrar($fecha) ?>"
                                                    required
                                                >
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="hora" class="form-label">Hora de la cita</label>
                                                <select name="hora" id="hora" class="form-select" required>
                                                    <option value="">Seleccionar hora</option>

                                                    <?php for ($h = 8; $h <= 17; $h++): ?>
                                                        <?php foreach (['00', '30'] as $minuto): ?>
                                                            <?php $opcion = sprintf('%02d:%s', $h, $minuto); ?>
                                                            <option value="<?= $opcion ?>" <?= $hora === $opcion ? 'selected' : '' ?>>
                                                                <?= $opcion ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="motivo" class="form-label">Motivo de consulta</label>
                                                <select name="motivo" id="motivo" class="form-select" required>
                                                    <option value="">Seleccionar motivo</option>

                                                    <?php foreach ($motivos as $opcion): ?>
                                                        <option value="<?= mostrar($opcion) ?>" <?= $motivo === $opcion ? 'selected' : '' ?>>
                                                            <?= mostrar($opcion) ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-check me-1"></i>
                                                Mostrar vista previa
                                            </button>

                                            <a href="agendar-cita.php" class="btn btn-outline-secondary">
                                                <i class="fas fa-eraser me-1"></i>
                                                Limpiar formulario
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Indicaciones
                                </div>

                                <div class="card-body">
                                    <p>
                                        Selecciona uno de los ocho pacientes ficticios
                                        y el doctor correspondiente.
                                    </p>

                                    <p>
                                        Escoge una fecha, un horario y
                                        el motivo de la consulta.
                                    </p>

                                    <p class="mb-0">
                                        Presiona <strong>Mostrar vista previa</strong>
                                        para comprobar los datos de la cita sin guardarlos.
                                    </p>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-link me-1"></i>
                                    Accesos rápidos
                                </div>

                                <div class="card-body d-grid gap-2">
                                    <a class="btn btn-outline-primary" href="pacientes.php">
                                        Ver Pacientes
                                    </a>

                                    <a class="btn btn-outline-primary" href="doctores.php">
                                        Ver Doctores
                                    </a>

                                    <a class="btn btn-outline-primary" href="historial-clinico.php">
                                        Ver Historial Clínico
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">MediCitas - Proyecto académico</div>
                        <div class="text-muted">Agendar Cita Médica</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

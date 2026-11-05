
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MediCitas - Panel Administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet">
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
                        <a class="nav-link active" aria-current="page" href="index.php">
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
                        <a class="nav-link" href="agendar-cita.php">
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
                    <h1 class="mt-4">Panel Administrativo - MediCitas</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <p class="text-muted mb-3">Administra las secciones de la clínica desde un solo lugar. <span class="badge bg-light text-secondary border ms-1">Datos ficticios</span></p>

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4 med-dashboard-card">
                                <div class="card-body"><i class="fas fa-users me-2"></i>Pacientes <span class="float-end fw-semibold">08</span></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="pacientes.php">Ver Pacientes</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4 med-dashboard-card">
                                <div class="card-body"><i class="fas fa-user-md me-2"></i>Doctores <span class="float-end fw-semibold">08</span></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="doctores.php">Ver Doctores</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4 med-dashboard-card">
                                <div class="card-body"><i class="fas fa-calendar-plus me-2"></i>Agendar Cita <span class="float-end fw-semibold"><i class="fas fa-plus"></i></span></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="agendar-cita.php">Agendar Cita</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4 med-dashboard-card">
                                <div class="card-body"><i class="fas fa-file-medical me-2"></i>Historial Clínico <span class="float-end fw-semibold">08</span></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="historial-clinico.php">Ver Historial</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Citas programadas por semana · datos de ejemplo
                                </div>
                                <div class="card-body">
                                    <canvas id="myAreaChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Pacientes por especialidad · datos de ejemplo
                                </div>
                                <div class="card-body">
                                    <canvas id="myBarChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Próximas citas · datos de ejemplo
                        </div>
                        <div class="card-body">
                            <p class="text-muted small">Datos ficticios utilizados únicamente para mostrar la plantilla.</p>
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Paciente</th>
                                        <th>Especialidad</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Paciente 001</td><td>Medicina General</td><td>2026-11-06</td><td>Pendiente</td></tr>
                                    <tr><td>Paciente 002</td><td>Cardiología</td><td>2026-11-09</td><td>Confirmada</td></tr>
                                    <tr><td>Paciente 004</td><td>Dermatología</td><td>2026-11-10</td><td>Pendiente</td></tr>
                                    <tr><td>Paciente 007</td><td>Medicina General</td><td>2026-11-11</td><td>Confirmada</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">MediCitas - Proyecto académico</div>
                        <div class="text-muted">Panel Administrativo</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js?v=20261105-2"></script>
    <script src="assets/demo/chart-bar-demo.js?v=20261105-2"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js?v=20261105-2"></script>
</body>
</html>

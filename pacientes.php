
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pacientes - MediCitas</title>
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

        <span class="navbar-text ms-auto me-4 text-white">
            Panel Administrativo <span class="ms-2 badge rounded-pill text-bg-light">DEMO</span>
        </span>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">General</div>

                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Dashboard
                        </a>

                        <div class="sb-sidenav-menu-heading">Gestión médica</div>

                        <a class="nav-link active" href="pacientes.php" aria-current="page">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            Pacientes
                        </a>

                        <a class="nav-link" href="doctores.php">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            Doctores
                        </a>

                        <a class="nav-link" href="agendar-cita.php">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-calendar-plus"></i>
                            </div>
                            Agendar Cita
                        </a>

                        <a class="nav-link" href="historial-clinico.php">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-file-medical"></i>
                            </div>
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
                        <i class="fas fa-users text-primary me-2"></i>
                        Gestión de Pacientes
                    </h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Pacientes
                        </li>
                    </ol>

                    <div class="alert alert-info" role="alert">
                        <i class="fas fa-info-circle me-2"></i>
                        Bienvenido al módulo de gestión de pacientes de MediCitas.
                        La información presentada es ficticia y se utiliza
                        únicamente con fines académicos.
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3>8</h3>
                                            <div>Pacientes registrados</div>
                                        </div>
                                        <i class="fas fa-users fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3>6</h3>
                                            <div>Pacientes activos</div>
                                        </div>
                                        <i class="fas fa-user-check fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-dark mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3>2</h3>
                                            <div>En seguimiento</div>
                                        </div>
                                        <i class="fas fa-user-clock fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3>4</h3>
                                            <div>Citas programadas</div>
                                        </div>
                                        <i class="fas fa-calendar-check fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-list me-1"></i>
                            Registro de Pacientes
                        </div>

                        <div class="card-body">
                            <p class="text-muted">
                                Consulta el listado de pacientes registrados
                                en el sistema de demostración.
                                Puedes buscar, ordenar y navegar por los registros.
                            </p>

                            <div class="table-responsive">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Paciente</th>
                                            <th>Edad</th>
                                            <th>Fecha de registro</th>
                                            <th>Próxima cita</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>P001</td>
                                            <td>Paciente 001</td>
                                            <td>24</td>
                                            <td>2026-10-01</td>
                                            <td>2026-11-06</td>
                                            <td>
                                                <span class="badge bg-success">Activo</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>P002</td>
                                            <td>Paciente 002</td>
                                            <td>35</td>
                                            <td>2026-10-03</td>
                                            <td>2026-11-09</td>
                                            <td>
                                                <span class="badge bg-success">Activo</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>P003</td>
                                            <td>Paciente 003</td>
                                            <td>42</td>
                                            <td>2026-10-05</td>
                                            <td>Sin cita</td>
                                            <td>
                                                <span class="badge bg-warning text-dark">Seguimiento</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>P004</td>
                                            <td>Paciente 004</td>
                                            <td>29</td>
                                            <td>2026-10-08</td>
                                            <td>2026-11-10</td>
                                            <td>
                                                <span class="badge bg-success">Activo</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>P005</td>
                                            <td>Paciente 005</td>
                                            <td>51</td>
                                            <td>2026-10-10</td>
                                            <td>Sin cita</td>
                                            <td>
                                                <span class="badge bg-success">Activo</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>P006</td>
                                            <td>Paciente 006</td>
                                            <td>38</td>
                                            <td>2026-10-12</td>
                                            <td>Sin cita</td>
                                            <td>
                                                <span class="badge bg-warning text-dark">Seguimiento</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>P007</td>
                                            <td>Paciente 007</td>
                                            <td>31</td>
                                            <td>2026-10-15</td>
                                            <td>2026-11-11</td>
                                            <td>
                                                <span class="badge bg-success">Activo</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>P008</td>
                                            <td>Paciente 008</td>
                                            <td>46</td>
                                            <td>2026-10-18</td>
                                            <td>Sin cita</td>
                                            <td>
                                                <span class="badge bg-success">Activo</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-calendar-plus me-1"></i>
                            Gestión de Citas
                        </div>

                        <div class="card-body">
                            <p>
                                Desde MediCitas puedes acceder a la sección de
                                programación de citas médicas y consultar
                                el historial clínico de demostración.
                            </p>

                            <a href="agendar-cita.php" class="btn btn-primary me-2 mb-2">
                                <i class="fas fa-calendar-plus me-1"></i>
                                Agendar Cita
                            </a>

                            <a href="historial-clinico.php" class="btn btn-outline-secondary mb-2">
                                <i class="fas fa-file-medical me-1"></i>
                                Historial Clínico
                            </a>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            MediCitas - Proyecto académico
                        </div>
                        <div class="text-muted">
                            Gestión de Pacientes
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js?v=20261105-2"></script>
</body>

</html>

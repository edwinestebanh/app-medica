
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctores - MediCitas</title>
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

                        <a class="nav-link" href="pacientes.php">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            Pacientes
                        </a>

                        <a class="nav-link active" href="doctores.php" aria-current="page">
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
                        <i class="fas fa-user-md text-primary me-2"></i>
                        Gestión de Doctores
                    </h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Doctores
                        </li>
                    </ol>

                    <div class="alert alert-info" role="alert">
                        <i class="fas fa-info-circle me-2"></i>
                        Bienvenido al módulo de gestión de doctores de MediCitas.
                        Aquí podrás consultar las especialidades médicas,
                        horarios de atención y disponibilidad de demostración.
                        Todos los datos son ficticios.
                    </div>

                    <div class="row">

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3>8</h3>
                                            <div>Doctores registrados</div>
                                        </div>
                                        <i class="fas fa-user-md fa-2x"></i>
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
                                            <div>Doctores disponibles</div>
                                        </div>
                                        <i class="fas fa-check-circle fa-2x"></i>
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
                                            <div>En consulta</div>
                                        </div>
                                        <i class="fas fa-clock fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3>6</h3>
                                            <div>Especialidades médicas</div>
                                        </div>
                                        <i class="fas fa-stethoscope fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-list me-1"></i>
                            Directorio de Doctores
                        </div>

                        <div class="card-body">
                            <p class="text-muted">
                                Consulta la información de los médicos registrados
                                en este sistema de demostración.
                                Puedes buscar, ordenar y navegar por los registros.
                            </p>

                            <div class="table-responsive">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre del doctor</th>
                                            <th>Especialidad</th>
                                            <th>Horario</th>
                                            <th>Consultorio</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>D001</td>
                                            <td>Dra. Laura Fernández</td>
                                            <td>Medicina General</td>
                                            <td>8:00 AM - 2:00 PM</td>
                                            <td>101</td>
                                            <td>
                                                <span class="badge bg-success">Disponible</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>D002</td>
                                            <td>Dr. Carlos Martínez</td>
                                            <td>Cardiología</td>
                                            <td>9:00 AM - 3:00 PM</td>
                                            <td>102</td>
                                            <td>
                                                <span class="badge bg-success">Disponible</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>D003</td>
                                            <td>Dra. Ana Rodríguez</td>
                                            <td>Pediatría</td>
                                            <td>8:00 AM - 1:00 PM</td>
                                            <td>103</td>
                                            <td>
                                                <span class="badge bg-warning text-dark">En consulta</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>D004</td>
                                            <td>Dr. Miguel Pérez</td>
                                            <td>Dermatología</td>
                                            <td>10:00 AM - 4:00 PM</td>
                                            <td>104</td>
                                            <td>
                                                <span class="badge bg-success">Disponible</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>D005</td>
                                            <td>Dra. Sofía Ramírez</td>
                                            <td>Ginecología</td>
                                            <td>8:00 AM - 2:00 PM</td>
                                            <td>105</td>
                                            <td>
                                                <span class="badge bg-success">Disponible</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>D006</td>
                                            <td>Dr. José Castillo</td>
                                            <td>Traumatología</td>
                                            <td>9:00 AM - 5:00 PM</td>
                                            <td>106</td>
                                            <td>
                                                <span class="badge bg-warning text-dark">En consulta</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>D007</td>
                                            <td>Dra. María López</td>
                                            <td>Medicina General</td>
                                            <td>7:00 AM - 1:00 PM</td>
                                            <td>107</td>
                                            <td>
                                                <span class="badge bg-success">Disponible</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>D008</td>
                                            <td>Dr. Andrés Gómez</td>
                                            <td>Cardiología</td>
                                            <td>12:00 PM - 6:00 PM</td>
                                            <td>108</td>
                                            <td>
                                                <span class="badge bg-success">Disponible</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-stethoscope me-1"></i>
                                    Especialidades Disponibles
                                </div>

                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Medicina General
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Cardiología
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Pediatría
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Dermatología
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Ginecología
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Traumatología
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-calendar-check me-1"></i>
                                    Programación de Consultas
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Agenda Médica</h5>

                                    <p class="card-text">
                                        MediCitas permite consultar el directorio
                                        médico y acceder al módulo de programación
                                        de citas.
                                    </p>

                                    <p class="text-muted">
                                        Selecciona la opción para continuar
                                        al formulario de citas médicas de demostración.
                                    </p>

                                    <a href="agendar-cita.php" class="btn btn-primary">
                                        <i class="fas fa-calendar-plus me-2"></i>
                                        Agendar Cita Médica
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
                        <div class="text-muted">
                            MediCitas - Proyecto académico
                        </div>
                        <div class="text-muted">
                            Gestión de Doctores
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

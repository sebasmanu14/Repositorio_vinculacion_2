<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gestor Free | Fuente Web</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="admin/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="admin/css/style.css" />

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->


</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:blue;">
        <div class="container-fluid">
            <label class="navbar-brand" id="title">Sistema Gestor de Archivos Básico</label>
        </div>
    </nav>
    <?php include 'sidebar.php'?>
    <div id="content">
        <form action="../includes/validar.php" method="POST">
            <h1>Formulario</h1>
            <div class="container">
                <div class="row gx-6">
                    <div class="col">
                        <div class="mb-3">
                            <label for="cedula" class="form-label">Cédula</label>
                            <input type="text" name="cedula" class="form-control" id="cedula"
                                placeholder="Ingrese su cédula">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"
                                placeholder="Ingrese sus nombre">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellido" id="apellido"
                                placeholder="Ingrese sus apellidos">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="genero" class="form-label">Genero</label>
                            <select class="form-control" name="genero">
                                <option value="1">Femenino</option>
                                <option value="2">Masculino</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="cargo" class="form-label">Cargo</label>
                            <input type="text" class="form-control" name="cargo" id="cargo"
                                placeholder="Ingrese su cargo">
                        </div>
                    </div>
                </div>
                <div class="row gx-6">
                    <div class="col">
                        <div class="mb-3">
                            <label for="ubicacion" class="form-label">Ubicación</label>
                            <input type="text" class="form-control" name="ubicacion" id="ubicacion"
                                placeholder="Ingrese su ubicación">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="fechaIngreso" class="form-label">Fecha Ingreso</label>
                            <input type="date" class="form-control" name="fechaIngreso" id="fechaIngreso"
                                placeholder="Ingrese fecha de ingreso">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="fechaSalida" class="form-label">Fecha Salida</label>
                            <input type="date" class="form-control" name="fechaSalida" id="fechaSalida"
                                placeholder="Ingrese fecha de salida">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" name="edad" id="edad"
                                placeholder="Ingrese su edad">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="lugarNacimiento" class="form-label">Lugar de Nacimiento</label>
                            <input type="text" class="form-control" name="lugarNacimiento" id="lugarNacimiento"
                                placeholder="Ingrese su lugar de nacimiento">
                        </div>
                    </div>
                </div>
                <div class="row gx-6">
                    <div class="col">
                        <div class="mb-3">
                            <label for="estadoCivil" class="form-label">Estado Civil</label>
                            <input type="text" class="form-control" name="estadoCivil" id="estadoCivil"
                                placeholder="Ingrese su cédula">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="discapacidad" value=""
                                id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Tiene discapacidad
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="banco" class="form-label">Banco</label>
                            <input type="text" class="form-control" name="banco" id="banco" placeholder="Banco">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="operadora" class="form-label">Operadora</label>
                            <input type="text" class="form-control" name="operadora" id="operadora"
                                placeholder="Ingrese operadora">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono"
                                placeholder="Ingrese teléfono celular">
                        </div>
                    </div>
                </div>
                <div class="row gx-6">
                    <div class="col">
                        <div class="mb-3">
                            <label for="tipoSangre" class="form-label">Tipo de tipoSangre</label>
                            <select name="tipoSangre" class="form-control">
                                <option value="1">O+</option>
                                <option value="2">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="correoPersonal" class="form-label">Correo Personal</label>
                            <input type="text" class="form-control" name="correoPersonal" id="correoPersonal"
                                placeholder="Ingrese su correo institucional">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="correoInstitucional" class="form-label">Correo Institucional</label>
                            <input type="text" class="form-control" name="correoInstitucional" id="correoInstitucional"
                                placeholder="Ingrese su correo personal">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="contactoEmergencia" class="form-label">Contacto de emergencia</label>
                            <input type="text" class="form-control" name="contactoEmergencia" id="contactoEmergencia"
                                placeholder="Ingrese su correo personal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label><br>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="rol" class="form-label">Rol de usuario *</label>
                        <input type="number" id="rol" name="rol" class="form-control"
                            placeholder="Escribe el rol, 1 admin, 2 lector..">

                    </div>
                </div>
                <input type="submit" value="Guardar" class="btn btn-success" name="registrar">
                <a class="btn btn-warning" href="../views/user.php">Atras
                    <i class="fa fa-power-off" aria-hidden="true"></i>
                </a>
            </div>
        </form>
    </div>

</body>

</html>
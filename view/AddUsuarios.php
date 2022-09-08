<?php
require_once('../Controller/ControladorUsuarios.php');
$listarUsuarios = $controladorUsuario->listarUsuarios();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="https://www.ecopoop.co/wp-content/uploads/2017/07/LOGO.png">

<head>
    <!-- link-->
    <?php include('../Layout/plantilla/link.php'); ?>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include('../Layout/plantilla/sidebar.php') ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include('../Layout/plantilla/header.php') ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h1>Crear Usuario</h1>
                                <a href="../Controller/ControladorUsuarios.php?listarUsuarios" style="height: 50%;" class="btn btn-success">Regresar</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="error"></div>
                            <form action="../Controller/ControladorUsuarios.php" method="POST">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre">Nombre:</label>
                                            <input required id="nombre" name="nombre" class="form-control" type="text" placeholder="Nombre...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apellido">Apellido:</label>
                                            <input required id="apellido" name="apellido" class="form-control" type="text" placeholder="Apellido...">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="correo">Email:</label>
                                            <input required id="email" name="email" class="form-control" type="email" placeholder="Correo elect...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefono">Telefono:</label>
                                            <input required id="telefono" name="telefono" class="form-control" type="text" placeholder="Numero teléfono...">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cedula">Documento:</label>
                                            <input required id="documento" name="documento" class="form-control" type="text" placeholder="Documento...">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="registrarUsuario" type="submit" class="btn btn-success col-md-12" value="Registrar">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a href="../Controller/ControladorUsuarios.php?listarUsuarios" class="btn btn-danger col-md-12">Cancelar</a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include('../Layout/plantilla/footer.php'); ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Script-->
    <?php include('../Layout/plantilla/script.php'); ?>

</body>

</html>
<!-- 


$id_usuario = $_GET['Id_Usuario'];
$usuario = $controladorUsuario->buscarUsuario($id_usuario); -->
<!-- $usuario = $controladorUsuario->buscarUsuario($_GET['Id_Usuario']); -->
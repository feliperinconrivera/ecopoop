<?php
require_once('../Controllers/ControladorUsuarios.php');
$Usuario = $controladorUsuario->buscarUsuario($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="https://www.ecopoop.co/wp-content/uploads/2017/07/LOGO.png">

<head>
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
                                <h1>Editar usuario</h1>
                                <a href="../Controller/ControladorUsuarios.php?listarUsuarios" style="height: 50%;" class="btn btn-success">Regresar</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div id="error">
                                <form action="../Controller/ControladorUsuarios.php" method="POST">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nombre">Nombre:</label>
                                                <input value="<?php echo $Usuario[0]['nombre']; ?>" required id="nombre" name="nombre" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="apellido">Apellido:</label>
                                                <input value="<?php echo $Usuario[0]['apellido']; ?>" required id="apellido" name="apellido" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input value="<?php echo $Usuario[0]['email']; ?>" required id="email" name="email" class="form-control" type="email" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="telefono">Tel??fono:</label>
                                                <input value="<?php echo $Usuario[0]['telefono']; ?>" required id="telefono" name="telefono" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="documento">Documento:</label>
                                                <input value="<?php echo $Usuario[0]['documento']; ?>" required id="documento" name="documento" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="id" value="<?= $Usuario[0]['id']; ?>">

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="editarUsuario" type="submit" class="btn btn-success col-md-12" value="Editar">
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
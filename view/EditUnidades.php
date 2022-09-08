<?php
require_once('../Controller/ControladorUnidades.php');
$Unidad = $controladorUnidad->buscarUnidad($_GET['id']);
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
                                <h3>Editar Unidad</h3>
                                <a href="Unidad.php" style="height: 50%;" class="btn btn-success">Regresar</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div id="error">
                                <form action="../Controller/ControladorUnidades.php" method="POST">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nombre">Nombre:</label>
                                                <input value="<?php echo $Unidad[0]['nombre']; ?>" required id="nombre" name="nombre" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="direccion">Direccion:</label>
                                                <input value="<?php echo $Unidad[0]['direccion']; ?>" required id="direccion" name="direccion" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="descripcion">Descripcion:</label>
                                                <input value="<?php echo $Unidad[0]['descripcion']; ?>" required id="descripcion" name="descripcion" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="n°_apartamentos">N° Apartamentos:</label>
                                                <input value="<?php echo $Unidad[0]['n°_apartamentos']; ?>" required id="n°_apartamentos" name="n°_apartamentos" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="n°_contenedores">N° Contenedores:</label>
                                                <input value="<?php echo $Unidad[0]['n°_contenedores']; ?>" required id="n°_contenedores" name="n°_contenedores" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nombre_administrador">Nombre Administrador:</label>
                                                <input value="<?php echo $Unidad[0]['nombre_administrador']; ?>" required id="nombre_administrador" name="nombre_administrador" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="rut">RUT:</label>
                                                <input value="<?php echo $Unidad[0]['rut']; ?>" required id="rut" name="rut" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="documento">Documento:</label>
                                                <input value="<?php echo $Unidad[0]['documento']; ?>" required id="documento" name="documento" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>




                                    </div>

                                    <input type="hidden" name="id" value="<?= $Unidad[0]['id']; ?>">

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="editarUnidad" type="submit" class="btn btn-success col-md-12" value="Editar">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <a href="Unidad.php" class="btn btn-danger col-md-12">Cancelar</a>
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
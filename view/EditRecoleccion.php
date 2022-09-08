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
                                <h1>Editar Recoleccion</h1>
                                <a href="../view/Recoleccion.php" style="height: 50%;" class="btn btn-success">Regresar</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="error"></div>
                            <form action="" method="POST">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cantidad_kilos">Cantidad de Kilos:</label>
                                            <input required id="cantidad_kilos" name="cantidad_kilos" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cantidad_bolsas">Cantidad de Bolsas:</label>
                                            <input required id="cantidad_bolsas" name="cantidad_bolsas" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="unidad_residencial">Unidad Residencial:</label>
                                            <input required id="unidad_residencial" name="unidad_residencial" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsable_planilla">Responsable Planilla:</label>
                                            <input required id="responsable_planilla" name="responsable_planilla" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hora_entrada">Hora Entrada:</label>
                                            <input required id="hora_entrada" name="hora_entrada" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hora_salida">Hora Salida:</label>
                                            <input required id="hora_salida" name="hora_salida" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="observaciones">Observaciones:</label>
                                            <input required id="observaciones" name="observaciones" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cantidad_sistemas">Cantidad Sistemas:</label>
                                            <input required id="cantidad_sistemas" name="cantidad_sistemas" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cantidad_palas">Cantidad Palas:</label>
                                            <input required id="cantidad_palas" name="cantidad_palas" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="novedades">Novedades:</label>
                                            <input required id="novedades" name="novedades" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="km_real">Km Real:</label>
                                            <input required id="km_real" name="km_real" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="registrarRuta" type="submit" class="btn btn-success col-md-12" value="Registrar">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a href="Recoleccion.php" class="btn btn-danger col-md-12">Cancelar</a>
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
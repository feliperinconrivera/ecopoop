<?php
require_once('../Controller/controladorPlanillas.php');
$listarPlanillas = $controladorPlanilla->listarPlanillas();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="https://www.ecopoop.co/wp-content/uploads/2017/07/LOGO.png">

<head>
    <!-- links para la fecha -->
    <link rel="stylesheet" type="text/css" href="../css/123.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                                <h3 style="color:black;"><span> <b>Nueva Planilla</b> </span></h3>
                                <a href="../Controller/controladorPlanillas.php?listarPlanillas" style="height: 50%;" class="btn btn-success">Regresar</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="error"></div>
                            <form action="../Controller/controladorPlanillas.php" method="POST">

                                <div class="row" style="color:black;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fecha">Fecha:</label>
                                            <input type="text" name="fecha" id="fecha" class="form-control" placeholder="aaaa/mm/dd" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tipo_residuo">Tipo Residuo</label>
                                            <input required id="tipo_residuo" name="tipo_residuo" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="infec">INFEC:</label>
                                            <input required id="infec" name="infec" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="numero_bolsas">Numero Bolsas:</label>
                                            <input required id="numero_bolsas" name="numero_bolsas" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="peso_kg">Peso En Kg:</label>
                                            <input required id="peso_kg" name="peso_kg" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="conductor">Conductor:</label>
                                            <input required id="conductor" name="conductor" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="entrego">Entrego:</label>
                                            <input required id="entrego" name="entrego" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="total_kg">Total kg:</label>
                                            <input required id="total_kg" name="total_kg" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="registrarPlanilla" type="submit" class="btn btn-success col-md-12" value="Registrar">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a href="../Controller/controladorPlanillas.php?listarPlanillas" class="btn btn-danger col-md-12">Cancelar</a>
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

    <!-- links para la fecha-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../view/js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap-datetimepicker.min.js"></script>
    <script src="./js/scripts1.js"></script>

</body>

</html>
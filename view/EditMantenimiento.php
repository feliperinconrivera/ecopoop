<?php

require_once('../Controller/ControladorMantenimientos.php');
$Mantenimiento = $controladorMantenimiento->buscarMantenimiento($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="https://www.ecopoop.co/wp-content/uploads/2017/07/LOGO.png">
 
<head>
    <link rel="stylesheet" type="text/css" href="../css/123.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                                <h1>Editar Mantenimiento</h1>
                                <a href="Mantenimiento.php" style="height: 50%;" class="btn btn-success">Regresar</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div id="error">
                                <form action="../Controller/ControladorMantenimientos.php" method="POST">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mantenimientos_anuales">Mantenimientos Anuales:</label>
                                                <input value="<?php echo $Mantenimiento[0]['mantenimientos_anuales']; ?>" required id="mantenimientos_anuales" name="mantenimientos_anuales" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="costo_mantenimiento">Costo Mantenimiento:</label>
                                                <input value="<?php echo $Mantenimiento[0]['costo_mantenimiento']; ?>" required id="costo_mantenimiento" name="costo_mantenimiento" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="observaciones">Email:</label>
                                                <input value="<?php echo $Mantenimiento[0]['observaciones']; ?>" required id="observaciones" name="observaciones" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fecha_mantenimiento">Fecha Mantenimiento:</label>
                                                <input value="<?php echo $Mantenimiento[0]['fecha_mantenimiento']; ?>" required id="fecha_mantenimiento" name="fecha_mantenimiento" class="form-control" type="text" placeholder="" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="id" value="<?= $Mantenimiento[0]['id']; ?>">

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="editarMantenimiento" type="submit" class="btn btn-success col-md-12" value="Editar">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <a href="Mantenimiento.php" class="btn btn-danger col-md-12">Cancelar</a>
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap-datetimepicker.min.js"></script>
    <script src="./js/scripts1.js"></script>
</body>

</html>
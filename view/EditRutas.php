<?php
require_once('../Controller/controladorRutas.php');
$Ruta = $controladorRuta->buscarRuta($_GET['id']);

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
                                <h1>Editar Ruta</h1>
                                <a href="../Controller/controladorRutas.php?listarRutas" style="height: 50%;" class="btn btn-success">Regresar</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div id="error">
                                <form action="../Controller/controladorRutas.php" method="POST">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ruta">Ruta</label>
                                                <input value="<?php echo $Ruta[0]['ruta']; ?>" required id="ruta" name="ruta" class="form-control" type="text" placeholder="Nombre Ruta">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="km_ruta">Km Ruta</label>
                                                <input value="<?php echo $Ruta[0]['km_ruta']; ?>" required id="km_ruta" name="km_ruta" class="form-control" type="text" placeholder="Km Ruta">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="trayectoria">Trayectoria:</label>
                                                <input value="<?php echo $Ruta[0]['trayectoria']; ?>" required id="trayectoria" name="trayectoria" class="form-control" type="text" placeholder="Trayectoria">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dias">Dias</label>
                                                <input value="<?php echo $Ruta[0]['dias']; ?>" required id="dias" name="dias" class="form-control" type="text" placeholder="Dias">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="detalle">Detalle</label>
                                                <input value="<?php echo $Ruta[0]['detalle']; ?>" required id="detalle" name="detalle" class="form-control" type="text" placeholder="Detalle">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="zona">zona</label>
                                                <input value="<?php echo $Ruta[0]['zona']; ?>" required id="zona" name="zona" class="form-control" type="text" placeholder="zona">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="km_estimado">Km Estimado</label>
                                                <input value="<?php echo $Ruta[0]['km_estimado']; ?>" required id="km_estimado" name="km_estimado" class="form-control" type="text" placeholder="km_estimado">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="<?= $Ruta[0]['id']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="editarRuta" type="submit" class="btn btn-success col-md-12" value="Editar">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <a href="../Controller/controladorRutas.php?listarRutas" class="btn btn-danger col-md-12">Cancelar</a>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid  style="float: left; width:200px;-->
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
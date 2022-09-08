<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="https://www.ecopoop.co/wp-content/uploads/2017/07/LOGO.png">


<head>
    <!-- link-->
    <?php include('../Layout/plantilla/link.php'); ?>
    <!-- Datatables -->
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!--Sidebar -->
        <?php include('../Layout/plantilla/sidebar.php') ?>
        <!-- End of Sidebar -->
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
                        <title>Sitios Turisticos de Colombia</title>
                        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
                        <link rel="stylesheet" type="text/css" href="../css/Rutero.css" />
                        <link rel="stylesheet" type="text/css" href="./leaflet-globeminimap-master/dist/Control.GlobeMiniMap.min.css" />
                        <h3>Visita los Sitios Turisticos de Colombia</h3>
                        <select name="select-location" id="select-location">
                            <option value="-1">Seleccione un lugar:</option>
                            <option value="6.636254,-73.223129">Barichara-Santander</option>
                            <option value="12.19602,-72.147218">Cabo de la Vela-La Guajira</option>
                            <option value="10.42278,-75.539217">Castillo San Felipe Cartagena-Bolivar</option>
                            <option value="2.265124,-73.794523">Caño Cristales-Meta</option>
                            <option value="3.233851,-75.168934">Desierto de Tatacoa-Huila</option>
                            <option value="6.233825,-75.167062">Guatape-Antioquia</option>
                            <option value="4.945885,-73.825740">Guatavita-Cundinamarca</option>
                            <option value="2.135151,-76.410226">Parque Purace-Cauca</option>
                            <option value="1.888593,-76.295127">San Agustín-Huila</option>
                            <option value="5.638118,-73.526864">Villa de Leiva-Boyacá</option>
                            <option value="6.405581,-75.983073">Caicedo-Antioquia</option>
                            <option value="6.316761,-76.134398">Urrao-Antioquia</option>
                            <option value="6.252939,-75.562763">Edificio de los Espejos</option>

                        </select>
                        <div id="map"></div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para Salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar Sesión" a Continuación si está listo para Finalizar su Sesión Actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-success" href="Login.php">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script-->
    <?php include('../Layout/plantilla/script.php'); ?>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <script src="./js/Rutero.js"></script>
    <script src="./leaflet-globeminimap-master/dist/Control.GlobeMiniMap.min.js"></script>
    <script src="../view/js/barrios.js"></script>
</body>

</html>
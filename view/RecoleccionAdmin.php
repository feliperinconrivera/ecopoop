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
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 style="color:black;"><span> <b> Lista de Recoleccion Admin</b> </span></h3>
                                <!-- <a href="../Controller/ControladorUsuarios.php?registrarUsuario" style="height: 50%;" class="btn btn-success">Nueva Recoleccion</a> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="DataTable" style="width:100%; color:black;" class="table table-hover table-bordered display">
                                    <tbody>
                                        <tr>
                                            <th scope="row">#</th>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Numero Kilos</th>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Numero Bolsas</th>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nombre Residencia</th>
                                            <td>no se como se llama</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Responsable planilla</th>
                                            <td>Juan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Hora Entrada</th>
                                            <td>09:00 am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Hora Salida</th>
                                            <td>09:10 am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Observaciones</th>
                                            <td>Ninguna</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cantidad Sistemas</th>
                                            <td>9</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cantidad Palas</th>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Sistemas</th>
                                            <td>9</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Novedades</th>
                                            <td>Ninguna</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Hora Salida</th>
                                            <td>08:20 am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Hora Llegada</th>
                                            <td>09:00 am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Km Salida</th>
                                            <td>1000 km</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Km Llegada</th>
                                            <td>1100 km</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Km Real</th>
                                            <td>100 km</td>
                                        </tr>
                                    </tbody>
                                    <tr>
                                        <td>
                                            <a href="../Controller/ControladorUsuarios.php?editarUsuario=<?php echo $usuario['Id_Usuario'] ?>" class="btn btn-success col-md-12">Editar</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-danger col-md-12">Eliminar</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- Footer -->
            <?php include('../layout/plantilla/footer.php'); ?>
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
                    <h5 class="modal-title" id="exampleModalLabel">??Listo para Salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesi??n" a continuaci??n si est?? listo para finalizar su sesi??n actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-success" href="Login.php">Cerrar sesi??n</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script-->
    <?php include('../layout/plantilla/script.php'); ?>
</body>

</html>
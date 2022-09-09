<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="https://www.ecopoop.co/wp-content/uploads/2017/07/LOGO.png">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

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
                                <h3 style="color:black;"><span> <b>Planilla Mensual</b> </span></h3>
                                <a href="AddPlanilla.php" style="height: 50%;" class="btn btn-success">Nueva Recoleccion</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="DataTable" style="width:100%; color:black;" class="table table-hover table-bordered display">

                                <thead>
										<th>#</th>
										<th>Fecha</th>
										<th>Tipo de Residuos:</th>
										<th>INFEC:</th>
										<th>Numero de Bolsas:</th>
										<th>Peso en Kg:</th>
										<th>Conductor:</th>
										<th>Entrego:</th>
										<th>Total kg:</th>
										<th>Editar</th>
										<th>Eliminar</th>
									</thead>
                                    
									<tbody>
										
											<tr>
												<td>1</td>
												<td>2022/08/03</td>
												<td>Escremento de Mascotas</td>
												<td>x</td>
												<td>150</td>
												<td>150</td>
												<td>felipe</td>
												<td>juan</td>
												<td>100</td>
												<td>
													<a href="" class="btn btn-success">Editar</a>
												</td>
												<td>
													<a href="" class="btn btn-danger">Eliminar</a>
												</td>
											</tr>
										
									</tbody>

                                    </table>


                                    <!-- <tbody>
                                        
                                        <th>Fecha y Hora:</th>
                                        <td>2022/08/03</td>
                                        <td> 09:30</td>
                                    </tbody>

                                    <tbody>
                                        <th>Tipo de Residuos:</th>
                                        <td>Escremento de Mascotas</td>
                                    </tbody>

                                    <tbody>
                                        <th>INFEC :</th>
                                        <th>Numero de Bolsas:</th>
                                        <th>Peso en Kg:</th>
                                    </tbody>

                                    <tbody>
                                        <td>X</td>
                                        <td>100</td>
                                        <td>20</td>
                                    </tbody>

                                    <tbody>
                                        <th>Conductor:</th>
                                        <th>Entrego:</th>
                                        <th>Total kg:</th>
                                    </tbody>

                                    <tbody>
                                        <td>Juan</td>
                                        <td>Felipe</td>
                                        <td>60</td>
                                    </tbody>

                                </table>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a href="EditPlanilla.php" class="btn btn-success col-md-12">Editar</a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a href="" class="btn btn-danger col-md-12">Eliminar</a>
                                        </div>
                                    </div>-->
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>


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
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-success" href="Login.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script-->
    <?php include('../Layout/plantilla/script.php'); ?>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

</body>

<script>
    $(document).ready(function() {
        $('#DataTable').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>

</html>
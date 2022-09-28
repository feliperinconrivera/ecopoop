
<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="https://www.ecopoop.co/wp-content/uploads/2017/07/LOGO.png">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">


<head>
	<!-- link-->
	<?php include('../layout/plantilla/link.php'); ?>
	<!-- Datatables -->
</head>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!--Sidebar -->
		<?php include('../layout/plantilla/sidebar.php') ?>
		<!-- End of Sidebar -->
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				<?php include('../layout/plantilla/header.php') ?>
				<!-- End of Topbar -->
				<!-- Begin Page Content -->
				<div class="container-fluid">
					<div class="card">
						<div class="card-header">
							<div class="d-flex justify-content-between">
								<h3 style="color:black;"><span> <b> Lista de Usuarios</b> </span></h3>
								<a href="../Controller/ControladorUsuarios.php?registrarUsuario" style="height: 50%;" class="btn btn-success">Nuevo Usuario</a>
							</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">

								<table id="DataTable" style="color:black;" class="table table-hover table-bordered display">
									<thead>
										<tr>
											<th>#</th>
											<th>Nombre</th>
											<th>Apellido</th>
											<th>Email</th>
											<th>Telefono</th>
											<th>Documento</th>
											<th>Editar</th>
											<th>Eliminar</th>
										</tr>
									</thead>

									</tbody>
								</table>
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
						<span aria-hidden="true">×</span>
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


	<!-- Modal Ver detalles -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ver más detalles</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

					<table class="table">
						<thead>
							<tr>
								<th>Telefono</th>
								<th>Documento</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($listaUsuarios as $usuario) { ?>
								<tr>
									<hr>
									<td><?php echo $usuario['telefono']; ?></td>
									<hr>
									<td><?php echo $usuario['documento']; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
			

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
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
<?php
require_once('../Controller/controladorVehiculos.php');
$Vehiculo = $controladorVehiculo->buscarVehiculo($_GET['id']);;
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
								<h1>Editar Vehiculo</h1>
								<a href="../Controller/controladorVehiculos.php?listarVehiculos" style="height: 50%;" class="btn btn-success">Regresar</a>
							</div>
						</div>

						<div class="card-body">
							<div id="error"></div>
							<form action="../Controller/controladorVehiculos.php" method="POST">

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="placa">Numero Placa:</label>
											<input value="<?php echo $Vehiculo[0]['placa']; ?>" required id="placa" name="placa" class="form-control" type="text" placeholder="placa...">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="tipo_carro">Tipo Carro:</label>
											<input value="<?php echo $Vehiculo[0]['tipo_carro']; ?>" required id="tipo_carro" name="tipo_carro" class="form-control" type="text" placeholder="Tipo Carro...">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="descripcion">descripcion:</label>
											<input value="<?php echo $Vehiculo[0]['descripcion']; ?>" required id="descripcion" name="descripcion" class="form-control" type="text" placeholder="descripcion...">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="capacidad_contenedor">Capacidad Contenedor:</label>
											<input value="<?php echo $Vehiculo[0]['capacidad_contenedor']; ?>" required id="capacidad_contenedor" name="capacidad_contenedor" class="form-control" type="text" placeholder="Capacidad Contenedor...">
										</div>
									</div>
								</div>

								<hr>

								<input type="hidden" name="id" value="<?= $Vehiculo[0]['id']; ?>">

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input name="editarVehiculo" type="submit" class="btn btn-success col-md-12" value="Editar">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<a href="../Controller/controladorVehiculos.php?listarVehiculos" class="btn btn-danger col-md-12">Cancelar</a>
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
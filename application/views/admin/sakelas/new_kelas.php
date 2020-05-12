<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
					<h3>Tambahkan Kelas</h3>
						<a href="<?php echo site_url('admin/sakelas/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/sakelas/add_kelas') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="kelas">Nama Kelas*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="nama_kelas" min="0" placeholder="Nama Kelas" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="jadwal">Jadwal</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="jadwal" placeholder="Jadwal" />
								<div class="invalid-feedback">
									<?php echo form_error('jadwal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="ruang">Ruang</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="ruang" placeholder="Ruang" />
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>



							<div class="form-group">
								<label for="name">Dosen Mentor</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="name" placeholder="Dosen Mentor" />
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

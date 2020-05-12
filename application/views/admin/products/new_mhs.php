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
					<h3>Tambahkan Mahasiswa</h3>
						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">NIM*</label>
								<input class="form-control <?php echo form_error('nim') ? 'is-invalid':'' ?>"
								 type="text" name="nim" placeholder="NIM" />
								<div class="invalid-feedback">
									<?php echo form_error('nim') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Name*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="name" min="0" placeholder="Nama Mahasiswa" />
								<div class="invalid-feedback">
									<?php echo form_error('Nama') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Jurusan</label>
								<input class="form-control <?php echo form_error('jurusan') ? 'is-invalid':'' ?>"
								 type="text" name="jurusan" placeholder="Jurusan" />
								<div class="invalid-feedback">
									<?php echo form_error('jurusan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Fakultas*</label>
								<input class="form-control <?php echo form_error('fakultas') ? 'is-invalid':'' ?>"
								 type ="text" name="fakultas" placeholder="Fakultas" />
								<div class="invalid-feedback">
									<?php echo form_error('fakultas') ?>
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

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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">
                    <h3>Tambahkan Absen</h3>
						<a href="<?php echo site_url('dosmen/daftarabsen') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("dosmen/edit_absen") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $product->product_id?>" />
                            
							<div class="form-group">
								<label for="name">NIM*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="nim" placeholder="Product name" readonly value="<?php echo $product->nim ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Name*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="name" min="0" placeholder="Nama Mahasiswa" readonly  value="<?php echo $product->name ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Jurusan</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="jurusan" placeholder="Jurusan" readonly value="<?php echo $product->jurusan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
                            </div>

								<div class="form-group">
								<label for="name">Fakultas*</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="fakultas" placeholder="Fakultas"  readonly value="<?php echo $product->fakultas ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Pertemuan 1</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="ming1" maxlength="1" pattern="[AISH]" placeholder="A=Alpha, S=Sakit, I=Izin, H=Hadir,  Huruf Kapital"  value="<?php echo $product->ming1 ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Pertemuan 2</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="ming2" maxlength="1" pattern="[AISH]" placeholder="A=Alpha, S=Sakit, I=Izin, H=Hadir,  Huruf Kapital" placeholder="Fakultas"  value="<?php echo $product->ming2 ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Pertemuan 3</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="ming3" maxlength="1" pattern="[AISH]" placeholder="A=Alpha, S=Sakit, I=Izin, H=Hadir,  Huruf Kapital" placeholder="Fakultas"  value="<?php echo $product->ming3 ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Pertemuan 4</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="ming4" maxlength="1" pattern="[AISH]" placeholder="A=Alpha, S=Sakit, I=Izin, H=Hadir,  Huruf Kapital" placeholder="Fakultas"  value="<?php echo $product->ming4 ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Pertemuan 5</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="ming5" maxlength="1" pattern="[AISH]" placeholder="A=Alpha, S=Sakit, I=Izin, H=Hadir, Huruf Kapital" placeholder="Fakultas"  value="<?php echo $product->ming5 ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Pertemuan 6</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="ming6" maxlength="1" pattern="[AISH]" placeholder="A=Alpha, S=Sakit, I=Izin, H=Hadir,  Huruf Kapital" placeholder="Fakultas"  value="<?php echo $product->ming6 ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Pertemuan 7</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="ming7" maxlength="1" pattern="[AISH]" placeholder="A=Alpha, S=Sakit, I=Izin, H=Hadir" placeholder="Fakultas"  value="<?php echo $product->ming7 ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Pertemuan 8</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="ming8" maxlength="1" pattern="[AISH]" placeholder="A=Alpha, S=Sakit, I=Izin, H=Hadir" placeholder="Fakultas"  value="<?php echo $product->ming8 ?>"/>
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
<br>

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

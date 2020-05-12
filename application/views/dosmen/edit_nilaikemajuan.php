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
                    <h3>Ubah Kemajuan Belajar</h3>
						<a href="<?php echo site_url('dosmen/nilaikemajuan') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("dosmen/edit_nilaikemajuan/") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $product->product_id?>" />

							<div class="form-group">
								<label for="name">NIM*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="nim" readonly placeholder="Product name" value="<?php echo $product->nim ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Name*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="name" readonly min="0" placeholder="Nama Mahasiswa" value="<?php echo $product->name ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Jurusan</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="jurusan" readonly placeholder="Jurusan" value="<?php echo $product->jurusan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>

								<div class="form-group">
								<label for="name">Fakultas*</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="fakultas" readonly placeholder="Fakultas"  value="<?php echo $product->fakultas ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Quiz 1</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="number" name="quiz1" id="q-1"  min="0" max="100" placeholder="1-100" pattern="[0123456789]"   value="<?php echo $product->quiz1 ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">UTS</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="number" name="uts" id="m" min="0" max="100" placeholder="1-100" pattern="[0123456789]" value="<?php echo $product->uts ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Quiz 2</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="number" name="quiz2" id="k"  min="0" max="100" placeholder="1-100" pattern="[1234567890]"  value="<?php echo $product->quiz2 ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">UAS</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="number" name="uas" id="g"  min="0" max="100" placeholder="1-100" pattern="[1234567890]" value="<?php echo $product->uas ?>"/>
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

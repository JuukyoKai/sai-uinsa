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
						<h3>Ubah Nilai Test</h3>
						<a href="<?php echo site_url('dosmen/nilaitest') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("dosmen/edit_nilai/") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $product->product_id?>" />

							<div class="form-group">
								<label for="name">NIM*</label>
								<input class="form-control <?php echo form_error('nim') ? 'is-invalid':'' ?>"
								 type="text" name="nim" readonly placeholder="Nim" value="<?php echo $product->nim ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nim') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Name*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="name" readonly min="0" placeholder="Nama Mahasiswa" value="<?php echo $product->name ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('Nama') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Jurusan</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="jurusan" readonly placeholder="Jurusan" value="<?php echo $product->jurusan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Jurusan') ?>
								</div>

								<div class="form-group">
								<label for="name">Fakultas*</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="fakultas" readonly placeholder="Fakultas"  value="<?php echo $product->fakultas ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('Fakultas') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Tajwid* 1-4</label>
								<input class="form-control <?php echo form_error('Tajwid') ? 'is-invalid':'' ?>"
								 type ="text" name="tajwid" id="t" maxlength="1" placeholder="Tajwid 1-4" pattern="[1234]"  value="<?php echo $product->tajwid ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('Tajwid') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Makhraj* 1-4</label>
								<input class="form-control <?php echo form_error('Makhraj') ? 'is-invalid':'' ?>"
								 type ="text" name="makhraj" id="m" maxlength="1" placeholder="Makhraj 1-4"  pattern="[1234]" value="<?php echo $product->makhraj ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('Makhraj') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Kelancaran* 1-4</label>
								<input class="form-control <?php echo form_error('Kelasncaran') ? 'is-invalid':'' ?>"
								 type ="text" name="kelancaran" id="k" maxlength="1" placeholder="Kelancaran 1-4" pattern="[1234]"  value="<?php echo $product->kelancaran ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('Kelasncaran') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Ghorib* 1-4</label>
								<input class="form-control <?php echo form_error('Ghorib') ? 'is-invalid':'' ?>"
								 type ="text" name="ghorib" id="g" maxlength="1" placeholder="Ghorib 1-4" pattern="[1234]" value="<?php echo $product->ghorib ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('Ghorib') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Kelas (3 kode huruf)</label>
								<input class="form-control <?php echo form_error('kelas') ? 'is-invalid':'' ?>"
								 type ="text" name="kelas" id="h" maxlength="3" placeholder="Contoh: AAA"  value="<?php echo $product->kelas ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('kelas') ?>
								</div>
							</div>

						
							<div class="form-group">
								<label for="name">Tingkat</label> <input class="btn btn-success" type="button" name="btnn" value="Generate Tingkat" onclick="hitung();" />
								
								<script type="text/javascript">
							
							function hitung(){
							var t = parseInt(document.getElementById("t").value);
							var m = parseInt(document.getElementById("m").value);
							var k = parseInt(document.getElementById("k").value);
							var g = parseInt(document.getElementById("g").value);
							var r = 0;
							r = t+m+k+g ;
							
							if(r < 5 ){
								u = "Mubtadhi";
							} else if (r<9){
								u= "Ula";
							} else if(r <13){
								u="Wustho";
							} else {
								u="Ulya";
							}
							document.getElementById("tingkat").value = u;
						}
						</script>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type ="text" name="tingkat" id="tingkat" value="<?php echo $product->tingkat ?>" readonly>
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

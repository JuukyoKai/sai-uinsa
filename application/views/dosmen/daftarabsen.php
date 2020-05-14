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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
                    <h3>Daftar Absensi</h3>
						
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr style="background-color:#015c19; color:white">
										<th>NIM</th>
										<th>Nama</th>
										<th>Jurusan</th>
										<th>Fakultas</th>
                                        <th>P1</th>
                                        <th>P2</th>
                                        <th>P3</th>
                                        <th>P4</th>
                                        <th>P5</th>
                                        <th>P6</th>
                                        <th>P7</th>
                                        <th>P8</th>
                                        <th>Kelas</th>
                                        
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($daftarabsen as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->nim ?>
										</td>
										<td>
											<?php echo $product->name ?>
										</td>
										<td>
											<?php echo $product->jurusan ?>
										</td>
                                        <td >
											<?php echo $product->fakultas ?>
										</td>
                                        <td>
                                        <?php echo $product->ming1 ?>
                                        </td>
                                        <td>
                                        <?php echo $product->ming2 ?>
                                        </td>
                                        <td>
                                        <?php echo $product->ming3 ?>
                                        </td>
                                        <td>
                                        <?php echo $product->ming4 ?>
                                        </td>
                                        <td>
                                        <?php echo $product->ming5 ?>
                                        </td>
                                        <td>
                                        <?php echo $product->ming6 ?>
                                        </td>
                                        <td>
                                        <?php echo $product->ming7 ?>
                                        </td>
                                        <td>
                                        <?php echo $product->ming8 ?>
                                        </td>
                                        <td>
                                            <?php echo $product->kelas?>
                                        </td>
										
										<td width="250">
											<a href="<?php echo site_url('dosmen/daftarabsen/edit/'.$product->product_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>

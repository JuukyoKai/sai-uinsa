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
                    <h3>Kemajuan Belajar</h3>
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
                                        <th>Quiz1</th>
                                        <th>UTS</th>
                                        <th>Quiz2</th>
                                        <th>UAS</th>


										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($nilaikemajuan as $product): ?>
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
                                        <td >
											<?php echo $product->quiz1 ?>
										</td>
                                        <td >
											<?php echo $product->uts ?>
										</td>
                                        <td >
											<?php echo $product->quiz2 ?>
										</td>
                                        <td >
                                            <?php echo $product->uas ?>
										</td>
										
										<td width="250">
											<a href="<?php echo site_url('dosmen/nilaikemajuan/edit/'.$product->product_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit Nilai</a>
											
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

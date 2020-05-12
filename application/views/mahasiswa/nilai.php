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
                    <h3>Nilai</h3>
					
					</div>
					<div class="card-body">
					<th><h5>Nama</th> <th>:</th> <th>Muhammad Syifaul Qolbi Romadlon</h5></th>
					
					<th>Tingkat</th> <th>:</th> <th> <?php foreach ($nilai as $nilaii): ?> <?php echo $nilaii->tingkat?></th>
					<?php endforeach; ?>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Tajwid</th>
										<th>Kelancaran</th>
										<th>Makhraj</th>
										<th>Gharib</th>
										
                                        <th>Quiz1</th>
                                        <th>Uts</th>
                                        <th>Quiz2</th>
                                        <th>Uas</th>
										
									</tr>
								</thead>
								<tbody>
								<?php foreach ($nilai as $nilai): ?>
									<tr>
										<td width="150">
											<?php echo $nilai->tajwid ?>
										</td>
										<td>
											<?php echo $nilai->kelancaran ?>
										</td>
										<td>
											<?php echo $nilai->makhraj ?>
										</td>
                                        <td >
											<?php echo $nilai->ghorib ?>
										</td>
										
                                        <td>
                                        <?php echo $nilai->quiz1 ?>
                                        </td>
                                        <td>
                                        <?php echo $nilai->uts ?>
                                        </td>
                                        <td>
                                        <?php echo $nilai->quiz2 ?>
                                        </td>
                                        <td>
                                        <?php echo $nilai->uas ?>
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
/*	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}*/
	</script>
</body>

</html>

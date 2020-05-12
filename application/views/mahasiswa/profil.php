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
				<!-- Isi Profil -->
				<div class="card mb-3">
					<div class="card-header">
                    <h3>Profil </h3>
						
					</div>
					<div class="card-body">
                <table class="profil" style="color:#000000; float:left; margin-left:3%">
	            <tr>
		            <td>Nama</td> 
		            <td>:</td>
					<td>Muhammad Syifaul Qolbi Romadlon</td>
                </tr>
            	<tr>
		            <td>NIM</td>
		            <td>:</td>
					<td>H06218017</td>
	             </tr>
	            <tr>
		            <td>Fakultas</td>
		            <td>:</td>
					<td>Tarbiyah</td>
    	        </tr>
	             <tr>
		            <td>Jurusan</td>
		            <td>:</td>
					<td>SI</td>
	             </tr>
	         
            </table>
                 <br>
            </div>
        <tbody>
						<!--	<?php foreach ($profil as $product): ?>
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
										
									</tr>
									<?php endforeach; ?> -->

								</tbody>
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

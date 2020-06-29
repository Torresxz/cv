<!doctype html>
<html lang="en">

	<!--==============================HEAD==============================-->
	<?=$this->load->view('includes/head','',TRUE)?>
	<!--==============================HEAD==============================-->

	<body>
	    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
			<!--==============================HEADER==============================-->
			<?=$this->load->view('includes/header','',TRUE)?>
			<!--==============================HEADER==============================-->
	         <div class="app-main">
					<!--==============================MENU==============================-->
					<?=$this->load->view('includes/menu','',TRUE)?>
					<!--==============================MENU==============================-->

				<div class="app-main__outer"><!--Aqui adentro va el contenido-->
                    <div class="app-main__inner">
						<div class="app-page-title">
							<div class="page-title-wrapper">
								<div class="page-title-heading">
									<div class="page-title-icon">
											<i class="pe-7s-home icon-gradient bg-night-fade">
											</i>
									</div>
									<div>
											<div class="page-title-subheading">Bienvenido al Sistema Integral de informacion UPTLAx
											</div>
									</div>
								</div>
							</div>
						</div>
						<br>
						<br>
						<br>
						<br>
						<center>
							<img src="<?php echo base_url('assets/images/escuela.png'); ?>" width="70%" id="img">
						</center>
					</div>
				</div>
	        </div>
	    </div>
	</body>
</html>

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

					<div class="app-main__outer">
	                    <div class="app-main__inner">
							<div class="app-page-title">
								<div class="page-title-wrapper">
									<div class="page-title-heading">
										<div class="page-title-icon">
												<i class="pe-7s-note2 icon-gradient bg-night-fade">
												</i>
										</div>
										<div>Acta de Calificaciones
										</div>
									</div>
								</div>
						</div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <table width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><h5 align="center"><strong><font color="BLUE">Materias</font></strong></h5></td>
                                        </tr>
                                        <tr>
                                            <td valign="middle" height="20"><h5 class="card-title"><font color="BLUE">Nombre del alumno:</font><span class="campo1"> ISRAEL TORRES MORALES</span></h5></td>
                                            <td width="302"><h5 class="card-title"><font color="BLUE">Matricula:</font><span class="campo1"> 1731112261</span></h5></td>
                                        </tr>
                                        <tr>
                                            <td><h5 class="card-title"><font color="BLUE">Carrera:</font><span class="campo1"> Ingeniería Tecnologías de la Información </span></h5></td>
                                            <td><h5 class="card-title"><font color="BLUE">Periodo:</font><span class="campo1"> Mayo-Agosto 2020</span></h5></td>
                                        </tr>

                                    	<tr class="card-title">
                                        <td><font color="BLUE">Adeuda</font><span></span><font color="BLUE"> Materias</font><br><font color="BLUE">  Usted es </font><span><font color="GREEN"> regular</font></span><br></td>
                                        <td><font color="BLUE">Materias que adeuda: </font><br><span class="campoC3"></span>      <!--Promedio:--></td></tr>

                                    </tbody>
                                </table>
                                <br>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><div class="text-center">Materia</div></th>
                                        <th><div class="text-center">Profesor</div></th>
                                        <th>Grupo</th>
                                        <th>Estatus</th>
                                        <th colspan="4"><div class="text-center">Parciales</div></th>
                                        <th>Calificación</th>
                                        <th>Tipo</th>
                                        <th>F. REG.</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<tr>
										<th colspan="4"></th>
										<td>%</td>
										<td>%</td>
										<td>%</td>
										<td>%</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<th>9 ESTANCIA I</th>
										<td>CARLOS DAVID MOCTEZUMA ORTIZ</td>
										<td>41616</td>
										<td><font color="green"> Pendiente</font></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>0</td>
										<td>O</td>
										<td>//</td>
									</tr>
									<tr>
										<th colspan="4"></th>
										<td>%</td>
										<td>%</td>
										<td>%</td>
										<td>%</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<th>9 PROGRAMACIÓN WEB</th>
										<td>JOSE JAVIER CARMONA LOPEZ</td>
										<td>41651</td>
										<td><font color="green"> Pendiente</font></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>0</td>
										<td>O</td>
										<td>//</td>
									</tr>
                                        <tr>
                                            <th colspan="4"></th>
                                            <td>25%</td>
                                            <td>25%</td>
                                            <td>25%</td>
                                            <td>25%</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>9 INGLÉS IX</th>
                                            <td>HECTOR ARROYO SERRANO</td>
                                            <td>41625</td>
                                            <td><font color="green"> Pendiente</font></td>
                                            <td><font color="GREEN">100%</font></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>0</td>
                                            <td>O</td>
                                            <td>27/06/2020</td>
                                        </tr>

                                        <tr>
                                            <th colspan="4"></th>
                                            <td>20%</td>
                                            <td>25%</td>
                                            <td>25%</td>
                                            <td>30%</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>9 ADMINISTRACIÓN DE CENTROS DE CÓMPUTO</th>
                                            <td>MARCO ANTONIO PEREZ SALINAS</td>
                                            <td>41626</td>
                                            <td><font color="green"> Pendiente</font></td>
                                            <td><font color="green">88%</font></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>0</td>
                                            <td>O</td>
                                            <td>04/06/2020</td>
                                        </tr>
                                        <tr>
                                            <th colspan="4"></th>
                                            <td>%</td>
                                            <td>%</td>
                                            <td>%</td>
                                            <td>%</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>9 TECNOLOGÍA Y APLICACIONES WEB</th>
                                            <td>JOSE JAVIER CARMONA LOPEZ</td>
                                            <td>41627</td>
                                            <td><font color="green"> Pendiente</font></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>0</td>
                                            <td>O</td>
                                            <td>//</td>
                                        </tr>
                                        <tr>
                                            <th colspan="4"></th>
                                            <td>25%</td>
                                            <td>25%</td>
                                            <td>30%</td>
                                            <td>20%</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>9 INTELIGENCIA DE NEGOCIOS</th>
                                            <td>MARCO ANTONIO MORALES CAPORAL</td>
                                            <td>41653</td>
                                            <td><font color="green"> Pendiente</font></td>
                                            <td><font color="green">85%</font></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>0</td>
                                            <td>O</td>
                                            <td>15/06/2020</td>
                                        </tr>
                                        <tr>
                                            <th colspan="4"></th>
                                            <td>20%</td>
                                            <td>25%</td>
                                            <td>25%</td>
                                            <td>30%</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>9 COMUNICACION EMPRESARIAL</th>
                                            <td>OSVALDO MORENO HERNANDEZ</td>
                                            <td>41628</td>
                                            <td>Capturado</td>
                                            <td><font color="green">85%</font></td>
                                            <td><font color="green">74%</font></td>
                                            <td></td>
                                            <td></td>
                                            <td>0</td>
                                            <td>O</td>
                                            <td>26/06/2020</td>
                                        </tr>
                                        <tr>
                                            <th colspan="4"></th>
                                            <td>10%</td>
                                            <td>20%</td>
                                            <td>30%</td>
                                            <td>40%</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>9 DESARROLLO DE EMPRENDEDORES</th>
                                            <td>IRAN BENAVIDES MORAN</td>
                                            <td>41629</td>
                                            <td><font color="green"> Pendiente</font></td>
                                            <td><font color="green">97%</font></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>0</td>
                                            <td>O</td>
                                            <td>12/06/2020</td>
                                        </tr>
										<tr>
											<th colspan="4"></th>
											<td>20%</td>
											<td>25%</td>
											<td>25%</td>
											<td>30%</td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<th>9 INTEGRACIÓN DE TECNOLOGÍAS DE LA INFORMACIÓN</th>
											<td>IVETTE HERNANDEZ DAVILA</td>
											<td>41630</td>
											<td>CAPTURADO</td>
											<td><font color="#8b0000">67%</font></td>
											<td></td>
											<td></td>
											<td></td>
											<td>0</td>
											<td>O</td>
											<td>05/06/2020</td>
										</tr>
										<tr>
											<th colspan="4"></th>
											<td>30%</td>
											<td>30%</td>
											<td>40%</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<th>TUTORIAS 9</th>
											<td>IVETTE HERNANDEZ DAVILA</td>
											<td>41632</td>
											<td>CAPTURADO</td>
											<td><font color="GREEN">100%</font></td>
											<td></td>
											<td></td>
											<td></td>
											<td>0</td>
											<td>O</td>
											<td>05/06/2020</td>
										</tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </div>
					</div>
	        </div>
	    </div>
	</body>
</html>

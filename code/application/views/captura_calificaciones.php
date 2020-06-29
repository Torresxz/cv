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
												<i class="pe-7s-calculator icon-gradient bg-night-fade">
												</i>
										</div>
										<div>Captura de Calificaciones
										</div>
									</div>
								</div>
						</div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <table width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><h5 align="center"><strong>ACTA DE CALIFICACIONES</strong></h5></td>
                                        </tr>
                                        <tr>
                                            <td valign="middle" height="20"><h5 class="card-title"><font color="BLUE">PROFESOR:</font><span class="campo1"> JOSE JAVIER CARMONA LOPEZ</span></h5></td>
                                            <td width="302"><h5 class="card-title"><font color="BLUE">No. DE EMPLEADO:</font><span class="campo1"> 4763</span></h5></td>
                                        </tr>
                                        <tr>
                                            <td width="302"><h5 class="card-title"><font color="BLUE">MATERIA:</font><span class="campo1"> 9 PORGRAMACIÓN WEB</span></h5></td>
                                            <td width="302"><h5 class="card-title"><font color="BLUE">ESTATUS:</font><span class="campo1"> PENDIENTE</span></h5></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <table class="mb-0 table table-striped">
                                    <thead>
                                    <tr>
                                        <th>No. Cuenta</th>
                                        <th>Nombre Alumno</th>
                                        <th>Tipo Examen</th>
                                        <th>CALIF. 1</th>
                                        <th>CALIF. 2</th>
                                        <th>CALIF. 3</th>
                                        <th>CALIF. 4</th>
                                        <th>CALIFICACIÓN FINAL</th>
                                        <th>TIPO RES<font color="white">.....</font></th>
                                        <th>% ASIS.</th>
                                        <th>EXTRA</th>
                                        <th>ASESORIA</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <td></td>
                                            <td>% CALIF.</td>
                                            <td><input type="text" class="form-control" name="ansiedad_aspirante" value=""></td>
                                            <td><input type="text" class="form-control" name="ansiedad_aspirante" value=""></td>
                                            <td><input type="text" class="form-control" name="ansiedad_aspirante" value=""></td>
                                            <td><input type="text" class="form-control" name="ansiedad_aspirante" value=""></td>
                                            <td><input type="text" class="form-control" name="ansiedad_aspirante" value=""></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td colspan="5" align ="center" border:red><font color="RED">El rango de valores de calificaciones validas es de 0 a 100 para calificaciones parciales y final.</font></td>
                                            <td></td>
                                            <td align ="center" border:red><font color="RED">% de 0 a 100</font></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1731112261</th>
                                            <td>TORRES MORALES ISRAEL</td>
                                            <td>0</td>
                                            <td><input type="text" class="form-control" name="parcial1" value=""></td>
                                            <td><input type="text" class="form-control" name="parcial2" value=""></td>
                                            <td><input type="text" class="form-control" name="parcial3" value=""></td>
                                            <td><input type="text" class="form-control" name="parcial4" value=""></td>
                                            <td><input type="text" class="form-control" name="final" value=""></td>
                                            <td>
                                                <select name="extra" id="res" class="form-control">
                                                    <option>S</option>
                                                    <option>N</option>
                                                    <option>NA</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" name="asistencia" value="0"></td>
                                            <td>
                                                <select name="extra" id="res" class="form-control">
                                                    <option>S</option>
                                                    <option>N</option>
                                                    <option>NA</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" name="final" value=""></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit" id="button-upload">Guardar</button>
                                </div>
                            </div>
                        </div>
					</div>
	        </div>
	    </div>
	</body>
</html>

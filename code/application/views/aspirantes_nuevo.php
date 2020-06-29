<!doctype html>
<html lang="en">

	<!--==============================HEAD==============================-->
	<?=$this->load->view('includes/head','',TRUE)?>
    <script type="text/javascript" src="<?php echo base_url();?>assets/scripts/form-validation.js"></script>
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
											<i class="pe-7s-id icon-gradient bg-night-fade">
											</i>
									</div>
									<div>Datos Personales
									</div>
								</div>
							</div>
						</div>

                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title"><font color="green">Datos Personales</font></h5>

                                <?php echo form_open_multipart('aspirantes_nuevo/agregar_nuevo_aspirante',['id'=>'nuevo-aspirante']); ?>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label>Nombre(s): (<font color="red">*</font>)</label>
                                            <input type="text" class="form-control" name="nombre_aspirante" placeholder="Nombre(s)" value="<?php echo set_value('nombre_aspirante'); ?>">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label>Apellido Paterno: (<font color="red">*</font>)</label>
                                            <input type="text" class="form-control" name="apellido_paterno" placeholder="Apellido Paterno" value="<?php echo set_value('apellido_paterno'); ?>">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label>Apellido Materno: (<font color="red">*</font>)</label>
                                            <input type="text" class="form-control" name="apellido_materno" placeholder="Apellido materno" value="<?php echo set_value('apellido_materno'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <div class="position-relative form-group"><label for="exampleSelect" class="">Carrera Elegida: (<font color="red">*</font>)</label>
                                                <select name="carrera" id="carrera" class="form-control">
                                                    <option>Ing. Mecatrónica</option>
                                                    <option>Ing. Industrial</option>
                                                    <option>Ing. Química</option>
                                                    <option>Ing. Financiera</option>
                                                    <option>Ing. Biotecnología</option>
                                                    <option>Ing. Tec. Información</option>
                                                    <option>Ing. Sist. Automotrices</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label>Adeudo de Materias:</label>
                                            <input type="text" class="form-control" name="adeudo_materias" placeholder="SI / NO" value="<?php echo set_value('adeudo_materias'); ?>">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label>Número de Materias adeudadas:</label>
                                            <input type="text" class="form-control" name="numero_adeudos" placeholder="Contestar en caso de que adeude materias" value="<?php echo set_value('numero_adeudos'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3"><label>Acta de Nacimiento: (<font color="red">*</font>)</label>
                                            <input name="file" name="acta_nacimiento" id="acta_nacimiento" type="file" class="form-control-file">
                                        </div>
                                        <div class="col-md-3 mb-3"><label>CURP: (<font color="red">*</font>)</label>
                                            <input name="file" name="curp" id="curp" type="file" class="form-control-file">
                                        </div>
                                        <div class="col-md-3 mb-3"><label>Comprobante de Domicilio: (<font color="red">*</font>)</label>
                                            <input name="file" name="comprobante_domicilio" id="comprobante_domicilio" type="file" class="form-control-file">
                                        </div>
                                        <div class="col-md-3 mb-3"><label>Constancia de Estudios: (<font color="red">*</font>)</label>
                                            <input name="file" name="constancia_estudios" id="constancia_estudios" type="file" class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3"><label>Foto del Aspirante: (<font color="red">*</font>)</label>
                                            <input name="file" name="foto_aspirante" id="foto_aspirante" type="file" class="form-control-file">
                                        </div>
                                        <div class="col-md-3 mb-3"><label>Ficha de Admisión: (<font color="red">*</font>)</label>
                                            <input name="file" name="ficha_admision" id="ficha_admision" type="file" class="form-control-file">
                                        </div>
                                        <div class="col-md-3 mb-3"><label>Formato de Inscripción: (<font color="red">*</font>)</label>
                                            <input name="file" name="formato_inscripcion" id="formato_inscripcion" type="file" class="form-control-file">
                                        </div>
                                    </div>
                                    <br>
                                    <h5 class="card-title"><font color="red">Aspectos de Salud</font></h5>

                                    <br>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label>¿Padeces alguna enfermedad?:</label>
                                            <input type="text" class="form-control" name="enfermedad_aspirante" placeholder="SI / NO" value="<?php echo set_value('enfermedad_aspirante'); ?>">
                                        </div>
                                        <div class="col-md-8 mb-3"><label>Descripción:</label><textarea name="enfermedad" placeholder="Si tu respuesta es SI, de que tipo y cuál es el tratamiento que tienes (Esto con la finalidad de identificar casos de riesgo dada la situación actual y darles a ellos una atención diferente)." id="enfermedad" class="form-control"><?php echo set_value('descripcion_enfermedad'); ?></textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label>¿Padeces alergias?:</label>
                                            <input type="text" class="form-control" name="enfermedad_aspirante" placeholder="SI / NO" value="<?php echo set_value('enfermedad_aspirante'); ?>">
                                        </div>
                                        <div class="col-md-8 mb-3"><label>Descripción:</label><textarea name="descripcion_alergias" placeholder="Si tu respuesta es SI de que tipo (Esto con la finalidad de verificar si no es alérgico a Hipoclorito por ejemplo con el que se va a realizar la sanitización y buscar junto con los padres una alternativa de solución." id="descripcion_alergias" class="form-control"><?php echo set_value('descripcion_alergias'); ?></textarea></div>
                                    </div>
                                    <br>
                                    <h5 class="card-title"><font color="blue">Aspectos Emocionales</font></h5>

                                    <br>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label>¿Sufres de Ansiedad?: (<font color="red">*</font>)</label>
                                            <input type="text" class="form-control" name="ansiedad_aspirante" placeholder="SI / NO" value="<?php echo set_value('ansiedad_aspirante'); ?>">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label>¿Sufres de Estrés?: (<font color="red">*</font>)</label>
                                            <input type="text" class="form-control" name="estres_aspirante" placeholder="SI / NO" value="<?php echo set_value('estres_aspirante'); ?>">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label>¿Sufres de Depresión?: (<font color="red">*</font>)</label>
                                            <input type="text" class="form-control" name="depresion_aspirante" placeholder="SI / NO" value="<?php echo set_value('depresion_aspirante'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label>¿Te sientes rechazado por tu familia o amigos?: (<font color="red">*</font>)</label>
                                            <input type="text" class="form-control" name="rechazado_aspirante" placeholder="SI / NO" value="<?php echo set_value('rechazado_aspirante'); ?>">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label>¿Te adaptas fácilmente a los cambios ?: (<font color="red">*</font>)</label>
                                            <input type="text" class="form-control" name="cambios_aspirante" placeholder="SI / NO" value="<?php echo set_value('cambios_aspirante'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label>¿Alguna otra situación emocional que no haya sido considerada anteriormente?: (<font color="red">*</font>)</label>
                                            <input type="text" class="form-control" name="otra_situacion_aspirante" placeholder="SI / NO" value="<?php echo set_value('otra_situacion_aspirante'); ?>">
                                        </div>
                                        <div class="col-md-8 mb-3"><label>Descripción:</label><textarea name="descripcion_situacion" placeholder="(Todos estos aspectos para estar preparados y evitar situaciones de riesgo y dar una atención específica)." id="descripcion_situacion" class="form-control"><?php echo set_value('descripcion_situacion'); ?></textarea></div>
                                    </div>
                                    <div class="text-right">
                                        <a type="button" href="javascript:history.back()" class="btn btn-danger" type="submit">Cancelar</a>
                                        <button class="btn btn-primary" type="submit" id="button-upload">Guardar</button>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>

					</div>
				</div>
	        </div>
	    </div>
	</body>
</html>

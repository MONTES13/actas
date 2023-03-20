<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #fff;">
    <!-- Content Header (Page header) -->
    <div class="content-header" >
        <div class="container-fluid">
            <div>
            <form action="<?php echo base_url()?>save_bautismo" method="post"> 
                <?php if(isset($persona)){?>
                    <input type="hidden" name="id_bautismo" class="form-control" placeholder="INGRESE EL N&Uacute;MERO DEL LIBRO" 
                    value="<?php echo isset($persona)?$persona->id_bautismo:''?>">
                    
                <?php }?>

                <h2><strong>DATOS DEL BAUTISMO</strong></h2>
                <div class="text-right">
                <?php if(isset($persona->id_bautismo)){?>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_bautismo"><i class="fas fa-file-pdf"></i> GENERAR PDF</button>
                <?php }?>
                <a href="<?php echo base_url()?>bautismo" class="btn btn-warning"><i class="fas fa-arrow-left"></i> REGRESAR AL LISTADO</a>
            </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>N&Uacute;MERO DE LIBRO</label>
                            <input type="text" name="num_libro" class="form-control" placeholder="INGRESE EL N&Uacute;MERO DEL LIBRO" 
                            value="<?php echo isset($persona)?$persona->num_libro:''?>"
                           >
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>N&Uacute;MERO DE FOJA</label>
                            <input type="text" name="num_foja" class="form-control" placeholder="INGRESE EL N&Uacute;MERO DE FOJA"
                            value="<?php echo isset($persona)?$persona->num_foja:''?>"
                           >
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>PARTIDA</label>
                            <input type="text" name="partida" class="form-control" placeholder="INGRESE LA PARTIDA"
                            value="<?php echo isset($persona)?$persona->partida:''?>"
                           >
                        </div>
                    </div>
                </div>
                <br>
                <span class="badge badge-info d-block"><h6>DATOS PERSONALES</h6></span><br>

                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>NOMBRE QUIEN RECIBE EL BAUTISMO</label>
                            <input type="text" name="nombre_bautizado" class="form-control text-uppercase" placeholder="INGRESE EL NOMBRE"
                            value="<?php echo isset($persona)?$persona->nombre_bautizado:''?>"
                            >
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>APELLIDO PATERNO</label>
                            <input type="text" name="apellido_paterno_bautizado" class="form-control text-uppercase" placeholder="INGRESE EL APELLIDO PATERNO"
                            value="<?php echo isset($persona)?$persona->apellido_paterno_bautizado:''?>"
                            >
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>APELLIDO MATERNO</label>
                            <input type="text" name="apellido_materno_bautizado" class="form-control text-uppercase" placeholder="INGRESE EL APELLIDO MATERNO"
                            value="<?php echo isset($persona)?$persona->apellido_materno_bautizado:''?>"
                           >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>D&Iacute;A QUE NACI&Oacute;</label>
                            <input type="text" name="dia_nacimiento" class="form-control text-uppercase" placeholder="INGRESE EL D&Iacute;A QUE NACI&Oacute;"
                            value="<?php echo isset($persona)?$persona->dia_nacimiento:''?>"
                            >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>MES QUENACI&Oacute;</label>
                            <select class="form-control text-uppercase" name="mes_nacimiento">
                            <option disabled selected>SELECCIONE</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='ENERO'){echo"selected";}?>  value="ENERO">ENERO</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='FEBRERO'){echo"selected";}?>  value="FEBRERO">FEBRERO</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='MARZO'){echo"selected";}?>  value="MARZO">MARZO</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='ABRIL'){echo"selected";}?> value="ABRIL">ABRIL</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='MAYO'){echo"selected";}?> value="MAYO">MAYO</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='JUNIO'){echo"selected";}?> value="JUNIO">JUNIO</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='JULIO'){echo"selected";}?> value="JULIO">JULIO</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='AGOSTO'){echo"selected";}?> value="AGOSTO">AGOSTO</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='SEPTIEMBRE'){echo"selected";}?> value="SEPTIEMBRE">SEPTIEMBRE</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='OCTUBRE'){echo"selected";}?> value="OCTUBRE">OCTUBRE</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='OCTUBRE'){echo"selected";}?> value="NOVIEMBRE">NOVIEMBRE</option>
                            <option <?php if(isset($persona) and $persona->mes_nacimiento=='DICIEMBRE'){echo"selected";}?> value="DICIEMBRE">DICIEMBRE</option>
                        </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>A&Ntilde;O QUE NACI&Oacute;</label>
                            <input type="text" name="anio_nacimiento" class="form-control text-uppercase" placeholder="INGRESE EL MES QUE NACI&Oacute;"
                            value="<?php echo isset($persona)?$persona->anio_nacimiento:''?>"
                            >
                        </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                            <label>SEXO</label>
                            <select class="form-control text-uppercase" name="sexo">
                            <option disabled selected>SELECCIONE</option>
                            <option <?php if(isset($persona) and $persona->sexo=='F'){echo"selected";}?>  value="F">FEMENINO</option>
                            <option <?php if(isset($persona) and $persona->sexo=='M'){echo"selected";}?> value="M">MASCULINO</option>
                        </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" >
                        <div class="form-group">
                            <label>PAIS DONDE NACI&Oacute;</label>
                            <input type="text" name="pais_nacio" class="form-control text-uppercase" placeholder="PAIS DONDE NACI&Oacute;"
                            value="<?php echo isset($persona)?$persona->pais_nacio:''?>"
                            >
                        </div>
                    </div>
                    <div class="col-md-4" >
                        <div class="form-group">
                            <label>ESTADO DONDE NACI&Oacute;</label>
                            <input type="text" name="estado_nacio" class="form-control text-uppercase" placeholder="ESTADO DONDE NACI&Oacute;"
                            value="<?php echo isset($persona)?$persona->estado_nacio:''?>"
                            >
                        </div>
                    </div>

                    <div class="col-md-4" >
                        <div class="form-group">
                            <label>MUNICIPIO DONDE NACI&Oacute;</label>
                            <input type="text" name="municipio_nacio" class="form-control text-uppercase" placeholder="MUNICIPIO DONDE NACI&Oacute;"
                            value="<?php echo isset($persona)?$persona->municipio_nacio:''?>"
                            >
                        </div>
                    </div>

                    <div class="col-md-4" >
                        <div class="form-group">
                            <label>LOCALIDAD DONDE NACI&Oacute;</label>
                            <input type="text" name="localidad_nacio" class="form-control text-uppercase" placeholder="LOCALIDAD DONDE NACI&Oacute;"
                            value="<?php echo isset($persona)?$persona->localidad_nacio:''?>"
                            >
                        </div>
                    </div>

                </div>
                <br>
                <span class="badge badge-info d-block"><h6>DATOS DEL BAUTISMO</h6></span><br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NOMBRE DEL PAP&Aacute;</label>
                            <input type="text" name="papa" class="form-control text-uppercase" placeholder="INGRESE EL NOMBRE DEL PAP&Aacute;"
                            value="<?php echo isset($persona)?$persona->papa:''?>"
                           >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NOMBRE LA MAM&Aacute;</label>
                            <input type="text" name="mama" class="form-control text-uppercase" placeholder="INGRESE EL NOMBRE DE LA MAM&Aacute;"
                            value="<?php echo isset($persona)?$persona->mama:''?>" >
                        </div>
                    </div>

                    <div class="col-md-6" >
                        <div class="form-group">
                            <label>PADRINO</label>
                            <input type="text" name="padrino" class="form-control text-uppercase" placeholder="INGRESE EL NOMBRE DEL PADRINO"
                            value="<?php echo isset($persona)?$persona->padrino:''?>"
                           >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>MADRINA</label>
                            <input type="text" name="madrina" class="form-control text-uppercase" placeholder="INGRESE EL NOMBRE DE LA MADRINA"
                            value="<?php echo isset($persona)?$persona->madrina:''?>"
                            >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>DIA DEL BAUTISMO</label>
                            <input type="text" name="dia_bautismo" class="form-control text-uppercase" placeholder="DIA DEL BAUTISMO"
                            value="<?php echo isset($persona)?$persona->dia_bautismo:''?>"
                            >
                        </div>
                    </div>
                    <div class="col-md-4" >
                    <div class="form-group">
                            <label>MES DEL BAUTISMO</label>
                            <select class="form-control text-uppercase" name="mes_bautismo">
                            <option disabled selected>SELECCIONE</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='ENERO'){echo"selected";}?>  value="ENERO">ENERO</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='FEBRERO'){echo"selected";}?>  value="FEBRERO">FEBRERO</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='MARZO'){echo"selected";}?>  value="MARZO">MARZO</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='ABRIL'){echo"selected";}?> value="ABRIL">ABRIL</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='MAYO'){echo"selected";}?> value="MAYO">MAYO</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='JUNIO'){echo"selected";}?> value="JUNIO">JUNIO</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='JULIO'){echo"selected";}?> value="JULIO">JULIO</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='AGOSTO'){echo"selected";}?> value="AGOSTO">AGOSTO</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='SEPTIEMBRE'){echo"selected";}?> value="SEPTIEMBRE">SEPTIEMBRE</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='OCTUBRE'){echo"selected";}?> value="OCTUBRE">OCTUBRE</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='NOVIEMBRE'){echo"selected";}?> value="NOVIEMBRE">NOVIEMBRE</option>
                            <option <?php if(isset($persona) and $persona->mes_bautismo=='DICIEMBRE'){echo"selected";}?> value="DICIEMBRE">DICIEMBRE</option>
                        </select>
                        </div>
                    </div>

                    <div class="col-md-4" >
                        <div class="form-group">
                            <label>A&Ntilde;O DEL BAUTISMO</label>
                            <input type="text" name="anio_bautismo" class="form-control text-uppercase" placeholder="A&Ntilde;O DEL BAUTISMO"
                            value="<?php echo isset($persona)?$persona->anio_bautismo:''?>"
                            >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label >CELEBRANTE</label>
                        <input type="text" name="celebrante" class="form-control text-uppercase" placeholder="INGRESE EL NOMBRE DEL CELEBRANTE"
                            value="<?php echo isset($persona)?$persona->celebrante:''?>"
                            >
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-12">
                    <label >NOTAS MARGINALES</label>
                    <textarea id="nota_marginaria"  placeholder="NOTAS MARGINALES" class="form-control" name="nota_marginaria" rows="3" style="width: 100%;"><?php echo isset($persona->nota_marginaria)?$persona->nota_marginaria:'';?></textarea>
                    </div>

                </div>
                <br>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">GUARDAR INFORMACION</button>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>

<?php if(isset($persona)){?>
<!-- Modal -->
<div class="modal fade" id="modal_bautismo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body" style="background-color: #323639;">
        <embed src="<?php echo base_url()?>pdf_bautismo/<?php echo $persona->id_bautismo?>" frameborder="0" width="100%" height="600px">
      </div>
      <div class="modal-footer" style="background-color: #323639;">
        <button type="button" class="btn btn-primary" class="close" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>
</div>
<?php }?>

<style>
    label{
        font-weight: bold;
        font-size: 15px;
    }
</style>
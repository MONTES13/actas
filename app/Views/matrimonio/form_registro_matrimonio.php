 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="background-color: #fff;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <span class="text-center"><h4><strong>DATOS DEL MATRIMONIO</strong> </h4></span><br>

            <div class="text-right">
                <?php if(isset($persona->id_matrimonio)){?>
                <button class="btn btn-danger" data-toggle="modal" data-target="#modal_matrimonio"><i class="fas fa-file-pdf"></i> GENERAR PDF</button>
                <?php }?>
                <a href="<?php echo base_url()?>matrimonio" class="btn btn-warning"><i class="fas fa-arrow-left"></i> REGRESAR AL LISTADO</a>
            </div>
            
            <br>
            <form action="<?php echo base_url()?>save_matrimonio" method="post">

            <?php if(isset($persona)){?>
                <input type="hidden" name="id_matrimonio" class="form-control" placeholder="INGRESE EL N&Uacute;MERO DEL LIBRO" 
                value="<?php echo isset($persona)?$persona->id_matrimonio:''?>">
            <?php }?>



            <span class="badge badge-info d-block" style="opacity: 0.7;"><h6>DATOS PERSONALES DEL NOVIO</h6></span><br>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">NOMBRE DEL NOVIO</label>
                        <input type="text" name="nombre_de_novio" id="" class="form-control text-uppercase" value="<?php echo isset($persona)?$persona->nombre_de_novio:'';?>"
                        placeholder="INGRESE EL NOMBRE">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">APELLIDO PATERNO DEL NOVIO</label>
                        <input type="text" name="apellido_paterno_novio" id="" class="form-control text-uppercase" value="<?php echo isset($persona)?$persona->apellido_paterno_novio:'';?>"
                        placeholder="INGRESE EL APELLIDO PATERNO">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">APELLIDO MATERNO DEL NOVIO</label>
                        <input type="text" name="apellido_materno_novio" id="" class="form-control text-uppercase" value="<?php echo isset($persona)?$persona->apellido_materno_novio:'';?>"
                        placeholder="INGRESE EL APELLIDO MATERNO ">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">D&Iacute;A DE NACIMIENTO</label>
                        <input type="text" name="dia_nacimiento_novio" id="" class="form-control text-uppercase" value="<?php echo isset($persona)?$persona->dia_nacimiento_novio:'';?>"
                        placeholder="D&Iacute;A DE NACIMIENTO ">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>MES QUE NAC&Iacute;O</label>
                        <select class="form-control text-uppercase" name="mes_nacimiento_novio">
                        <option disabled selected>SELECCIONE</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==1){echo"selected";}?>  value="1">ENERO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==2){echo"selected";}?>  value="2">FEBRERO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==3){echo"selected";}?>  value="3">MARZO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==4){echo"selected";}?> value="4">ABRIL</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==5){echo"selected";}?> value="5">MAYO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==6){echo"selected";}?> value="6">JUNIO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==7){echo"selected";}?> value="7">JULIO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==8){echo"selected";}?> value="8">AGOSTO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==9){echo"selected";}?> value="9">SEPTIEMBRE</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==10){echo"selected";}?> value="10">OCTUBRE</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==11){echo"selected";}?> value="11">NOVIEMBRE</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novio==12){echo"selected";}?> value="12">DICIEMBRE</option>
                    </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">A&Ntilde;O QUE NAC&Iacute;O</label>
                        <input type="text" name="anio_nacimiento_novio" id="" class="form-control text-uppercase" value="<?php echo isset($persona)?$persona->anio_nacimiento_novio:'';?>"
                        placeholder="D&Iacute;A DE NACIMIENTO ">
                    </div>
                </div>

            </div>
            <span class="badge badge-info d-block" style="opacity: 0.7;"><h6>DATOS PERSONALES DE LA NOVIA</h6></span><br>

            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">NOMBRE DEL NOVIA</label>
                        <input type="text" name="nombre_de_la_novia" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->nombre_de_la_novia:'';?>"
                        placeholder="INGRESE EL NOMBRE">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">APELLIDO PATERNO DE  LA NOVIA</label>
                        <input type="text" name="apellido_paterno_novia" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->apellido_paterno_novia:'';?>"
                        placeholder="INGRESE EL APELLIDO PATERNO">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">APELLIDO MATERNO DE LA NOVIA</label>
                        <input type="text" name="apellido_materno_novia" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->apellido_materno_novia:'';?>"
                        placeholder="INGRESE EL APELLIDO MATERNO ">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">D&Iacute;A DE NACIMIENTO</label>
                        <input type="text" name="dia_nacimiento_novia" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->dia_nacimiento_novia:'';?>"
                        placeholder="D&Iacute;A DE NACIMIENTO ">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>MES QUE NAC&Iacute;O</label>
                        <select class="form-control text-uppercase" name="mes_nacimiento_novia">
                        <option disabled selected>SELECCIONE</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==1){echo"selected";}?>  value="1">ENERO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==2){echo"selected";}?>  value="2">FEBRERO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==3){echo"selected";}?>  value="3">MARZO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==4){echo"selected";}?> value="4">ABRIL</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==5){echo"selected";}?> value="5">MAYO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==6){echo"selected";}?> value="6">JUNIO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==7){echo"selected";}?> value="7">JULIO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==8){echo"selected";}?> value="8">AGOSTO</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==9){echo"selected";}?> value="9">SEPTIEMBRE</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==10){echo"selected";}?> value="10">OCTUBRE</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==11){echo"selected";}?> value="11">NOVIEMBRE</option>
                        <option <?php if(isset($persona) and $persona->mes_nacimiento_novia==12){echo"selected";}?> value="12">DICIEMBRE</option>
                    </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">A&Ntilde;O QUE NAC&Iacute;O</label>
                        <input type="text" name="anio_nacimiento_novia" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->anio_nacimiento_novia:'';?>"
                        placeholder="D&Iacute;A DE NACIMIENTO ">
                    </div>
                </div>

            </div>

            <span class="badge badge-info d-block" style="opacity: 0.7;"><h6>DATOS DE LA BODA</h6></span><br>

            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">N&Uacute;MERO DE LIBRO</label>
                        <input type="text" name="num_libro" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->num_libro:'';?>"
                        placeholder="D&Iacute;A DE LA BADA ">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">N&Uacute;MERO DE PARTIDA</label>
                        <input type="text" name="partida" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->partida:'';?>"
                        placeholder="D&Iacute;A DE LA BADA ">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">N&Uacute;MERO DE FOJA</label>
                        <input type="text" name="num_foja" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->num_foja:'';?>"
                        placeholder="D&Iacute;A DE LA BADA ">
                    </div>
                </div>




                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">D&Iacute;A LA BODA</label>
                        <input type="text" name="dia_boda" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->dia_boda:'';?>"
                        placeholder="D&Iacute;A DE LA BADA ">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label>MES</label>
                        <select class="form-control text-uppercase" name="mes_boda">
                        <option disabled selected>SELECCIONE</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='ENERO'){echo"selected";}?>  value="ENERO">ENERO</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='FEBRERO'){echo"selected";}?>  value="FEBRERO">FEBRERO</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='MARZO'){echo"selected";}?>  value="MARZO">MARZO</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='ABRIL'){echo"selected";}?> value="ABRIL">ABRIL</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='MAYO'){echo"selected";}?> value="MAYO">MAYO</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='JUNIO'){echo"selected";}?> value="JUNIO">JUNIO</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='JULIO'){echo"selected";}?> value="JULIO">JULIO</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='AGOSTO'){echo"selected";}?> value="AGOSTO">AGOSTO</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='SEPTIEMBRE'){echo"selected";}?> value="SEPTIEMBRE">SEPTIEMBRE</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='OCTUBRE'){echo"selected";}?> value="OCTUBRE">OCTUBRE</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='NOVIEMBRE'){echo"selected";}?> value="NOVIEMBRE">NOVIEMBRE</option>
                        <option <?php if(isset($persona) and $persona->mes_boda=='DICIEMBRE'){echo"selected";}?> value="DICIEMBRE">DICIEMBRE</option>
                    </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">AM&Iacute;O</label>
                        <input type="text" name="anio_boda" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->anio_boda:'';?>"
                        placeholder="D&Iacute;A DE LA BADA ">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">PRIMER TESTIGO</label>
                        <input type="text" name="primer_testigo" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->primer_testigo:'';?>"
                        placeholder="NOMBRE DEL PRIMER TESTIGO">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">SEGUNDO TESTIGO</label>
                        <input type="text" name="segundo_testigo" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->segundo_testigo:'';?>"
                        placeholder="NOMBRE DEL SEGUNDO TESTIGO">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">CELEBRANTE</label>
                        <input type="text" name="celebrante" id="" class="form-control text-uppercase" 
                        value="<?php echo isset($persona)?$persona->celebrante:'';?>"
                        placeholder="NOMBRE DEL CELEBRANTE">
                    </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>


            </form>
      </div>
    </div>
 </div>

 <?php if(isset($persona)){?>
<!-- Modal -->
<div class="modal fade" id="modal_matrimonio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body" style="background-color: #323639;">
        <embed src="<?php echo base_url()?>pdf_matrimonio/<?php echo $persona->id_matrimonio?>" frameborder="0" width="100%" height="600px">
      </div>
      <div class="modal-footer" style="background-color: #323639;">
        <button type="button" class="btn btn-primary" class="close" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>
</div>
<?php }?>

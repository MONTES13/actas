  <!-- Content Wrapper. Contains page content 
  https://mdbootstrap.com/docs/standard/content-styles/icons/
  <i class="fa-solid fa-eye"></i>
-->
  <div class="content-wrapper" style="background-color: #fff;">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">

              <div class="card card-body">
                  <span class="text-center">
                      <h4><strong>DATOS DEL REGISTRO PARA LA CONFIRMACI&Oacute;N</strong> </h4>
                  </span><br>
                  <div class="text-right">
                      <?php if(isset($persona->id_confirmacion)){?>
                      <button class="btn btn-danger" data-toggle="modal" data-target="#modal_confirmacion"><i
                              class="fas fa-file-pdf"></i> GENERAR PDF</button>
                      <?php }?>
                      <a href="<?php echo base_url()?>confirmacion" class="btn btn-warning"><i
                              class="fas fa-arrow-left"></i> REGRESAR AL LISTADO</a>
                  </div>
                  <hr>
                  <br>
                  <form action="<?php echo base_url()?>save_confirmacion" id="form_confirmacion" method="post">
                      <?php if(isset($persona)){?>
                      <input type="hidden" name="id_confirmacion" class="form-control"
                          placeholder="INGRESE EL N&Uacute;MERO DEL LIBRO"
                          value="<?php echo isset($persona)?$persona->id_confirmacion:''?>">
                      <?php }?>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>N&Uacute;MERO DE LIBRO</label>
                                  <input type="text" name="num_libro" class="form-control"
                                      placeholder="INGRESE EL N&Uacute;MERO DEL LIBRO"
                                      value="<?php echo isset($persona)?$persona->num_libro:''?>">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>N&Uacute;MERO DE FOJA</label>
                                  <input type="text" name="num_foja" class="form-control"
                                      placeholder="INGRESE EL N&Uacute;MERO DE FOJA"
                                      value="<?php echo isset($persona)?$persona->num_foja:''?>">
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>PARTIDA</label>
                                  <input type="text" name="partida" class="form-control"
                                      placeholder="INGRESE LA PARTIDA"
                                      value="<?php echo isset($persona)?$persona->partida:''?>">
                              </div>
                          </div>

                      </div>
                      <span class="badge badge-info d-block badge-sm">
                          <h6>DATOS PERSONALES</h6>
                      </span><br>

                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>NOMBRE QUIEN RECIBE LA COMUNI&Oacute;N</label>
                                  <input type="text" name="nombre" class="form-control text-uppercase"
                                      placeholder="INGRESE EL NOMBRE"
                                      value="<?php echo isset($persona)?$persona->nombre:''?>">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>APELLIDO PATERNO</label>
                                  <input type="text" name="paterno" class="form-control text-uppercase"
                                      placeholder="INGRESE EL APELLIDO PATERNO"
                                      value="<?php echo isset($persona)?$persona->paterno:''?>">
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>APELLIDO MATERNO</label>
                                  <input type="text" name="materno" class="form-control text-uppercase"
                                      placeholder="INGRESE EL APELLIDO MATERNO"
                                      value="<?php echo isset($persona)?$persona->materno:''?>">
                              </div>
                          </div>
                      </div>


                      <hr>

                      <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label>D&Iacute;A QUE NACIO</label>
                                  <input type="text" name="dia_nacimiento" class="form-control text-uppercase"
                                      placeholder="INGRESE EL D&Iacute;A QUE NACIO"
                                      value="<?php echo isset($persona)?$persona->dia_nacimiento:''?>">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label>MES QUE NACIO</label>
                                  <select class="form-control text-uppercase" name="mes_nacimiento">
                                      <option disabled selected>SELECCIONE</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==1){echo"selected";}?>
                                          value="1">ENERO</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==2){echo"selected";}?>
                                          value="2">FEBRERO</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==3){echo"selected";}?>
                                          value="3">MARZO</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==4){echo"selected";}?>
                                          value="4">ABRIL</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==5){echo"selected";}?>
                                          value="5">MAYO</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==6){echo"selected";}?>
                                          value="6">JUNIO</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==7){echo"selected";}?>
                                          value="7">JULIO</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==8){echo"selected";}?>
                                          value="8">AGOSTO</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==9){echo"selected";}?>
                                          value="9">SEPTIEMBRE</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==10){echo"selected";}?>
                                          value="10">OCTUBRE</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==11){echo"selected";}?>
                                          value="11">NOVIEMBRE</option>
                                      <option
                                          <?php if(isset($persona) and $persona->mes_nacimiento==12){echo"selected";}?>
                                          value="12">DICIEMBRE</option>
                                  </select>
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="form-group">
                                  <label>A&Ntilde;O QUE NACIO</label>
                                  <input type="text" name="anio_nacimiento" class="form-control text-uppercase"
                                      placeholder="INGRESE EL MES QUE NACIO"
                                      value="<?php echo isset($persona)?$persona->anio_nacimiento:''?>">
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="form-group">
                                  <label>SEXO</label>
                                  <select class="form-control text-uppercase" name="sexo">
                                      <option disabled selected>SELECCIONE</option>
                                      <option <?php if(isset($persona) and $persona->sexo=='F'){echo"selected";}?>
                                          value="F">FEMENINO</option>
                                      <option <?php if(isset($persona) and $persona->sexo=='M'){echo"selected";}?>
                                          value="M">MASCULINO</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>NOMBRE DEL PAP&Aacute;</label>
                                  <input type="text" name="papa" class="form-control text-uppercase"
                                      placeholder="INGRESE EL NOMBRE DEL PAP&Aacute;"
                                      value="<?php echo isset($persona)?$persona->papa:''?>">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>NOMBRE LA MAM&Aacute;</label>
                                  <input type="text" name="mama" class="form-control text-uppercase"
                                      placeholder="INGRESE EL NOMBRE DE LA MAM&Aacute;"
                                      value="<?php echo isset($persona)?$persona->mama:''?>">
                              </div>
                          </div>

                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>PADRINO</label>
                                  <input type="text" name="padrino" class="form-control text-uppercase"
                                      placeholder="INGRESE EL NOMBRE DEL PADRINO"
                                      value="<?php echo isset($persona)?$persona->padrino:''?>">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>MADRINA</label>
                                  <input type="text" name="madrina" class="form-control text-uppercase"
                                      placeholder="INGRESE EL NOMBRE DE LA MADRINA"
                                      value="<?php echo isset($persona)?$persona->madrina:''?>">
                              </div>
                          </div>
                      </div>
                      <br>
                      <span class="badge badge-info d-block">
                          <h6>DATOS DE LA CONFIRMACI&Oacute;N</h6>
                      </span>
                      <hr>
                      <div class="row">
                          <div class="col-md-2">
                              <label>D&Iacute;A DE LA CONFIRMACI&Oacute;N</label>
                              <input type="number" name="dia_confirmacion" class="form-control" placeholder="D&Iacute;A"
                                  value="<?php echo isset($persona)?$persona->dia_confirmacion:''?>">
                          </div>

                          <div class="col-md-2">
                              <label>MES DE LA CONFIRMACI&Oacute;N</label>
                              <select class="form-control text-uppercase" name="mes_confirmacion">
                                  <option disabled selected>SELECCIONE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='ENERO'){echo"selected";}?>
                                      value="ENERO">ENERO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='FEBRERO'){echo"selected";}?>
                                      value="FEBRERO">FEBRERO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='MARZO'){echo"selected";}?>
                                      value="MARZO">MARZO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='ABRIL'){echo"selected";}?>
                                      value="ABRIL">ABRIL</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='MAYO'){echo"selected";}?>
                                      value="MAYO">MAYO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='JUNIO'){echo"selected";}?>
                                      value="JUNIO">JUNIO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='JULIO'){echo"selected";}?>
                                      value="JULIO">JULIO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='AGOSTO'){echo"selected";}?>
                                      value="AGOSTO">AGOSTO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='SEPTIEMBRE'){echo"selected";}?>
                                      value="SEPTIEMBRE">SEPTIEMBRE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='OCTUBRE'){echo"selected";}?>
                                      value="OCTUBRE">OCTUBRE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='NOVIEMBRE'){echo"selected";}?>
                                      value="NOVIEMBRE">NOVIEMBRE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_confirmacion=='DICIEMBRE'){echo"selected";}?>
                                      value="DICIEMBRE">DICIEMBRE</option>
                              </select>
                          </div>

                          <div class="col-md-2">
                              <label>A&Ntilde;O DE LA CONFIRMACI&Oacute;N</label>
                              <input type="number" name="anio_confirmacion" class="form-control"
                                  placeholder="A&Ntilde;O "
                                  value="<?php echo isset($persona)?$persona->anio_confirmacion:''?>">

                          </div>

                          <div class="col-md-6">
                              <label>NOMBRE DEL CELEBRANTE</label>
                              <input type="text" name="parroco" class="form-control" placeholder="NOMBRE DEL CELEBRANTE"
                                  value="<?php echo isset($persona)?$persona->parroco:''?>">

                          </div>

                      </div>
                      <br>
                      <hr>

                      <span class="badge badge-info d-block">
                          <h6>DATOS DE SU BAUTISMO</h6>
                      </span>
                      <br>
                      <div class="row">
                          <div class="col-md-4 text-center">
                              <label>CUENTA CON LOS DATOS DEL BAUTISMO ?</label>
                              <table width=100%>
                                  <tr>
                                      <td class="text-center"> si</td>
                                      <td class="text-center"> no</td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">
                                          <input type="radio" id="cuenta_datos_recibio_bautismo" name="cuenta_datos_recibio_bautismo"
                                              value="1" class="cuenta_datos_recibio_bautismo required"
                                              <?php echo isset($si_bautismo)?$si_bautismo:''?>>
                                      </td>

                                      <td class="text-center">
                                          <input type="radio" id="cuenta_datos_recibio_bautismo" name="cuenta_datos_recibio_bautismo"
                                              value="2" class="cuenta_datos_recibio_bautismo required"
                                              <?php echo isset($no_bautismo)?$no_bautismo:''?>>
                                      </td>

                                  </tr>
                              </table>

                          </div>
                          <div class="col-md-8">
                              <div class="alert alert-warning" role="alert"
                                  style="font-size: 11px;text-transform: uppercase;text-align: justify;">
                                  <strong>Nota:</strong> ES importante que selecciones una de estas dos
                                  opciones.<br>
                                  <li>Si selecciona la opci&oacute;n <strong>si</strong>, tendr&aacute;s que ingresar
                                      los datos del bautismo para avanzar con el registro.</li>
                                  <li> Si seleccionas la opci&oacute;n de <strong>no</strong>, para este caso no
                                      deber&aacute;s ingresar los datos del bautismo y
                                      podr&aacute;s avanzar con el registro.</li>
                              </div>
                          </div>

                      </div>
                      <br>
                      <div class="row ">
                          <div class="col-md-4">
                              <label>D&Iacute;A EN EL QUE RECIBI&Oacute; EL BAUTISMO</label>
                              <input type="number" name="dia_bautismo" class="form-control" placeholder="D&Iacute;A"
                                  value="<?php echo isset($persona)?$persona->dia_bautismo:''?>">
                          </div>

                          <div class="col-md-4">
                              <label>MES QUE RECIBI&Oacute; EL BAUTISMO</label>
                              <select class="form-control text-uppercase" name="mes_bautismo">
                                  <option disabled selected>SELECCIONE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='ENERO'){echo"selected";}?>
                                      value="ENERO">ENERO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='FEBRERO'){echo"selected";}?>
                                      value="FEBRERO">FEBRERO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='MARZO'){echo"selected";}?>
                                      value="MARZO">MARZO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='ABRIL'){echo"selected";}?>
                                      value="ABRIL">ABRIL</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='MAYO'){echo"selected";}?>
                                      value="MAYO">MAYO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='JUNIO'){echo"selected";}?>
                                      value="JUNIO">JUNIO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='JULIO'){echo"selected";}?>
                                      value="JULIO">JULIO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='AGOSTO'){echo"selected";}?>
                                      value="AGOSTO">AGOSTO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='SEPTIEMBRE'){echo"selected";}?>
                                      value="SEPTIEMBRE">SEPTIEMBRE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='OCTUBRE'){echo"selected";}?>
                                      value="OCTUBRE">OCTUBRE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='NOVIEMBRE'){echo"selected";}?>
                                      value="NOVIEMBRE">NOVIEMBRE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_bautismo=='DICIEMBRE'){echo"selected";}?>
                                      value="DICIEMBRE">DICIEMBRE</option>
                              </select>
                          </div>

                          <div class="col-md-4">
                              <label>A&Ntilde;O QUE RECIBI&Oacute; EL BAUTISMO</label>
                              <input type="number" name="anio_bautismo" class="form-control" placeholder="A&Ntilde;O "
                                  value="<?php echo isset($persona)?$persona->anio_bautismo:''?>">

                          </div>

                          <div class="col-md-12 p-3">
                              <label>PARROQUIA DONDE RECIBI&Oacute; EL BAUTISMO</label>
                              <input type="text" name="parroquia_recibio_bautismo" class="form-control"
                                  placeholder="EJEMPLO: PARROQUIA DE LA SANTISIMA MARIA DE CHILAPA , GRO"
                                  value="<?php echo isset($persona)?$persona->parroquia_recibio_bautismo:''?>">

                          </div>

                      </div>

                      <br><br>
                      <hr>

                      <span class="badge badge-info d-block">
                          <h6>DATOS DE SU COMUNI&Oacute;N</h6>
                      </span>
                      <br>
                      <div class="row">
                          <div class="col-md-4 text-center">
                              <label>CUENTA CON LOS DATOS DE LA COMUNI&Oacute;N ?</label>
                              <table width=100%>
                                  <tr>
                                      <td class="text-center"> si</td>
                                      <td class="text-center"> no</td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">
                                          <input type="radio" id="cuenta_datos_recibio_comunion" name="cuenta_datos_recibio_comunion"
                                              value="1" class="cuenta_datos_recibio_comunion required"
                                              <?php echo isset($si_comunion)?$si_comunion:''?>>
                                          <br>
                                      </td>

                                      <td class="text-center">
                                          <input type="radio" id="cuenta_datos_recibio_comunion" name="cuenta_datos_recibio_comunion"
                                              value="2" class="cuenta_datos_comunio required"
                                              <?php echo isset($no_comunion)?$no_comunion:''?>>
                                          <br>
                                      </td>

                                  </tr>
                               
                              </table>

                          </div>
                          <div class="col-md-8">
                              <div class="alert alert-danger" role="alert"
                                  style="font-size: 11px;text-transform: uppercase;text-align: justify;">
                                  <strong>Nota:</strong> ES importante que selecciones una de estas dos
                                  opciones.<br>
                                  <li>Si selecciona la opci&oacute;n <strong>si</strong>, tendr&aacute;s que ingresar
                                      los datos de la comuni&oacute;n para avanzar con el registro.</li>
                                  <li> Si seleccionas la opci&oacute;n de <strong>no</strong>, para este caso no
                                      deber&aacute;s ingresar los datos de la comuni&oacute;n y
                                      podr&aacute;s avanzar con el registro.</li>
                              </div>
                          </div>

                      </div>
                      <br>
                      <div class="row ">
                          <div class="col-md-4">
                              <label>D&Iacute;A QUE RECIBI&Oacute; LA COMUNI&Oacute;N</label>
                              <input type="number" name="dia_recibio_comunio" class="form-control" placeholder="D&Iacute;A"
                                  value="<?php echo isset($persona)?$persona->dia_recibio_comunio:''?>">
                          </div>

                          <div class="col-md-4">
                              <label>MES QUE RECIBI&Oacute;LA COMUNI&Oacute;N</label>
                              <select class="form-control text-uppercase" name="mes_recibio_comunion">
                                  <option disabled selected>SELECCIONE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='ENERO'){echo"selected";}?>
                                      value="ENERO">ENERO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='FEBRERO'){echo"selected";}?>
                                      value="FEBRERO">FEBRERO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='MARZO'){echo"selected";}?>
                                      value="MARZO">MARZO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='ABRIL'){echo"selected";}?>
                                      value="ABRIL">ABRIL</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='MAYO'){echo"selected";}?>
                                      value="MAYO">MAYO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='JUNIO'){echo"selected";}?>
                                      value="JUNIO">JUNIO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='JULIO'){echo"selected";}?>
                                      value="JULIO">JULIO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='AGOSTO'){echo"selected";}?>
                                      value="AGOSTO">AGOSTO</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='SEPTIEMBRE'){echo"selected";}?>
                                      value="SEPTIEMBRE">SEPTIEMBRE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='OCTUBRE'){echo"selected";}?>
                                      value="OCTUBRE">OCTUBRE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='NOVIEMBRE'){echo"selected";}?>
                                      value="NOVIEMBRE">NOVIEMBRE</option>
                                  <option
                                      <?php if(isset($persona) and $persona->mes_recibio_comunion=='DICIEMBRE'){echo"selected";}?>
                                      value="DICIEMBRE">DICIEMBRE</option>
                              </select>
                          </div>

                          <div class="col-md-4">
                              <label>A&Ntilde;O QUE RECIBI&Oacute; LA COMUNI&Oacute;N</label>
                              <input type="number" name="anio_recibio_comunion" class="form-control" placeholder="A&Ntilde;O "
                                  value="<?php echo isset($persona)?$persona->anio_recibio_comunion:''?>">

                          </div>

                          <div class="col-md-12 p-3">
                              <label>PARROQUIA DONDE RECIBI&Oacute; LA COMUNI&Oacute;N</label>
                              <input type="text" name="parroquia_recibio_comunion" class="form-control"
                                  placeholder="INGRESA EN NOMBRE DE LA PARROQUIA DONDE RECIBI&Oacute; LA COMUNI&Oacute;N "
                                  value="<?php echo isset($persona)?$persona->parroquia_recibio_comunion:''?>"  data-toggle="tooltip" data-placement="top" title="EJEMPLO: PARROQUIA DE LA SANTISIMA MARIA DE CHILAPA , GRO">

                          </div>

                      </div>

                      <br>
                      <label>NOTAS MARGINALES</label>
                      <div class="row">
                          <div class="col-md-12">
                              <textarea id="nota_marginaria" placeholder="NOTAS MARGINALES" class="form-control"
                                  name="nota_marginaria" rows="3"
                                  style="width: 100%;"><?php echo isset($persona->nota_marginaria)?$persona->nota_marginaria:'';?></textarea>
                          </div>

                      </div>

                      <br>
                      <div class="text-right">

                          <button type="submit" class="btn btn-primary guardar">GUARDAR</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <?php if(isset($persona)){?>
  <!-- Modal -->
  <div class="modal fade" id="modal_confirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-body" style="background-color: #323639;">
                  <embed src="<?php echo base_url()?>pdf_confirmacion/<?php echo $persona->id_confirmacion?>"
                      frameborder="0" width="100%" height="600px">
              </div>
              <div class="modal-footer" style="background-color: #323639;">
                  <button type="button" class="btn btn-primary" class="close" data-dismiss="modal">CERRAR</button>
              </div>
          </div>
      </div>
  </div>
  <?php }?>





  <style>
label {
    font-size: 14px;
}

.error {
    color: #F00;
    background-color: #FFF;
}
  </style>


  <script>
$(function() {
    $("#form_confirmacion").validate({

        rules: {
            cuenta_datos_recibio_bautismo: {
                required: true
            },
            cuenta_datos_recibio_comunion: {
                required: true
            },
        },
        messages: {
            cuenta_datos_recibio_bautismo: {
                required: '<br>DEBE DE SELECCIONAR UNA OPCI&Oacute;N '
            },
            cuenta_datos_recibio_comunion: {
                required: "<br>DEBE DE SELECCIONAR UNA OPCI&Oacute;N"
            }

        },
        errorElement: 'error'
    });
});
  </script>
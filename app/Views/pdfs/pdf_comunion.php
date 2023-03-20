
 
  <div style="margin-left: 60px;margin-right: 30px;font-size: 13px;text-transform: uppercase;">
    EL D&Iacute;A <strong><?php echo $persona->dia_comunion?> de <?php echo $persona->mes_comunion?> de <?php echo $persona->anio_comunion?></strong>
    Recibió el sacramentos de la primera comunión, DE MANOS DEL <strong> <?php echo $persona->parroco?></strong>.
  </div>

  <p style="text-align: center;">
    <h2 style="text-align: center;text-transform: uppercase;"><?php echo $persona->nombre_recibe_comunion.' '. $persona->paterno.' '.$persona->materno?></h2>
  </p>
<br>

<?php if($persona->dia_nacimiento !="" 
  and $persona->mes_nacimiento    !="" 
  and $persona->anio_nacimiento   !="" 
  and $persona->estado_nacio      !="" 
  and $persona->municipio_nacio   !="" 
  and $persona->localidad_nacio   !="" ){?>
  <div style="margin-left: 60px;margin-right: 30px;font-size: 13px;text-transform: uppercase;">
    Que nació el día <?php echo $persona->dia_nacimiento?> de <?php echo buscar_mes($persona->mes_nacimiento)?> del <?php echo $persona->anio_nacimiento?>,
    en el municipio de <?php echo $persona->municipio_nacio?>, en la localidad de <?php echo $persona->municipio_nacio?>, del estado de 
    <?php echo $persona->estado_nacio?>, <?php echo $persona->pais_nacio?>.
  </div>
  <br><br>
<?php }?>

<?php if($persona->cuenta_datos_bautismo==1){?>
  <div style="margin-left: 60px;margin-right: 30px;font-size: 13px;text-transform: uppercase;">
    Recibió su bautismo el día <?php echo $persona->dia_bautismo?> de <?php echo $persona->mes_bautismo?> del
    <?php echo $persona->anio_bautismo?>, en la <?php echo $persona->nombre_parroquia_fue_bautizado?>
  </div>

  <br><br>
<?php }?>


<br>
 <table width="100%"  style="margin-left: 20px;margin-right: 50px;">
  <tr>
    <td style="text-align: center;text-transform: uppercase; width: 400px;">
      <strong>PAPÁ</strong><br>
      <?php echo $persona->papa?>
    </td>
    <td style="text-align: center;text-transform: uppercase; width: 400px;">
      <strong>MAMÁ</strong><br>
      <?php echo $persona->mama?>
    </td>
  </tr>
  <?php for($i=0;$i<=5;$i++){?>
    <tr>
      <td></td>
      <td></td>
    </tr>
  <?php }?>
  <tr>
  <td style="text-align: center;text-transform: uppercase; width: 300px;">
      <strong>PADRINO</strong><br>
      <?php echo $persona->padrino?>
    </td>
    <td style="text-align: center;text-transform: uppercase; width: 300px;">
      <strong>MADRINA</strong><br>
      <?php echo $persona->madrina?>
    </td>
  </tr>
 </table>

 <?php for($i=0;$i<=2;$i++){?>
  <br>
<?php }?>

 
<div style="margin-left: 60px;margin-right: 30px;font-size: 13px;text-transform: uppercase;">
   
        LOS DATOS DE ESTE SACRAMENTO SE ENCUENTRAN EN EL ARCHIVO PARROQUIAL, EN EL <strong>LIBRO</strong>: <span style="color: red;"><?php ECHO $persona->num_libro ?></span>,
        <strong>PARTIDA </strong><span style="color: red;"><?php ECHO $persona->partida ?></span>, <strong>FOJA </strong><span style="color: red;"><?php ECHO $persona->num_foja ?></span>.

</div>

<?php for($i=0;$i<=3;$i++){?>
  <br>
<?php }?>
<div>
    <table  style="width:100%">
        <tr >
            <td id="pbro">___________________________________________________ <br>
                LIC. PBRO. ANTONIO SALGADO BRAVO <br><strong>PÁRROCO</strong></td>
        </tr>
    </table>
</div>
<br>
<div style="margin-left: 60px;margin-right: 30px;font-size: 10px;text-transform: uppercase;">
      <?php if( $persona->nota_marginaria!=null || $persona->nota_marginaria!=""){?>
          <strong>NOTAS MARGINALES:</strong><br>
          <?php echo $persona->nota_marginaria ?>
      <?php }?>
  </div>


<style>
  #pbro{
            width: 100%;
            text-transform: uppercase;
            text-align: center;
            font-size: 14px;
        }
</style>

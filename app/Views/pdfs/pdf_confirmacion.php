
<div style="margin-left: 50px;margin-right: 50px;font-size: 13px;text-transform: uppercase;text-align: justify;">
    EL D&Iacute;A <strong><?php echo $persona->dia_confirmacion?> de <?php echo $persona->mes_confirmacion?> de <?php echo $persona->anio_confirmacion?></strong>,
     Recibió el sacramentos de confirmaci&oacute;n</strong>, DE manos del<strong> <?php echo $persona->parroco?></strong>.
  </div>

  <br>
    <h2 style="text-align: center;text-transform: uppercase;"><?php echo $persona->nombre.' '. $persona->paterno.' '.$persona->materno?></h2>

    <?php if($persona->cuenta_datos_recibio_bautismo==1){?>
      <div style="margin-left: 50px;margin-right: 50px;font-size: 13px;text-transform: uppercase;text-align: justify;">
        Recibió el bautismo el día <?php echo $persona->dia_bautismo?> de <?php echo $persona->mes_bautismo?> de  <?php echo $persona->anio_bautismo?>,
        en la <?php echo $persona->parroquia_recibio_bautismo?> 
      </div>
      <br>
    <?php }?>

    <?php if($persona->cuenta_datos_recibio_comunion==1){?>
      <div style="margin-left: 50px;margin-right: 50px;font-size: 13px;text-transform: uppercase;text-align: justify;">
        Recibió LA eucaristía el día <?php echo $persona->dia_recibio_comunio?> de <?php echo $persona->mes_recibio_comunion?> de  <?php echo $persona->anio_recibio_comunion?>,
        en la <?php echo $persona->parroquia_recibio_comunion?> 
      </div>
      <br>
    <?php }?>
    
    <br>
<table width="100%"  style="margin-left: 50px;margin-right: 80px;">

  <tr>
    <td style="text-align: center; text-transform: uppercase;width: 300px;">
      <strong>PAPÁ</strong><br>
      <?php echo $persona->papa?>
    </td>
    <td style="text-align: center;text-transform: uppercase;width: 300px;">
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
    <td style="text-align: center;text-transform: uppercase;width: 300px;">
      <strong>PADRINO</strong><br>
      <?php echo $persona->padrino?>
    </td>
    <td style="text-align: center;text-transform: uppercase;width: 300px;">
      <strong>MADRINA</strong><br>
      <?php echo $persona->madrina?>
    </td>
  </tr>
 </table>

 <?php for($i=0;$i<=3;$i++){?>
  <br>
<?php }?>

<div style="margin-left: 50px;margin-right: 50px;font-size: 12px;text-transform: uppercase;text-align: justify;">
   
        LOS DATOS DE ESTE SACRAMENTO SE ENCUENTRAN EN EL ARCHIVO PARROQUIAL, EN EL <strong>LIBRO</strong>: <span style="color: red;"><?php ECHO $persona->num_libro ?></span>,
        <strong>PARTIDA </strong><span style="color: red;"><?php ECHO $persona->partida ?></span>, <strong>FOJA </strong><span style="color: red;"><?php ECHO $persona->num_foja ?></span>.
 
</div>

<br><br><br><br>
<div>
    <table  style="width:100%">
        <tr >
            <td id="pbro">___________________________________________________ <br>
                LIC. PBRO. ANTONIO SALGADO BRAVO <br><strong>PÁRROCO</strong></td>
        </tr>
    </table>
</div>
<br><br><br><br>
<div style="margin-left: 50px;margin-right: 30px;font-size: 10px;text-transform: uppercase;">
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

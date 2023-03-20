<div style="margin-left: 60px;margin-right: 20px;font-size: 14px;text-transform: uppercase;">
    El día <strong><?php echo $persona->dia_bautismo .' DE '. $persona->mes_bautismo.' DE '.$persona->anio_bautismo?></strong>, 
        recibió en esta parroquia el sacramento de bautismo.</span>
</div>
<br>
<div style="text-align: center; text-transform: uppercase;">
    <h1>
        <?php echo $persona->nombre_bautizado.' '.$persona->apellido_paterno_bautizado.' '.$persona->apellido_materno_bautizado?>
    </h1>
</div>
<br>
<div style="margin-left: 60px;margin-right: 20px;font-size: 14px;text-transform: uppercase;">
    que nació el día <strong><?php echo $persona->dia_nacimiento?> DE  <?php echo $persona->mes_nacimiento?> DE <?php echo $persona->anio_nacimiento?>, EN EL 
     MUNICIPIO DE <?php echo $persona->municipio_nacio?>, EN <br>LA LOCALIDAD DE <?php echo $persona->localidad_nacio?>, DEL ESTADO DE <?php echo $persona->estado_nacio?>,
      <?php echo $persona->pais_nacio?>
     .</strong>
</div>


<br><br>
<table width="100%"  style="margin-left: 95px;margin-right: 95px;">

  <tr>
    <td style="text-align: center;font-size: 14px;text-transform: uppercase;width: 300px;">
      <strong>PAPÁ</strong><br>
      <?php echo $persona->papa?>
    </td>
    <td style="text-align: center;font-size: 14px;text-transform: uppercase;width: 300px;">
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
    <td style="text-align: center;font-size: 14px;text-transform: uppercase;width: 300px;">
      <strong>PADRINO</strong><br>
      <?php echo $persona->padrino?>
    </td>
    <td style="text-align: center;font-size: 14px;text-transform: uppercase;width: 300px;">
      <strong>MADRINA</strong><br>
      <?php echo $persona->madrina?>
    </td>
  </tr>
 </table>


 <?php for($i=0;$i<=3;$i++){?>
  <br>
<?php }?>

 <div style="margin-left: 60px;margin-right: 20px;font-size: 14px;text-transform: uppercase;">
    
      LOS DATOS DE ESTE SACRAMENTO SE ENCUENTRAN EN EL ARCHIVO PARROQUIAL, EN EL 
      <strong>LIBRO</strong>: <span style="color: red;"><?php ECHO $persona->num_libro ?></span>,
      <strong>PARTIDA </strong><span style="color: red;"><?php ECHO $persona->partida ?></span>, 
      <strong>FOJA </strong><span style="color: red;"><?php ECHO $persona->num_foja ?></span>.
   
</div>

<?php for($i=0;$i<=5;$i++){?>
  <br>
<?php }?>
<table width="100%"  style="margin-left: 95px;margin-right: 95px;">
    <tr >
        <td id="pbro">___________________________________________________ <br>
            LIC. PBRO. ANTONIO SALGADO BRAVO <br><strong>PÁRROCO</strong></td>
        <td id="pbro">__________________________________________________<br>
        <?php echo $persona->celebrante ?><br> <strong>BAUTIZANTE</strong></td>
    </tr>
</table>
<br><br>
<div style="margin-left: 60px;margin-right: 20px;font-size: 10px;text-transform: uppercase;">
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
            font-size: 20px;
        }
</style>


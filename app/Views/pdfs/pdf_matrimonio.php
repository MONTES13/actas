
<br><br>
<div style="margin-left: 60px;margin-right: 30px;font-size: 13px;text-transform: uppercase;">
    el <strong><?php echo $persona->dia_boda?> de <?php echo $persona->mes_boda?> de <?php echo $persona->anio_boda?></strong>,
    recibieron el Sacramento de Matrimonio en el nombre del PADRE Y DEL HIJO Y DEL ESPÍRITU SANTO.
</div>
<br><br>
<div style="text-align: center;">
    <h2 style="text-transform: uppercase"><?php echo $persona->nombre_de_novio.' '.$persona->apellido_paterno_novio.' '.$persona->apellido_materno_novio?></h2>
    <h2>Y</h2>
    <h2 style="text-transform: uppercase"><?php echo $persona->nombre_de_la_novia.' '.$persona->apellido_paterno_novia.' '.$persona->apellido_materno_novia?></h2>
</div>
<br><br>
<div style="margin-left: 60px;margin-right: 30px;font-size: 13px;text-transform: uppercase;">
    ya no son dos, sino una sola carne.  Por tanto, lo que Dios ha unido, ningún hombre lo separe.
</div>
<br><br><br>
<table width="100%"  style="margin-left: 80px;margin-right: 80px;">
  <tr>
    <th colspan="2">TESTIGOS</th>
  </tr>
  <tr>
    <td style="text-align: center;text-transform: uppercase;width: 300px;">
      
      <?php echo $persona->primer_testigo?>
    </td>
    <td style="text-align: center;text-transform: uppercase;width: 300px;">
      
      <?php echo $persona->segundo_testigo?>
    </td>
  </tr>
 </table>

 <br><br><br><br><br>
<table width="100%"  style="margin-left: 95px;margin-right: 95px;">
    <tr >
        <td id="pbro">___________________________________________________ <br>
            LIC. PBRO. ANTONIO SALGADO BRAVO <br><strong>PÁRROCO</strong></td>
        <td id="pbro">__________________________________________________<br>
        <?php echo $persona->celebrante ?><br> <strong>CELEBRANTE</strong></td>
    </tr>
</table>
<br><br><br><br>
<div style="margin-left: 60px;margin-right: 30px;font-size: 10px;text-transform: uppercase;">
        LOS DATOS DE ESTE SACRAMENTO SE ENCUENTRAN EN EL ARCHIVO PARROQUIAL, EN EL 
        <strong>LIBRO</strong>: <span style="color: red;"><?php ECHO $persona->num_libro ?></span>,
        <strong>PARTIDA </strong><span style="color: red;"><?php ECHO $persona->partida ?></span>, 
        <strong>FOJA </strong><span style="color: red;"><?php ECHO $persona->num_foja ?></span>.

</div>




<style>
     #pbro{
            width: 100%;
            text-transform: uppercase;
            text-align: center;
            font-size: 20px;
        }
</style>

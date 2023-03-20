 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="card card-body">
        <div class="contenedor-responsivo">
            <iframe class="iframe-responsivo" src="<?php echo base_url()?>pdf_comunion/<?php echo $id_comunion?>" title="description" ></iframe>			
                 <a href="<?php echo base_url()?>comunion" class="btn btn-dark btn-block">IR A MI PANEL PRINCIPAL</a>
            </div>

        </div>
      </div>
    </div>
  </div>

  <style>
.contenedor-responsivo {
    position: relative;
    padding-top: 56.25%;
}
.iframe-responsivo {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 95%;
    border: 0;
    
}

</style>


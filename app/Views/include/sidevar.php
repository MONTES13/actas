
<!-- navLateral -->


<?php if(isset($sidevar) and $sidevar){?>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
	  
      <span class="brand-text font-weight-light">CATEDRAL DE CHILAPA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
        </div>
        <div class="info">
          <a href="#" class="d-block">
		  <i class="fa fa-user" aria-hidden="true"></i> <?php echo session('nombre')?></a>
        </div>
      </div>

      <!-- SidebarSearch Form  fa-user-circle-o-->
      <div class="form-inline">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
     
          <li class="nav-item menu-open">	
            <a href="<?php echo base_url()?>" class="nav-link <?php if(isset($inicio)and $inicio){echo 'active';}?>">
              <p>
                PANEL DE INICIO
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">	
            <a href="<?php echo base_url()?>bautismo" class="nav-link <?php if(isset($bautismo)and $bautismo){echo 'active';}?>">
              <p>
                BAUTISMO
              </p>
            </a>
          </li>
          
          <li class="nav-item menu-open">	
            <a href="<?php echo base_url()?>comunion" class="nav-link <?php if(isset($comunion)and $comunion){echo 'active';}?>">
              <p>
                COMUNI&Oacute;N
              </p>
            </a>
          </li>
        

          <li class="nav-item menu-open">	
            <a href="<?php echo base_url()?>confirmacion" class="nav-link <?php if(isset($confirmacion)and $confirmacion){echo 'active';}?>">
              <p>
                CONFIRMACI&Oacute;N
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">	
            <a href="<?php echo base_url()?> matrimonio" class="nav-link <?php if(isset($matrimonio)and $matrimonio){echo 'active';}?>">
              <p>
                MATRIMONIO
              </p>
            </a>
          </li>

         

          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php }?>

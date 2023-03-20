
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CATEDRAL</a>
    </div>
  </nav>

  <div class="login-page " >
    <div class="login-box" style="margin-top: -15%;">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#l" class="h4"><b>CATEDRAL DE CHILAPA</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">INGRESE CON SU CUENTA</p>

      <form action="<?php echo base_url()?>/auth" method="post">
        
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="USUARIO" name="usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="CONTRASE&Ntilde;A">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
          <!-- /.col -->
          <div >
            <button type="submit" class="btn btn-primary btn-block">INGRESAR</button>
          </div>
      </form>
      
    </div>
    <!-- /.card-body -->
  </div>
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<div class="login-box">
  <div class="login-logo">
  <img src="views/img/template/logo.png" class="img-responsive">
  </div>
  
  <div class="login-box-body">

    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="ingEmail" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" value="Ingresar">
        </div>

      </div>

      <?php

        $login = new ControllerAdmin();
        $login -> loginAdmin();

      ?>

    </form>
     
  </div>
  
</div>

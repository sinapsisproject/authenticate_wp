<div id="modalLogin" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Iniciar sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        <div id="other_login_error"></div>
    
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email_login" aria-describedby="emailHelp">
          <div id="email_login_error"></div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password_login">
          <div id="password_login_error"></div>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="rememberme_login">
          <label class="form-check-label" for="rememberme_login">
            Recuerdame
          </label>
        </div>

        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->

      </div>
      <div class="modal-footer">
      <p id="loading_login" style="display : none">Cargando...</p>
        <button id="login_data_button" type="button" class="btn btn-primary">Ingresar</button>
      </div>
    </div>
  </div>
</div>


<div id="modalRegister" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Regístrate y comienza a aprender</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        <div id="other_register_error"></div>
    
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="name_register">
          <div id="name_register_error"></div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email_register">
          <div id="email_register_error"></div>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Celular</label>
          <input type="text" class="form-control" id="phone_register">
          <div id="phone_register_error"></div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password_register">
          <div id="password_register_error"></div>
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->

      </div>
      <div class="modal-footer">
        <p id="loading_register" style="display : none">Cargando...</p>
        <button id="register_data_button" type="button" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
</div>



<div class="col-12" style="text-align: right;">
  <a style="background: #FFFFFF; color: #445AFF; border-width: 0px;" id="login_button" type="button" class="btn">Iniciar sesión</a>
  <button id="register_button" type="button" class="btn">Crear cuenta</button>
</div>
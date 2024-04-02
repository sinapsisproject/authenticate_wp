<div id="modalLogin" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- <div class="modal-header">
        <h5 class="modal-title">Iniciar sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->

      <div class="col-12 text-center mt-4 mb-4">
        <h4 class="modal-title">Iniciar Sesión</h4>
      </div>



      <div class="modal-body px-lg-5">
       
        <div id="other_login_error"></div>
    
        <div class="mb-4">
          <label for="email" class="form-label" style="color: #695C5C;">Correo electrónico</label>
          <input style="border-color: #cccdcd;" type="email" class="form-control" id="email_login" aria-describedby="emailHelp">
          <div id="email_login_error"></div>
        </div>
        <div class="mb-4">
          <label for="password" class="form-label" style="color: #695C5C;">Contraseña</label>
          <input style="border-color: #cccdcd;" type="password" class="form-control" id="password_login">
          <div id="password_login_error"></div>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="rememberme_login">
          Recuerdame
        </div>

        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->

      </div>

      <div class="col-12 pt-3 pb-5 px-lg-5">
        <button style="width: 100%;" id="login_data_button" type="button" class="btn btn-primary">
        <div id="loading_login" style="width: 1rem; height: 1rem; margin-right: 6px; display: none;" class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        Ingresar
        </button>
      </div>

      
    </div>
  </div>
</div>


<div id="modalRegister" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title">Regístrate y comienza a aprender</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->

      <div class="col-12 text-center mt-4 mb-4">
        <h4 class="modal-title">Crea una cuenta</h4>
        <p>¡Y comienza a aprender!</p>
      </div>


      <div class="modal-body px-lg-5">
       
        <div id="other_register_error"></div>
    
        <div class="mb-3">
          <label for="name" class="form-label" style="color: #695C5C;">Nombre</label>
          <input  style="border-color: #cccdcd;" type="text" class="form-control" id="name_register">
          <div id="name_register_error"></div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label" style="color: #695C5C;">Correo electrónico</label>
          <input  style="border-color: #cccdcd;" type="email" class="form-control" id="email_register">
          <div id="email_register_error"></div>
        </div>
        <div class="mb-3">
          <label for="birthdate" class="form-label" style="color: #695C5C;">Fecha de nacimiento</label>
          <input  style="border-color: #cccdcd;" type="date" class="form-control" id="birthdate">
          <div id="birthdate_register_error"></div>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label" style="color: #695C5C;">Teléfono</label>
          <input  style="border-color: #cccdcd;" type="text" class="form-control" id="phone_register">
          <div id="phone_register_error"></div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label" style="color: #695C5C;">Contraseña</label>
          <input  style="border-color: #cccdcd;" type="password" class="form-control" id="password_register">
          <div id="password_register_error"></div>
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->

      </div>
      <div class="col-12 pt-3 px-lg-5 text-center">
        <button style="width: 100%;" id="register_data_button" type="button" class="btn btn-primary">
        <div id="loading_register" style="width: 1rem; height: 1rem; margin-right: 6px; display: none;" class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        Registrar
        </button>
      </div>
      <div class="col-12 text-center pb-5 pt-2">
        ¿Ya tienes una cuenta? <a style="cursor: pointer; background: #FFFFFF; color: #445AFF; border-width: 0px;" class="login_button" data-bs-dismiss="modal" data-bs-target="#modalRegister">Inicia sesión</a>
      </div>
    </div>
  </div>
</div>



<div class="col-12" style="text-align: right;">
  <a style="background: #FFFFFF; color: #445AFF; border-width: 0px;" class="login_button" type="button" class="btn">Iniciar sesión</a>
  <button id="register_button" type="button" class="btn">Crear cuenta</button>
</div>
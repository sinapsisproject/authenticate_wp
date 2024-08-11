<?php 
$post = get_post();
$slug = $post->post_name;
?>


<nav class="navbar navbar-expand-lg" style="background: white; padding: 10px;">
  
    <img width="160" height="40" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/09/Diseno-sin-titulo-1.png" alt="">


    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="col-12 col-md-4 img-session">
            <a href="/"><img width="160" height="40" src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/09/Diseno-sin-titulo-1.png" class="attachment-large size-large wp-image-3372"></a>
        </div>
        <div class="col-12 col-md-4 text-center">
          

        <ul class="navbar-nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link <?php echo ($slug == "home-2024") ? "active" : ""; ?>" href="/">Inicio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?php echo ($slug == "cursos") ? "active" : ""; ?>" href="/cursos/">Cursos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?php echo ($slug == "contacto") ? "active" : ""; ?>" href="/contacto/">Contacto</a>
            </li>

            <?php if(!is_user_logged_in()){ ?>
              <hr>
            <li class="nav-item nav-session">
            <a class="nav-link login_button" >Iniciar sesion</a>
            </li>
            <li class="nav-item nav-session">
            <a class="nav-link register_button">Registrarse</a>
            </li>
            <?php }else{ ?> 
              <hr>
            <li class="nav-item nav-session">
            <a class="nav-link" href="/mi-perfil">Mis cursos</a>
            </li>
            <li class="nav-item nav-session">
            <a class="logout_button nav-link" style="display: inline-flex;">
              <div id="loading_logout" style="width: 1rem; height: 1rem; margin-right: 6px; display: none; margin-top: 3px;" class="spinner-border" role="status">
                  <span class="visually-hidden">Loading...</span>
              </div>
              Cerrar sesión
            </a>
            </li>
            
            <?php  } ?>
        </ul>

        </div>
        <div class="col-12 col-md-4 button-session text-end">

          <?php if(!is_user_logged_in()){ ?>
            <a style="background: #FFFFFF; color: #445AFF; border-width: 0px;" class="login_button" type="button" class="btn">Iniciar sesión</a>
            <button class="register_button" id="register_button" type="button" class="btn">Crear cuenta</button>
          <?php }else{ ?>
            
            <div class="dropdown"> 

              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                <div id="loading_logout" style="width: 1rem; height: 1rem; margin-right: 6px; display: none;" class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <i style="margin-right: 8px;" class="fa-solid fa-circle-user"></i> <?php echo get_user_meta(get_current_user_id(), 'namesinapsisplatform', true); ?>
              </button>

              <ul class="dropdown-menu" style="right: 0; left : auto;">
                <li><a href="/mi-perfil" id="perfil_button" class="dropdown-item button-dropdown-profile"><i style="margin-right: 8px;" class="fa-solid fa-user-graduate"></i> Mis cursos</a></li>
                <li><a class="logout_button dropdown-item button-dropdown-profile"><i style="margin-right: 8px;" class="fa-solid fa-power-off"></i>Cerrar sesión</a></li>
              </ul>
              
            </div>


          <?php } ?>

        </div>
    </div> 

</nav>




<div id="modalLogin" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- <div class="modal-header">
        <h5 class="modal-title">Iniciar sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->

      <div class="col-12 text-center mt-4 mb-4">
        <a class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></a>
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
          <div class="row">
            <div class="col-4 col-md-6">
              <input class="form-check-input" type="checkbox" value="" id="rememberme_login">
              Recuérdame
            </div>
            <div class="col-7 col-md-6 text-end">
              <strong><a style="color: black;" href="/recuperar-contrasena">Olvidé mi contraseña</a></strong>
            </div>
          </div>
        </div>

      </div>

      <div class="modal-body">
      <div class="col-12 pt-3 pb-3 px-lg-4">
        <button style="width: 100%;" id="login_data_button" type="button" class="btn btn-primary">
        <div id="loading_login" style="width: 1rem; height: 1rem; margin-right: 6px; display: none;" class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        Iniciar sesión
        </button>
      </div>
      </div>
      
      <div class="col-12 modal-body">
        <hr>
      </div>
      
      <div class="col-12 text-center mt-1 mb-4">
        <strong><label>¿No tienes una cuenta? </label></strong> <label class="register_button" id="register_button" data-bs-dismiss="modal" data-bs-target="#modalLogin" style="color: #445AFF; cursor: pointer;"> Regístrate</label>
      </div>
      

      
    </div>
  </div>
</div>


<div id="modalRegister" class="modal fade" tabindex="-1" aria-labelledby="modalRegister" aria-modal="true" role="dialog">
  <div class="modal-dialog">

   <div class="modal-content">
      <div class="col-12 text-center mt-4 mb-4">
        <a class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></a>
        <h4 class="modal-title">Crea una cuenta</h4>
        <p>¡Y comienza a aprender!</p>
      </div>


      <div class="modal-body px-lg-5">
       
        <div id="other_register_error"></div>
    
        <div class="col-12 mb-3">
          <label for="name" class="form-label" style="color: #695C5C;">Nombre y apellido</label>
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
          <input  style="border-color: #cccdcd;" type="date" class="form-control" id="birthdate_register">
          <div id="birthdate_register_error"></div>
        </div>
        <div class="mb-3">
          <label for="country" class="form-label" style="color: #695C5C;">País</label>
          <select style="border-color: #cccdcd; height: 43px;" class="form-select" id="country_register">
            <option selected value="">Seleccione un país</option>
            <option value="1">Chile</option>
          </select>
          <div id="country_register_error"></div>
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
       

      </div>
      <div class="modal-body">
        <div class="col-12 pt-3 px-lg-4 text-center">
          <button style="width: 100%;" id="register_data_button" type="button" class="btn btn-primary">
          <div id="loading_register" style="width: 1rem; height: 1rem; margin-right: 6px; display: none;" class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          Crear cuenta
          </button>
        </div>
      </div>

      <div class="modal-body">
        <div class="col-12 pt-2" style="padding-left: 32px; padding-right: 32px;">
          <p style="font-size: 14px;">Al crear una cuenta en Sinapsis Clínica aceptas nuestros <a href="">Términos y Condiciones</a> y <a href="">Políticas de Privacidad.</a></p>
        </div>
        <hr>
        <div class="col-12 text-center pb-3 pt-2">
          ¿Ya tienes una cuenta? <a style="cursor: pointer; background: #FFFFFF; color: #445AFF; border-width: 0px;" class="login_button" data-bs-dismiss="modal" data-bs-target="#modalRegister">Inicia sesión</a>
        </div>
      </div>


    </div>
  </div>
</div>



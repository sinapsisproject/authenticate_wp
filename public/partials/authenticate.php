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
            <option value="2">Afganistán</option>
            <option value="3">Albania</option>
            <option value="4">Alemania</option>
            <option value="5">AndorraAndorra</option>
            <option value="6">Angola</option>
            <option value="7">Anguila</option>
            <option value="8">Antigua y Barbuda</option>
            <option value="9">Arabia Saudita</option>
            <option value="10">Argelia</option>
            <option value="11">Argentina</option>
            <option value="12">Armenia</option>
            <option value="13">Aruba</option>
            <option value="14">Australia</option>
            <option value="15">Austria</option>
            <option value="16">Azerbaiyán</option>
            <option value="17">Bahamas</option>
            <option value="18">Bangladés</option>
            <option value="19">Barbados</option>
            <option value="20">Baréin</option>
            <option value="21">Bélgica</option>
            <option value="22">Belice</option>
            <option value="23">Benín</option>
            <option value="24">Bhután</option>
            <option value="25">Bielorrusia</option>
            <option value="26">Birmania</option>
            <option value="27">Bolivia</option>
            <option value="28">Bosnia y Herzegovina</option>
            <option value="29">Botsuana</option>
            <option value="30">Brasil</option>
            <option value="31">Brunéi</option>
            <option value="32">Bulgaria</option>
            <option value="33">Burkina Faso</option>
            <option value="34">Burundi</option>
            <option value="35">Cabo Verde</option>
            <option value="36">Camboya</option>
            <option value="37">Camerún</option>
            <option value="38">Canadá</option>
            <option value="39">Chad</option>
            <option value="40">China</option>
            <option value="41">Chipre</option>
            <option value="42">Ciudad del Vaticano</option>
            <option value="43">Colombia</option>
            <option value="44">Comoras</option>
            <option value="45">Corea del Norte</option>
            <option value="46">Corea del Sur</option>
            <option value="47">Costa de Marfil</option>
            <option value="48">Costa Rica</option>
            <option value="49">Croacia</option>
            <option value="50">Cuba</option>
            <option value="51">Dinamarca</option>
            <option value="52">Dominica</option>
            <option value="53">Ecuador</option>
            <option value="54">Egipto</option>
            <option value="55">El Salvador</option>
            <option value="56">Emiratos Árabes Unidos</option>
            <option value="57">Eritrea</option>
            <option value="58">Eslovaquia</option>
            <option value="59">Eslovenia</option>
            <option value="60">España</option>
            <option value="61">Estados Unidos</option>
            <option value="62">Estonia</option>
            <option value="63">Etiopía</option>
            <option value="64">Filipinas</option>
            <option value="65">Finlandia</option>
            <option value="66">Francia</option>
            <option value="67">Gabón</option>
            <option value="68">Gambia</option>
            <option value="69">Georgia</option>
            <option value="70">Ghana</option>
            <option value="71">Grecia</option>
            <option value="72">Guatemala</option>
            <option value="73">Guinea</option>
            <option value="74">Guinea-Bisáu</option>
            <option value="75">Guyana</option>
            <option value="76">Haití</option>
            <option value="77">Honduras</option>
            <option value="78">Hungría</option>
            <option value="79">India</option>
            <option value="80">Indonesia</option>
            <option value="81">Irak</option>
            <option value="82">Irán</option>
            <option value="83">Irlanda</option>
            <option value="84">Islandia</option>
            <option value="85">Islas Marshall</option>
            <option value="86">Islas Salomón</option>
            <option value="87">Israel</option>
            <option value="88">Italia</option>
            <option value="89">Jamaica</option>
            <option value="90">Japón</option>
            <option value="91">Jordania</option>
            <option value="92">Kazajistán</option>
            <option value="93">Kenia</option>
            <option value="94">Kirguistán</option>
            <option value="95">Kiribati</option>
            <option value="96">Kosovo</option>
            <option value="97">Kuwait</option>
            <option value="98">Laos</option>
            <option value="99">Lesoto</option>
            <option value="100">Letonia</option>
            <option value="101">Líbano</option>
            <option value="102">Liberia</option>
            <option value="103">Libia</option>
            <option value="104">Liechtenstein</option>
            <option value="105">Lituania</option>
            <option value="106">Luxemburgo</option>
            <option value="107">Madagascar</option>
            <option value="108">Malasia</option>
            <option value="109">Malaui</option>
            <option value="110">Maldivas</option>
            <option value="111">Malí</option>
            <option value="112">Malta</option>
            <option value="113">Marruecos</option>
            <option value="114">Mauricio</option>
            <option value="115">Mauritania</option>
            <option value="116">México</option>
            <option value="117">Micronesia</option>
            <option value="118">Moldavia</option>
            <option value="119">Mónaco</option>
            <option value="120">Mongolia</option>
            <option value="121">Montenegro</option>
            <option value="122">Mozambique</option>
            <option value="123">Namibia</option>
            <option value="124">Nauru</option>
            <option value="125">Nepal</option>
            <option value="126">Nicaragua</option>
            <option value="127">Níger</option>
            <option value="128">Nigeria</option>
            <option value="129">Noruega</option>
            <option value="130">Nueva Zelanda</option>
            <option value="131">Omán</option>
            <option value="132">Países Bajos</option>
            <option value="133">Pakistán</option>
            <option value="134">Palaos</option>
            <option value="135">Panamá</option>
            <option value="136">Papúa Nueva Guinea</option>
            <option value="137">Paraguay</option>
            <option value="138">Perú</option>
            <option value="139">Polonia</option>
            <option value="140">Portugal</option>
            <option value="141">Reino Unido</option>
            <option value="142">República Centroafricana</option>
            <option value="143">República Checa</option>
            <option value="144">República del Congo</option>
            <option value="145">República Democrática del Congo</option>
            <option value="146">República Dominicana</option>
            <option value="147">Ruanda</option>
            <option value="148">Rumania</option>
            <option value="149">Rusia</option>
            <option value="150">Samoa</option>
            <option value="151">San Cristóbal y Nieves</option>
            <option value="152">San Marino</option>
            <option value="153">San Vicente y las Granadinas</option>
            <option value="154">Santa Lucía</option>
            <option value="155">Santo Tomé y Príncipe</option>
            <option value="156">Senegal</option>
            <option value="157">Serbia</option>
            <option value="158">Seychelles</option>
            <option value="159">Sierra Leona</option>
            <option value="160">Singapur</option>
            <option value="161">Siria</option>
            <option value="162">Somalia</option>
            <option value="163">Sri Lanka</option>
            <option value="164">Suazilandia</option>
            <option value="165">Sudáfrica</option>
            <option value="166">Sudán</option>
            <option value="167">Sudán del Sur</option>
            <option value="168">Suecia</option>
            <option value="169">Suiza</option>
            <option value="170">Surinam</option>
            <option value="171">Tailandia</option>
            <option value="172">Tanzania</option>
            <option value="173">Tayikistán</option>
            <option value="174">Timor Oriental</option>
            <option value="175">Togo</option>
            <option value="176">Tonga</option>
            <option value="177">Trinidad y Tobago</option>
            <option value="178">Túnez</option>
            <option value="179">Turkmenistán</option>
            <option value="180">Turquía</option>
            <option value="181">Tuvalu</option>
            <option value="182">Ucrania</option>
            <option value="183">Uganda</option>
            <option value="184">Uruguay</option>
            <option value="185">Uzbekistán</option>
            <option value="186">Vanuatu</option>
            <option value="187">Venezuela</option>
            <option value="188">Vietnam</option>
            <option value="189">Yemen</option>
            <option value="190">Yibuti</option>
            <option value="191">Zambia</option>
            <option value="192">Zimbabue</option>
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



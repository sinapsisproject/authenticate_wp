<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">

    <div id="loading_logout" style="width: 1rem; height: 1rem; margin-right: 6px; display: none;" class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>

    <i style="margin-right: 8px;" class="fa-solid fa-circle-user"></i> <?php echo get_option('namesinapsisplatform'); ?>
  </button>
  <ul class="dropdown-menu">
    <li><a id="perfil_button" class="dropdown-item button-dropdown-profile"><i style="margin-right: 8px;" class="fa-solid fa-user-graduate"></i> Mis cursos</a></li>
    <li><a id="logout_button" class="dropdown-item button-dropdown-profile"><i style="margin-right: 8px;" class="fa-solid fa-power-off"></i>Cerrar sesión</a></li>
  </ul>
</div>

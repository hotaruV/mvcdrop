<div class="sidebar" data-color="orange">
      <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          AD
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Admin Drop
        </a>
        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-outline-white btn-icon btn-round">
            <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
            <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
          </button>
        </div>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="<?= Utils::dbard()?>assets/img/james.jpg" />
          </div>
          <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
              <span>
              <?= $_SESSION['usuario']['nombre'] ?> <?= $_SESSION['usuario']['apellido_pa'] ?>
                <b class="caret"></b>
              </span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">MP</span>
                    <span class="sidebar-normal">Mi Perfil</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">EP</span>
                    <span class="sidebar-normal">Editar Perfil</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">C</span>
                    <span class="sidebar-normal">Configuraciones</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="active">
            <a href="../../examples/dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Inicio</p>
            </a>
          </li>
          <li>
            <a data-toggle="collapse" href="#pagesExamples">
              <i class="now-ui-icons design_image"></i>
              <p>
                Usuarios <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="pagesExamples">
              <ul class="nav">
                <li>
                  <a href="../../examples/pages/pricing.html">
                    <span class="sidebar-mini-icon">LU</span>
                    <span class="sidebar-normal"> Lista De Usuarios </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/pages/rtl.html">
                    <span class="sidebar-mini-icon">R</span>
                    <span class="sidebar-normal"> Roles </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#pagesExamples">
              <i class="now-ui-icons design_image"></i>
              <p>
                Blog <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="pagesExamples">
              <ul class="nav">
                <li>
                  <a href="../../examples/pages/pricing.html">
                    <span class="sidebar-mini-icon">LU</span>
                    <span class="sidebar-normal"> Lista de POST </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/pages/rtl.html">
                    <span class="sidebar-mini-icon">R</span>
                    <span class="sidebar-normal"> Lista Categoria </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
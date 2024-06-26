<aside id="asideMenu" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo caminhoURL?>" class="brand-link">
      <img src="<?php echo caminhoURL?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">S³</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo caminhoURL.'/meu-perfil/fotos/'. $_SESSION["foto_usuario"];?>" class="img-circle elevation-2" alt="<?php echo $_SESSION["nome_usuario"]?>">
        </div>
        <div class="info">
          <a href="<?php echo caminhoURL;?>/meu-perfil/" class="d-block"><?php echo $_SESSION["nome_usuario"]?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo caminhoURL;?>" class="nav-link <?php echo $pagina_ativa == 'home'? 'active' : ''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pagina inicial
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo caminhoURL?>/ordem-servico" class="nav-link <?php echo $pagina_ativa == 'ordens_servicos'? 'active' : ''; ?>">
              <i class="nav-icon bi bi-cash-coin text-success  mr-1 "></i>
              <p>
                  ordens serviço
                <span class="right badge badge-danger"><?php echo $total_os;?></span>
              </p>
            </a>
          </li>
          <li class="nav-header">configurações</li>
          <li class="nav-item">
            <a href="<?php echo caminhoURL?>/clientes" class="nav-link <?php echo $pagina_ativa == 'clientes'? 'active' : ''; ?>">
              <i class="nav-icon bi bi-people"></i>
              <p>
                 Clientes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo caminhoURL?>/servicos" class="nav-link <?php echo $pagina_ativa == 'servicos'? 'active' : ''; ?>">
              <i class="nav-icon bi bi-tools"></i>
              <p>
                 serviços
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
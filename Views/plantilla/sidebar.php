<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background:rgba(10,10,30,1)" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL ?>index">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-industry"></i>
  </div>
  <div class="sidebar-brand-text mx-3">All Fashion</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="<?= BASE_URL ?>index">
    <i class="fas fa-fw fa-home"></i>
    <span>Inicio</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  General
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productos" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-box"></i>
    <span>Categorias</span>
  </a>

  <div id="productos" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
     <a class="collapse-item" href="<?= BASE_URL ?>categorias">Ver Todo</a>
     <a class="collapse-item" href="<?= BASE_URL ?>categorias/agregarc">Nueva Categoria</a>
     
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#cliente" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-file-invoice-dollar"></i>
    <span>Clientes</span>
  </a>

  <div id="cliente" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="<?= BASE_URL ?>cliente/add">Nuevo Cliente</a>
      <a class="collapse-item" href="<?= BASE_URL ?>cliente">ver todos</a>
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#p" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-file-invoice-dollar"></i>
    <span>proveedor</span>
  </a>

  <div id="p" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="<?= BASE_URL ?>proveedor/add">Nuevo Proovedor</a>
      <a class="collapse-item" href="<?= BASE_URL ?>proveedor">ver todos</a>
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Reportes" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-file-invoice-dollar"></i>
    <span>Productos</span>
  </a>

  <div id="Reportes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="<?= BASE_URL ?>productos">Ver productos</a>
      
    </div>
  </div>
</li>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="index">
    <i class="fas fa-fw fa-dollar-sign"></i>
    <span>Ventas</span></a>
</li>

<!-- Nav Item - Dashboard -->



<!-- Nav Item - Dashboard -->

<!-- Nav Item - Utilities Collapse Menu -->
<!-- <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Proveedores</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-light py-2 collapse-inner rounded">
      <h6 class="collapse-header text-dark">Acciones:</h6>
      <a class="collapse-item text-dark" href="utilities-color.html">Listar Proveedores</a>
    </div>
  </div>
</li>
 -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
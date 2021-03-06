
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
    class="navbar-toggler"
    type="button"
    data-mdb-toggle="collapse"
    data-mdb-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="Toggle navigation"
    >
    <i class="fas fa-bars"></i>
  </button>

  <!-- Collapsible wrapper -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Navbar brand -->
    <a class="navbar-brand mt-2 mt-lg-0" href="#">
      <img
      src="img/brand.png"
      height="15"
      alt="MDB Logo"
      loading="lazy"
      />
    </a>
    <!-- Left links -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sqlTool">SQL Tool</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/settings">Configuracion</a>
      </li>
    </ul>
    <!-- Left links -->
  </div>
  <!-- Collapsible wrapper -->

  <!-- Right elements -->
  <div class="d-flex input-group w-auto">
    <input
    type="search"
    class="form-control rounded"
    placeholder="Base de conocimientos..."
    aria-label="Search"
    aria-describedby="search-addon"
    id="buscadorGlobal"
    />
    <button class=" input-group-text border-0" id="search-addon">
      <i class="fas fa-search"></i>
    </button>
  </div>
  <!-- Right elements -->
</div>
<!-- Container wrapper -->
</nav>
<!-- Navbar -->
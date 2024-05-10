<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Orden de Compra</title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
<header>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <!-- <button type="button" class="btn btn-outline-secondary"></button> -->
    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
      <i class="bi bi-layout-text-sidebar"></i>
    </button>
    <div class="navbar-brand justify-content-end">
      <img src="/agro.png" width="100" height="50" />
    </div>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
    <style>
      ul {
        list-style: none;
      }
      li:hover {
        background-color:#c6720c29;
      }
    </style>
  </div>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Vistas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      <ul>
        <li><a href="/" class="nav-link px-2 text-body-secondary">Home</a></li>
        <br>
        <li><a href="/orden-compra" class="nav-link px-2 text-body-secondary">Ordenes de Compra</a></li>
        <br>
        <li><a href="/recolecta" class="nav-link px-2 text-body-secondary">Entrega/Recolecta</a></li>
        <br>
        <li><a href="/pagos" class="nav-link px-2 text-body-secondary">Pagos</a></li>
      </ul>
    </div>
  </div>
</div>
</nav>
</header>
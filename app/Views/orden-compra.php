<header>
  <style>
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th  {
      background-color: #69cfa069;
    }
    .table-section {
      height: 500px;
      margin: 20px;
    }
    input[type=file]::file-selector-button {
      margin-right: 20px;
      border: none;
      background: #084cdf;
      padding: 2px 7px;
      border-radius: 5px;
      color: #fff;
      cursor: pointer;
      transition: background .2s ease-in-out;
      width: 50px;
    }

input[type=file]::file-selector-button:hover {
  background: #0d45a5;
}
  </style>
</header>
<section class="table-section">
  <h2 >Ordenes de Compra</h2>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-outline-primary me-md-2" data-bs-toggle="modal" data-bs-target="#formOC">Crear Nueva Orden</button>
  </div>

  <div class="modal fade" id="formOC" tabindex="-1" aria-labelledby="formsOcLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Crear Nueva Orden <br> de Compra</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body form-oc">
          <form class="row g-3 needs-validation" novalidate>
            <div class="md-4">
              <label class="form-label">Proveedor</label>
              <input type="text" class="form-control" name="proveedorInput" required>
              <div class="invalid-feedback">Ingresa la informacion solicitada.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Nombre de Articulo</label>
              <input type="text" class="form-control" name="articuloInput" required>
              <div class="invalid-feedback">Ingresa la informacion solicitada.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Unidad</label>
              <input type="text" class="form-control" name="unidadInput" required>
              <div class="invalid-feedback">Ingresa la informacion solicitada.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Cantidad de Compra</label>
              <input type="text" class="form-control" name="cantidadInput" required>
              <div class="invalid-feedback">Ingresa la informacion solicitada.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Precio de Compra</label>
              <input type="text" class="form-control" name="precioInput" required>
              <div class="invalid-feedback">Ingresa la informacion solicitada.</div>
            </div>
            <div class="md-3">
              <label class="form-label">Correo de Contacto</label>
              <input type="text" class="form-control" name="correoInput" required>
              <div class="invalid-feedback">Ingresa la informacion solicitada.</div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary oc-cancelar-btn" id="oc-cancelar-btn" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success" id="oc-guardar-btn">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  

  <table class="table table-striped table-hover" >
    <thead>
      <tr>
        <th scope="col">No. OC</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Nombre <br> de Articulo</th>
        <th scope="col">Estatus</th>
        <th scope="col">Unidad</th>
        <th scope="col">Cantidad <br>de Compra</th>
        <th scope="col">Precio <br>de Compra</th>
        <th scope="col">Correo <br>de Contacto</th>
        <th scope="col">Facturas</th>
      </tr>
    </thead>
    <tbody id="table-id">
    </tbody>
  </table>
  <script src="js/orden-compra.js"></script>
</section
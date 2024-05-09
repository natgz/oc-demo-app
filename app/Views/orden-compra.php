<header>
  <style>
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th  {
      background-color: #69cfa069;
    }
  </style>
</header>
<section>
  <h2>Ordenes de Compra</h2>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-outline-primary me-md-2" data-bs-toggle="modal" data-bs-target="#formOC">Crear Nueva Orden</button>
  </div>

  <div class="modal fade" id="formOC" tabindex="-1" aria-labelledby="formsOcLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Crear Nueva Orden de Compra</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body form-oc">
          <div class="mb-3">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">proveedor</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <label for="exampleFormControlInput1" class="form-label">nombre de articulo</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">unidad</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">cantidad de compra</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">precio de compra</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">correo de contacto</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success" id="oc-guardar-btn">Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">No. OC</th>
        <th scope="col">nombre de articulo</th>
        <th scope="col">estatus</th>
        <th scope="col">proveedor</th>
        <th scope="col">unidad</th>
        <th scope="col">cantidad de compra</th>
        <th scope="col">precio de compra</th>
        <th scope="col">suma total</th>
        <th scope="col">facturas</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
</section
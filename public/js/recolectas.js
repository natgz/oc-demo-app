let storage = [];
window.onload = () => {
  storage = JSON.parse(localStorage.getItem('ordenCompra')) || [];
  crearTabla();
}

function crearTabla(params) {
  let html = '';
  $(storage).each((index, field) => {
    html += `
    <tr>
      <td>${index}</td>
      <td>${field['proveedorInput']}</td>
      <td>${field['articuloInput']}</td>
      <td>${field['unidadInput']}</td>
      <td>${field['cantidadInput']}</td>
      <td>${field['correoInput']}</td>
      <td>
        <div class="input-group mb-3"> 
          <label class="input-group-text" for="customFile"> 
            <i class="bi bi-file-earmark"></i>
          </label> 
          <input type="file" class="form-control visually-hidden" 
            id="customFile" accept="file/*" multiple 
            onchange="showFiles(this)" disabled> 
          <button class="btn btn-primary btn-files" type="button" 
            onclick="document.getElementById('customFile').click()"> 
            ver factura
          </button> 
        </div> 
      <td><button type="button" class="btn btn-outline-warning">Entrega Parcial</button></td>
      <td><button type="button" class="btn btn-outline-success">Entrega Total</button></td>
      <td><button type="button" class="btn btn-outline-danger">Hay Danos</button></td>
      </td>
      </tr>`;
    });
    $('#table-id').html(html);
  }
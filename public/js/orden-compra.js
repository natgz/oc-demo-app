let storage = [];
window.onload = () => {
  storage = JSON.parse(localStorage.getItem('ordenCompra')) || [];
  crearTabla();
}

'use strict'

$(".needs-validation").submit(function(event) {
  event.preventDefault();
  var forms = $(this);
  let localS = {};
  saveOC(localS, forms, event);
});

$(".oc-cancelar-btn").click(function() {
  $(".needs-validation").each(function() {
    this.reset();
  }).removeClass('was-validated');
});


function saveOC(localS, forms, event) {
  Array.from(forms).forEach(form => {
    if (!form.checkValidity()) {
      event.stopPropagation()
      event.preventDefault()
      form.classList.add('was-validated')
    }else{
      var formInputs = $(form).serializeArray();
      $.each(formInputs, function(index, field){
        localS[field.name] = field.value;
      });
    }
  });

  if (Object.keys(localS).length < 5) return;

  $("#formOC").modal("hide");
  storage.push(localS);
  localStorage.setItem('ordenCompra', JSON.stringify(storage));

  forms.each(function() {
    this.reset();
  }).removeClass('was-validated');

  crearTabla();
  emailNuevaOC();
}

function crearTabla(params) {
  let html = '';
  $(storage).each((index, field) => {
    html += `
    <tr>
      <td>${index}</td>
      <td>${field['proveedorInput']}</td>
      <td>${field['articuloInput']}</td>
      <td>
        <button 
        type="button" 
        class="btn btn-success btn-aprobar">
        Aprobar</button>
      </td>
      <td>${field['unidadInput']}</td>
      <td>${field['cantidadInput']}</td>
      <td>${field['precioInput']}</td>
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
            onclick="document.getElementById('customFile').click()" disabled> 
            adjuntar
          </button> 
        </div> 
      </td>
      <td><button type="button" class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button></td>
      <td><button type="button" class="btn btn-outline-warning"><i class="bi bi-pencil"></i></button></td>
      </tr>`;
    });
    $('#table-id').html(html);
  }

function showFiles(input) { 
  const previewsContainer = 
    document.getElementById('imagePreviews'); 

  previewsContainer.innerHTML = ''; 
  const files = input.files; 
  for (let i = 0; i < files.length; i++) { 
    const file = files[i]; 
    const reader = new FileReader(); 
    reader.onload = function (e) { 
      const preview = document.createElement('div'); 
      preview.classList.add('col-md-4', 'mb-3'); 
      preview.innerHTML = ` 
      <img src="${e.target.result}" alt="Preview" class="img-fluid rounded"> 
      <div class="text-center mt-2"> 
        <span class="badge bg-secondary">${file.name}</span> 
      </div> 
    `; 
      previewsContainer.appendChild(preview); 
    }; 
      reader.readAsDataURL(file); 
  } 
} 


$(document).on("click", ".btn-aprobar", function() {
  $(this).removeClass().addClass('btn btn-secondary btn-aprobar');
  $(".btn-aprobar").html('Aprobado');
  $(this).prop('disabled', true);
  $(this).closest('tr').find('.btn-files').prop('disabled', false);
  emailProveedor();
  enviarRecolecta();
});

$(document).on("click", ".btn-outline-danger", function() {
  let index = $(this).closest('tr').index();
  storage.splice(index, 1);
  localStorage.setItem('ordenCompra', JSON.stringify(storage));
  crearTabla(); 
});

function emailNuevaOC() {
  const data = {
    "from":"natalia.gonzalezgrz@gmail.com",
    "to": "natalia.gonzalezgrz@outlook.com",
    "subject":"Nueva Orden de Compra Creada",
    "html":"<h1>Aprobar nueva OC</h1><h3>Se ha creado una nueva orden de compra, favor de ingresar al sistema y realizar la aprobacion.</h3>"
  };

  $.ajax({
    url: 'http://localhost:3000/send-email-agro',
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(response) {
      console.log(response);
    },
    error: function(error) {
      console.log(error);
    }
  });
}

function emailProveedor() {
  const data = {
    "from":"natalia.gonzalezgrz@gmail.com",
    "to": "natalia.gonzalezgrz@outlook.com",
    "subject":"Orden de Compra empresa agro",
    "html":"<h1></h1><h2>Orden de compra a proveedor</h2><h3>Aqui iria el pdf con el formato de una orden de compra y una descripcion para el proveedor</h3>"
  };

  $.ajax({
    url: 'http://localhost:3000/send-email-agro',
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(response) {
      console.log(response);
    },
    error: function(error) {
      console.log(error);
    }
  });
}

function enviarRecolecta(params) {
  // funcion para enviar info de orden a vista recolecta
}

  
// <td><div class="input-group custom-file-button"><label class="input-group-text" for="inputGroupFile"><i class="bi bi-paperclip"></i></label><input type="file" class="form-control" id="inputGroupFile" /></div></td>
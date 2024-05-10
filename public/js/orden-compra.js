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
            <i class="bi bi-file-earmark-image"></i> 
          </label> 
          <input type="file" class="form-control visually-hidden" 
            id="customFile" accept="image/*" multiple 
            onchange="showFiles(this)"> 
          <button class="btn btn-success" type="button" 
            onclick="document.getElementById('customFile').click()"> 
            Choose Files 
          </button> 
        </div> 
      </td>
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
  });

  
  // <td><div class="input-group custom-file-button"><label class="input-group-text" for="inputGroupFile"><i class="bi bi-paperclip"></i></label><input type="file" class="form-control" id="inputGroupFile" /></div></td>
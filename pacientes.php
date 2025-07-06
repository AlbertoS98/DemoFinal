<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->
<head>
  <title>Pacientes</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="CodedThemes">

    <!-- DataTables + Buttons + Export -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">

  <!-- [Favicon] icon -->
  <link rel="icon" href="./assets/images/favicon.svg" type="image/x-icon"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="./assets/fonts/tabler-icons.min.css" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="./assets/fonts/feather.css" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="./assets/fonts/fontawesome.css" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="./assets/fonts/material.css" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="./assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="./assets/css/style-preset.css" >

</head>
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">

    <?php include './sidebar.html'; ?>
    <?php include './navbar.html'; ?>

<div class="pc-container">
  <div class="pc-content">
    <div class="row">


<div class="container-fluid">
  <div class="custom-header">
    <h2 class="text-center">Registro de Pacientes</h2>
    <br>
  </div>

  <div class="custom-toolbar">
    <div class="left-tools">
      <input type="search" id="searchInput" class="form-control" placeholder="Buscar...">
      <button id="registro-btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registroModal" style="width: 30vh;">
       <i class="ti ti-user-plus"> </i> Nuevo paciente
      </button>
    </div>
    <div class="right-tools dt-buttons btn-group"></div>
  </div>

  <div class="table-wrapper">
    <table id="tablaPersonas" class="table table-bordered table-hover text-center">
      <thead class="table-light">
        <tr>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Nombre</th>
          <th>Tipo Teléfono</th>
          <th>Teléfono</th>
          <th>Correo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- JS rellenará este contenido -->
      </tbody>
    </table>
  </div>
</div>

<!-- Modales -->
<div class="modal fade" id="modalDetalle" tabindex="-1" aria-labelledby="modalDetalleLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h4 class="modal-title w-100 text-center" id="modalHistorialLabel">Ficha del Paciente</h4>
      </div>
      <div class="modal-body" id="detallePersona">

      </div>
      <div class="text-center">
          <a href="./perfil_pacientes.php">¿Ver perfil mas detallado?</a>
      </div>
           <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="ti ti-square-x"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" id="formEditar">
      <div class="modal-header">
        <h4 class="modal-title w-100 text-center" id="modalHistorialLabel">Editar Perfil del Paciente</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="editarId">
        <div class="row">

        <div class="">
          <div class="text-center">
            <label for="editarFoto" class="form-label"></label><br>
            <img id="previewFoto" src="" alt="Vista previa" class="mb-2 rounded" width="100px"><br>
                      <input type="file" class="form-control" id="editarFoto" accept="image/*" >
          </div>
        </div>

       <div class="col-md-4">
          <label for="editarNombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="editarNombre">
        </div>

        <div class="col-md-4">
          <label for="editarApellidoP" class="form-label">Apellido Paterno</label>
          <input type="text" class="form-control" id="editarApellidoP">
        </div>

        <div class="col-md-4">
          <label for="editarApellidoM" class="form-label">Apellido Materno</label>
          <input type="text" class="form-control" id="editarApellidoM">
        </div>

        <div class="col-md-4">
          <label for="editarDireccion" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="editarDireccion">
        </div>

        <div class="col-md-4">
          <label for="editarTelefono" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="editarTelefono">
        </div>

        <div class="col-md-4">
          <label for="editarTipoTelefono" class="form-label">Tipo de Teléfono</label>
          <input type="text" class="form-control" id="editarTipoTelefono">
        </div>

        <div class="col-md-4">
          <label for="editarCorreo" class="form-label">Correo</label>
          <input type="email" class="form-control" id="editarCorreo">
        </div>

        <div class="col-md-4">
          <label for="editarAlergias" class="form-label">Alergias</label>
          <input type="text" class="form-control" id="editarAlergias">
        </div>

        <div class="col-md-4">
          <label for="editarSangre" class="form-label">Tipo de Sangre</label>
          <input type="text" class="form-control" id="editarSangre">
        </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-danger"> <i class="ti ti-square-x"></i> Cerrar</button>
        <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy"></i> Guardar cambios</button>
      </div>
    </form>
  </div>
</div>

<div class="modal fade" id="modalHistorial" tabindex="-1" aria-labelledby="modalHistorialLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100 text-center" id="modalHistorialLabel">Historial de Consultas Médicas</h4>
      </div>
      <div class="modal-body">
        <div id="historialPersona">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
          <i class="ti ti-square-x"></i> Cerrar
        </button>
        <button type="button" class="btn btn-primary" id="btnAgregarCitaSimulado">
          <i class="ti ti-plus"></i> Agregar Cita
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalAgregarCita" tabindex="-1" aria-labelledby="modalAgregarCitaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100 text-center" id="modalHistorialLabel">Agregar Nueva Cita Médica</h4>
      </div>
      <div class="modal-body">
        <form id="formAgregarCita">
          <div class="mb-3">
            <label for="consultaTexto" class="form-label">Notas de la Consulta:</label>
            <textarea class="form-control" id="consultaTexto" rows="5" placeholder="Escribe aquí las notas de la consulta..."></textarea>
          </div>
          <div class="mb-3">
            <label for="adjuntosCita" class="form-label">Adjuntar Documentos/Imágenes:</label>
            <input class="form-control" type="file" id="adjuntosCita" multiple>
            <small class="form-text text-muted">Puedes seleccionar múltiples archivos.</small>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
          <i class="ti ti-square-x"></i> Cancelar
        </button>
        <button type="button" class="btn btn-success" id="btnGuardarCitaSimulado"> <i class="ti ti-device-floppy"></i> Guardar Cita</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="formRegistro">
        <div class="modal-header">
          <h5 class="modal-title" id="registroModalLabel">Formulario de Registro de Paciente</h5>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="foto" class="form-label">Foto del paciente</label>
            <input type="file" class="form-control" id="foto" accept="image/*">
          </div>

          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" >
            </div>
            <div class="col-md-4 mb-3">
              <label for="apellidoP" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" id="apellidoP" >
            </div>
            <div class="col-md-4 mb-3">
              <label for="apellidoM" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" id="apellidoM" >
            </div>
          </div>

          <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" >
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="telefono" class="form-label">Teléfono</label>
              <input type="tel" class="form-control" id="telefono" >
            </div>
            <div class="col-md-6 mb-3">
              <label for="correo" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="correo" >
            </div>
          </div>

          <div class="mb-3">
            <label for="alergias" class="form-label">Alergias</label>
            <textarea class="form-control" id="alergias" rows="2"></textarea>
          </div>

          <div class="mb-3">
            <label for="sangre" class="form-label">Tipo de sangre</label>
            <select class="form-select" id="sangre" >
              <option value="">Seleccione...</option>
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>AB+</option>
              <option>AB-</option>
              <option>O+</option>
              <option>O-</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="documentos" class="form-label">Historial clínico (PDF o imagen)</label>
            <input type="file" class="form-control" id="documentos" accept=".pdf,image/*">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="ti ti-square-x"></i> Cerrar</button>
          <button type="submit" class="btn btn-success"> <i class="ti ti-device-floppy"></i> Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Alerta de éxito -->
<div id="alertaExito" class="alert alert-success text-center fade-in position-fixed bottom-0 start-50 translate-middle-x w-50 d-none" role="alert">
  ✅ ¡Registro exitoso!
</div>

<!-- Bootstrap JS (al final del body) -->
<script src="./assets/js/plugins/popper.min.js"></script>
<script src="./assets/js/plugins/simplebar.min.js"></script>
<script src="./assets/js/plugins/bootstrap.min.js"></script>
<script src="./assets/js/fonts/custom-font.js"></script>
<script src="./assets/js/pcoded.js"></script>
<script src="./assets/js/plugins/feather.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

<!-- DataTables + Export -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
</body>
<!-- [Body] end -->
</html>


<script>
  const personas = [
    {
      id: 1,
      nombre: "Carlos",
      apellidoPaterno: "Ramírez",
      apellidoMaterno: "López",
      direccion: "Av. Reforma 123",
      telefono: "5551234567",
      tipoTelefono: "Celular",
      correo: "carlos.ramirez@example.com",
      alergias: "Penicilina",
      tipoSangre: "O+",
      foto: "https://randomuser.me/api/portraits/men/32.jpg",
      historial: [
        {
          fechaHora: "2024-05-01 10:30",
          notas: "Paciente presenta síntomas de resfriado común. Se recomienda reposo y líquidos. Prescripción: Paracetamol 500mg cada 8 horas.",
          adjuntos: [
            { tipo: "imagen", url: "https://scontent.fcjs3-2.fna.fbcdn.net/v/t39.30808-6/463384400_2910338529142663_8607917774316513819_n.png?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=8_h8kAU68r8Q7kNvwFL9rbL&_nc_oc=AdmoyQGr_dXNPgAh-ZR9jUTaD2zHO3SVnx377QK10jub79-x2_h8r8gqSBkXTbA1Nc8&_nc_zt=23&_nc_ht=scontent.fcjs3-2.fna&_nc_gid=gDy4pV8D6boXLeyM0OS_5w&oh=00_AfMafHlgH9coKVXAzWl1RmXlZxQMRF_TdTGvvQXhObsSeA&oe=686DF57F" },
            { tipo: "documento", url: "https://www.renfe.com/content/dam/renfe/es/General/PDF-y-otros/Ejemplo-de-descarga-pdf.pdf", nombre: "Informe_Lab_01-05-24.pdf" }
          ]
        },
        {
          fechaHora: "2024-06-14 15:00",
          notas: "Seguimiento de resfriado. Paciente con mejoría. Se adjuntan resultados de análisis de sangre de rutina.",
          adjuntos: [
            { tipo: "imagen", url: "https://scontent.fcjs3-2.fna.fbcdn.net/v/t39.30808-6/463384400_2910338529142663_8607917774316513819_n.png?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=8_h8kAU68r8Q7kNvwFL9rbL&_nc_oc=AdmoyQGr_dXNPgAh-ZR9jUTaD2zHO3SVnx377QK10jub79-x2_h8r8gqSBkXTbA1Nc8&_nc_zt=23&_nc_ht=scontent.fcjs3-2.fna&_nc_gid=gDy4pV8D6boXLeyM0OS_5w&oh=00_AfMafHlgH9coKVXAzWl1RmXlZxQMRF_TdTGvvQXhObsSeA&oe=686DF57F" },
            { tipo: "documento", url: "https://www.renfe.com/content/dam/renfe/es/General/PDF-y-otros/Ejemplo-de-descarga-pdf.pdf", nombre: "Receta_medica_14-06-24.pdf" }
          ]
        }
      ]
    },
    {
      id: 2,
      nombre: "María",
      apellidoPaterno: "Torres",
      apellidoMaterno: "Gómez",
      direccion: "Calle 10 Sur 456",
      telefono: "5559876543",
      tipoTelefono: "Casa",
      correo: "maria.torres@example.com",
      alergias: "Ninguna",
      tipoSangre: "A-",
      foto: "https://randomuser.me/api/portraits/women/44.jpg",
      historial: [
        {
          fechaHora: "2024-03-20 09:00",
          notas: "Consulta de rutina. Presión arterial y peso estables. Se aconseja mantener dieta balanceada.",
          adjuntos: []
        },
        {
          fechaHora: "2024-04-11 11:45",
          notas: "Paciente reporta dolor de cabeza ocasional. Se indican estudios para descartar migraña.",
          adjuntos: [
            { tipo: "documento", url: "https://www.buds.org.uk/wp-content/uploads/2014/06/sample-research-paper.pdf", nombre: "Orden_Estudios_11-04-24.pdf" }
          ]
        },
        {
          fechaHora: "2024-06-25 16:15",
          notas: "Revisión de estudios. No se encontraron anomalías. Se sugiere manejo de estrés.",
          adjuntos: [
            { tipo: "imagen", url: "https://via.placeholder.com/150/00FF00/FFFFFF?text=BrainScan_06-25-24" }
          ]
        }
      ]
    }
  ];


  function renderTabla() {
    const tbody = $("#tablaPersonas tbody");
    tbody.empty(); // Limpia antes de renderizar

    personas.forEach(p => {
      const row = `
        <tr>
          <td>${p.apellidoPaterno}</td>
          <td>${p.apellidoMaterno}</td>
          <td>${p.nombre}</td>
          <td>${p.tipoTelefono}</td>
          <td>${p.telefono}</td>
          <td>${p.correo}</td>
          <td>
            <button style='' class="btn btn-primary btn-sm me-1 rounded-pill" onclick="verDetalle(${p.id})"> <i class="ti ti-eye-check"></i> Ver</button>
            <button style='' class="btn btn-warning btn-sm me-1 rounded-pill" onclick="editar(${p.id})"> <i class="ti ti-edit"></i> Editar</button>
            <button style='' class="btn btn-secondary btn-sm rounded-pill" onclick="verHistorial(${p.id})"> <i class="ti ti-file-text"></i> Historial</button>
          </td>
        </tr>`;
      tbody.append(row);
    });
  }

  function verDetalle(id) {
    const p = personas.find(p => p.id === id);
    $("#detallePersona").html(`
      <img src="${p.foto}" class="detalle-img mb-3" alt="Foto de ${p.nombre}">
      <h5>${p.nombre} ${p.apellidoPaterno} ${p.apellidoMaterno}</h5>
      <p><strong>Dirección:</strong> ${p.direccion}</p>
      <p><strong>Teléfono (${p.tipoTelefono}):</strong> ${p.telefono}</p>
      <p><strong>Correo:</strong> ${p.correo}</p>
      <p><strong>Alergias:</strong> ${p.alergias}</p>
      <p><strong>Tipo de sangre:</strong> ${p.tipoSangre}</p>
    `);
    new bootstrap.Modal(document.getElementById("modalDetalle")).show();
  }


  function editar(id) {
    const p = personas.find(p => p.id === id);
    $("#editarId").val(p.id);
    $("#editarNombre").val(p.nombre);
    $("#editarApellidoP").val(p.apellidoPaterno);
    $("#editarApellidoM").val(p.apellidoMaterno);
    $("#editarDireccion").val(p.direccion);
    $("#editarTelefono").val(p.telefono);
    $("#editarTipoTelefono").val(p.tipoTelefono);
    $("#editarCorreo").val(p.correo);
    $("#editarAlergias").val(p.alergias);
    $("#editarSangre").val(p.tipoSangre);
    $("#previewFoto").attr("src", p.foto);

    new bootstrap.Modal(document.getElementById("modalEditar")).show();
  }

  $("#editarFoto").on("change", function () {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        $("#previewFoto").attr("src", e.target.result);
      };
      reader.readAsDataURL(file);
    }
  });


  $("#formEditar").on("submit", function (e) {
    e.preventDefault();
    const id = parseInt($("#editarId").val());
    const persona = personas.find(p => p.id === id);

    persona.nombre = $("#editarNombre").val().trim();
    persona.apellidoPaterno = $("#editarApellidoP").val().trim();
    persona.apellidoMaterno = $("#editarApellidoM").val().trim();
    persona.direccion = $("#editarDireccion").val().trim();
    persona.telefono = $("#editarTelefono").val().trim();
    persona.tipoTelefono = $("#editarTipoTelefono").val().trim();
    persona.correo = $("#editarCorreo").val().trim();
    persona.alergias = $("#editarAlergias").val().trim();
    persona.tipoSangre = $("#editarSangre").val().trim();

    const nuevaFoto = $("#editarFoto")[0].files[0];
    if (nuevaFoto) {
      const reader = new FileReader();
      reader.onload = function (e) {
        persona.foto = e.target.result;
        actualizarVista();
      };
      reader.readAsDataURL(nuevaFoto);
    } else {
      actualizarVista();
    }

    function actualizarVista() {
      $("#tablaPersonas tbody").empty();
      renderTabla();
      bootstrap.Modal.getInstance(document.getElementById("modalEditar")).hide();
    }
  });


  function verHistorial(id) {
    currentPersonaId = id; // Guarda el ID de la persona actual
    const persona = personas.find(p => p.id === id);
    let historialHtml = '';

    if (persona && persona.historial && persona.historial.length > 0) {
      persona.historial.sort((a, b) => new Date(b.fechaHora) - new Date(a.fechaHora)); // Ordena por fecha descendente
      historialHtml = persona.historial.map(consulta => {
        let adjuntosHtml = '';
        if (consulta.adjuntos && consulta.adjuntos.length > 0) {
          adjuntosHtml = '<div class="mt-2 consultation-attachments">';
          consulta.adjuntos.forEach(adjunto => {
            if (adjunto.tipo === 'imagen') {
              adjuntosHtml += `<img src="${adjunto.url}" alt="Adjunto" class="img-thumbnail me-2">`;
            } else if (adjunto.tipo === 'documento') {
              adjuntosHtml += `<a href="${adjunto.url}" target="_blank" class="btn btn-sm btn-outline-info"><i class="ti ti-file-text"></i> ${adjunto.nombre || 'Documento'}</a>`;
            }
          });
          adjuntosHtml += '</div>';
        }

        return `
          <div class="consultation-item">
            <h6><i class="ti ti-calendar-event"></i> Fecha y Hora: ${consulta.fechaHora}</h6>
            <p><strong>Notas:</strong> ${consulta.notas}</p>
            ${adjuntosHtml}
          </div>
        `;
      }).join("");
    } else {
      historialHtml = '<p class="text-center text-muted">No hay historial de consultas para este paciente.</p>';
    }

    $("#historialPersona").html(historialHtml);
    new bootstrap.Modal(document.getElementById("modalHistorial")).show();
  }

    // Event listener para el botón "Agregar Cita" simulado dentro del modal de historial
  $("#btnAgregarCitaSimulado").on("click", function() {
    // Abre el modal para agregar una nueva cita
    new bootstrap.Modal(document.getElementById("modalAgregarCita")).show();
  });



  $(document).ready(function () {
    renderTabla();

    const table = $('#tablaPersonas').DataTable({
      dom: 'Brt', // Eliminamos el buscador por defecto
      buttons: [
        {
          extend: 'excelHtml5',
          text: "<i class='ti ti-file-export'></i> Excel",
          className: 'btn btn-success rounded-pill'
        },
        {
          extend: 'pdfHtml5',
          text: "<i class='ti ti-printer'></i> PDF",
          className: 'btn btn-danger rounded-pill',
        },
        {
          extend: 'copy',
          text: "<i class='ti ti-copy'></i> Copiar",
          className: 'btn btn-secondary rounded-pill',
        }
      ],
      language: {
        url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
      }
    });

    // Buscador personalizado
    $('#searchInput').on('keyup', function () {
      table.search(this.value).draw();
    });

    // Reubica botones al div custom
    table.buttons().container().appendTo('.dt-buttons');
  });
</script>

  <style>
  .table-wrapper {
    overflow-x: auto;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
    padding: 20px;
  }

  .custom-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    gap: 1rem;
  }

  .left-tools {
    display: flex;
    gap: 10px;
    align-items: center;
  }

.dt-buttons {
  justify-content: flex-end; 
  gap: 10px;
}



  </style>

  <script>
  document.getElementById('formRegistro').addEventListener('submit', function(e) {
    e.preventDefault();

    // Oculta el modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('registroModal'));
    modal.hide();

    // Muestra la alerta de éxito
    const alerta = document.getElementById('alertaExito');
    alerta.classList.remove('d-none');

    // Oculta la alerta después de 3 segundos
    setTimeout(() => {
      alerta.classList.add('d-none');
    }, 3000);

    // Reinicia el formulario
    this.reset();
  });
</script>


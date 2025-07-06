<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->
<head>
  <title>Facturación</title>
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
              <h2 class="text-center">Registro de Facturas</h2>
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
                  <th>Rfc</th>
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

    </div>
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

<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" id="formEditar">
      <div class="modal-header">
        <h4 class="modal-title w-100 text-center" id="modalHistorialLabel">Editar Perfil del Paciente</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="editarId">
        <div class="row">

       <div class="col-md-12 mt-2">
  <label for="editarNombre" class="form-label">Nombre completo o razón social</label>
  <select id="editarNombre" name="editarNombre" class="form-control" >
    <option value="1">Carlos Ramírez López</option>
    <option value="2">María Torres Gómez</option>
  </select>
</div>

<div class="col-md-12 mt-3">
  <label for="editarRFC" class="form-label">RFC</label>
  <input type="text" id="editarRFC" name="editarRFC" class="form-control" value="CARL890909XXX">
</div>

<div class="col-md-12 mt-3">
  <label for="editarUsoCFDI" class="form-label">Uso de CFDI</label>
  <select id="editarUsoCFDI" name="editarUsoCFDI" class="form-control">
    <option value="G03">G03 - Gastos médicos</option>
    <option value="D04">D04 - Donativos</option>
  </select>
</div>

<div class="col-md-12 mt-3">
  <label for="editarEmail" class="form-label">Correo electrónico</label>
  <input type="email" id="editarEmail" name="editarEmail" class="form-control" value="carlos@example.com">
</div>

<div class="col-md-12 mt-4 text-center">
  <h5>Detalle de la cita</h5>
</div>

<div class="col-md-6 mt-3">
  <label for="editarFecha" class="form-label">Fecha</label>
  <input type="date" id="editarFecha" name="editarFecha" class="form-control" value="2025-07-04">
</div>

<div class="col-md-6 mt-3">
  <label for="editarDescripcion" class="form-label">Descripción</label>
  <input type="text" id="editarDescripcion" name="editarDescripcion" class="form-control" value="Consulta general">
</div>

<div class="col-md-6 mt-3">
  <label for="editarCantidad" class="form-label">Cantidad</label>
  <input type="number" id="editarCantidad" name="editarCantidad" class="form-control" value="1" min="1">
</div>

<div class="col-md-6 mt-3">
  <label for="editarPrecio" class="form-label">Precio unitario</label>
  <input type="number" id="editarPrecio" name="editarPrecio" class="form-control" value="750">
</div>

<div class="col-md-12 mt-4 text-center">
  <h5>Método de pago</h5>
</div>

<div class="col-md-6 mt-3">
  <label for="editarFormaPago" class="form-label">Forma de pago</label>
  <select id="editarFormaPago" name="editarFormaPago" class="form-control">
    <option value="03">03 - Transferencia electrónica</option>
    <option value="01">01 - Efectivo</option>
  </select>
</div>

<div class="col-md-6 mt-3">
  <label for="editarMetodoPago" class="form-label">Método de pago</label>
  <select id="editarMetodoPago" name="editarMetodoPago" class="form-control">
    <option value="PUE">PUE - Pago en una sola exhibición</option>
    <option value="PPD">PPD - Pago en parcialidades</option>
  </select>
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

<!-- Modal -->
<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="formRegistro">
      <div class="modal-header">
        <h4 class="modal-title w-100 text-center" id="modalHistorialLabel">Realizar Facturación</h4>
      </div>
        <div class="modal-body">
          <div class="row">
            <form id="facturaForm">
              <div class="text-center">
                <h5>Datos del paciente</h5>
              </div>
              <div class="col-md-4 mt-3">
                <input type="text" name="nombrePaciente" class="form-control" placeholder="Nombre completo o razón social"  />
              </div>
              <div class="col-md-4 mt-3">
                <input type="text" name="rfcPaciente" class="form-control" placeholder="RFC"  />
              </div>
              <div class="col-md-4 mt-3">
                <select name="usoCFDI" class="form-control">
                  <option value="G03">G03 - Gastos médicos</option>
                  <option value="D04">D04 - Donativos</option>
                </select>
              </div>
              <div class="col-md-4 mt-3">
                <input type="email" name="email" class="form-control" placeholder="Correo electrónico"  />
              </div>

              <div class="text-center">
                <h5>Detalle de la cita </h5>
              </div>

              <div class="col-md-4 mt-3">
                <input type="date" name="fecha" class="form-control"  />
              </div>
              <div class="col-md-4 mt-3">
                <input type="text" name="descripcion" class="form-control" placeholder="Descripción del servicio"  />
              </div>
              <div class="col-md-4 mt-3">
                <input type="number" name="cantidad" class="form-control" value="1" min="1"  />
              </div>
              <div class="col-md-4 mt-3">
                <input type="number" name="precio" class="form-control" placeholder="Precio unitario"  />
              </div>
  
              <div class="text-center">
                <h5>Método de pago</h5>
              </div>

              <div class="col-md-4 mt-3">
                  <select name="formaPago" class="form-control">
                    <option value="03">03 - Transferencia electrónica</option>
                    <option value="01">01 - Efectivo</option>
                  </select>
              </div>
              <div class="col-md-5 mt-3">
                  <select name="metodoPago" class="form-control">
                    <option value="PUE">PUE - Pago en una sola exhibición</option>
                    <option value="PPD">PPD - Pago en parcialidades</option>
                  </select>
              </div>
              <div class="text-center">
                <br>
                <button type="submit" class="btn btn-primary" style="width: 190px;"> <i class="ti ti-file-analytics"></i> Generar Factura</button>
              </div>
            </form>
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
      rfciD: "Celular",
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
      RFCID: "Casa",
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
          <td>${p.rfciD}</td>
          <td>${p.telefono}</td>
          <td>${p.correo}</td>
          <td>
            <button  class="btn btn-warning btn-sm me-1 rounded-pill" onclick="editar(${p.id})"> <i class="ti ti-edit"></i> Editar</button>
<a href="https://www.gob.mx/cms/uploads/attachment/file/319280/RAMIREZ_GONZALEZ_ISMAEL_DEL_19_AL_20_DE_MARZO_COMPROBANTE_4.pdf" 
   class="btn btn-danger btn-sm rounded-pill" 
   target="_blank">
   <i class="ti ti-receipt"></i> Imprimir factura
</a>

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
      <p><strong>Teléfono (${p.rfciD}):</strong> ${p.telefono}</p>
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
    $("#editarrfciD").val(p.rfciD);
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
    persona.rfciD = $("#editarrfciD").val().trim();
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
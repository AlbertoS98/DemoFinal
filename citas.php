<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Panel administrador</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="CodedThemes">

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="./assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="./assets/css/style-preset.css" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">

    <?php include './sidebar.html'; ?>
    <?php include './navbar.html'; ?>

<div class="pc-container">
  <div class="pc-content">
    <div class="row">

        <div class="col-md-12 col-xl-12">
            <div class="">
              <h2 class="text-center">Citas del día</h2>
              <br>
            </div>
          <div class="text-end">
              <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#asignarCita">
                  <i class="ti ti-user-plus"></i> Agregar cita
              </button>
              <button class="btn btn-success btn-sm"  type="button">
                  <i class="fa-solid fa-file-excel"></i> Exportar excel
              </button>
              <button class="btn btn-danger btn-sm"  type="button">
                  <i class="fa-solid fa-file-pdf"></i> Exportar pdf
              </button>
          </div>
          <br>

          <div class="card tbl-card">
            <div class="card-body">
              <div class="table-responsive">
<table class="table-striped-shadow">
  <thead>
    <tr>
      <th>Fecha de Consulta</th>
      <th>Hora</th>
      <th>Paciente</th>
      <th>Estatus</th>
      <th>Tipo de Pago</th>
      <th class="text-end">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="#" class="text-muted">Hoy</a></td>
      <td>18:35 Horas</td>
      <td>Juan Sebastian Canul</td>
      <td>
        <span class="d-flex align-items-center gap-2"
          ><i class="fas fa-circle text-success status-circle"></i>Asiste</span
        >
      </td>
      <td>Tarjeta</td>
      <td class="text-end">
        <button class="btn btn-sm btn-success" data-bs-toggle="modal" style="border-radius: 5px;" data-bs-target="#miModal">
          <i class="ti ti-info-circle"></i>
        </button>
        <button class=" btn btn-warning btn-sm" data-bs-toggle="modal" style="border-radius: 5px;" data-bs-target="#cancelar">
          <i class="ti ti-user-off"></i>
        </button>
      </td>
    </tr>
    <tr>
      <td><a href="#" class="text-muted">Hoy</a></td>
      <td>17:00 Horas</td>
      <td>Victoria Chin Caul</td>
      <td>
        <span class="d-flex align-items-center gap-2"
          ><i class="fas fa-circle text-warning status-circle"></i
          >Pospuesto</span
        >
      </td>
      <td>Tarjeta</td>
      <td class="text-end">
        <button class="btn btn-sm btn-success" data-bs-toggle="modal" style="border-radius: 5px;" data-bs-target="#miModal2">
          <i class="ti ti-info-circle"></i>
        </button>
        <button class=" btn btn-warning btn-sm" data-bs-toggle="modal" style="border-radius: 5px;" data-bs-target="#cancelar2">
          <i class="ti ti-user-off"></i>
        </button>
      </td>
    </tr>
    <tr>
      <td><a href="#" class="text-muted">Hoy</a></td>
      <td>11:00 Horas</td>
      <td>Rogelio Pinto May</td>
      <td>
        <span class="d-flex align-items-center gap-2"
          ><i class="fas fa-circle text-danger status-circle"></i
          >No Asistió</span
        >
      </td>
      <td>Efectivo</td>
      <td class="text-end">
        <button class="btn btn-sm btn-success" style="border-radius: 5px;" data-bs-toggle="modal" data-bs-target="#miModal3">
          <i class="ti ti-info-circle"></i>
        </button>
        <button class=" btn btn-warning btn-sm" style="border-radius: 5px;" data-bs-toggle="modal" data-bs-target="#cancelar3">
          <i class="ti ti-user-off"></i>
        </button>
      </td>
    </tr>
  </tbody>
</table>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>


<!-- MODAL -->
<div class="modal fade" id="asignarCita" tabindex="-1" aria-labelledby="asignarCitaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="asignarCitaLabel" style="font-weight: bold;">Paciente</h5>
      </div>
      <div class="modal-body">
        <div class="container">
          <h3>Asignar cita</h3>

          <!-- SELECT DE USUARIOS -->
          <div class="mb-3">
            <label for="usuarioSelect" class="form-label">Buscar usuario</label>
            <select class="form-select" id="usuarioSelect">
              <option value="" selected disabled>Seleccione un usuario</option>
              <option value="Juan Sebastian Canul">Juan Sebastian Canul</option>
              <option value="Victoria Chin Caul">Victoria Chin Caul</option>
              <option value="Rogelio Pinto May">Rogelio Pinto May</option>
              <option value="otro">Otro (No registrado)</option>
            </select>
          </div>

          <!-- CALENDARIO -->
          <div id="calendario" class="calendar mb-3" style="display: flex; flex-wrap: wrap; gap: 5px;"></div>

          <!-- FORMULARIO SOLO SI ES "OTRO" -->
          <form id="formCita" style="display: none;">
            <div class="row">
              <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre del paciente</label>
                <input type="text" class="form-control" id="nombre">
              </div>
              <div class="col-md-4">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="correo">
              </div>
              <div class="col-md-4">
                <label for="telefono" class="form-label">Número de teléfono</label>
                <input type="tel" class="form-control" id="telefono">
              </div>
            </div>
          </form>

          <!-- BOTÓN ASIGNAR -->
          <div id="btnAsignarContainer" class="mt-3" style="display: none;">
            <button class="btn btn-success">Asignar Cita</button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



<!-- MODAL -->
<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" id="miModalLabel" style="font-weight: bold;"> Paciente: Juan Sebastian Canul</h5>
        <button class="btn btn-success btn-sm"> <i class="ti ti-cash"></i>Pagado $1,235</button>
      </div>
      
      <div class="modal-body">
        <td><span class="d-flex align-items-center gap-2"><i
            class="fas fa-circle text-success f-10 m-r-5"></i>Asiste hoy a las 18:35 Horas</span>
        </td>
        <br>
        <div class="text-center">
          <img src="../img/perfil_juan.jpeg" alt="Perfil de Juan" style="width: 130px; ">
        </div>
        <br>
        <div class="container">
        <p style="font-weight: bold;">Sistema Administrativo <i class="ti ti-circle-check" style="color: green;"></i> :</p>
        <p>El paciente Juan Sebastian Canul, asiste para una valoración de rutina, de analisis 
        de sangre.</p>
        <br>
          <p> <p style="font-weight: bold;">Mensaje del Paciente:</p>
            Hola doctor es para saber si me puede atender porque me siento mal del estomago y tengo 
            mucha gripe el dia de hoy 😓🤮🤧
          </p>
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      
    </div>
  </div>
</div>

<!-- MODAL 2 -->
<div class="modal fade" id="miModal2" tabindex="-1" aria-labelledby="miModal2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" id="miModal2Label" style="font-weight: bold;"> Paciente: Victoria Chin Canul</h5>
        <button class="btn btn-success btn-sm"> <i class="ti ti-cash"></i>Pagado $780.25</button>
      </div>
      
      <div class="modal-body">
        <td><span class="d-flex align-items-center gap-2"><i
            class="fas fa-circle text-warning f-10 m-r-5"></i>Pospuso su cita el dia 23 de Mayo del presente año.</span>
        </td>
        <br>
        <div class="text-center">
          <img src="../img/perfil_juan.jpeg" alt="Perfil de Juan" style="width: 130px; ">
        </div>
        <br>
        <div class="container">
        <p style="font-weight: bold;">Sistema Administrativo <i class="ti ti-circle-check" style="color: green;"></i> :</p>
        <p>El paciente Victoria Chin Canul, asiste por chequeo mensual .</p>
        <p style="font-weight: bold;">Sistema Administrativo <i class="ti ti-circle-check" style="color: green;"></i> :</p>
        <p>La paciente Victoria Chin Canul <a style="font-weight: bold;"> POSPUSO</a> su cita el dia 23 de Mayo del presente año.</p>

          <p> <p style="font-weight: bold;">Mensaje del Paciente:</p>
          Hola doc, no creo alcanzar a llegar hoy a la cita, asi que lo voy a posponer otro día mejor, gracias 
          doc. 
          </p>
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      
    </div>
  </div>
</div>

<!-- MODAL 3-->
<div class="modal fade" id="miModal3" tabindex="-1" aria-labelledby="miModal3Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" id="miModal3Label" style="font-weight: bold;"> Paciente: Rogelio Pinto May</h5>
        <button class="btn btn-warning btn-sm"> <i class="ti ti-cash"></i>Paga en Efectivo</button>
      </div>
      
      <div class="modal-body">
        <td><span class="d-flex align-items-center gap-2"><i
            class="fas fa-circle text-danger f-10 m-r-5"></i>No asistio a la cita el dia de hoy</span>
        </td>
        <br>
        <div class="text-center">
          <img src="../img/perfil_juan.jpeg" alt="Perfil de Juan" style="width: 130px; ">
        </div>
        <br>
        <div class="container">
        <p style="font-weight: bold;">Sistema Administrativo <i class="ti ti-circle-check" style="color: green;"></i> :</p>
        <p>El paciente Rogelio Pinto May, asiste por chequeo mensual .</p>

          <p> <p style="font-weight: bold;">Mensaje del Paciente:</p>
            Sin mensajes...
          </p>
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      
    </div>
  </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="cancelar" tabindex="-1" aria-labelledby="cancelarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="cancelarLabel" style="font-weight: bold;">Paciente: Rogelio Pinto May</h5>
        <button class="btn btn-success btn-sm"> <i class="ti ti-cash"></i>Pagado $1,235</button>
      </div>

      <div class="modal-body">
        <div class="container">
          <p style="font-weight: bold;">Sistema Administrativo <i class="ti ti-circle-check" style="color: green;"></i> :</p>
          <p>¿Desea reagendar la cita del Paciente?, seleccione las citas disponible para reagendarlo de nuevo. </p>



          <br>
          <p><span style="font-weight: bold;">¿Enviarle Motivo al Paciente? (Opcional):</span><br>
              <textarea name="" id="" style="width: 400px;"></textarea>
          </p>

        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="cancelar2" tabindex="-1" aria-labelledby="cancelar2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="cancelar2Label" style="font-weight: bold;">Paciente: Rogelio Pinto May</h5>
        <button class="btn btn-success btn-sm"> <i class="ti ti-cash"></i>Pagado $1,235</button>
      </div>

      <div class="modal-body">
        <div class="container">
          <p style="font-weight: bold;">Sistema Administrativo <i class="ti ti-circle-check" style="color: green;"></i> :</p>
          <p>¿Desea reagendar la cita del Paciente?, seleccione las citas disponible para reagendarlo de nuevo. </p>

          <!-- Calendario dinámico -->
          <div id="calendarioContainer" class="mb-3">
            <h6>Selecciona un día disponible:</h6>
            <div id="calendario" class="d-flex flex-wrap" style="gap: 5px;"></div>
          </div>

          <br>
          <p><span style="font-weight: bold;">¿Enviarle Motivo al Paciente? (Opcional):</span><br>
              <textarea name="" id="" style="width: 400px;"></textarea>
          </p>
                    <!-- Botón de agendar -->
          <div id="btnAgendarContainer" style="display: none;">
            <button id="btnAgendar" class="btn btn-primary">Agendar</button>
            <div id="agendadoMsg" class="text-success mt-2" style="display: none; font-weight: bold;">✔ Cita agendada exitosamente, En un momento llegara su 
              cita en su correo electronico del paciente.
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>


<!-- MODAL -->
<div class="modal fade" id="cancelar3" tabindex="-1" aria-labelledby="cancelar3Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="cancelar3Label" style="font-weight: bold;">Paciente: Rogelio Pinto May</h5>
        <button class="btn btn-success btn-sm"> <i class="ti ti-cash"></i>Pagado $1,235</button>
      </div>

      <div class="modal-body">
        <div class="container">
          <p style="font-weight: bold;">Sistema Administrativo <i class="ti ti-circle-check" style="color: green;"></i> :</p>
          <p>¿Desea reagendar la cita del Paciente?, seleccione las citas disponible para reagendarlo de nuevo. </p>

          <!-- Calendario dinámico -->
          <div id="calendarioContainer" class="mb-3">
            <h6>Selecciona un día disponible:</h6>
            <div id="calendario" class="d-flex flex-wrap" style="gap: 5px;"></div>
          </div>

          <br>
          <p><span style="font-weight: bold;">¿Enviarle Motivo al Paciente? (Opcional):</span><br>
              <textarea name="" id="" style="width: 400px;"></textarea>
          </p>
                    <!-- Botón de agendar -->
          <div id="btnAgendarContainer" style="display: none;">
            <button id="btnAgendar" class="btn btn-primary">Agendar</button>
            <div id="agendadoMsg" class="text-success mt-2" style="display: none; font-weight: bold;">✔ Cita agendada exitosamente, En un momento llegara su 
              cita en su correo electronico del paciente.
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

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
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>
<!-- [Body] end -->
</html>
<script>
  // Inicialización de calendario
  const calendario = document.getElementById('calendario');
  const diasDisponibles = Array.from({ length: 10 }, () => Math.floor(Math.random() * 30) + 1);

  for (let i = 1; i <= 30; i++) {
    const dia = document.createElement('div');
    dia.classList.add('day');
    dia.style.width = '40px';
    dia.style.height = '40px';
    dia.style.textAlign = 'center';
    dia.style.lineHeight = '40px';
    dia.style.border = '1px solid #ccc';
    dia.style.cursor = 'pointer';

    if (diasDisponibles.includes(i)) {
      dia.classList.add('disponible');
      dia.style.backgroundColor = '#e0ffe0';
      dia.addEventListener('click', function () {
        document.querySelectorAll('.day').forEach(d => d.classList.remove('selected'));
        dia.classList.add('selected');
        dia.style.backgroundColor = '#00cc66';
        document.getElementById('btnAsignarContainer').style.display = 'block';
      });
    } else {
      dia.classList.add('no-disponible');
      dia.style.backgroundColor = '#f8d7da';
      dia.style.pointerEvents = 'none';
    }

    dia.textContent = i;
    calendario.appendChild(dia);
  }

  // Manejo de usuario seleccionado
  const usuarioSelect = document.getElementById('usuarioSelect');
  const formCita = document.getElementById('formCita');
  const modalTitle = document.getElementById('asignarCitaLabel');

  usuarioSelect.addEventListener('change', function () {
    const usuario = this.value;
    if (usuario === 'otro') {
      formCita.style.display = 'block';
      modalTitle.textContent = 'Nuevo Paciente';
    } else {
      formCita.style.display = 'none';
      modalTitle.textContent = `Paciente: ${usuario}`;
    }
  });
</script>

<style>
  .table-striped-shadow {
    width: 100%;
    border-collapse: collapse;
  }
  .table-striped-shadow th,
  .table-striped-shadow td {
    padding: 15px 20px;
    text-align: left;
  }
  .table-striped-shadow thead th {
    font-weight: 700;
    color: #333;
    text-transform: uppercase;
    font-size: 0.95em;
    background-color: #f5f5f5; /* Fondo más claro para el encabezado */
  }
  .table-striped-shadow tbody tr:nth-child(even) {
    background-color: #fcfcfc; /* Color para filas pares */
  }
  .table-striped-shadow tbody tr:hover {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08); /* Sombra sutil al pasar el mouse */
    transform: translateY(-2px); /* Pequeño levantamiento */
    transition: all 0.2s ease-in-out;
  }
  .table-striped-shadow .status-circle {
    font-size: 0.7em;
    margin-right: 5px;
  }
  .table-striped-shadow .btn-icon {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #ccc;
    background-color: white;
    color: #777;
    transition: all 0.2s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
  }
  .table-striped-shadow .btn-icon:hover {
    border-color: #999;
    background-color: #f0f0f0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
</style>
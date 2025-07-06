
<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->
<head>
  <title>Ingresos</title>
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
              <h2 class="text-center">Registro de Ingresos</h2>
              <br>
      </div>
  <div class="custom-toolbar">
    <div class="left-tools">
      <input type="search" id="searchInput" class="form-control" placeholder="Buscar..."  style="width: 32vh;">
    </div>
    <div class="right-tools dt-buttons btn-group"></div>
  </div>

    <div class="table-wrapper">
    <table id="tablaIngresos" class="table table-bordered table-hover text-center">
      <thead class="table-light">
        <tr>
          <th>Monto</th>
          <th>Fecha y Hora</th>
          <th>Método de Pago</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>$500</td>
          <td>2025-07-05 15:00</td>
          <td>Tarjeta</td>
          <td>
            <button class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#modalDetallePago">
              Ver Detalles
            </button>
          </td>
        </tr>
        <tr>
          <td>$750</td>
          <td>2025-07-04 10:30</td>
          <td>Efectivo</td>
          <td>
            <button class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#modalDetallePago">
              Ver Detalles
            </button>
          </td>
        </tr>
        <!-- Puedes agregar más filas dinámicamente desde JS/PHP -->
      </tbody>
    </table>
  </div>

        <div class="container">
          <br>
            <div class="text-center">
              <h4>Grafica sobre las cosultas Mensuales</h4>
            </div> 
          <div class="card">
            <div class="card-body">
                    <canvas id="lineChart" height="80">

                    </canvas>
            </div>
          </div>
        </div>

    </div>

  
    </div>
  </div>
</div>

<!-- Modal de Detalles -->
<div class="modal fade" id="modalDetallePago" tabindex="-1" aria-labelledby="modalDetallePagoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100 text-center" id="modalHistorialLabel">Realizar Facturación</h4>
      </div>
      <div class="modal-body">
        <p><strong>Monto:</strong> $500</p>
        <p><strong>Fecha:</strong> AAAA-MM-DD</p>
        <p><strong>Hora:</strong> HH:MM</p>
        <p><strong>Método de Pago:</strong> Tarjeta/Efectivo</p>
        <p><strong>Observaciones:</strong> Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="ti ti-square-x"></i> Cerrar</button>
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
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
</html>
<script>
  $(document).ready(function () {
    const table = $('#tablaIngresos').DataTable({
      dom: 'Brt',
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
        }
      ],
      language: {
        url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
      }
    });

    $('#searchInput').on('keyup', function () {
      table.search(this.value).draw();
    });

    table.buttons().container().appendTo('.dt-buttons');
  });



      const ctx = document.getElementById('lineChart').getContext('2d');
  const lineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul'],
      datasets: [
        {
          label: 'Consultas',
          data: [120, 135, 150, 165, 180, 200, 215],
          borderColor: 'rgba(54, 162, 235, 1)',
          backgroundColor: 'rgba(54, 162, 235, 0.1)',
          tension: 0.4,
          fill: true,
          pointRadius: 3
        },
        {
          label: 'Ingresos',
          data: [1000, 1200, 1500, 1700, 1800, 2100, 2300],
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.1)',
          tension: 0.4,
          fill: true,
          pointRadius: 3
        }
      ]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          labels: {
            color: '#333',
            font: { size: 14 }
          }
        }
      },
      animations: {
        tension: {
          duration: 1000,
          easing: 'easeInOutQuad',
          from: 0.2,
          to: 0.4,
          loop: false
        }
      },
      scales: {
        x: {
          ticks: { color: '#888' },
          grid: { display: false }
        },
        y: {
          ticks: { color: '#888' },
          grid: { color: 'rgba(200, 200, 200, 0.1)' }
        }
      }
    }
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
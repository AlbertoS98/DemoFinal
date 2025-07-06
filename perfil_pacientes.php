
<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->
<head>
  <title>Perfil Pacientes</title>
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

                <div class="card mb-4">
                <div class="card-body d-flex align-items-center">
                    <img src="" id="fotoPerfil" class="rounded-circle me-4" width="100" height="100">
                    <div>
                    <h4 id="nombreCompleto"></h4>
                    <p id="correoTelefono"></p>
                    <p id="direccionTipoSangre"></p>
                    <p id="datosExtra"></p>
                    </div>
                </div>
                </div>

                <div class="card mb-4">
                <div class="card-header minimal-light">
                    <h5>🩺 Antecedentes Patológicos y Hereditarios</h5>
                </div>

                <div class="card-body" id="antecedentes">

                </div>
                </div>

                <div class="card mb-4">
                <div class="card-header minimal-light"><h5>🤧 Alergias y Reacciones</h5></div>
                <div class="card-body" id="alergias"></div>
                </div>

                <div class="card mb-4">
                <div class="card-header minimal-light"><h5>📅 Próximas Citas</h5></div>
                <div class="card-body" id="proximasCitas"></div>
                </div>

                <div class="card mb-4">
                <div class="card-header minimal-light"><h5>💲 Historial de Pagos</h5></div>
                <div class="card-body" id="historialPagos"></div>
                </div>

                <div class="card mb-4">
                <div class="card-header minimal-light"><h5> 📝 Historial Médico</h5></div>
                <div class="card-body">
                    <table class="table table-striped" id="tablaHistorial">
                    <thead>
                        <tr>
                        <th>Fecha</th>
                        <th>Notas</th>
                        <th>Precio</th>
                        <th>Adjuntos</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    </table>
                </div>
                </div>

                <div class="card mb-4">
                <div class="card-header minimal-light"><h5>🖼️ Galería de Imágenes</h5></div>
                <div class="card-body" id="galeriaImagenes" style="display: flex; flex-wrap: wrap; gap: 10px;"></div>
                </div>

                <div class="card mb-4">
                <div class="card-header minimal-light"><h5>  Documentos sobre Historial Clinico</h5></div>
                <div class="card-body" id="galeriaDocumentos">
                    <ul class="list-group"></ul>
                </div>
                </div>

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
<style>
    .minimal-light {
    background-color:rgb(245, 245, 245);
    padding: 12px 20px;
    border-bottom: 1px solid #e0e0e0;
}

.minimal-light h5 {
    margin: 0;
    font-size: 1rem;
    font-weight: 500;
    color: #333;
    font-family: 'Segoe UI', sans-serif;
}

</style>
<script>
    const paciente = {
    id: 1,
    nombre: "Carlos",
    apellidoPaterno: "Ramírez",
    apellidoMaterno: "López",
    direccion: "Av. Reforma 123",
    telefono: "5551234567",
    rfciD: "Celular",
    correo: "carlos.ramirez@example.com",
    tipoSangre: "O+",
    foto: "https://randomuser.me/api/portraits/men/32.jpg",
    fechaNacimiento: "1988-03-22",
    fechaAltaPaciente: "2023-12-10",
    alergiasDetalle: [
        { sustancia: "Penicilina", reaccion: "Erupción cutánea y dificultad para respirar" },
        { sustancia: "Ibuprofeno", reaccion: "Dolor estomacal severo" }
    ],
    antecedentes: {
        patologicos: "Hipertensión arterial diagnosticada en 2019. Gastritis crónica.",
        hereditarios: "Padre con diabetes tipo II. Madre con antecedentes de hipertensión."
    },
    proximasCitas: [
        { fecha: "2025-07-10 11:00", motivo: "Revisión general" }
    ],
    pagos: [
        { fecha: "<button class='btn btn-success btn-sm rounded-pill'> PAGADO </button> <a style='font-weight: bold;'>2024-07-24 15:20</a>", monto: 500 
        },
        { fecha: "<button class='btn btn-success btn-sm rounded-pill'> PAGADO </button> <a style='font-weight: bold;'>2024-06-11 15:20</a>", monto: 1200 },
        { fecha: "<button class='btn btn-success btn-sm rounded-pill'> PAGADO </button> <a style='font-weight: bold;'>2024-05-09 17:20</a>", monto: 850 },
        { fecha: "<button class='btn btn-success btn-sm rounded-pill'> PAGADO </button> <a style='font-weight: bold;'>2024-03-21 11:20</a>", monto: 4450 },
        { fecha: "<button class='btn btn-success btn-sm rounded-pill'> PAGADO </button> <a style='font-weight: bold;'>2024-01-29 19:20</a>", monto: 1400 }

    ],
    historial: [
        {
        fechaHora: "2024-05-01 10:30",
        notas: "Paciente presenta síntomas de resfriado común (fiebre, congestión, malestar general). Se presume infección viral aguda del tracto respiratorio superior. Se prescribe Paracetamol 500mg cada 8 horas.",
        precio: 500,
        adjuntos: [
            { tipo: "imagen", url: "https://pbs.twimg.com/media/EwPTT6tXIAItOc4?format=jpg&name=large" },
            { tipo: "imagen", url: "https://scontent.fcjs3-2.fna.fbcdn.net/v/t1.6435-9/61371825_1294925057324326_5197789809828954112_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=833d8c&_nc_ohc=4psmJ6sbBc8Q7kNvwElDmu5&_nc_oc=AdmPuON_LgyhahoDJyM1AKFpJzkr2W4jaHw_6E6LebqTY93gVBjteT1dlu3CdNUgAW0&_nc_zt=23&_nc_ht=scontent.fcjs3-2.fna&_nc_gid=5FMhICLfb_GRM4hRd0z_eA&oh=00_AfNnWrTpcE-vE14V5ON-zH0qqwSqVpAX9_1fRsOIFVtt5Q&oe=688FAA45" },
            { tipo: "documento", url: "https://www.renfe.com/content/dam/renfe/es/General/PDF-y-otros/Ejemplo-de-descarga-pdf.pdf", nombre: "Informe_Lab_01-05-24.pdf" }
        ]
        },
        {
        fechaHora: "2024-06-14 15:00",
        notas: "Seguimiento de resfriado. Paciente con mejoría. Se adjuntan resultados de análisis de sangre de rutina.",
        precio: 500,
        adjuntos: [
            { tipo: "imagen", url: "https://media-cdn.tripadvisor.com/media/photo-s/1a/71/01/6f/piquetes-de-chinches.jpg" },
            { tipo: "imagen", url: "https://st2.depositphotos.com/2499143/6320/i/950/depositphotos_63206887-stock-photo-scraped-knee.jpg" },
            { tipo: "imagen", url: "https://st3.depositphotos.com/4744673/17423/i/950/depositphotos_174237420-stock-photo-large-bruise-on-human-arm.jpg" },
            { tipo: "documento", url: "https://www.renfe.com/content/dam/renfe/es/General/PDF-y-otros/Ejemplo-de-descarga-pdf.pdf", nombre: "Receta_medica_14-06-24.pdf" }
        ]
        }
    ]
    };

    document.getElementById("fotoPerfil").src = paciente.foto;
    document.getElementById("nombreCompleto").innerText = `${paciente.nombre} ${paciente.apellidoPaterno} ${paciente.apellidoMaterno}`;
    document.getElementById("correoTelefono").innerText = `${paciente.correo} | Tel: ${paciente.telefono}`;
    document.getElementById("direccionTipoSangre").innerText = `Dirección: ${paciente.direccion} | Tipo de sangre: ${paciente.tipoSangre}`;
    document.getElementById("datosExtra").innerText = `Fecha de nacimiento: ${paciente.fechaNacimiento} | Paciente desde: ${paciente.fechaAltaPaciente}`;
    document.getElementById("antecedentes").innerHTML = `<strong>Patológicos:</strong> ${paciente.antecedentes.patologicos}<br><strong>Hereditarios:</strong> ${paciente.antecedentes.hereditarios}`;
    document.getElementById("alergias").innerHTML = paciente.alergiasDetalle.map(al => `<p><strong>${al.sustancia}:</strong> ${al.reaccion}</p>`).join("");
    document.getElementById("proximasCitas").innerHTML = paciente.proximasCitas.map(cita => `<p>📅 ${cita.fecha} - ${cita.motivo}</p>`).join("");
    document.getElementById("historialPagos").innerHTML = paciente.pagos.map(pago => `<p>💳 ${pago.fecha} - $${pago.monto}</p>`).join("");

    const tbody = document.querySelector("#tablaHistorial tbody");
    const galeriaImagenes = document.getElementById("galeriaImagenes");
    const galeriaDocumentos = document.querySelector("#galeriaDocumentos ul");

    paciente.historial.forEach(cita => {
    const fila = document.createElement("tr");
    fila.innerHTML = `
        <td>${cita.fechaHora}</td>
        <td>${cita.notas}</td>
        <td>$${cita.precio || 0}</td>
        <td>${cita.adjuntos.map(adj => adj.tipo === "imagen" ? `<a href="${adj.url}" target="_blank">🖼️</a>` : `<a href="${adj.url}" target="_blank">📄 ${adj.nombre}</a>`).join(" ")}</td>
    `;
    tbody.appendChild(fila);

    cita.adjuntos.forEach(adj => {
        if (adj.tipo === "imagen") {
        const img = document.createElement("img");
        img.src = adj.url;
        img.style.width = "100px";
        img.style.height = "100px";
        img.style.objectFit = "cover";
        galeriaImagenes.appendChild(img);
        } else if (adj.tipo === "documento") {
        const li = document.createElement("li");
        li.classList.add("list-group-item");
        li.innerHTML = `<a href="${adj.url}" target="_blank">${adj.nombre}</a>`;
        galeriaDocumentos.appendChild(li);
        }
    });
    });

</script>

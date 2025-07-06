<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Panel administrador</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OerWCmfBnVFz0xICvDAj2Q+vXnIDJ6s/Czo" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0V4LLanw2qksYuMGFQoW22WzHl/4aP/T3f0V1xJ8S8C1+8R/A8I7W1W2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<style rel=""></style>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">

    <?php include './sidebar.html'; ?>
    <?php include './navbar.html'; ?>

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Ingresos del mes</h6>
              <h4 class="mb-3">$15,362 <span class="badge bg-light-primary border border-primary"><i
                    class="ti ti-trending-up"></i> 59.3%</span></h4>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Pacientes del mes</h6>
              <h4 class="mb-3"> <i class="ti ti-user-check"></i> 27 <span class="badge bg-light-success border border-success"><i
                    class="ti ti-trending-up"></i> 70.5%</span></h4>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Citas canceladas</h6>
              <h4 class="mb-3"> <i class="ti ti-user-x"></i> 3 <span class="badge bg-light-danger border border-danger"><i
                    class="ti ti-trending-down"></i> 27.4%</span></h4>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body ">
              <h6 class="mb-2 f-w-400 text-muted">Facturas pendientes</h6>
              <h4 class="mb-3"> <i class="ti ti-report-analytics"></i> 12 <span class="badge bg-light-danger border border-danger"><i
                    class=""></i>Te queda 2 semanas!</span></h4>
              </p>
            </div>
          </div>
        </div>


        <div class="col-md-12 col-xl-8">
          <div class="col-md-12">
            <div class="text-center">
              <h4>Itinerario del día</h4>
            </div>
            <div class="card">
            <div class="list-group list-group-flush">
              <!-- Cita con paciente -->
              <a href="#" class="list-group-item list-group-item-action" onclick="mostrarDetalle('cita1')">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                      <i class="ti ti-user f-18"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Cita: Juan Pérez</h6>
                    <p class="mb-0 text-muted">8:00 AM - Consulta general</p>
                  </div>
                  <div class="flex-shrink-0 text-end">
                    <p class="mb-0 text-muted">Duración: 30 min</p>
                  </div>
                </div>
              </a>

              <!-- Revisión laboratorio -->
              <a href="#" class="list-group-item list-group-item-action" onclick="mostrarDetalle('lab1')">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s rounded-circle text-warning bg-light-warning">
                      <i class="ti ti-flask f-18"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Revisión de análisis</h6>
                    <p class="mb-0 text-muted">9:15 AM - Resultados de sangre</p>
                  </div>
                  <div class="flex-shrink-0 text-end">
                    <p class="mb-0 text-muted">Duración: 15 min</p>
                  </div>
                </div>
              </a>

              <!-- Junta con equipo médico -->
              <a href="#" class="list-group-item list-group-item-action" onclick="mostrarDetalle('reunion1')">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                      <i class="ti ti-users f-18"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Junta clínica</h6>
                    <p class="mb-0 text-muted">11:00 AM - Casos complicados</p>
                  </div>
                  <div class="flex-shrink-0 text-end">
                    <p class="mb-0 text-muted">Duración: 45 min</p>
                  </div>
                </div>
              </a>

              <!-- Cirugía programada -->
              <a href="#" class="list-group-item list-group-item-action" onclick="mostrarDetalle('cirugia1')">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                      <i class="ti ti-heartbeat f-18"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Cirugía: Hernia</h6>
                    <p class="mb-0 text-muted">1:30 PM - Quirófano 3</p>
                  </div>
                  <div class="flex-shrink-0 text-end">
                    <p class="mb-0 text-muted">Duración: 1h 30m</p>
                  </div>
                </div>
              </a>

              
            </div>
            </div>
          </div>

        <div class="container">
            <div class="text-center">
              <h4>Grafica sobre las cosultas Mensuales</h4>
            </div> 
          <div class="card">
            <div class="card-body">
                    <canvas id="lineChart" height="105">

                    </canvas>
            </div>
          </div>
        </div>
        </div>

                        <!-- Nuevo Card a la derecha (ocupa las 4 columnas restantes) -->
                <div class="col-md-4">
                  <div class="text-center">
<h4>Chat general</h4>
                  </div>
                    <div class="chat-container">
                        <div class="chat-list" id="chat-list">
                            <div class="p-3 border-bottom chat-list-content">
                                <h5>Chats</h5>
                            </div>
                            <div id="chat-list-items" class="chat-list-content">
                                </div>
                        </div>

                        <div class="chat-main" id="chat-main-area">
                            <div class="chat-header">
                                <button class="toggle-chat-list-btn" id="toggle-chat-list-btn">
                                    <i class="fas fa-bars"></i> </button>
                                <span id="chat-header-title">Selecciona un chat para empezar a conversar</span>
                            </div>
                            <div class="messages-container" id="messages-display">
                                </div>
                            <div class="chat-input-area">
                                <input type="text" placeholder="Escribe un mensaje..." id="message-input" disabled>
                                <button class="btn btn-primary" id="send-button" disabled>Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>





      </div>
    </div>
  </div>

          <!-- Contenedor del Toast (puedes moverlo de lugar según tu diseño) -->
        <div class="position-fixed end-0 top-0 p-3" style="z-index: 1050">
          <div id="detalleTareaToast" class="toast align-items-start text-bg-light border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="ti ti-calendar-event me-2 text-primary"></i>
              <strong class="me-auto" id="titulo-tarea">Título de la tarea</strong>
              <small class="text-muted">Ahora</small>
              <button type="button" class="btn-close ms-2 mb-1" data-bs-dismiss="toast" aria-label="Cerrar"></button>
            </div>
            <div class="toast-body" id="descripcion-tarea">
              Aquí va la descripción de la actividad médica seleccionada.
            </div>
          </div>
        </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- [Page Specific JS] start -->
  <script src="./assets/js/plugins/apexcharts.min.js"></script>
  <script src="./assets/js/pages/dashboard-default.js"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="./assets/js/plugins/popper.min.js"></script>
  <script src="./assets/js/plugins/simplebar.min.js"></script>
  <script src="./assets/js/plugins/bootstrap.min.js"></script>
  <script src="./assets/js/fonts/custom-font.js"></script>
  <script src="./assets/js/pcoded.js"></script>
  <script src="./assets/js/plugins/feather.min.js"></script>


</body>
<!-- [Body] end -->

</html>
<style>
    .chat-container {
            display: flex;
            height: 73vh; /* Altura para que ocupe casi toda la ventana */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 20px auto;
            max-width: 1200px; /* Ancho máximo para el contenedor */
            transition: all 0.3s ease; /* Transición suave para los cambios de tamaño */
        }
        .chat-list {
            flex: 0 0 350px; /* Ancho fijo para la lista de chats */
            background-color: #ffffff;
            border-right: 1px solid #e0e0e0;
            overflow-y: auto;
            transition: all 0.3s ease; /* Transición suave para ocultar/mostrar */
        }
        .chat-list.hidden {
            flex: 0 0 0; /* Ancho 0 para ocultar */
            min-width: 0; /* Asegurarse de que no ocupe espacio */
            overflow: hidden; /* Ocultar contenido desbordado */
            border-right: none;
        }
        .chat-list.hidden .chat-list-content {
            display: none; /* Ocultar el contenido real */
        }
        .chat-main {
            flex: 1; /* Ocupa el resto del espacio */
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
        }
        .chat-header {
            background-color: #0056b3; /* Azul para el encabezado del chat */
            color: white;
            padding: 15px;
            font-size: 1.2em;
            font-weight: bold;
            border-bottom: 1px solid #004085;
            display: flex;
            align-items: center;
            gap: 10px; /* Espacio entre el botón y el título */
        }
        .chat-header .toggle-chat-list-btn {
            background: none;
            border: none;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
            padding: 0;
        }
        .messages-container {
            flex: 1; /* Ocupa el espacio disponible para los mensajes */
            padding: 20px;
            overflow-y: auto;
            background-color: #e5ddd5; /* Fondo de chat de WhatsApp */
            display: flex;
            flex-direction: column;
            gap: 10px; /* Espacio entre mensajes */
        }
        .message {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 8px;
            word-wrap: break-word;
        }
        .message.sent {
            align-self: flex-end;
            background-color: #dcf8c6; /* Mensaje enviado */
        }
        .message.received {
            align-self: flex-start;
            background-color: #ffffff; /* Mensaje recibido */
            border: 1px solid #e0e0e0;
        }
        .message-time {
            font-size: 0.75em;
            color: #888;
            margin-top: 5px;
            text-align: right;
        }
        .chat-input-area {
            display: flex;
            padding: 15px;
            background-color: #f0f0f0;
            border-top: 1px solid #e0e0e0;
        }
        .chat-input-area input {
            flex: 1;
            border-radius: 20px;
            border: 1px solid #ccc;
            padding: 8px 15px;
            margin-right: 10px;
        }
        .chat-input-area button {
            border-radius: 20px;
            padding: 8px 15px;
        }

        /* Estilos para la lista de chats */
        .chat-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #f0f0f0;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        .chat-item:hover {
            background-color: #f2f2f2;
        }
        .chat-item.active {
            background-color: #e0e0e0;
        }
        .chat-item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }
        .chat-info h6 {
            margin-bottom: 0;
        }
        .chat-info p {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 0;
        }
</style>
<script>
  const tareas = {
    cita1: {
      titulo: "Cita con Juan Pérez",
      descripcion: "Consulta general, revisar historial de presión arterial y renovar receta de losartán."
    },
    lab1: {
      titulo: "Revisión de análisis",
      descripcion: "Resultados de biometría hemática. Verificar niveles de glucosa y colesterol."
    },
    reunion1: {
      titulo: "Junta clínica",
      descripcion: "Revisión de 3 casos de pacientes hospitalizados. Coordinar tratamientos multidisciplinarios."
    },
    cirugia1: {
      titulo: "Cirugía programada",
      descripcion: "Paciente: María López. Procedimiento: reparación de hernia inguinal. Asistencia: Dr. Ramos."
    }
  };

  function mostrarDetalle(id) {
    const tarea = tareas[id];
    if (tarea) {
      document.getElementById("titulo-tarea").innerText = tarea.titulo;
      document.getElementById("descripcion-tarea").innerText = tarea.descripcion;

      const toastEl = document.getElementById('detalleTareaToast');
      const toast = new bootstrap.Toast(toastEl, {
        animation: true,
        autohide: false
      });

      toast.show();
    }
  }


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


 <script>
 const chatList = document.getElementById('chat-list');
        const chatListItems = document.getElementById('chat-list-items');
        const chatHeaderTitle = document.getElementById('chat-header-title');
        const messagesDisplay = document.getElementById('messages-display');
        const messageInput = document.getElementById('message-input');
        const sendButton = document.getElementById('send-button');
        const toggleChatListBtn = document.getElementById('toggle-chat-list-btn');

        // Datos de ejemplo para los chats y mensajes
        const chats = [
            {
                id: 'chat1',
                name: 'Dr. García',
                lastMessage: 'Ok, nos vemos el lunes.',
                avatar: 'https://cdn-icons-png.flaticon.com/512/12225/12225881.png',
                messages: [
                    { sender: 'Dr. García', text: 'Hola, ¿cómo estás?', time: '10:00 AM', type: 'received' },
                    { sender: 'Tú', text: 'Muy bien, gracias. ¿Qué tal el fin de semana?', time: '10:05 AM', type: 'sent' },
                    { sender: 'Dr. García', text: 'Todo excelente, descansando. ¿Podemos revisar el caso del paciente X el lunes?', time: '10:10 AM', type: 'received' },
                    { sender: 'Tú', text: 'Sí, claro. Lo tengo agendado. Te envío los últimos reportes en un momento.', time: '10:15 AM', type: 'sent' },
                    { sender: 'Dr. García', text: 'Perfecto, los espero. Gracias!', time: '10:20 AM', type: 'received' },
                    { sender: 'Tú', text: 'De nada! :)', time: '10:22 AM', type: 'sent' },
                    { sender: 'Dr. García', text: 'Ok, nos vemos el lunes.', time: '10:25 AM', type: 'received' }
                ]
            },
            {
                id: 'chat2',
                name: 'Laboratorio Central',
                lastMessage: 'Resultados enviados por correo.',
                avatar: 'https://photoaid.com/images/cms/alejandro_395dff66d6.webp?quality=80&format=webp&width=1920',
                messages: [
                    { sender: 'Laboratorio Central', text: 'Estimado Dr./Dra., los resultados del paciente A han sido procesados.', time: 'Ayer 09:30 AM', type: 'received' },
                    { sender: 'Tú', text: 'Gracias, ¿ya están disponibles en el portal?', time: 'Ayer 09:35 AM', type: 'sent' },
                    { sender: 'Laboratorio Central', text: 'Sí, y también se los enviamos a su correo registrado. Cualquier duda, estamos a sus órdenes.', time: 'Ayer 09:40 AM', type: 'received' },
                    { sender: 'Laboratorio Central', text: 'Resultados enviados por correo.', time: 'Ayer 09:40 AM', type: 'received' }
                ]
            },
            {
                id: 'chat3',
                name: 'Equipo Médico',
                lastMessage: 'Reunión cancelada para hoy.',
                avatar: 'https://www.medicosgeneralescolombianos.com/images/Logos/Medicos%20Parados%20sin%20fondo.png',
                messages: [
                    { sender: 'Equipo Médico', text: 'Aviso importante: La reunión de hoy a las 3 PM ha sido pospuesta para mañana a la misma hora. Disculpen las molestias.', time: 'Hace 2 horas', type: 'received' },
                    { sender: 'Tú', text: 'Enterado, gracias por avisar.', time: 'Hace 1 hora', type: 'sent' },
                    { sender: 'Equipo Médico', text: 'De nada. Estén pendientes para el enlace de la videollamada.', time: 'Hace 30 min', type: 'received' },
                    { sender: 'Equipo Médico', text: 'Reunión cancelada para hoy.', time: 'Hace 30 min', type: 'received' }
                ]
            }
        ];

        let activeChatId = null;
        let isChatListHidden = false; // Estado para saber si la lista de chats está oculta

        // Función para renderizar la lista de chats
        function renderChatList() {
            chatListItems.innerHTML = '';
            chats.forEach(chat => {
                const chatItem = document.createElement('div');
                chatItem.classList.add('chat-item');
                if (chat.id === activeChatId) {
                    chatItem.classList.add('active');
                }
                chatItem.dataset.chatId = chat.id;

                chatItem.innerHTML = `
                    <img src="${chat.avatar}" alt="${chat.name}">
                    <div class="chat-info">
                        <h6>${chat.name}</h6>
                        <p>${chat.lastMessage}</p>
                    </div>
                `;
                chatItem.addEventListener('click', () => selectChat(chat.id));
                chatListItems.appendChild(chatItem);
            });
        }

        // Función para seleccionar un chat y mostrar sus mensajes
        function selectChat(id) {
            activeChatId = id;
            renderChatList(); // Actualiza la clase 'active'
            const selectedChat = chats.find(chat => chat.id === id);

            if (selectedChat) {
                chatHeaderTitle.textContent = selectedChat.name;
                messagesDisplay.innerHTML = '';
                selectedChat.messages.forEach(msg => {
                    const messageElement = document.createElement('div');
                    messageElement.classList.add('message', msg.type);
                    messageElement.innerHTML = `
                        <span>${msg.text}</span>
                        <div class="message-time">${msg.time}</div>
                    `;
                    messagesDisplay.appendChild(messageElement);
                });
                // Desplazarse al final de los mensajes
                messagesDisplay.scrollTop = messagesDisplay.scrollHeight;

                // Habilitar input y botón de envío
                messageInput.disabled = false;
                sendButton.disabled = false;
                messageInput.focus(); // Poner el foco en el input

                // Si la lista de chats está visible en móvil, ocultarla al seleccionar un chat
                // Esto es un comportamiento común en apps de chat para móviles
                if (window.innerWidth <= 768 && !isChatListHidden) { // Ajusta el breakpoint si es necesario
                    toggleChatList();
                }
            }
        }

        // Función para enviar un mensaje
        function sendMessage() {
            const text = messageInput.value.trim();
            if (text && activeChatId) {
                const selectedChat = chats.find(chat => chat.id === activeChatId);
                if (selectedChat) {
                    const now = new Date();
                    const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                    const newMessage = {
                        sender: 'Tú',
                        text: text,
                        time: timeString,
                        type: 'sent'
                    };
                    selectedChat.messages.push(newMessage);
                    selectedChat.lastMessage = text; // Actualizar el último mensaje en la lista de chats

                    // Renderizar solo el nuevo mensaje para evitar recargar todo
                    const messageElement = document.createElement('div');
                    messageElement.classList.add('message', newMessage.type);
                    messageElement.innerHTML = `
                        <span>${newMessage.text}</span>
                        <div class="message-time">${newMessage.time}</div>
                    `;
                    messagesDisplay.appendChild(messageElement);
                    messagesDisplay.scrollTop = messagesDisplay.scrollHeight; // Desplazarse al final

                    messageInput.value = ''; // Limpiar el input
                    renderChatList(); // Actualizar la lista de chats para que se vea el último mensaje
                }
            }
        }

        // Función para ocultar/mostrar la lista de chats
        function toggleChatList() {
            chatList.classList.toggle('hidden');
            isChatListHidden = chatList.classList.contains('hidden');

            // Cambiar el icono del botón según el estado
            const icon = toggleChatListBtn.querySelector('i');
            if (isChatListHidden) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-arrow-right'); // O fa-chevron-right, fa-angle-right, etc.
            } else {
                icon.classList.remove('fa-arrow-right');
                icon.classList.add('fa-bars');
            }
        }

        // Event listener para el botón de enviar
        sendButton.addEventListener('click', sendMessage);

        // Event listener para la tecla Enter en el input
        messageInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Event listener para el botón de ocultar/mostrar la lista de chats
        toggleChatListBtn.addEventListener('click', toggleChatList);


        // Inicializar la interfaz cargando la lista de chats
        renderChatList();
        // Opcional: seleccionar el primer chat al cargar la página
        if (chats.length > 0) {
            selectChat(chats[0].id);
        }
    </script>
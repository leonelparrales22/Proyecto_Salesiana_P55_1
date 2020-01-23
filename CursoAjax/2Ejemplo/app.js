$(document).ready(function() {
    // Global Settings
    let edit = false;
  
    // Testing Jquery
    console.log('jquery is working!');
    fetchTasks();


    //CUANDO COMIENCE LA APLICACION OCULTAME ESTE ELEMENTO CON ESTE ID
    $('#task-result').hide();
  
  
    // search key type event
    // EL #search indica el id del formulario en el que le puse en el html
    // key up es el evento cuando el usuario ha presionado una tecla
    $('#search').keyup(function() {
      
      //SI ES QUE EL INPUT NO ESTA VACIO EN SEARCH ENTONCES HAZ LA BUSQUEDA  
      if($('#search').val()) {
        // $('#search').val() con esto obtengo el valor del input search  
        let search = $('#search').val();
        // este metodo nos permite hacer una peticion a un servidor
        $.ajax({
          // AQUI VA EL ARCHIVO PHP AL CUAL VOY A PEDIR  
          url: 'task-search.php',
          // LO QUE LE VALLAMOS A ENVIAR AL SERVIDOR, UN STRING UN OBJETO ETC
          // PODRIA SER TMB data: {search: search}
          // CON ESTO LE ENVIO EL VALOR DE MI INPUT AL SERVIDOR
          data: {search},
          // GET O POST, GET PARA OBTENER ALGO DEL SERVIDOR, Y POST CUANDO LE QUIERO ENVIAR ALGO AL SERVIDOR
          type: 'POST',
          // SI EL SERVIDOR ME RESPONDE EL DATO QUE QIERO LO MANEJO CON ESTA FUNCION SUCCESS
          
          //LA VARIABLE RESPONSE ES LO QUE ESTOY RECIBIENDO DEL SERVIDOR EN EL CASO EL STRINGJSON
          success: function (response) {
              //AQUI PONGO TODO LO QUE PASA CADA VEZ QUE PASE EL EVENTO DE PRESIONAR LA TECLA
            if(!response.error) {

              //CON ESTO COJO UN STRINGJSON Y LO VUELVE A CONVERTIR EN UN JSON  
              //LA ALMACENAMOS EN LA VARIABLE TASKS QUE SE CONVIERTE EN UN ARREGLO
              //EN CADA INSTANCIA DEL ARREGLO TIENE UN OBJETO SI EN LA BUSQUEDO ENCONTRO MAS DE UNO
              // COMIENZA POR CERO
              let tasks = JSON.parse(response);

              //ESTO PARA ARMAR MI CODIGO HTML COMO EN JSP
              let template = '';

              //UTILIZO EL FOR EACH PARA RECORRER EL ARRAY
              tasks.forEach(task => {

                //SE USAN ESAS TILDES ESPECIALES PARA COMBINAR STRING CON VALORES QUE ESTEN DENTRO DEL JS
                //CON TASK.NAME SOLO LLAMO A LA COLUMNA NAME DE LA BDD
                template += `
                       <li><a href="#" class="task-item">${task.name}</a></li>
                      ` 
              });

              //SI OCULTO ARRIBA ENTONCES SI ENCONTRO BUSQUEDA QUE ME MUESTRE ESE ELEMENTO EL EL ID TASK-RESULT
              $('#task-result').show();
              //COGE EL ELEMENTO CON EL ID CONTAINER Y QUE LO LLENE CON LA PLANTILLA TEMPLATE ASI COMO EN JSP
              $('#container').html(template);
            }
          } 
        })
      }
    });













    
  
    $('#task-form').submit(e => {
      e.preventDefault();
      const postData = {
        name: $('#name').val(),
        description: $('#description').val(),
        id: $('#taskId').val()
      };
      const url = edit === false ? 'task-add.php' : 'task-edit.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        $('#task-form').trigger('reset');
        fetchTasks();
      });
    });
  
    // Fetching Tasks
    function fetchTasks() {
      $.ajax({
        url: 'tasks-list.php',
        type: 'GET',
        success: function(response) {
          const tasks = JSON.parse(response);
          let template = '';
          tasks.forEach(task => {
            template += `
                    <tr taskId="${task.id}">
                    <td>${task.id}</td>
                    <td>
                    <a href="#" class="task-item">
                      ${task.name} 
                    </a>
                    </td>
                    <td>${task.description}</td>
                    <td>
                      <button class="task-delete btn btn-danger">
                       Delete 
                      </button>
                    </td>
                    </tr>
                  `
          });
          $('#tasks').html(template);
        }
      });
    }
  
    // Get a Single Task by Id 
    $(document).on('click', '.task-item', (e) => {
      const element = $(this)[0].activeElement.parentElement.parentElement;
      const id = $(element).attr('taskId');
      $.post('task-single.php', {id}, (response) => {
        const task = JSON.parse(response);
        $('#name').val(task.name);
        $('#description').val(task.description);
        $('#taskId').val(task.id);
        edit = true;
      });
      e.preventDefault();
    });
  
    // Delete a Single Task
    $(document).on('click', '.task-delete', (e) => {
      if(confirm('Are you sure you want to delete it?')) {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr('taskId');
        $.post('task-delete.php', {id}, (response) => {
          fetchTasks();
        });
      }
    });
  });
// Traer las variables
const dia = document.getElementById("dia");
const nueva_tarea = document.getElementById("nueva_tarea");
const boton_enviar = document.getElementById("enviar_tarea");
const boton_info = document.getElementById("info")
const lista = document.getElementById("lista");

//Poner el día en que se realiza la lista
function colocar_fecha(){

    const fecha = new Date();

    dia.textContent = fecha.toLocaleString('es', {weekday: 'long'});

}

//llamar la función para traer el día
colocar_fecha();

// Mostrar una alerta con mi nombre al hacer click en el botón de más información
boton_info.addEventListener('click', () =>{

    alert("Página creada por Jhon Jairo Pulgarin Restrepo de 11-4 😎😎")

})

// Función para Añadir las tareas a la lista
function añadir_tarea(){
    
    const tarea = document.createElement('div');
    tarea.classList.add('tarea'); 
    tarea.textContent = nueva_tarea.value;
    tarea.addEventListener('click', changeTaskState);  //Cuando se de click, se activará el evento del changeTaskState

    lista.appendChild(tarea); //añadir las tareas a la lista

    const eliminar = document.createElement("button");
    eliminar.classList.add('eliminar_tarea');
    eliminar.textContent = "X";
    tarea.appendChild(eliminar);

    nueva_tarea.value = "";

}

//Manejador de evento para poder añadir la tarea
boton_enviar.addEventListener("click", añadir_tarea);

// Evento para eliminar el elemento de la lista al hacer click en la X
lista.addEventListener("click", (e)=>{

    e.target.parentElement.remove();
})

// El evento hará que las propiedades pasen a ser las de la clase tarea_completada cuando se de click
const changeTaskState = Event =>{

    Event.target.classList.toggle('tarea_completada');

}









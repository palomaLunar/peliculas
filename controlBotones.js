// Suponiendo que tienes un elemento con el id "formulario"
const formulario = document.getElementById('formulario');

formulario.addEventListener('submit', (event) => {
    event.preventDefault();   
 // Evita que el formulario se envíe de forma normal

    const formData = new FormData(formulario);
    const accion = formData.get('accion'); // Obtiene el valor del botón presionado

    switch (accion) {
        case 'agregar':
            // Lógica para agregar una película a la base de datos
            console.log('Agregando película...');
            // Aquí harías una petición AJAX para enviar los datos al servidor
            break;
        case 'actualizar':
            // Lógica para actualizar una película en la base de datos
            console.log('Actualizando película...');
            // Aquí harías una petición AJAX para enviar los datos al servidor
            break;
        case 'borrar':
            // Lógica para borrar una película de la base de datos
            console.log('Borrando película...');
            // Aquí harías una petición AJAX para enviar los datos al servidor
            break;
        default:
            console.error('Acción no válida');
    }
});

// Suponiendo que tienes un elemento con el id "formulario"
const formulariopelis = document.getElementById('formulariopelis');

formulariopelis.addEventListener('submit', (event) => {
    event.preventDefault();   
 // Evita que el formulario se envíe de forma normal

    const formDatap = new FormData(formulariopelis);
    const accion = formDatap.get('accion'); // Obtiene el valor del botón presionado

    switch (accion) {
        case 'agregar':
            // Lógica para agregar una película a la base de datos
            console.log('Agregando película...');
            // Aquí harías una petición AJAX para enviar los datos al servidor
            break;
        case 'actualizar':
            // Lógica para actualizar una película en la base de datos
            console.log('Actualizando película...');
            // Aquí harías una petición AJAX para enviar los datos al servidor
            break;
        case 'borrar':
            // Lógica para borrar una película de la base de datos
            console.log('Borrando película...');
            // Aquí harías una petición AJAX para enviar los datos al servidor
            break;
        default:
            console.error('Acción no válida');
    }
});
///!!! aqui solo esta la base del codigo hay que modificarlo y ponerle la logica de lo que tiene que hacer al tocar el boton.

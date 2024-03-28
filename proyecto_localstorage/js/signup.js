const signupForm = document.querySelector('#signupForm')
signupForm.addEventListener('submit', (e)=>{
    e.preventDefault()
    const name = document.querySelector('#name').value

    const email = document.querySelector('#email').value
    
    const password = document.querySelector('#password').value

    //Validar tipo de dato
    //console.log(`El tipo de dato del campo [name] es: ${typeof(name)}`)


    const Users = JSON.parse(localStorage.getItem('users')) || []
    const isUserRegistered = Users.find(user => user.email === email)
    if(isUserRegistered){
        return alert('El usuario ya esta registado!')
    }

    /*
        LocalStorage: Es una API que viven el Browser. Almacena datos tipo STRING
        Trabaja con los siguientes métodos:
        
        SetItem: almacena datos tipo STRING localmente en el servidor
        GetItem: Toma los datos almacenados localmente del servidor

    */

    //Almacenar datos localmente
    Users.push({name: name, email: email, password: password})
    localStorage.setItem('users', JSON.stringify(Users))
    alert('Registro Exitoso!')
    window.location.href = 'login.html'

    /*Capturar datos

    let user_almacenado = localStorage.getItem('users');
    alert(`El user capturado desde el almacén es ${user_almacenado}`);
    */

})
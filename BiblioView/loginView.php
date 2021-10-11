<?php


class LoginView{

    function __construct()
    {
          $this -> model = new UserModel();
    }

    /* function showLogin($error = ""){

        echo '
        <h2>Log In</h2>
        <form method="POST" action ="verifyLogin">
            <input type="text" name="email" placeholder="Ingrese su email..."  required/>
            <input type="password" name="contraseña" placeholder="Ingrese su password..."  required/>
            <button>Login</button>
            <h4>'.$error.'</h4>
    ';

    } */

function showRegistroView(){
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Genere un usuario completando los campos:</h2>

    <form method="post" action="registrarseControl">
        Ingrese un mail valido: <input type="email" name="email">
        Ingrese una contraseña: <input type="password" name="contraseña">
        <button>Enviar</button>

    </form>


</body>
</html>';
}

function showLoginView($error = ""){
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Ingrese a su cuenta:</h2>
    <form action="verifyLogin">
        Ingrese su mail: <input type="email" name="email">
        Ingrese su contraseña: <input type="password" name="contraseña">
        <button type="submit">INgresar</button>
    </form>
    <h3>'.$error.'</h3>
    
</body>
</html>';
}

  
 

function showHome(){
    header("Location: " .BASE_URL."home");
}



}
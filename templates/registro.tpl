{include file='templates/header.tpl'}
<div class="container mt-4 ">

    <h2 class="tituloL">Registrarse</h2> 
    <h6>Genere un nuevo usuario completando los campos:</h6>
    <div class="row">
       <div class="col-12 col-sm-6 col-md-3">    
            <form method="post" action="registrarseControl">
                <div class="form-group mt-2">
                    <label for="inputEmail" class="col-form-label">Ingrese un mail valido: </label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder=" Ingrese un email valido" required>
                </div>
                <div class="form-group mt-2">
                    <label for="inputPass" class="col-form-label">Ingrese una contraseña: </label> 
                    <input type="password" class="form-control" id="inputPass" name="password" placeholder=" Cree una contraseña"  required>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success">Registrarse</button>
                </div>
            </form>
        </div>    
    </div>        
<div>

 
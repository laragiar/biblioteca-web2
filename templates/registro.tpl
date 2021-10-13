{include file='templates/header.tpl'}
<div class="container-fluid">

<section class="container-fluid">
    <h2>Registrarse </h2> 
    <h6>Genere un nuevo usuario completando los campos:</h6>
    <div class="row">
       <div class="col-12 col-sm-6 col-md-3">    
            <form method="post" action="registrarseControl">
                <div class="form-group mt-2">
                <label for="inputEmail" class="col-form-label">Ingrese un mail valido: </label>
                <input type="email" class="form-control" id="inputEmail" name="email" required>
                </div>
                <div class="form-group mt-2">
                <label for="inputPass" class="col-form-label">Ingrese una contraseña: </label> 
                <input type="password" class="form-control" id="inputPass" name="password" required>
                </div>
                <div class="mt-3">
                <button class="btn btn-dark">Enviar</button>
                <div>
            </form>
        </div>    
    </div>        
</section>
<div>

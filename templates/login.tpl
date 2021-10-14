{include file='templates/header.tpl'}
<div class="container mt-4">

<h2 class="tituloL">Ingrese a su cuenta:</h2>
    <div class="row">
       <div class="col-12 col-sm-6 col-md-3 p-2">   
            <form action="verifyLogin" method="post">
                <div class="form-group mt-2">
                    <label for="inputEmail" class="col-form-label">Email:</label> 
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder=" Ingrese su email" required>
                </div>
                <div class="form-group mt-2">
                    <label for="inputPass" class="col-form-label">Contraseña:</label>
                    <input type="password" name="password" class="form-control" id="inputPass" placeholder=" Ingrese su contraseña" required>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-success">Ingresar</button>
                </div>
            </form>
            {if $error}
            <div>
            <h6 class="d-flex mt-3 alert alert-danger">{$error}</h6>
            </div>
            {/if}
        </div>    
    </div>        

</div>



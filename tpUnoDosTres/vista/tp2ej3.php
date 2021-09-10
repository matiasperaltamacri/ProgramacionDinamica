<?php
    $titulo="EJERCICIO 3 TP2";
    include_once("estructura/cabecera.php");
?>
    <h6>CONSIGNA:</h6>
    <p>Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario y la password para loguearse. Los datos del formulario son enviados a un script verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El arreglo asociativo tiene como claves: “usuario” y “clave”. <strong>El script debe visualizar un mensaje de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo y en caso contrario un mensaje de error.</strong><br/>Realizar la validación de este formulario. Chequear no solo que se hayan cargado el usuario y la contraseña antes de ser enviados al servidor sino que también debe realizar un control de contraseña segura <strong>(La contraseña debe tener como mínimo 8 caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener letras y números).</strong></p>
    <h6>DATOS ALMACENADOS:</h6>
    <p>usuario:harry pass:wand9988; usuario:bilbo pass:01ring66</p>
    <div class="text-center mt-5 mb-5">
        <form class="card needs-validation" method="post" onSubmit="return validar()" action="accion/verificaPass.php" style="max-width: 300px;margin:auto; padding:20px" novalidate>
                <h4 class="mt-3 mb-3 font-weight-normal">Member Login</h4>
                    <div class="mt-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
                            </span>
                            <input type="text" id="usuario" name="usuario"  class="form-control" placeholder="Username" aria-describedby="basic-addon1" required>
                            <div class="invalid-feedback" id="user-text"></div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/></svg>
                            </span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" required>
                            <div class="invalid-feedback" id="pass-text"></div>
                        </div>
                        
                    </div>
                <div class="mt-3 d-grid">
                    <button type="submit" class="btn btn-lg btn-success">Login</button>
                </div>
        </form>
    </div>
    
<?php
    include_once("estructura/pie.php");
?>
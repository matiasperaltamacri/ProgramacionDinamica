<?php
    $titulo="EJERCICIO 3 TP2";
    include_once("estructura/cabecera.php");
?>
    <div class="text-center  mt-5">
        <form class="card needs-validation" method="post" onSubmit="return validar()" action="verificaPass.php" style="max-width: 300px;height:300px; max-height:500px; margin:auto; padding:20px" novalidate>
                <h4 class="mt-3 mb-3 font-weight-normal">Member Login</h4>
                    <div class="mt-3">
                        <div class="mb-3">
                            <input type="text" id="usuario" name="usuario"  class="form-control" placeholder="Username" required>
                            <div class="invalid-feedback" id="user-text"></div>
                        </div>
                        <div class="mb-3">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            <div class="invalid-feedback" id="pass-text"></div>
                        </div>
                        
                    </div>
                <!-- <i class="fas fa-user"></i> -->
                <div class="mt-3 d-grid">
                    <button type="submit" class="btn btn-lg btn-success">Login</button>
                </div>
        </form>
    </div>
    
<?php
    include_once("estructura/pie.php");
?>
<?php
    $titulo="TP4 Ejercicio5";
    include_once "estructura/cabecera.php";
    $objAbmAuto=new AbmAuto();
    $arreglo=$objAbmAuto->buscar(true,null);
?>
    <link rel="stylesheet" href="css/verAutos.css">
    <h6>CONSIGNA:</h6>
    <p>Crear una página "listaPersonas.php" que muestre un listado con las personas que se encuentran cargadas y un link a otra página “autosPersona.php”.</p>
    <table>
        <?php
            if (count($arreglo)>0){
                    echo "<tr id='elemento'><td>Patente</td><td>Marca</td><td>Modelo</td><td>Nombre</td><td>Apellido</td></tr>";
                foreach ($arreglo as $objeto){
                    echo '<tr><td>'.$objeto->getPatente().'</td>';
                    echo '<td>'.$objeto->getMarca().'</td>';
                    echo '<td>'.$objeto->getModelo().'</td>';
                    echo '<td>'.$objeto->getObjPersona()->getNombre().'</td>';
                    echo '<td>'.$objeto->getObjPersona()->getApellido().'</td></tr>';
                }
            }else{
                echo "No hay autos cargados en la base.";
            }
        
        ?>
    </table>
    <div class="row mt-5">
        <div class="col-9"></div>
        <div class="col-3">
            <a href="autosPersona.php"><button class="btn btn-info">autosPersona -></button></a>
        </div>
    </div>
    
<?php
    include_once "estructura/pie.php";
?>
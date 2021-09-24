<?php
    $titulo="TP4 Ejercicio3";
    include_once "estructura/cabecera.php";
    $objAbmAuto=new AbmAuto();
    $arreglo=$objAbmAuto->buscar(true,null);
?>
    <link rel="stylesheet" href="css/verAutos.css">
    <h6>CONSIGNA:</h6>
    <p>Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido. En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay autos cargados..</p>
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
<?php
    include_once "estructura/pie.php";
?>
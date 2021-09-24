<link rel="stylesheet" href="../css/verAutos.css">
<?php
    $titulo="TP4 Ejercicio4";
    include_once "../estructura/cabeceraAccion.php";
    $datos=data_submitted();
    $objAbmAuto=new AbmAuto();
    $objAuto=$objAbmAuto->buscarObjeto($datos);
    if ($objAuto<>null){
        echo "<table>
                <tr id='elemento'>
                    <td>Patente</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                </tr>";
                echo '<tr><td>'.$objAuto->getPatente().'</td>';
                echo '<td>'.$objAuto->getMarca().'</td>';
                echo '<td>'.$objAuto->getModelo().'</td></tr>';
        echo "</table>";
    }else{
        echo "No se encontraron datos en la base con la patente: ".$datos['patente']."<br/>";
    }
    echo "<button class='btn btn-info mt-5' onclick='window.history.back()'>Atras</button>";
    include_once "../estructura/pieAccion.php";
?>
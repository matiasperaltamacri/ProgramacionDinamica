<!-- <link rel="stylesheet" href="../css/verAutos.css"> -->
<!-- <style>
    table{
    margin: auto;
    max-width: 600px;
}
#elemento{
    font-weight: bold;
    color:#5D00FF ;
}
table tr td{
    border:1px solid black;
    margin: 1px;
    padding: 3px;
}
</style> -->
<?php
$titulo="TP4 Ejercicio5";
include_once "../estructura/cabeceraAccion.php";
$datos=data_submitted();
$objAbmPersona=new AbmPersona();
$objPersona=$objAbmPersona->buscarObjeto($datos,true);
if ($objPersona<>null){
    echo '<link rel="stylesheet" href="../css/verAutos.css">';
    echo "<table>
            <tr id='elemento'>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>NroDni</td>
                <td>FechaNac</td>
                <td>Telefono</td>
                <td>Domicilio</td>
            </tr>
            <tr>";
    echo '<td>'.$objPersona->getNombre().'</td>';
    echo '<td>'.$objPersona->getApellido().'</td>';
    echo '<td>'.$objPersona->getNroDni().'</td>';
    echo '<td>'.$objPersona->getFechaNac().'</td>';
    echo '<td>'.$objPersona->getTelefono().'</td>';
    echo '<td>'.$objPersona->getDomicilio().'</td>
            </tr>
        </table>';
    echo "<br/><table><tr id='elemento'><td>Patente</td><td>Marca</td><td>Modelo</td></tr>";
    foreach ($objPersona->getColAutos() as $objAuto){
        echo '<tr><td>'.$objAuto->getPatente().'</td>';
        echo '<td>'.$objAuto->getMarca().'</td>';
        echo '<td>'.$objAuto->getModelo().'</td></tr>';
    }
    echo "</table>";
}else{
    echo "No se encontro ningún objeto con el dni: ".$datos['dni'];
}
echo "<button class='btn btn-info mt-5' onclick='window.history.back()'><- Atras</button>";
include_once "../estructura/pieAccion.php";
?>

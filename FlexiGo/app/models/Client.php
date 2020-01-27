<?php

include 'Connection.php';

$dataClient['IdCliente'] = (int)$_POST['idClient'];
$dataClient['NombreComercial'] = $_POST['ncomercial'];
$dataClient['RazonSocial'] = $_POST['rsocial'];
$dataClient['Nif'] = $_POST['nif'];
$dataClient['Dirección'] = $_POST['direccion'];
$dataClient['Población'] = $_POST['poblacion'];
$dataClient['CodPostal'] = $_POST['cpostal'];
$dataClient['Provincia'] = $_POST['provincia'];
$dataClient['idPais'] = empty($_POST['pais']) ? null : (int)$_POST['pais'];
$dataClient['Email'] = $_POST['email'];
$dataClient['Telefono'] = $_POST['telefono'];


/*para grabbar con sp
 * $dataClient['IdCliente'] = (int)$_POST['idClient'];
$dataClient['NombreComercial'] = $_POST['ncomercial'];
$dataClient['RazonSocial'] = $_POST['rsocial'];
$dataClient['Nif'] = $_POST['nif'];
$dataClient['Dirección'] = $_POST['direccion'];
$dataClient['Población'] = $_POST['poblacion'];
$dataClient['CodPostal'] = $_POST['cpostal'];
$dataClient['Provincia'] = $_POST['provincia'];
$dataClient['idPais'] = empty($_POST['pais']) ? null : (int)$_POST['pais'];
$dataClient['Email'] = $_POST['email'];
$dataClient['Telefono'] = $_POST['telefono'];*/


$conn = new Connection();
$resConn = $conn->save($dataClient);

if ($resConn === false) {
    echo 'false';
} else {
    echo 'exito';
}
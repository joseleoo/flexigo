<?php


class Connection
{
    public function save($dataClient)
    {
        $serverName = "DESKTOP-P7KI8C4\SQLEXPRESS";
        $connectionInfo = array("Database" => "FLEXYGO", "UID" => "sa", "PWD" => "salova.123");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        $sql='INSERT INTO tblCliente

    (IdCliente
        ,NombreComercial
        ,RazonSocial
        ,Nif
        ,Dirección
        ,Población
        ,CodPostal
        ,Provincia
        ,IdPais
        ,Email
        ,Telefono) VALUES (
        ?, ?, ?,
        ?, ?, ?,?,?,?,?,)';


        $stmt = sqlsrv_query( $conn, $sql, $dataClient);
//para grabar con sp
//        $stmt = mssql_init('createClient', $conn);
//        foreach ($dataClient as $key=> $item) {
//            mssql_bind($stmt, '@'.$key, $item, gettype($item)=='string'? SQLVARCHAR:SQLINT4,false,true);
//        }
//
//        mssql_execute($stmt);
//        mssql_free_statement($stmt);
//        mssql_close($conn);





        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        return $stmt;
    }


}
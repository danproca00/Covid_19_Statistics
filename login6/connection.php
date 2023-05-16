<?php

$serverName = "LAPTOP-6DLN735G"; //serverName\instanceName

$connectionInfo = array( "Database"=>"Covid19");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "<br />";
}else{
     echo "Eroare! Va rugam sa reveniti mai tarziu.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>

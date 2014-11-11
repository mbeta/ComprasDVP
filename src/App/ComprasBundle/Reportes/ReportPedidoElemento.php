<?php
    //Llamando las librerias
    require_once('http://localhost:8080/JavaBridge/java/Java.inc');
    require_once('../php-jru/php-jru.php');
//    require_once("http://localhost:8080/PHPJRU/"); 
    //Llamando la funcion JRU de la libreria php-jru
    $jru=new JRU();
    //Ruta del reporte compilado Jasper generado por IReports
    $Reporte='/var/www/ComprasDVP/src/App/ComprasBundle/Reportes/PedidoElementos.jasper';
    //Ruta a donde deseo Guardar Mi archivo de salida Pdf
    $SalidaReporte='/var/www/ComprasDVP/src/App/ComprasBundle/Reportes/PedidoElemento.pdf';
    //Parametro en caso de que el reporte no este parametrizado
    $Parametro=new java('java.util.HashMap');
    //Funcion de Conexion a mi Base de datos tipo MySql  
    $Conexion= new JdbcConnection("com.mysql.jdbc.Driver","jdbc:mysql://localhost:3306/compras_dvp","root","toor");
    //Generamos la Exportacion del reporte
    $jru->runReportToPdfFile($Reporte,$SalidaReporte,$Parametro,$Conexion->getConnection());
?>


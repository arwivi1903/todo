<?php
date_default_timezone_set('Europe/Istanbul');

error_reporting(0); 

try
{
    $db = new PDO("sqlite:db.db");
}
catch( PDOException $Exception ) {
    
    echo $Exception->getMessage( );
    echo $Exception->getCode( );
}

$sql = 'SELECT * FROM todo ORDER BY id DESC';
$kayitlar=$db->query($sql);


?>
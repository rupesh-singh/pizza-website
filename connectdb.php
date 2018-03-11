<?php

define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","ait");

 $dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("unable to connect to database");

if($dbhandle->connect_error){
    
    die("Connection Failed:" .$dbhandle->connect_error);
}

?>
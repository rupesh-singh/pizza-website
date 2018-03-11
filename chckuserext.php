<?php

require "connectdb.php";

$Name=$dbhandle->real_escape_string($_POST["Name"]);

$query="SELECT * FROM regiter WHERE Name='".$Name."'";

$results=$dbhandle->query($query);
$numRows=$results->num_rows;

if($numRows>0)
{
    echo "Username already exist";
    
}
    else 
    echo "Username Available";

    
    
    
    
    
    
    ?>
    
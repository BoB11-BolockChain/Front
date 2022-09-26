<?php 

$DB = new SQLite3('../db');

if($DB -> lastErrorCode() == 0){
    echo "DB connected!";
}
else{
    echo "DB connection failed";
    echo $DB->lastErrorMsg();
}

echo "hello!";
include './dbcon.php';

?>
<?php
    $DB = new SQLite3('./db');
    $query = $DB->query("SELECT * FROM training;");
    while($rows = $query->fetchArray(SQLITE3_ASSOC)){
        print_r($rows);
        echo $rows['title'];
        echo $rows['scenario'];
    }
        
        ?>
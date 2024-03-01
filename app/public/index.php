<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

echo 'Hello world';

$conn = mysql_connect("mysql", "user", "password!");
mysql_select_db( "app");

$result = mysql_query("SELECT * FROM `users`");
if (!$result) {
    echo "Error: " . mysql_error();
} else {
    while ($row = mysql_fetch_assoc($result)) {
        foreach($row as $key => $value) {
            echo $key.": ".$value.", ";
        }
    }
}

mysql_close($conn);

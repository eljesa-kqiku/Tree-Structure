<?php
    function get_database_connection():PDO{
        $db_host = 'tree_db';
        $db_name = 'tree_structure';
        $db_username = 'tree';
        $port = "3306";
        $db_password = 'tree';

        try{
            $conn = new PDO('mysql:host='.$db_host.'; port='.$port.'; dbname='.$db_name,$db_username,$db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage();
            exit;
        }
    }



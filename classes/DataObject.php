<?php

require_once("../config/db.php");

abstract class DataObject {
    
    protected function connect(){
        try {
            $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
            $conn->setAttribute( PDO::ATTR_PERSISTENT, True );
            $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        } catch ( PDOException $e) {
            die( "Connection failed: " . $e->getMessage() );
        }
        
        if (SYSTEM_ENABLE) return $conn;
    }
    
    protected function disconnect( $conn ) {
        $conn = null;
    }
    
}
?>
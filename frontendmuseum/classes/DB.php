<?php 
// Database with custom providers
class DB {

    function execute($query){
        $db = new SQLite3("./data/data.db");
        $result = $db->query($query);

        $all = [];
        if($result){
            while($row = $result->fetchArray(SQLITE3_ASSOC)){
                $all[] = $row;
            }
        }

        return $all;
    }
}
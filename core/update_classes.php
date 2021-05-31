<?php

class TypeUpdater {

    var $db;

    function TypeUpdater($db) {
        $this->db = $db;
    }

    function update_object($o, $type) {
        if($type == ""){
            return null;
        }else{
            return $this->update_classes($o, $type);
        }
    }

    
    ###############################################################
    //start of insert classes
    ###############################################################
    function update_classes($o,$table_name){
        $con = connect_database();
        $sql_str = "Describe $table_name";
        $res_str = getXbyY($sql_str);
        $row_str = count($res_str);
        
        $sql = "Update $table_name SET ";
        for($i=1;$i<$row_str;$i++){
            $fname = $res_str[$i]['Field'];
            $sql.=$res_str[$i]['Field']." = '".addslashes($o->$fname)."'";
            if($i<($row_str - 1)){
                $sql.=", ";
            }
        }
        $fname = $res_str[0]['Field'];
        $sql.=" where ".$res_str[0]['Field']." = ".$o->$fname;
        
        
        
        if ($con->query($sql) or die(mysqli_error($con)." Query: ".$sql)) {            
            return $o->$fname;
        } else {            
            return 0;
        }
        $con->close();
        
        
    }
    ###############################################################
    //end of update classes
    ###############################################################
    
    
    
   
}

?>
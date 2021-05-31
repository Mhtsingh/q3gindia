<?php


class TypeInsertor {

    var $db;

    function TypeInsertor($db) {
        $this->db = $db;
    }

    function insert_object($o, $type) {
        if($type == ""){
            return null;
        }else{
            return $this->insert_classes($o,$type);
        }         
    }

   

    ###############################################################
    //start of insert classes
    ###############################################################
    function insert_classes($o,$table_name){
        $con = connect_database();
        $sql_str = "Describe $table_name";
        $res_str = getXbyY($sql_str);
        $row_str = count($res_str);
        
        $sql = "Insert into $table_name (";
        for($i=1;$i<$row_str;$i++){
            $sql.=$res_str[$i]['Field'];
            if($i<($row_str-1)){
                $sql.=", ";
            }else{
                $sql.=")";
            }
        }
        
        $sql.=" values (";
        for($i=1;$i<$row_str;$i++){
            $fname =  $res_str[$i]['Field'];
            $sql.="'".addslashes($o->$fname)."'";
            if($i<($row_str-1)){
                $sql.=", ";
            }else{
                $sql.=")";
            }
        }
        
        if ($con->query($sql) or die(mysqli_error($con))) {
            $return_id = mysqli_insert_id($con);
        }
        $con->close();
        
        return $return_id;
        
    }
    ###############################################################
    //end of insert classes
    ###############################################################
    
   
}

?>
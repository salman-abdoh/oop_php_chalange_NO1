<?php
/*include "db.php";
class DataOpration extends Database   
{


   public function insert_data($table,$filed){
    $sql  = "INSERT INTO $table $feilds";
    $result = $this->db->query($sql);
    if($result){
        return true;
    }else{
        return false;
    }
   }

}


$DataOpration= new DataOpration;
?>
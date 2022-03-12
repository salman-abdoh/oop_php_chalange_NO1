<?php
class Database
{
public $db;
public function __construct(){
    $this->db= MySqli_connect('localhost','root','','products');
if($this->db){
    
    echo"conect success";
}
else{
    echo"can not conect success";
}
}
public function insert($table,$feilds = ''){
    $insert = "INSERT INTO $table $feilds";
    // $insert = "INSERT INTO ".$table."(".implode(",",array_keys($feilds)).")values('".implode('","',array_values($feilds))."')";
    $result = $this->db->query($insert);
    if($result){
        return true;
    }else{
        return false;
    }
   }
   public function getTable( $table){
    $view = "SELECT * FROM  $table ";

    $result = $this->db->query($view);


     return $result;

}
public function update($field, $table, $where = NULL){

    $updted = "SELECT $field FROM $table $where";

    $result = $this->db->query($updted);

    return   $result;

}

public function saveUp($table, $set, $where){
    $update = "UPDATE $table SET $set WHERE $where";
    $result = $this->db->query($update);
    if($result){
        return true;
    }else{
        return false;
    }
}
public function delete($from, $delete, $value){
    $delete = "DELETE FROM $from WHERE $delete = $value";
    $result = $this->db->query($delete);
    return $result;
  }
}
$db= new Database;
?>
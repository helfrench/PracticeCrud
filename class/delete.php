<?php
class delete extends config
{
    public $id;

    //Constructor
    public function __construct($id)
    {
        $this->id = $id;
    }


    
    
    //Query
    public function deleteTask()
    {
        $conn = $this->conn();
        $sql = "DELETE FROM `tbl_invent` WHERE `id` = '$this->id'";
        $data = $conn->prepare($sql);
    
        if($data->execute()){
            return true;
        }else
        {
            return false;
        }
    }
}
?>
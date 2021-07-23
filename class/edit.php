<?php
class edit extends config
{
    public $id;

    //Constructor
    public function __construct($id)
    {
        $this->id = $id;
    }


    
    
    //Query
    public function editTask()
    {
        $conn = $this->conn();
        $sql = "UPDATE  `tbl_invent` SET `status` = 'COMPLETED', `date_completed` = NOW() WHERE `id` = $this->id";
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
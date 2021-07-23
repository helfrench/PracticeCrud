<?php
class insert extends config
{
    public $task;

    //Constructor
    public function __construct($task)
    {
        $this->task = $task;
    }


    
    
    //Query
    public function insertTask()
    {
        $conn = $this->conn();
        $sql = "INSERT INTO `tbl_invent`( `items`) VALUES ('$this->task')";
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
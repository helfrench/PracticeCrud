<?php

class view extends config{

    public function viewData(){

        $conn = $this->conn();
        $sql = "SELECT * FROM `tbl_invent` WHERE `status` = 'PENDING'";
        $data = $conn->prepare($sql);
        $data->execute();  
         $result = $data->fetchAll(PDO::FETCH_ASSOC);
         echo "<h3 class='mb-4'>Pending Task</h3>";
         echo "<table class='table   table-striped table-sm float-right'>";
         echo"<thead>
         <tr>
         <th> Task Item</th>
         <th> Action</th>
         </tr>
         </thead><tbody>";

         foreach($result as $data){
             echo "<tr>";
             echo "<td>$data[items]</td>";
             
             echo "<td>
             <a class='btn btn-info btn-sm mr-2 ' href='index.php?edit=$data[id]'>Mark as Completed</a>";
             echo "<a class='btn btn-danger btn-sm' href='index.php?delete=$data[id]'>Delete Task</a>
             </td>";
             echo "</tr>";
         }

         echo "</tbody></table>";
    }


    public function viewCompletedData(){

        $conn = $this->conn();
        $sql = "SELECT * FROM `tbl_invent` WHERE `status` = 'COMPLETED'";
        $data = $conn->prepare($sql);
        $data->execute();  
         $result = $data->fetchAll(PDO::FETCH_ASSOC);
         echo "<h3 class='mb-4 mt-5'>Completed Task</h3>";
         echo "<table class='table   table-striped table-sm'>";
         echo"<thead>
         <tr>
         <th> Task Item</th>
         <th> Date Completed</th>
         </tr>
         </thead><tbody>";

         foreach($result as $data){
             echo "<tr>";
             echo "<td>$data[items]</td>";
             
             echo "<td>
             $data[date_completed]
             </td>";
             echo "</tr>";
         }

         echo "</tbody></table>";
    }
}
<?php
function insertT()
{
    if (!empty($_GET['items'])){
        $insert = new insert($_GET['items']);
       
       if($insert->insertTask()) {
           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
           You have Inserted successfully.  
         </div>';
       }else{
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Submission Failed       
      </div>';
       }
        
        }
}


function deleteT()
{
    if (!empty($_GET['delete'])){
        $delete = new delete($_GET['delete']);
       
       if($delete->deleteTask()) {
           echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           You have Deleted successfully.  
         </div>';
       }else{
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Submission Failed       
      </div>';
       }
        
        }
}




function editT()
{
    if (!empty($_GET['edit'])){
        $edit = new edit($_GET['edit']);
       
       if($edit->editTask()) {
           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
           You have Updated successfully.  
         </div>';
       }else{
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Submission Failed       
      </div>';
       }
        
        }
}

function viewTable(){
  $view = new view();
$view->viewData();
$view->viewCompletedData();
  

}


function generalFunction(){
  insertT();
 deleteT();
 editT();
}





 


 
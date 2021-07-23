<?php

class config
{
    private $user = 'root';
    private $password = '';
    public $pdo = null;

    public function conn()
    {

        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=inventory', $this->user, $this->password);

          // echo "Database Connected";
            } 
            catch (\PDOException $e) 
            {
            die($e->getMessage());
            }
            return $this->pdo;

    }
}
 


?>
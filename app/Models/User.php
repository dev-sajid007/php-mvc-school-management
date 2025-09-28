<?php


namespace App\Models;

use App\Config\Database;
use PDO;    

class User
{
    private $conn;
    private $table_name = "users";

    public $id;
    public $name;
    public $phone;
    public $password;

    public function __construct()
    {
        $db = new Database();

        // Get database connection
        $this->conn = $db->getConnection();
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " (name, phone, password) VALUES (:name, :phone, :password)";

        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->password = htmlspecialchars(strip_tags($this->password));

        // bind values
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":phone", $this->phone);
        $stmt->bindParam(":password", password_hash($this->password, PASSWORD_BCRYPT));

        if ($stmt->execute()) {
            return true;
        }
        else{
            echo "\nPDO::errorInfo():\n";
            print_r($stmt->errorInfo());
        }

        return false;
    }



    
}
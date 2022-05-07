<?php
class GestionePersonale {
    public $conn;
    public function __construct() {
        include "../configuration.php";
        $this->conn = new PDO("mysql:host=$servename;dbname=$dbname",$username,$password); 
    }

    public function create(Person $persona)
    {
        $sql = "insert into person (nome,email,password) 
                VALUES (:nome,:email,:password);";
        $query = $this->conn->prepare($sql);

        $query->bindValue(':nome',$persona->nome);
        $query->bindValue(':email',$persona->email);
        $query->bindValue(':password',$persona->password);

        $query->execute();
        
    }
    public function update(Person $persona)
    {
        # code...
    }

    public function readAll():array
    {
       $sql = "SELECT * from person";
       $query= $this->conn->query($sql);
       $query->execute();
       return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function read($id):Person
    {
       
    }

    public function delete($id)
    {
        
    }
    
}


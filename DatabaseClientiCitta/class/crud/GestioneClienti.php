<?php
class GestioneClienti {
    public $conn;

    public function __construct() {
     
    $this->conn = new PDO("mysql:host=".DB_SERVERNAME.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
    
    // $this->conn = new PDO("mysql:host=$servename;dbname=$dbname",$username,$password); 
    }

    public function create(Cliente $cliente)
    {
        $sql = "insert into Cliente (nome,cognome,email) 
                VALUES (:nome,:cognome,:email);";
        $query = $this->conn->prepare($sql);

        $query->bindValue(':nome',$cliente->nome);
        $query->bindValue(':cognome',$cliente->cognome);
        $query->bindValue(':email',$cliente->email);

        $query->execute();
        
    }
    public function update(Cliente $cliente)
    {
       
    }

    public function readAll():array
    {
       $sql = "SELECT * from cliente";
       $query= $this->conn->query($sql);
       $query->execute();
    //    return $query->fetchAll(PDO::FETCH_CLASS,'Cliente');
       return $query->fetchAll(PDO::FETCH_FUNC,'clienteFactory');
    }

    
    public function read($id):?Cliente
    {
        $sql = "SELECT * from cliente where cliente_id=:cliente_id";
        $query= $this->conn->prepare($sql);
        $query->bindValue(':cliente_id',$id);
        $query->execute();

        $res = $query->fetchAll(PDO::FETCH_FUNC,'clienteFactory');
        if(count($res) == 1){
            return $res[0];
        }

    }

    public function delete($id)
    {
        
    }
    
}

function clienteFactory( $nome, $cognome,$email)
{
  return new Cliente( $nome, $cognome,$email);
}


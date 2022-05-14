<?php

include "./php_lib/tools.php";


class GestionePersonale {

    public $conn;

    public function __construct()
    {
        include "./config.php";
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (PDOException $e) {
            //echo "Codice errore: ".$e->getCode()."<br>Errore nel file: ".$e->getFile()."<br>";
            //echo "Errore la connessione non va: ".$e->getMessage()."<br>";
        }    
    }


    public function create(Person $persona):bool|int|array
    {
        if($this->conn) {
            $personExists = person_exists($this->conn, $persona);
            if($personExists === false) {
                $sql = "insert into person (nome,email,password)
                            VALUES (:nome,:email,:password);";
                $query = $this->conn->prepare($sql); // pdo statement
                $query->bindValue(':nome',$persona->nome);
                $query->bindValue(':email',$persona->email);
                $query->bindValue(':password',$persona->password);
                $query->execute();
                $personExists = person_exists($this->conn, $persona);
                return ["id"=>$personExists['id'], "nome"=>$personExists['nome'], "email"=>$personExists['email']];
            } else {
                return $personExists['id'];
            }
        } else {
            return false;
        }
    }


    public function readAll():array|bool
    {
        if($this->conn) {
            $sql = "SELECT * FROM person;";
            $query = $this->conn->query($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public function read($id, $password)
    {
        if($this->conn) {
            $idPasswordExists = id_password_exists($this->conn, $id, $password);
            if($idPasswordExists !== false) {
                return ["nome"=>$idPasswordExists['nome'], "email"=>$idPasswordExists['email']];
            } else {
                return 'notFound';
            }
        } else {
            return false;
        }
    }


    public function update($id, $nomeNuovo, $emailNuova):bool
    {
        if($this->conn) {
            $sql = "update person set nome=:nome, email=:email where id=:id;";
                $query = $this->conn->prepare($sql); // pdo statement
                $query->bindValue(':nome',$nomeNuovo);
                $query->bindValue(':email',$emailNuova);
                $query->bindValue(':id',$id);
                $query->execute();
                return true;
        } else {
            return false;
        }
    }


    public function delete($id, $password):array|bool|string
    {
        if($this->conn) {
            $idPasswordExists = id_password_exists($this->conn, $id, $password);
            if($idPasswordExists !== false) {
                $sql = "delete from person where id=:id and password=:password";
                $query = $this->conn->prepare($sql);
                $query->bindValue(':id',$id);
                $query->bindValue(':password',$password);
                $query->execute();
                return ["nome"=>$idPasswordExists['nome'], "email"=>$idPasswordExists['email']];
            } else {
                return 'notFound';
            }
        } else {
            return false;
        }
    }

}

?>
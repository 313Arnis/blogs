<?php



class Database {

  public $pdo;

    public function query($sql){

      $statement = $this->pdo->prepare($sql);

      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_ASSOC);

    }public function connect(){

      $dsn = "mysql:host=localhost; port=3306;user=root;password=;dbname=blog_arnis;charset=utf8mb4";

    
      $this->pdo = new PDO($dsn);
    }
}
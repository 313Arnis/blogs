<?php



class Database {
    public function query($sql){

      $dsn = "mysql:host=localhost; port=3306;user=root;password=;dbname=blog_arnis;charset=utf8mb4";

        // PHP Data Object (PDO)
      $pdo = new PDO($dsn);

        // Sagatavot pieprasijumu
      $statement = $pdo->prepare("$sql");

      // Izpildit vaicajumu
      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
}
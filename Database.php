<?php

class Database {
  private $pdo;

  public function __construct($config, $username, $password) {

    $host = $config['host'] ?? 'localhost';
    $dbname = $config['dbname'] ?? '';
    $port = $config['port'] ?? 3306;
    $charset = $config['charset'] ?? 'utf8';

    $dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=$charset";

    try {
      $this->pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]);
    } catch (PDOException $e) {
      die("Database connection failed: " . $e->getMessage());
    }
  }

  public function query($sql, $params = []) {
    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($params);
      return $statement;
    } catch (PDOException $e) {
      die("Query failed: " . $e->getMessage());
    }
  }
}

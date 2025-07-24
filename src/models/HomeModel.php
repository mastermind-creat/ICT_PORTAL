<?php
class HomeModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getHomeData() {
        $stmt = $this->pdo->query("SELECT * FROM home_data"); // Adjust the query as needed
        return $stmt->fetchAll();
    }
}
?>
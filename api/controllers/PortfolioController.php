<?php
class PortfolioController {
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function handleRequest($method) {
        switch($method) {
            case 'GET':
                $this->getPortfolio();
                break;
            // Add other methods as needed
        }
    }

    private function getPortfolio() {
        // Temporary dummy data
        $portfolio = [
            ['id' => 1, 'title' => 'Sample Photo 1', 'category' => 'Portraits'],
            ['id' => 2, 'title' => 'Sample Photo 2', 'category' => 'Events']
        ];
        
        echo json_encode($portfolio);
    }
} 
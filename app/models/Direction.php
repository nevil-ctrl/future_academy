<?php
require_once __DIR__ . '/../../config/db.php';

class Direction {
    public static function all() {
        global $conn; // из db.php
        $stmt = $conn->query("SELECT * FROM directions");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

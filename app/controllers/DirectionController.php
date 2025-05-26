<?php
require_once __DIR__ . '/../models/Direction.php';

class DirectionController {
    private $directions = [];

    public function __construct() {
        $this->directions = Direction::all(); // Загружаем данные при создании
    }

    public function getDirections() {
        return $this->directions;
    }

    public function index() {
        $directions = $this->getDirections();
        include __DIR__ . '/../../views/direction.php';
    }
}
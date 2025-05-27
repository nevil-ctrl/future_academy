<?php
require_once __DIR__ . '/../models/Review.php';


class ReviewController {
    private $model;

    public function __construct($db) {
        $this->model = new ReviewModel($db);
    }

    public function index() {
        $reviews = $this->model->getAll();
        include __DIR__ . '/../views/reviews/index.php';
    }

 public function create($data) {
    $stmt = $this->db->prepare("INSERT INTO reviews (name, email, rating, review_text, created_at) VALUES (?, ?, ?, ?, NOW())");
    return $stmt->execute([
        $data['name'],
        $data['email'],
        $data['rating'],
        $data['comment'] // Используем 'comment' — см. ниже
    ]);
}


    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: /reviews');
            exit;
        }
        $review = $this->model->getById($id);
        include __DIR__ . '/../views/reviews/edit.php';
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /reviews');
    }
}

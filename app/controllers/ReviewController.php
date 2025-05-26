<?php 
require_once __DIR__ . '/../app/models/Review.php';
class ReviewController {
    private $reviewModel;

    public function __construct($db) {
        $this->reviewModel = new ReviewModel($db);
    }

    public function index() {
        $reviews = $this->reviewModel->all();
        $stats = $this->reviewModel->getStats();
        include 'views/reviews/list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_review'])) {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'rating' => (int)$_POST['rating'],
                'review_text' => $_POST['review_text']
            ];
            $this->reviewModel->create($data);
            $message = "Отзыв успешно добавлен!";
            $messageType = "success";
        }

        $reviews = $this->reviewModel->all();
        $stats = $this->reviewModel->getStats();
        include 'views/reviews/list.php';
    }

    public function delete($id) {
        $this->reviewModel->delete($id);
        header('Location: /');
    }

    public function edit($id) {
        $review = $this->reviewModel->find($id);
        include 'views/reviews/edit.php';
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'rating' => (int)$_POST['rating'],
                'review_text' => $_POST['review_text']
            ];
            $this->reviewModel->update($id, $data);
        }

        header('Location: /');
    }
}

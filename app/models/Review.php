<?php
class Review {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function all() {
        $stmt = $this->pdo->query("SELECT * FROM reviews ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO reviews (name, email, rating, review_text) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $data['name'],
            $data['email'],
            $data['rating'],
            $data['review_text']
        ]);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM reviews WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE reviews SET name = ?, email = ?, rating = ?, review_text = ? WHERE id = ?");
        return $stmt->execute([
            $data['name'],
            $data['email'],
            $data['rating'],
            $data['review_text'],
            $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM reviews WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getStats() {
        $stmt = $this->pdo->query("
            SELECT 
                COUNT(*) as total_reviews, 
                AVG(rating) as average_rating,
                SUM(CASE WHEN rating = 5 THEN 1 ELSE 0 END) as five_stars
            FROM reviews
        ");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

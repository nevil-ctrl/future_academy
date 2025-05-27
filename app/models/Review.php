<?php
class ReviewModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM reviews ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM reviews WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $data['review_text'] = $data['comment'];
        $stmt = $this->db->prepare("INSERT INTO reviews (user_id, product_id, rating, comment, created_at) VALUES (?, ?, ?, ?, NOW())");
        return $stmt->execute([
            $data['user_id'],
            $data['product_id'],
            $data['rating'],
            $data['comment']
        ]);
    }
    

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE reviews SET user_id = ?, product_id = ?, rating = ?, comment = ? WHERE id = ?");
        return $stmt->execute([
            $data['user_id'],
            $data['product_id'],
            $data['rating'],
            $data['comment'],
            $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM reviews WHERE id = ?");
        return $stmt->execute([$id]);
    }
    
}

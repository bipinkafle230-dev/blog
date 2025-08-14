<?php

class Post {
    private $id;
    private $title;
    private $content;
    private $author_id;
    private $category_id;
    private $created_at;
    private $updated_at;

    public function __construct($title, $content, $author_id, $category_id) {
        $this->title = $title;
        $this->content = $content;
        $this->author_id = $author_id;
        $this->category_id = $category_id;
        $this->created_at = date("Y-m-d H:i:s");
        $this->updated_at = date("Y-m-d H:i:s");
    }

    public function save($conn) {
        $stmt = $conn->prepare("INSERT INTO posts (title, content, author_id, category_id, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiiss", $this->title, $this->content, $this->author_id, $this->category_id, $this->created_at, $this->updated_at);
        return $stmt->execute();
    }

    public function update($conn) {
        $stmt = $conn->prepare("UPDATE posts SET title = ?, content = ?, category_id = ?, updated_at = ? WHERE id = ?");
        $stmt->bind_param("ssisi", $this->title, $this->content, $this->category_id, $this->updated_at, $this->id);
        return $stmt->execute();
    }

    public function delete($conn) {
        $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->bind_param("i", $this->id);
        return $stmt->execute();
    }

    public static function find($conn, $id) {
        $stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_object('Post');
    }

    public static function all($conn) {
        $result = $conn->query("SELECT * FROM posts");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Getters and Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthorId() {
        return $this->author_id;
    }

    public function getCategoryId() {
        return $this->category_id;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }
}
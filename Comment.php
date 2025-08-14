<?php

class Comment {
    private $id;
    private $postId;
    private $userId;
    private $content;
    private $createdAt;
    private $updatedAt;

    public function __construct($postId, $userId, $content) {
        $this->postId = $postId;
        $this->userId = $userId;
        $this->content = $content;
        $this->createdAt = date("Y-m-d H:i:s");
        $this->updatedAt = date("Y-m-d H:i:s");
    }

    public function getId() {
        return $this->id;
    }

    public function getPostId() {
        return $this->postId;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getContent() {
        return $this->content;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function save() {
        // Code to save the comment to the database
    }

    public function update() {
        // Code to update the comment in the database
    }

    public function delete() {
        // Code to delete the comment from the database
    }

    public static function findByPostId($postId) {
        // Code to find comments by post ID
    }

    public static function findById($id) {
        // Code to find a comment by its ID
    }
}
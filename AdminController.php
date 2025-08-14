<?php

class AdminController {
    private $userModel;
    private $postModel;
    private $commentModel;
    private $categoryModel;
    private $tagModel;

    public function __construct($userModel, $postModel, $commentModel, $categoryModel, $tagModel) {
        $this->userModel = $userModel;
        $this->postModel = $postModel;
        $this->commentModel = $commentModel;
        $this->categoryModel = $categoryModel;
        $this->tagModel = $tagModel;
    }

    public function manageUsers() {
        // Logic to manage users (list, edit, delete)
    }

    public function managePosts() {
        // Logic to manage posts (list, edit, delete)
    }

    public function manageComments() {
        // Logic to manage comments (list, edit, delete)
    }

    public function manageCategories() {
        // Logic to manage categories (list, add, edit, delete)
    }

    public function manageTags() {
        // Logic to manage tags (list, add, edit, delete)
    }
}

?>
<?php

class Category {
    private $id;
    private $name;
    private $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function save() {
        // Code to save the category to the database
    }

    public function update() {
        // Code to update the category in the database
    }

    public function delete() {
        // Code to delete the category from the database
    }

    public static function getAllCategories() {
        // Code to retrieve all categories from the database
    }

    public static function getCategoryById($id) {
        // Code to retrieve a category by its ID from the database
    }
}
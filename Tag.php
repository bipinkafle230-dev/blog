<?php

class Tag {
    private $id;
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function save() {
        // Code to save the tag to the database
    }

    public function delete() {
        // Code to delete the tag from the database
    }

    public static function findAll() {
        // Code to retrieve all tags from the database
    }

    public static function findById($id) {
        // Code to retrieve a tag by its ID from the database
    }
}
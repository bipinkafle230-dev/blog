<?php

class User {
    private $id;
    private $username;
    private $email;
    private $password;
    private $created_at;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
        $this->created_at = date('Y-m-d H:i:s');
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function save() {
        // Code to save the user to the database
    }

    public static function findById($id) {
        // Code to find a user by ID
    }

    public static function findByUsername($username) {
        // Code to find a user by username
    }

    public static function findByEmail($email) {
        // Code to find a user by email
    }

    public function update() {
        // Code to update user details
    }

    public function delete() {
        // Code to delete the user from the database
    }
}
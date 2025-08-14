<?php
// routes.php

require_once 'controllers/AuthController.php';
require_once 'controllers/PostController.php';
require_once 'controllers/CommentController.php';
require_once 'controllers/AdminController.php';

$authController = new AuthController();
$postController = new PostController();
$commentController = new CommentController();
$adminController = new AdminController();

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestUri) {
    case '/login':
        if ($requestMethod === 'GET') {
            $authController->showLoginForm();
        } elseif ($requestMethod === 'POST') {
            $authController->login();
        }
        break;

    case '/register':
        if ($requestMethod === 'GET') {
            $authController->showRegistrationForm();
        } elseif ($requestMethod === 'POST') {
            $authController->register();
        }
        break;

    case '/posts':
        if ($requestMethod === 'GET') {
            $postController->listPosts();
        }
        break;

    case '/posts/create':
        if ($requestMethod === 'GET') {
            $postController->showCreateForm();
        } elseif ($requestMethod === 'POST') {
            $postController->createPost();
        }
        break;

    case '/posts/edit':
        if ($requestMethod === 'GET') {
            $postController->showEditForm();
        } elseif ($requestMethod === 'POST') {
            $postController->editPost();
        }
        break;

    case '/posts/view':
        if ($requestMethod === 'GET') {
            $postController->viewPost();
        }
        break;

    case '/comments':
        if ($requestMethod === 'POST') {
            $commentController->addComment();
        }
        break;

    case '/admin':
        if ($requestMethod === 'GET') {
            $adminController->showDashboard();
        }
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
?>
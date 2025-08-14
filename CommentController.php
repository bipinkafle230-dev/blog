<?php

class CommentController {
    private $commentModel;

    public function __construct() {
        $this->commentModel = new Comment();
    }

    public function addComment($postId, $userId, $content) {
        // Validate input
        if (empty($content)) {
            return ['status' => 'error', 'message' => 'Comment content cannot be empty.'];
        }

        // Add comment to the database
        $result = $this->commentModel->createComment($postId, $userId, $content);
        return $result;
    }

    public function editComment($commentId, $content) {
        // Validate input
        if (empty($content)) {
            return ['status' => 'error', 'message' => 'Comment content cannot be empty.'];
        }

        // Update comment in the database
        $result = $this->commentModel->updateComment($commentId, $content);
        return $result;
    }

    public function deleteComment($commentId) {
        // Delete comment from the database
        $result = $this->commentModel->removeComment($commentId);
        return $result;
    }

    public function getCommentsByPost($postId) {
        // Retrieve comments for a specific post
        $comments = $this->commentModel->getComments($postId);
        return $comments;
    }
}
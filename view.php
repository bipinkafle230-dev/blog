<?php
// view.php - Displays a single blog post along with its comments and related posts

require_once '../../config/database.php';
require_once '../../controllers/PostController.php';
require_once '../../controllers/CommentController.php';

$postController = new PostController();
$commentController = new CommentController();

// Get the post ID from the URL
$postId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch the post details
$post = $postController->getPost($postId);

// Fetch comments for the post
$comments = $commentController->getCommentsByPostId($postId);

// Fetch related posts (optional)
$relatedPosts = $postController->getRelatedPosts($post->category_id);

if (!$post) {
    echo "<h1>Post not found</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title><?php echo htmlspecialchars($post->title); ?></title>
</head>
<body>
    <div class="post">
        <h1><?php echo htmlspecialchars($post->title); ?></h1>
        <div class="post-content">
            <?php echo $post->content; ?>
        </div>
        <div class="post-meta">
            <p>Posted on: <?php echo date('F j, Y', strtotime($post->created_at)); ?></p>
            <p>Categories: <?php echo htmlspecialchars($post->category_name); ?></p>
            <p>Tags: <?php echo htmlspecialchars($post->tags); ?></p>
        </div>
    </div>

    <div class="comments">
        <h2>Comments</h2>
        <?php if (count($comments) > 0): ?>
            <ul>
                <?php foreach ($comments as $comment): ?>
                    <li>
                        <strong><?php echo htmlspecialchars($comment->author); ?></strong>
                        <p><?php echo htmlspecialchars($comment->content); ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No comments yet. Be the first to comment!</p>
        <?php endif; ?>
    </div>

    <div class="comment-form">
        <h2>Leave a Comment</h2>
        <form action="../../controllers/CommentController.php" method="POST">
            <input type="hidden" name="post_id" value="<?php echo $postId; ?>">
            <div>
                <label for="author">Name:</label>
                <input type="text" id="author" name="author" required>
            </div>
            <div>
                <label for="content">Comment:</label>
                <textarea id="content" name="content" required></textarea>
            </div>
            <button type="submit">Submit Comment</button>
        </form>
    </div>

    <div class="related-posts">
        <h2>Related Posts</h2>
        <ul>
            <?php foreach ($relatedPosts as $relatedPost): ?>
                <li><a href="view.php?id=<?php echo $relatedPost->id; ?>"><?php echo htmlspecialchars($relatedPost->title); ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
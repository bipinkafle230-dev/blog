<?php
// edit.php - Form for editing an existing blog post

// Include database connection and necessary models
require_once '../../config/database.php';
require_once '../../models/Post.php';

// Initialize database connection
$database = new Database();
$db = $database->getConnection();

// Initialize post object
$post = new Post($db);

// Check if post ID is provided
if (isset($_GET['id'])) {
    $post->id = $_GET['id'];
    $post->readOne(); // Fetch post details
} else {
    // Redirect to post list if no ID is provided
    header("Location: index.php");
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post->title = $_POST['title'];
    $post->content = $_POST['content'];
    $post->category_id = $_POST['category_id'];
    $post->tags = $_POST['tags'];

    if ($post->update()) {
        // Redirect to the updated post view
        header("Location: view.php?id=" . $post->id);
        exit;
    } else {
        $error_message = "Unable to update post.";
    }
}

// Fetch categories for the dropdown
$categories = $post->getCategories();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Edit Post</title>
</head>
<body>
    <div class="container">
        <h2>Edit Post</h2>
        <?php if (isset($error_message)) { echo "<p class='error'>$error_message</p>"; } ?>
        <form action="" method="POST">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($post->title); ?>" required>

            <label for="content">Content:</label>
            <textarea name="content" id="content" required><?php echo htmlspecialchars($post->content); ?></textarea>

            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" required>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == $post->category_id) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($category['name']); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="tags">Tags:</label>
            <input type="text" name="tags" id="tags" value="<?php echo htmlspecialchars($post->tags); ?>">

            <button type="submit">Update Post</button>
        </form>
    </div>
    <script src="../../assets/js/main.js"></script>
</body>
</html>
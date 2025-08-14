<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Create a New Post</h1>
        <form action="../../controllers/PostController.php?action=create" method="POST">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="content" name="content" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="categories">Categories:</label>
                <select id="categories" name="categories[]" multiple>
                    <!-- Options will be populated from the database -->
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags:</label>
                <input type="text" id="tags" name="tags" placeholder="Comma separated">
            </div>
            <button type="submit">Create Post</button>
        </form>
    </div>
    <script src="../../assets/js/main.js"></script>
</body>
</html>
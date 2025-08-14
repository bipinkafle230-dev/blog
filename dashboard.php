<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Admin Dashboard</h1>
            <nav>
                <ul>
                    <li><a href="users.php">Manage Users</a></li>
                    <li><a href="posts.php">Manage Posts</a></li>
                    <li><a href="comments.php">Manage Comments</a></li>
                    <li><a href="categories.php">Manage Categories</a></li>
                    <li><a href="tags.php">Manage Tags</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <h2>Overview</h2>
                <p>Welcome to the admin dashboard. Here you can manage all aspects of the blogging platform.</p>
            </section>
            <section>
                <h2>Statistics</h2>
                <p>Total Users: <span id="total-users">0</span></p>
                <p>Total Posts: <span id="total-posts">0</span></p>
                <p>Total Comments: <span id="total-comments">0</span></p>
            </section>
        </main>
    </div>
    <script src="../../assets/js/main.js"></script>
</body>
</html>
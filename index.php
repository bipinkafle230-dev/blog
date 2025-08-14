<?php
// This file displays a list of tags available on the platform.

require_once '../../config/database.php';
require_once '../../models/Tag.php';

$database = new Database();
$db = $database->getConnection();

$tag = new Tag($db);
$tags = $tag->getAllTags();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Tags</title>
</head>
<body>
    <div class="container">
        <h1>Tags</h1>
        <ul>
            <?php foreach ($tags as $tag): ?>
                <li><?php echo htmlspecialchars($tag['name']); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
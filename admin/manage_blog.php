<?php
session_start();
include '../includes/db_connect.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}

// Add Blog Post
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_post'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = ''; // Handle file upload if needed
    $stmt = $pdo->prepare("INSERT INTO blog_posts (title, content, image) VALUES (?, ?, ?)");
    $stmt->execute([$title, $content, $image]);
}

// Delete Blog Post
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM blog_posts WHERE id = ?");
    $stmt->execute([$id]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Blog - Medicare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Manage Blog Posts</h2>
        <form method="POST" class="mb-4">
            <div class="mb-3">
                <label class="form-label">Post Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="6" required></textarea>
            </div>
            <button type="submit" name="add_post" class="btn btn-primary">Add Post</button>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query("SELECT * FROM blog_posts");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                    echo "<td>" . substr(htmlspecialchars($row['content']), 0, 100) . "...</td>";
                    echo "<td><a href='manage_blog.php?delete={$row['id']}' class='btn btn-danger btn-sm'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
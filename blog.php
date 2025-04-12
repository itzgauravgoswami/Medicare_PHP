<?php include 'includes/header.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<div class="container py-5">
    <h2 class="text-center mb-5">Health Tips & Articles</h2>
    <div class="row">
        <?php
        $stmt = $pdo->query("SELECT * FROM blog_posts ORDER BY created_at DESC");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card h-100">';
            if ($row['image']) echo '<img src="' . htmlspecialchars($row['image']) . '" class="card-img-top" alt="Blog Image">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
            echo '<p class="card-text">' . substr(htmlspecialchars($row['content']), 0, 100) . '...</p>';
            echo '<a href="#" class="btn btn-primary btn-sm">Read More</a>';
            echo '</div></div></div>';
        }
        ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
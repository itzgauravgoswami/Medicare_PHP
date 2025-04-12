<?php include 'includes/header.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<div class="container py-5">
    <h2 class="text-center mb-5">Our Medical Services</h2>
    <div class="row">
        <?php
        $stmt = $pdo->query("SELECT * FROM services");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card h-100 shadow-sm">';
            echo '<div class="card-body">';
            echo '<i class="fas fa-' . htmlspecialchars($row['icon']) . ' fa-2x mb-3 text-primary"></i>';
            echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
            echo '<p class="card-text">' . htmlspecialchars($row['description']) . '</p>';
            echo '</div></div></div>';
        }
        ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
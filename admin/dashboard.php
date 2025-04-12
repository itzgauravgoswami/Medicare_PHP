<?php
session_start();
include '../includes/db_connect.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Medicare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Medicare Admin</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="manage_services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_appointments.php">Appointments</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Services</h5>
                        <p><?php echo $pdo->query("SELECT COUNT(*) FROM services")->fetchColumn(); ?> Total</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Blog Posts</h5>
                        <p><?php echo $pdo->query("SELECT COUNT(*) FROM blog_posts")->fetchColumn(); ?> Total</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Appointments</h5>
                        <p><?php echo $pdo->query("SELECT COUNT(*) FROM appointments")->fetchColumn(); ?> Total</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
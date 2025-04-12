<?php include 'includes/header.php'; ?>
<?php include 'includes/db_connect.php'; ?>

<div class="container-fluid p-0">
    <!-- Hero Section -->
    <section class="hero-section text-center text-white" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('images/hero.jpeg'); background-size: cover; min-height: 500px;">
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div>
                <h1 class="display-4">Welcome to Medicare</h1>
                <p class="lead">Your trusted partner in healthcare excellence.</p>
                <a href="contact.php" class="btn btn-primary btn-lg">Book Appointment</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row">
                <?php
                $stmt = $pdo->query("SELECT * FROM services LIMIT 6");
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
    </section>

    <!-- Doctors Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Meet Our Doctors</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <img src="images/doctor1.jpeg" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px;" alt="Doctor">
                        <div class="card-body">
                            <h5 class="card-title">Dr. John Smith</h5>
                            <p class="card-text">Cardiologist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <img src="images/doctor1.jpeg" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px;" alt="Doctor">
                        <div class="card-body">
                            <h5 class="card-title">Dr. John Smith</h5>
                            <p class="card-text">Cardiologist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <img src="images/doctor1.jpeg" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px;" alt="Doctor">
                        <div class="card-body">
                            <h5 class="card-title">Dr. John Smith</h5>
                            <p class="card-text">Cardiologist</p>
                        </div>
                    </div>
                </div>
                <!-- Add more doctors -->
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Patients Say</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <blockquote class="blockquote text-center">
                        <p>"Medicare saved my life with their expert care!"</p>
                        <footer class="blockquote-footer">Jane Doe</footer>
                    </blockquote>
                </div>
                <div class="col-md-4 mb-4">
                    <blockquote class="blockquote text-center">
                        <p>"Medicare saved my life with their expert care!"</p>
                        <footer class="blockquote-footer">Jane Doe</footer>
                    </blockquote>
                </div>
                <div class="col-md-4 mb-4">
                    <blockquote class="blockquote text-center">
                        <p>"Medicare saved my life with their expert care!"</p>
                        <footer class="blockquote-footer">Jane Doe</footer>
                    </blockquote>
                </div>
                <!-- Add more testimonials -->
            </div>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
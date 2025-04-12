<?php include 'includes/header.php'; ?>
<?php include 'includes/db_connect.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare("INSERT INTO appointments (name, email, phone, date, time, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $date, $time, $message]);
    $success = "Appointment booked successfully!";
}
?>

<div class="container py-5">
    <h2 class="text-center mb-5">Book an Appointment</h2>
    <?php if (isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
    <div class="row">
        <div class="col-md-6">
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Preferred Date</label>
                    <input type="date" name="date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Preferred Time</label>
                    <input type="time" name="time" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
        </div>
        <div class="col-md-6">
            <h4>Contact Information</h4>
            <p><i class="fas fa-phone"></i> +1-800-123-4567</p>
            <p><i class="fas fa-envelope"></i> info@medicare.com</p>
            <p><i class="fas fa-map-marker-alt"></i> 123 Health St, City, Country</p>
            <iframe src="https://www.google.com/maps/embed?pb=" width="100%" height="300" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
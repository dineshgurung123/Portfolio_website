<link rel="stylesheet" href="style.css">

<?php

$userName = 'root';
$password = 'sspear54321';
$host = 'localhost';
$database = 'my_portfolio';

$connection = mysqli_connect($host, $userName, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<div class="container">
    <?php include('header.php') ?>

    <div class="contact-container">
        <h2 class="contact-header">Contact Me</h2>

        <form action="/contacts.php" method="post">
            <label for="name" class="contact">Name:</label>
            <input type="text" id="name" class="input-name" name="name" required><br>
            <label for="email" class="contact">Email:</label>
            <input type="email" id="email" class="input-email" name="email" required><br>
            <label for="message" class="contact">Message:</label><br>
            <textarea id="message" class="input-message" name="message" required></textarea>
            <button type="submit" class="submit">Send</button><br>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);
            
            $query = "INSERT INTO user (name, email, message) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($connection, $query);

            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

            if (mysqli_stmt_execute($stmt)) {
                echo " <p>Thank you, $name. Your message has been sent.</p>";
                

            } else {
                echo "Error: " . $stmt->error;
            }
            
            $stmt->close();
        }

        $connection->close();
        ?>
    </div>

    <?php include('footer.php') ?>
</div>

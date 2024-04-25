<?php
  // Check for form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Example email sending (for demonstration purposes)
    $to = "your@example.com";
    $subject = "Message from Auth Jamo Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";
    
    // Send email
    mail($to, $subject, $body);

    // Redirect after submission
    header("Location: thank-you.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auth Jamo - Contact</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Contact Auth Jamo</h1>
    <nav>
      <ul>
        <li><a href="outh.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="contact-form">
      <h2>Contact Us</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        <button type="submit">Send Message</button>
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; 2024 Auth Jamo. All rights reserved.</p>
  </footer>
</body>
</html>

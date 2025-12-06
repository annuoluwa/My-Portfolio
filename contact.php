<?php 
$extra_css = '<link href="css/contact.css" rel="stylesheet">';
include "header.php";
  
// Initialize variables
$name = $email = $message = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Simple validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Email sending ( works on server with proper configuration)
        $to = "leezabethyomi@gmail.com"; 
        $subject = "New message from portfolio contact form";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $success = "Thank you! Your message has been sent.";
            $name = $email = $message = ""; // Clear form
        } else {
            $success = "Sorry, there was an error sending your message.";
        }
    } else {
        $success = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link href="style.css" rel="stylesheet">
    <link href="contact.css" rel="stylesheet">
</head>
<body>


    <section class="contact-container">
        <h2>Contact Me</h2>
        <?php if($success != ""): ?>
            <p class="form-success"><?php echo $success; ?></p>
        <?php endif; ?>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required><?php echo $message; ?></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <h5>&copy; Elizabeth 2025</h5>
    </footer>

    <script src="script.js"></script>
</body>
</html>

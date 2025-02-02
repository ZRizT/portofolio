<?php 
$page_title = "Contact";
include('includes/header.php');

$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if ($name && $email && $message) {
        // Send email (configure your SMTP settings)
        $to = $config['email'];
        $subject = "New Contact Form Submission";
        $headers = "From: $email";
        
        if (mail($to, $subject, $message, $headers)) {
            $success_message = "Thank you for your message! I'll respond shortly.";
        } else {
            $error_message = "There was a problem sending your message. Please try again.";
        }
    } else {
        $error_message = "Please fill in all required fields.";
    }
}
?>

<section id="contact" class="contact">
    <h2>Contact Me</h2>
    
    <?php if ($success_message): ?>
        <div class="alert success"><?php echo $success_message; ?></div>
    <?php endif; ?>
    
    <?php if ($error_message): ?>
        <div class="alert error"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
    </form>
</section>

<?php include('includes/footer.php'); ?>
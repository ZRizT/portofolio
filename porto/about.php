<?php 
$page_title = "About";
include('includes/header.php');
?>

<section id="about" class="about">
    <h2>About Me</h2>
    <div class="about-content">
        <img src="assets/images/profile.jpg" alt="Profile Picture">
        <p><?php include('content/about.txt'); ?></p>
    </div>
</section>

<?php include('includes/footer.php'); ?>
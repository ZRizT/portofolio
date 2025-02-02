<?php 
$page_title = "Home";
include('includes/header.php');
?>

<!-- Home Section -->
<section id="home" class="home">
    <div class="content">
        <h1>Hi, I'm <?php echo $config['name']; ?></h1>
        <p><?php echo $config['title']; ?></p>
        <a href="#contact" class="btn">Hire Me</a>
    </div>
</section>

<?php include('includes/footer.php'); ?>
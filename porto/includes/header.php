<?php
// Configuration array
$config = [
    'name' => 'John Doe',
    'title' => 'Web Developer & UI Designer',
    'email' => 'contact@example.com'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title . " | " . $config['name']; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php#home">Home</a></li>
                <li><a href="about.php#about">About</a></li>
                <li><a href="portfolio.php#projects">Portfolio</a></li>
                <li><a href="contact.php#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
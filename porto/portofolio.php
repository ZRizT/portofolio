<?php 
$page_title = "Portfolio";
include('includes/header.php');

$projects = [
    [
        'title' => 'E-commerce Website',
        'image' => 'project1.jpg',
        'description' => 'A full-featured online store built with PHP and MySQL'
    ],
    [
        'title' => 'Blog Platform',
        'image' => 'project2.jpg',
        'description' => 'Custom CMS for content creators'
    ]
];
?>

<section id="projects" class="projects">
    <h2>My Projects</h2>
    <div class="projects-grid">
        <?php foreach ($projects as $project): ?>
        <div class="project-card">
            <img src="assets/images/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
            <h3><?php echo $project['title']; ?></h3>
            <p><?php echo $project['description']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include('includes/footer.php'); ?>
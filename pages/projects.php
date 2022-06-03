<?php include_once('includes/db.php');

$projects_query = "SELECT * FROM projects";
$projects = exec_query($db, $projects_query)->fetchAll();

?>

<html lang="en" class="projects-page-bg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/site.css">
    <link rel="shortcut icon" href="public/favicon.ico">
    <title>Projects</title>
</head>

<body>
    <?php include('includes/topbar.php') ?>
    <header>
        <?php include('includes/navbar.php') ?>
    </header>
    <section class='main'>
        <h1>Projects</h1>
        <div>
            <section id="game-dev">
                <div class='spacious-flex'>
                    <?php foreach ($projects as $project) {
                        ?>
                        <a href="<?php echo $project['page_url'] ?>">
                            <div class='project-card'>
                                <img class='project-card-banner' src="public/images/project-thumbs/<?php echo $project['thumbnail_path'] ?>" alt=""/>
                                <h3><?php echo $project['name'] ?></h3>
                                <h4>Team-Based Game Design + Dev</h4>
                                <ul class='tools-list'>
                                    <?php
                                    ?>
                                </ul>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </section>
</body>

<script src='scripts/jquery-3.6.0.min.js'></script>
<script src='scripts/projects-interaction.js'></script>

</html>
<?php
include_once('includes/db.php');
$proj_url_id = $_GET['project'];
$project = exec_query_params($db, "SELECT * FROM projects WHERE (page_url = :proj_url_id);", array(":proj_url_id" => $proj_url_id))->fetch();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/site.css">
    <link rel="shortcut icon" href="public/favicon.ico">
    <title><?php echo $project['name'] ?> - leckert.dev</title>
</head>

<body>
    <?php include('includes/header.php') ?>
    <section class='main'>

        <p><a href="/projects">Projects</a> > <a href=""><?php echo $project['name'] ?></a></p>

        <?php include('includes/project-writeups/' . $_GET['project'] . '.php'); ?>

    </section>

    <a href="/projects">
        <div class='projects-button'>
            <span>🡄 Back to Projects</span>
        </div>
    </a>

</body>

</html>
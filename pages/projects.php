<?php include_once('includes/db.php');

$projects_query = "SELECT * FROM project_categories INNER JOIN categories ON categories.id = project_categories.category_id INNER JOIN projects ON projects.id = project_categories.project_id;";
$projects = exec_query($db, $projects_query)->fetchAll();
$tools_query = "SELECT tools.name AS 'tools.name', projects.id AS 'projects.id' FROM project_tools INNER JOIN tools ON tools.id = project_tools.tool_id INNER JOIN projects ON projects.id = project_tools.project_id";
$tools = exec_query($db, $tools_query)->fetchAll();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
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
        <div class='spacious-flex'>
            <?php foreach ($projects as $project) {
            ?>
                <a href="view?project=<?php echo $project['page_url'] ?>" class='project-card box-card' >
                        <img class='project-card-banner' src="public/images/project-thumbs/<?php echo $project['thumbnail_path'] ?>" alt="" />
                        <h3><?php echo $project['name'] ?></h3>
                        <ul class='tools-list'>
                            <?php
                            foreach ($tools as $tool) {
                                if ($tool['projects.id'] == $project['id']) {
                            ?> <li> <?php echo $tool['tools.name'] ?> </li> <?php
                                                                                        }
                                                                                    }
                                                                                            ?>
                        </ul>
                </a>
            <?php } ?>
        </div>
</body>

</html>
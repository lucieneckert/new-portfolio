<?php include_once('includes/db.php');

$projects_query = "SELECT * FROM project_categories INNER JOIN categories ON categories.id = project_categories.category_id INNER JOIN projects ON projects.id = project_categories.project_id;";
$projects = exec_query($db, $projects_query)->fetchAll();
$tools_query = "SELECT tools.name AS 'tools.name', projects.id AS 'projects.id' FROM project_tools INNER JOIN tools ON tools.id = project_tools.tool_id INNER JOIN projects ON projects.id = project_tools.project_id";
$tools = exec_query($db, $tools_query)->fetchAll();
?>

<html lang="en">

<script src='public/scripts/projects-filter.js'></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/site.css">
    <link rel="shortcut icon" href="public/favicon.ico">
    <title>Projects - leckert.dev</title>
</head>

<body>
    <?php include('includes/topbar.php') ?>
    <header>
        <?php include('includes/navbar.php') ?>
    </header>
    <section class='main'>
        <h1>Projects</h1>
        <div class='sideways-flex'>
            <div id='sticky-filter-sidebar'>
                <div style="position: sticky; top: 1rem">
                    <div id='projects-filter-bar' class='box-card'>
                        <ul>
                            <li class="filter-button" id='filter-all' onclick="filterProjects('all')" style="border: 2px solid grey">🌟 <br> All</li>
                            <li class="filter-button" id='filter-games' onclick="filterProjects('games')">🎲 <br> Games</li>
                            <li class="filter-button" id='filter-coding' onclick="filterProjects('coding')">🐛 <br> Coding</li>
                            <li class="filter-button" id='filter-music' onclick="filterProjects('music')">🎼 <br> Music</li>
                            <li class="filter-button" id='filter-web' onclick="filterProjects('web')">🖥️ <br> Web</li>
                        </ul>
                    </div>
                    <img src="public/images/icons/rightarrow.png" class="filter-indicator" />
                </div>
            </div>
            <div>
                <div class='featured-project' style="min-width: 40%;">
                    <h2 class='featured-project-title'>Featured Project</h2>
                    <div class='sideways-flex'>
                        <div class="featured-project-text">
                            <img src="public/images/project-thumbs/jb-banner.png" alt="A Small Game About Juiceboxes" class="featured-project-img">
                            <p>My first solo game project made using <a href="https://godotengine.org/">Godot Engine.</a> Developed over three months in quarantine, the focus of this project was to experiment with game "juice" (hence the name) and familiarize myself with the process of developing a game from start to finish.</p>
                            <div>
                                <a href="/jb-browser-ver" class='projects-button' target="_blank">
                                    <span>🎮 Play in Browser</span>
                                </a>
                                <a href="/view?project=jb" class='projects-button'>
                                    <span>📄 Read more</span>
                                </a>
                            </div>
                        </div>
                        <video src="public/project-info-res/jb/jb-trailer.mp4" controls class="featured-project-vid"></video>
                    </div>
                </div>
                <div class='spacious-flex'>
                    <?php foreach ($projects as $project) {
                    ?>
                        <a href="view?project=<?php echo $project['page_url'] ?>" class='project-card box-card project-<?php echo $project['type'] ?>'>
                            <img class='project-card-banner' src="public/images/project-thumbs/<?php echo $project['thumbnail_path'] ?>" alt="" />
                            <?php if ($project['in_progress'] == 1) {
                            ?> <p class='in-progress'>⌛ In Progress</p> <?php
                                                                    } ?>
                            <div>
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
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>

        </div>

</body>

</html>
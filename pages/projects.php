<?php include_once('includes/db.php') ;

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
                    <?php foreach ($projects as $project) { ?>
                        <a href="<?php echo $project['page_url'] ?>">
                        <div class='project-card'>
                            <h3><?php echo $project['name'] ?></h3>
                            <h4>Team-Based Game Design + Dev</h4>
                            <ul class='tools-list'>
                                <li>Unity Engine</li>
                                <li>Paint.NET</li>
                                <li>Blender</li>
                            </ul>
                        </div>
                    </a>
                    <?php } ?>
        </div>
        <div>
            <button id='misc-header' class='expandable-header'> <img src="./res/small_icons/triangle.png" alt=""> Coding Projects
            </button>
            <section id='misc' class="expandable-section">
                <ul class='projects-list'>
                    <a href='projects-info/pokegan.html'>
                        <li>🐛 Generating Pokemon Sprites with a GAN
                            <ul class='tools-list'>
                                <li>PyTorch</li>
                                <li>Jupyter Notebooks</li>
                            </ul>
                        </li>
                    </a>
                    <a href='projects-info/caml-climbers.html'>
                        <li>🐫 CamlClimbers: Tetris variant in OCaml
                            <ul class='tools-list'>
                                <li>OCaml</li>
                            </ul>
                        </li>
                    </a>
                    <a href='projects-info/random-md.html'>
                        <li>🏔️ Random Mystery Dungeon Generator <em>(In Progress)</em>
                            <ul class='tools-list'>
                                <li>Python</li>
                            </ul>
                        </li>
                    </a>
                </ul>
            </section>
        </div>
        <div>
            <button id='music-header' class='expandable-header'> <img src="./res/small_icons/triangle.png" alt=""> Music</button>
            <section id='music' class="expandable-section">
                <div class='project-flex'>
                    <a href="./projects-info/music/jb-ost.html">
                        <div class='project-card'>
                            <img class='album-cover' src="res/jb-game-mus.png" alt="">
                            <h3>A Small Game about Juiceboxes OST</h3>
                        </div>
                    </a>
                    <a href="./projects-info/music/pio-ost.html">
                        <div class='project-card'>
                            <img class='album-cover' src="res/pio-game-mus.png" alt="">
                            <h3>Parole in One OST</h3>
                        </div>
                    </a>
                </div>
            </section>
        </div>
    </section>
</body>

<script src='scripts/jquery-3.6.0.min.js'></script>
<script src='scripts/projects-interaction.js'></script>

</html>
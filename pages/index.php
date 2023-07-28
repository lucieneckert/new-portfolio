<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/site.css">
    <link rel="shortcut icon" href="public/favicon.ico">
    <title>Index - leckert.dev</title>
</head>

<body>
    <?php include('includes/header.php') ?>
    <section class='main'>
        <!-- <?php include('./includes/cat-pet.php') ?> -->
        <article class='index-desc'>
            <div class='sideways-flex'>
                <section id='personal-info'>
                    <img class='self-picture' src="public/images/gitpfp.bmp" alt="stylized picture of my cat Newton">
                </section>
                <section>
                    <em class="bold-paragraph-title">
                        <span style="font-size: 2em;">Hi! I'm Lucien, 🍻</span> 
                        <!-- <br> Graduate student studying at Cornell University. <br> -->
                        <br> Software Engineer and Game Dev Hobbyist. <br>
                    </em>
                    <p>A little bit about me -- </p>
                    <ul class='bio-list'>
                        <li>
                            <span class='icon'>🎓</span>
                            <span>I finished my undergrad at Cornell University with a BA in <a href="https://infosci.cornell.edu/masters/mps" target="_blank">Information Science</a>, alongside a minor in Game Design. I subsequently finished a Masters of Professional Studies, also in Info Sci at Cornell, in May 2023.</span>
                        </li>
                        <li>
                            <span class='icon'>🎮</span>
                            <span>In my free time, I have a passion for making (and playing!) digital and tabletop games. I love the interdisciplinary collaboration within game dev projects, and learning more about pixel art, 3D modeling, and music composition. </span>
                        </li>
                        <!-- <li>
                            <span class='icon'>🔎</span>
                            <span>I'm looking for a software engineering role where I can apply my previous experience building accessible frontend systems, collaborate with others with varied backgrounds and skills, and closely understand the needs of end users!</span>
                        </li> -->
                    </ul>
                    <em class="bold-paragraph-title">
                        Welcome to my portfolio! 😊
                    </em>
                    <ul class='link-list'>
                        <a href='public/documents/resume.pdf' style="flex-grow: 1" target="_blank">
                            <li class='bold-download-link'><img src="public/images/icons/pdf.png" alt="" class='resume-icon'>Download Resume</li>
                        </a>
                        <a href="https://github.com/lucieneckert" target="_blank">
                            <li><img class="link-icon" src="public/images/icons/github.svg" alt="GitHub"></li>
                        </a>
                        <a href="https://www.linkedin.com/in/lucien-eckert/" target="_blank">
                            <li><img class="link-icon" src="public/images/icons/linkedin.svg" alt="LinkedIn"></li>
                        </a>
                        <a href="mailto:lee48@cornell.edu" target="_blank">
                            <li><img class="link-icon" src="public/images/icons/mail.svg" alt="e-mail"></li>
                        </a>
                    </ul>
                </section>
            </div>
        </article>
        <section id='quick-links'>
            <h2>🎨 Featured Game Development Projects</h2>
            <div class='sideways-flex' id='index-projects'>
                <a href="view?project=sk" class="project-card box-card project-games">
                    <img class="project-card-banner" src="public/images/project-thumbs/sprodkart.png" alt="">
                    <p class="in-progress">⌛ In Progress</p>
                    <div>
                        <h3>SPRODKART</h3>
                        <p>Current Independent Team Project</p>
                        <ul class="tools-list">
                            <li> Unity Engine </li>
                            <li> C# </li>
                            <li> Blender </li>
                        </ul>
                    </div>
                </a>
                <a href="view?project=rr" class="project-card box-card project-games">
                    <img class="project-card-banner" src="public/images/project-thumbs/ragdoll.png" alt="">
                    <div>
                        <h3>Ragdoll Royale</h3>
                        <p>Capstone Team Project</p>
                        <ul class="tools-list">
                            <li> C++ </li>
                            <li> Ableton </li>
                        </ul>
                    </div>
                </a>
                <a href="view?project=jb" class="project-card box-card project-games">
                    <img class="project-card-banner" src="public/images/project-thumbs/juiceboxes.png" alt="">
                    <div>
                        <h3>A Small Game About Juiceboxes</h3>
                        <p>Completed Solo-Dev Game</p>
                        <ul class="tools-list">
                            <li> Godot Engine </li>
                            <li> LMMS </li>
                        </ul>
                    </div>
                </a>
            </div>
        </section>
        <h3 style="text-align: center;">Interested in something else? <a href="/projects" class='projects-button'>🌌 View all projects</a></h3>
    </section>
</body>

</html>
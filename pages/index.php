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
    <?php include('includes/topbar.php') ?>
    <header>
        <?php include('includes/navbar.php') ?>
    </header>
    <section class='main'>
        <h1>Welcome! <span class='version-subtitle'>v4.0</span></h1>
        <div class='sideways-flex'>
            <article class='index-desc'>
                <div class='sideways-flex'>
                    <img class='self-picture' src="public/images/self.jpg" alt="selfie, with cat">
                    <p>
                        <em class="bold-paragraph-title">
                            Hi! I'm Lucien, a fourth-year student studying at the College of
                            Arts and Sciences at Cornell
                            University. <br>
                        </em>
                        <br>
                        I'm currently pursuing a bachelor's degree in <a href="https://infosci.cornell.edu/undergraduate/info-sci-majors/ba-information-science-college-arts-sciences" target="_blank">Information
                            Science</a> with a minor in Game Design, graduating in December 2022. I'm also on track to graduate with an MPS degree
                        in May 2023 through <a href="https://infosci.cornell.edu/undergraduate/early-admit-mps">Cornell's early admit program.</a>
                        In my free time, I work to develop games either solo or with a few friends.
                        Welcome to my portfolio!
                    </p>
                </div>
            </article>
            <div class='other-elements'>
                <section>
                    <ul class='link-list'>
                        <a href="https://github.com/lucieneckert">
                            <li><img class="link-icon" src="public/images/icons/github.svg" alt="GitHub"></li>
                        </a>
                        <a href="https://www.linkedin.com/in/lucien-eckert/">
                            <li><img class="link-icon" src="public/images/icons/linkedin.svg" alt="LinkedIn"></li>
                        </a>
                        <a href="mailto:lee48@cornell.edu">
                            <li><img class="link-icon" src="public/images/icons/mail.svg" alt="e-mail"></li>
                        </a>
                    </ul>
                </section>
                <section class='box-card resume'>
                    <span class='resume-exclamation left-exclamation'>whoa!</span>
                    <span class='resume-exclamation right-exclamation'>wow!</span>
                    <img src="public/images/icons/limited.png" alt="Limited edition!" class='limited-edition'>
                    <a href='public/documents/resume.pdf' class='bold-download-link'>
                        <img src="public/images/icons/pdf.png" alt=""><span>View "<em>The Resume</em>"!</span>
                    </a>
                </section>
            </div>
        </div>
        <section id='quick-links'>
            <h2>🎨 Featured Game Development Projects:</h2>
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
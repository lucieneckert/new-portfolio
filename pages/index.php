<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/site.css">
    <link rel="shortcut icon" href="public/favicon.ico">
    <title>Index</title>
</head>

<body>
    <?php include('includes/topbar.php') ?>
    <header>
        <?php include('includes/navbar.php') ?>
    </header>
    <section class='main'>
        <h1>Lucien's Portfolio <span class='version-subtitle'>v4.0</span></h1>
        <div class='sideways-flex'>
            <article class='index-desc'>
                <p>
                    Hi! I'm Lucien, a fourth-year undergrad student studying at the College of
                    Arts and Sciences at Cornell
                    University.
                    I'm currently pursuing a bachelor's degree in <a href="https://infosci.cornell.edu/undergraduate/info-sci-majors/ba-information-science-college-arts-sciences" target="_blank">Information
                        Science</a>, with a
                    concentration on Interactive Technology and a minor in Game Design. Welcome to my portfolio!
                </p>
                <?php include('includes/index-gallery.php') ?>
                <p>Prepare your eyeballs...</p>
                <p>... and get on your hiring clothes.</p>
                <a href="/projects">
                    <div class='projects-button'>
                        <span>🡆 Okay, show me some projects already</span>
                    </div>
                </a>
            </article>
            <div>
            <section class='box-card resume'>
                <img src="public/images/icons/limited.png" alt="Limited edition!" class='limited-edition'>
                <a href='public/resume.pdf' class='bold-download-link'>
                <img src="public/images/icons/pdf.png" alt="">
                    <span>View "<em>The Resume</em>"!</span>
                </a>
            </section>
            <section class='box-card'>
                    <h2>Links</h2>
                    <ul class='link-list'>
                        <li><img class="link-icon" src="public/images/icons/github.svg" alt=""><a href="https://github.com/lucieneckert">GitHub</a></li>
                        <li><img class="link-icon" src="public/images/icons/linkedin.svg" alt=""><a href="https://www.linkedin.com/in/lucien-eckert/">Linkedin</a></li>
                        <li><img class="link-icon" src="public/images/icons/mail.svg" alt=""><a href="mailto:lee48@cornell.edu">lee48@cornell.edu</a></li>
                    </ul>
            </section>
            </div>
        </div>
    </section>
</body>

</html>
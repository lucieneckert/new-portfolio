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
        <h1>Welcome! <span class='version-subtitle'>v4.0</span></h1>
        <div class='sideways-flex'>
            <article class='index-desc'>
                <div class='sideways-flex'>
                    <img src="public/images/self.jpg" alt="selfie, with cat" style="height: 200px; padding: 20px;">
                    <p>
                        <em class="bold-paragraph-title">
                            Hi! I'm Lucien, a fourth-year student studying at the College of
                            Arts and Sciences at Cornell
                            University. <br>
                        </em>
                        I'm currently pursuing a bachelor's degree in <a href="https://infosci.cornell.edu/undergraduate/info-sci-majors/ba-information-science-college-arts-sciences" target="_blank">Information
                            Science</a> with a minor in Game Design, graduating in December 2022. I'm also on track to graduate with an MPS degree
                        in May 2023 through <a href="https://infosci.cornell.edu/undergraduate/early-admit-mps">Cornell's early admit program.</a>
                        In my free time, I work to develop games either solo or with a few friends.
                        Welcome to my portfolio!
                    </p>
                </div>
                <div class='sideways-flex'>
                    <a href="/projects" class='projects-button'>
                        <span>🡆 Okay, just show me some projects already</span>
                    </a>
                    <a href="/projects" class='projects-button'>
                        <span>🡆 Okay, just show me some projects already</span>
                    </a>
                </div>
            </article>
            <div>
                <section class='box-card resume'>
                    <span class='resume-exclamation left-exclamation'>whoa!</span>
                    <span class='resume-exclamation right-exclamation'>wow!</span>
                    <img src="public/images/icons/limited.png" alt="Limited edition!" class='limited-edition'>
                    <a href='public/documents/resume.pdf' class='bold-download-link'>
                        <img src="public/images/icons/pdf.png" alt=""><span>View "<em>The Resume</em>"!</span>
                    </a>
                </section>
                <section class='box-card'>
                    <h2>Links</h2>
                    <ul class='link-list'>
                        <a href="https://github.com/lucieneckert">
                            <li><img class="link-icon" src="public/images/icons/github.svg" alt=""><span>GitHub</span></li>
                        </a>
                        <a href="https://www.linkedin.com/in/lucien-eckert/">
                            <li><img class="link-icon" src="public/images/icons/linkedin.svg" alt=""><span>Linkedin</span></li>
                        </a>
                        <a href="mailto:lee48@cornell.edu">
                            <li><img class="link-icon" src="public/images/icons/mail.svg" alt=""><span>lee48@cornell.edu</span></li>
                        </a>
                    </ul>
                </section>
            </div>
        </div>
    </section>
</body>

</html>
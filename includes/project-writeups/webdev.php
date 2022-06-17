<h2 class='project-title'>Misc. Web Dev Projects</h2>

<ul class='tools-list'>
        <li>HTML</li>
        <li>CSS</li>
        <li>PHP</li>
</ul>

<h3>Class Projects</h3>

<p>I've taken two web development courses during my time at Cornell,
    <a href="">INFO 1300: Introductory Design and Programming for the Web</a> and
    <a href="">INFO 2300: Intermediate Design and Programming for the Web.</a> Both 
    classes had both a design and programming focus, as the names imply. The former 
    was focused on static sites, accessibility, and user testing, but the latter got me familiar with server-side
    rendering and sites backed with databases. Here are some of the sites I had to design
    and develop for those classes:
</p>

<div class='project-info-gallery catalog'>
    <figure>
        <img src="public/project-info-res/webdev/p2.png" alt="">
        <figcaption>Second project for 1300. Site designed as a guide for Ithaca's Apple Harvest Festival.</figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/webdev/p3-desktop.png" alt="">
       <figcaption>Third project for 1300. One requirement of the project was client-side interactivity, so I implemented a carousel/slideshow on the homepage.</figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/webdev/p3-mobile.png" alt="">
        <figcaption>Third project for 1300. The site was designed to be responsive and support a usable mobile view.</figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/webdev/2300-p1.png" alt="">
        <figcaption>First project for 2300. Involved porting the site to PHP, revising the design, and adding new features to meet user needs.</figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/webdev/2300-p2.png" alt="">
        <figcaption>Second project for 2300. Used SQLite as a development database for a site cataloging information on plants. Involved form validation, adding, retreiving, and filtering records, etc.</figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/webdev/2300-p3-0.png" alt="">
        <figcaption>Third project for 2300. Added a catalog view of the database records, and refined the site's design based on user feedback.</figcaption>
    </figure>
    <figure>
        <img class='large' src="public/project-info-res/webdev/2300-p3-1.png" alt="">
        <figcaption>Third project for 2300. Added sessions, editing database records, and protection against unauthorized access through SQL injection, accessing pages without permission, etc.</figcaption>
    </figure>
</div>

<h3>Many, Many Portfolio Iterations</h3>

<p>I've also gone through many iterations of this very portfolio-- </p>

<div class='project-info-gallery'>
    <figure>
        <img src="public/project-info-res/webdev/port-1.png" alt="">
        <figcaption>Second project for 1300. Site designed as a guide for Ithaca's Apple Harvest Festival.</figcaption>
    </figure>
</div>

<script>

    const catalogs = [];

    const generateProjectImgCatalogs = () => {
        Array.from(document.getElementsByClassName("catalog")).forEach((catalog) => {
            // create a catalog
            const figs = catalog.getElementsByTagName("figure");
            for (let i = 0; i < figs.length; i++) {
                const figure = figs[i];
                figure.className = i != 0 ? "thumbnail box-card rounded" : "expanded";
                figure.onclick = () => setCatalogPos(catalog, i);
            }
            catalogs.push(catalog);
        })
    }

    const setCatalogPos = (catalog, pos) => {
        const figs = Array.from(catalog.getElementsByTagName("figure"));
        figs.forEach((figure) => {
            figure.className = "thumbnail box-card rounded"
        })
        figs[pos].className = "expanded"
    }

    generateProjectImgCatalogs();
</script>
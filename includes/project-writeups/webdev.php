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

<div class='catalog' id='first-catalog'>
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
        <figcaption>Third project for 2300. Built on project 2, added a catalog view of the database records, and refined the site's design based on user feedback.</figcaption>
    </figure>
    <figure>
        <img class='large' src="public/project-info-res/webdev/2300-p3-1.png" alt="">
        <figcaption>Third project for 2300. Built on project 2, added sessions, editing database records, and protection against unauthorized access through SQL injection, accessing pages without permission, etc.</figcaption>
    </figure>
</div>

<h3>Many, Many Portfolio Iterations</h3>

<p>I've also gone through many iterations of this very portfolio over the past four years. Some of the earlier ones, uh, definitely demonstrate a
    "learning experience."
</p>

<div class='catalog' id='second-catalog'>
    <figure>
        <img src="public/project-info-res/webdev/port1.png" alt="">
        <figcaption>It's been a long time since I looked at this. It stings. I threw this together quickly Freshman year as part of
            an application for the intro Game Design course, as a designer, and I'm not quite sure why they let me in.
        </figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/webdev/port2.png" alt="">
        <figcaption>Second portfolio iteration, feels more like a legit website with a list of projects. A very verbose list with not a lot of pictures,
            but certainly an improvement over the previous year's ugly image board.
        </figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/webdev/port3.png" alt="">
        <figcaption>Third portfolio iteration -- with a strictly-enforced dark mode. From here on, I began sketching out designs of pages ahead of time, which
            really helped me enforce a style. The little icons in the header would wiggle around when you mouse over them. I kinda miss those guys.
        </figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/webdev/port4.png" alt="">
        <figcaption>Fourth iteration. Tried to go for a clean feel with card-like background elements, and vibrant
            colors to make it feel playful. Also, finally moved project info into separate pages. This was about when I realized
            that a database would be far more approprate to generate these article pages dynamically.
        </figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/webdev/port5.png" alt="">
        <figcaption>Current iteration. First version of the portfolio that isn't completely static, using
            PHP to back the list of projects with a simple database and freeing me from cringing at duplicated information. Hope it turns out okay.
        </figcaption>
    </figure>
</div>

<h3>Other Experience</h3>

<p>Besides the experience mentioned above, I've worked with React on some elements of the AI-Learners website for a prior internship. I'm also building
    a website with Rails for a game design group I'm part of with a few friends. For different reasons, those projects are less suited for being
    described here, but I'd be happy to talk about them if needed.
</p>

<script>
    // My ill-advised idea was to generate catalogs client-side from a div of figures

    const pageCatalogs = {};

    const generateCatalogRepresentations = () => {
        Array.from(document.getElementsByClassName("catalog")).forEach((catalog) => {
            const catalogDict = {};
            const figs = catalog.getElementsByTagName("figure");
            for (let i = 0; i < figs.length; i++) {
                const figure = figs[i];
                catalogDict[i] = {
                    "src": figure.getElementsByTagName("img")[0].src,
                    "alt": figure.getElementsByTagName("figcaption")[0].innerHTML
                }
            }
            pageCatalogs[catalog.id] = catalogDict;
        });
        // console.log("Generated catalogs: ", pageCatalogs)
    }

    const generateProjectImgCatalogs = () => {
        Object.entries(pageCatalogs).forEach(([id, dict]) => {
            const catalogRoot = document.getElementById(id);
            // create a flexbox to put the thumbnails in
            const catalogThumbnailFlex = document.createElement("div")
            catalogThumbnailFlex.className = "catalog-thumbnail-flex"
            Array.from(catalogRoot.getElementsByTagName("figure")).forEach((figureElem, i) => {
                figureElem.alt = dict[i]["alt"]
                // make the rest thumbnails
                figureElem.className = "thumbnail box-card rounded"
                figureElem.onclick = () => setCatalogPos(catalogRoot, i)
                // reparent
                catalogRoot.removeChild(figureElem);
                catalogThumbnailFlex.appendChild(figureElem);
            })
            // add a big expanded figure
            const expandedFigure = document.createElement("figure")
            expandedFigure.className = "expanded"
            expandedFigure.appendChild(document.createElement("img"))
            const expandedCaption = document.createElement("figcaption")
            expandedCaption.className = "box-card"
            expandedFigure.appendChild(expandedCaption)
            catalogRoot.appendChild(expandedFigure);
            catalogRoot.appendChild(catalogThumbnailFlex);
            // set to first position
            setCatalogPos(catalogRoot, 0);
            // wow I should not have used javascript for this
        })
    }

    const setCatalogPos = (catalog, pos) => {
        const bigFig = Array.from(catalog.getElementsByTagName("figure"))[0]
        const smallFig = Array.from(catalog.getElementsByClassName("catalog-thumbnail-flex")[0].getElementsByTagName("figure"))[pos]
        // define what to change
        const bigFigImg = bigFig.getElementsByTagName("img")[0]
        const bigFigCaption = bigFig.getElementsByTagName("figcaption")[0]
        const smallFigImg = smallFig.getElementsByTagName("img")[0]
        const smallFigCaption = smallFig.getElementsByTagName("figcaption")[0]
        const newFigureSrc = smallFigImg.src
        const newFigureCaption = smallFigCaption.innerHTML
        // set the new big figure
        bigFigImg.src = newFigureSrc
        bigFigCaption.innerHTML = newFigureCaption
    }

    generateCatalogRepresentations();
    generateProjectImgCatalogs();
</script>
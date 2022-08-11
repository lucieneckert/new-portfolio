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
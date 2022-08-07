
// Map to category ID in db
const ProjectCategories = {
    Games: "games", Coding: "coding", Music: "music", Web: "web"
}

// good ol client side filtering for speed
const filterProjects = (categoryID) => {
    const projects = document.getElementsByClassName("project-card");
    for (let i = 0; i < projects.length; i++) {
        const elem = projects[i]
        if (categoryID == "all" || elem.classList.contains(`project-${categoryID}`)) {
            elem.style = "display: inline-block"
        } else {
            elem.style = "display: none"
        }
    }
    const buttons = document.getElementsByClassName("filter-button");
    for (let i = 0; i < buttons.length; i++) {
        const elem = buttons[i]
        if (elem.id == `filter-${categoryID}`) {
            elem.style = "border: 2px solid grey"
        } else {
            elem.style = ""
        }
    }
}


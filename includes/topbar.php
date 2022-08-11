<style>

    #top-bar {
        margin-top: -10px;
        margin-left: -20px;
        margin-right: -20px;
        background-color: dimgray;
        text-align: center;
        color: #BEBEBE;
        height: 25px;
        display: flex;
        border: 2px solid black;
        font-family: blockyFont;
    }
    #window-text {
        margin-top: 5px;
        padding: 0px 10px;
    }
    .lines {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .line {
        margin: 2px 0px;
        width: 100%;
        height: 4px;
        background-color: #808080;
    }
    .light {
        height: 1px;
        background-color: #BEBEBE;
        margin-bottom: -2px;
    }
    .boldline {
        height: 4px;
    }
    .tiltleft {
        margin-top: 10px;
        margin-left: 2px;
        transform: rotate(45deg);
    }
    .tiltright {
        margin-top: -3px;
        transform: rotate(-45deg);
    }
    #xbutton {
        font-family: sans-serif;
        transition: 0.2s;
        transition-timing-function: ease-out;
        width: 25px;
        background-color: #808080;
    }
    #xbutton p {
        background-color: white;
        width: 80px;
        color: black;
        opacity: 0;
        animation-duration: 1s;
    }
    #xbutton img {
        width: 100%;
        image-rendering: crisp-edges;
    }

    @keyframes fade {
        from {opacity: 1; }
        to {opacity: 0;}
    }
    </style>

    <script>
        let canEscape = true;
        const escapePositions = [
            "-50px, 30px",
            "30px, 0px",
            "-10px, 30px",
            "50px, 10px",
            "-80px, 0px",
            "0px, 0px",
        ]
        const escapeLabels = [
            "Oop",
            "Nope",
            "???",
            "What would this even do?",
            ";-;",
            "Sorry if this is too cheesy",
            "Figured it wouldn't hurt to give the site a little personality",
        ]
        let currentPositionIdx = 0;
        const setupXButton = () => {
            const xbutton = document.getElementById("xbutton");
            xbutton.onpointerover = () => makeXButtonRun(xbutton);
        }
        const makeXButtonRun = (xbutton) => {
            if (!canEscape) return;
            canEscape = false
            console.log("test")
            escapePos = escapePositions[currentPositionIdx++ % 6]
            xbutton.setAttribute("style", `transform: translate(${escapePos})`);
            const text = document.getElementById("xbutton-text") 
            text.innerHTML = escapeLabels[currentPositionIdx % 7];
            text.setAttribute("style", "animation: none");
            setTimeout(() => {
                text.setAttribute("style", "animation-name: fade");
                canEscape = true
            }, 100)

        }
    </script>

<div id='top-bar'>
    <div class='lines'>
        <div class='line light'></div>
        <div class='line'></div>
        <div class='line light'></div>
        <div class='line'></div>
        <div class='line light'></div>
        <div class='line'></div>
    </div>
    <div id='window-text'>
        PORTFOLIO
    </div>
    <div class='lines'>
        <div class='line light'></div>
        <div class='line'></div>
        <div class='line light'></div>
        <div class='line'></div>
        <div class='line light'></div>
        <div class='line'></div>
    </div>
    <div id='xbutton'>
        <img src="public/images/icons/x.png" alt="x button">
        <p id="xbutton-text">X Button Text...</p>
    </div>
    <script>
        setupXButton()
    </script>
</div>

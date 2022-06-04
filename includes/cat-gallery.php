<script>

const WIDTH = '900'
const HEIGHT = '280'
const RETAIN_IMG_TIME = 4000;
const NUM_SEED_IMAGES = 8;

const getCatPhoto = () => {
    return `public/images/cat-photos/${Math.floor(Math.random() * 12)}.jpg`
}

const imgElements = new Array(NUM_SEED_IMAGES + 1).fill().map(() => document.createElement('img'))
let imgPos = 0

const spawnImage = () => {
    const img = imgElements[imgPos++ % NUM_SEED_IMAGES];
    img.src = getCatPhoto();
    img.className = `box-card cat-pic ${Math.random() < 0.5 ? "top" : "side"}`;
    document.getElementById("cat-gallery").appendChild(img);
    let xOffset = Math.random() * WIDTH
    let yOffset = Math.random() * HEIGHT
    img.setAttribute("style", `left: ${xOffset}px; top: ${yOffset}px`)
    setTimeout(() => {img.remove(); spawnImage()}, RETAIN_IMG_TIME);
}

const spawnImagesOnLoop = () => {
    for (let i = 0; i < NUM_SEED_IMAGES; i++) {
        if (i < NUM_SEED_IMAGES / 3) spawnImage(); // get a few instantly
        // .. and stagger the rest, looks nicer.
        else
            setTimeout(() => spawnImage(), i * RETAIN_IMG_TIME / NUM_SEED_IMAGES); 
    }
}

</script>

<style>

#cat-gallery {
    height: 0px;
    position: relative;
}

#cat-gallery .cat-pic {
    object-fit: cover;
    padding: 0px;
    position: absolute;
    animation-duration: 2s;
    animation-fill-mode: both;
    animation-direction: alternate;
    animation-iteration-count: 2;
}

.top {
    animation-name: 'open-top';
}

.side {
    animation-name: 'open-side';
}

@keyframes open-top {
    0% {height: 0px; width: 300px; opacity: 0;}
    50% {height: 200px; width: 300px; opacity: 1;}
    100% {height: 200px; width: 300px; opacity: 1;}
}

@keyframes open-side {
    0% {height: 300px; width: 0px; opacity: 0;}
    50% {height: 300px; width: 200px; opacity: 1;}
    100% {height: 300px; width: 200px; opacity: 1;}
}

</style>

<div id='cat-gallery'>

</div>

<script>spawnImagesOnLoop()</script>
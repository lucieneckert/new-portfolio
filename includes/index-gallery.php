<style>

.slide-img {
    position: absolute;
    width: 150px;
    animation-name: slide;
    animation-duration: 18s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    clip-path: circle(40%);
}

.slideshow {
    width: 800px;
    height: 200px;
    overflow: hidden;
    margin: 5px auto;
}

.slideshow .end {
    position: absolute;
    background-color: gainsboro;
    width: 100px;
    height: 150px;
}

.slideshow .left {
    clip-path: polygon(0 0, 50% 0, 100% 100%, 0 100%);
}

.slideshow .right {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 100%);
    left: 670px;
}

.slideshow .end-decor {
    background-color: grey;
    position: absolute;
    width: 150px;
    height: 200px;
}

.slideshow .l {
    clip-path: polygon(50% 0, 100% 0, 60% 50%, 100% 100%, 40% 50%);
    transform: translate(10px, 25px) rotate(-45deg);
}

.slideshow .r {
    clip-path: polygon(50% 0, 100% 0, 60% 50%, 100% 100%, 40% 50%);
    left: 670px;
    transform: translate(-55px, -75px) rotate(135deg);
}

@keyframes slide {
    0% {transform: translate(650px, 0px) scale(20%)}
    /* It's boinging time */
    10% {transform: translate(550px, 0px) scale(100%)}
    10.5% {transform: translate(550px, 0px) scale(105%)}
    11% {transform: translate(550px, 0px) scale(97.5%)}
    11.5% {transform: translate(550px, 0px) scale(100%)}
    98% {transform: translate(20px, 0px) scale(100%)}
    100% {transform: translate(0px, 0px) scale(20%)}
}

</style>

<div class='slideshow'>
    <img style="animation-delay: 0s" class="slide-img" src="public/images/thumbnails/5.png" alt="">
    <img style="animation-delay: -3s" class="slide-img" src="public/images/thumbnails/0.png" alt="">
    <img style="animation-delay: -6s" class="slide-img" src="public/images/thumbnails/1.png" alt="">
    <img style="animation-delay: -9s" class="slide-img" src="public/images/thumbnails/2.png" alt="">
    <img style="animation-delay: -12s" class="slide-img" src="public/images/thumbnails/3.png" alt="">
    <img style="animation-delay: -15s" class="slide-img" src="public/images/thumbnails/4.png" alt="">
    <div class='end left'></div>
    <div class='end right'></div>
    <div class='end-decor l'></div>
    <div class='end-decor r'></div>
</div>
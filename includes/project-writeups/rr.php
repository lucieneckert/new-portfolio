<h2 class='project-title'>Ragdoll Royale</h2>
<section class='project-info-summary'>
    <ul class='tools-list'>
        <li>C++</li>
        <li>Ableton</li>
        <li>GIMP</li>
    </ul>
</section>

<p style="font-weight: bold;">
    🚧 This page is currently under construction, but will be updated later!
</p>

<p>
    Ragdoll Royale was a project I worked on for <a href="https://classes.cornell.edu/browse/roster/SP22/class/INFO/4152">INFO 4152: Advanced Game Development</a>.
    The game was written in C++ using the course's in-house CUGL engine. I worked on both design and programming tasks for this project, centralizing my
    focus around the game's audio features and level design. As part of the course's requirements, the game targeted mobile devices, which brought with it a bunch of challenges --
    especially when it came to audio and playtesting.
</p>

<h2>Gameplay</h2>

<p>
    Our game was best described as a turn-based drawing/fighting game, supporting up to four player networked multiplayer where each player controls a ragdoll, battling to be the last one standing. The gist of the gameplay is that on a player's turn, they can expend ink to draw paths within a limited radius that, upon the end of the turn, drag and fling objects along themselves.
    Through this, players can throw objects and characters around the map, whittling away at opponent's health by setting up collisions or planning ahead for combos and chain reactions.
</p>

<div class='project-info-gallery'>
    <figure><img src="public/project-info-res/rr/screenshot-draw.png" alt="draw your path to victory!"></figure>
    <figure><img src="public/project-info-res/rr/screenshot-objects.png" alt="weaponize a variety of objects, even yourself"></figure>
    <figure><img src="public/project-info-res/rr/screenshot-stages.png" alt="battle it out across distinct stages"></figure>
    <figure><img src="public/project-info-res/rr/screenshot-online.png" alt="settle the score online with friends"></figure>
</div>

<h2>Level Design</h2>   

<p>Our game's final release contained 10 stages. In hindsight, it would have been wise to focus on quality over quantity over quality, 
    especially as our game's stages are could be expected to be replayable due to our multiplayer gameplay. Regardless, each stage was
    constructed from design patterns we identified during early playtesting, both planned and emergent, and centered around a specific
    behavior or theme that ended up making games feel vastly different on each stage.
</p>

<h2>Audio</h2>

<p>
    For this project, I moved from LMMS to Ableton for my DAW software. I didn't want to default to the fake-chiptune-esque style
    I usually used -- it wouldn't align with the aesthetic we were aiming for -- so using a new tool could help provide a blank slate
    of sorts with different plugins and instruments available.
    It was a pretty intimidating change, but the higher quality default plugins and session workflow provided a lot of benefits when composing for this game.   
</p>

<p>
    The initial plan was ... . This quickly moved out of scope, and I instead produced three (four, counting the tutorial music) sets of drawing and simulating 
    phase background tracks, alongside one menu theme -- they're organized <a href="">here</a>.
</p>

<p>
    Alongside composition, I was also in charge of implementing all of the audio systems in our game. I hadn't worked with game audio on such a low level before, managing slots
    and audio graph nodes and such in efficient ways (not to mention the learning curve of C++ continuing to surprise me.  It was extremely satisfying when things clicked into place and we ended up
    with a pretty a smooth aural experience that wasn't going to blow out anyone's speakers.  
</p>
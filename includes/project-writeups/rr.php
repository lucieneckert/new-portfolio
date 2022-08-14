<h2 class='project-title'>Ragdoll Royale</h2>
<section class='project-info-summary'>
    <p>May 2022</p>
    <ul class='tools-list'>
        <li>C++</li>
        <li>Ableton</li>
        <li>GIMP</li>
    </ul>
</section>

<p style="font-weight: bold;">
    🚧 This page is currently under construction!
</p>

<p>
    Ragdoll Royale was a project I worked on for <a href="https://classes.cornell.edu/browse/roster/SP22/class/INFO/4152">INFO 4152: Advanced Game Development</a>.
    The game was written in C++ using the course's in-house <a href="https://www.cs.cornell.edu/courses/cs4152/2021sp/resources/engine/">CUGL engine</a>. I worked on both design and programming tasks for this project, centralizing my
    focus around the game's audio features and level design. As part of the course's requirements, the game targeted mobile devices, which brought with it a bunch of challenges --
    especially when it came to audio and playtesting.
</p>

<h2>Gameplay</h2>

<p>
    Our game was best described as a turn-based drawing/fighting game, supporting up to four player networked multiplayer where each player controls a ragdoll, battling to be the last one standing. The gist of the gameplay is that on a player's turn, they can expend ink to draw paths within a limited radius that, upon the end of the turn, drag and fling objects along themselves.
    Through this, players can throw objects and characters around the map, whittling away at opponents' health by setting up collisions or planning ahead for combos and chain reactions.
</p>

<p>
    Players would have to carefully control their position in the stage to ensure they had an advantage over their competition. Spawners would drop objects over time that players
    could use as ammunition. This made it critical for each player to try to maintain access to these objects without being in a position too exposed to attacks by others.
</p>

<div class='project-info-gallery'>
    <figure><img src="public/project-info-res/rr/screenshot-draw.png" alt="draw your path to victory!"></figure>
    <figure><img src="public/project-info-res/rr/screenshot-objects.png" alt="weaponize a variety of objects, even yourself"></figure>
    <figure><img src="public/project-info-res/rr/screenshot-stages.png" alt="battle it out across distinct stages"></figure>
    <figure><img src="public/project-info-res/rr/screenshot-online.png" alt="settle the score online with friends"></figure>
</div>

<h2>Level Design</h2>   

<p>Our game's final release contained ten stages. In hindsight, it would have been wise to focus on quality over quantity over quality, 
    especially as our game's stages are expected to be replayable due to our multiplayer gameplay. At the cost of quite a few hours of sleep, we pulled off ten anyway. 
    Each stage was
    constructed from design patterns we identified during early playtesting (both planned and emergent) and centered around a specific
    behavior or theme that ended up making games feel vastly different on each. Below are some screenshots of our level designs in Tiled and in-game.
</p>

<div class='project-info-gallery'> 
    <figure>
        <img src="public/project-info-res/rr/stage0.png" alt="screenshot of symmetrical stage in Tiled">
        <figcaption>One of our more basic maps gave players comfortable enough starting positions (spawn points here are denoted by the white circles).
        However, it is advantageous for them to move towards the center if
        they wanted to control powerful spawned objects in range of their drawing radius. In many stages like this one, there's a theme of
        riskier locations being close to spawners that drop higher valued objects (like bombs), or objects at higher frequencies to give
        reward nearby players.
        The inherent advantage of spawning in one of the top sections
        (which gave players a gravitational advantage) was also balanced by adding a curved ceiling overhang that let lower players easily bank
        objects into those who linger above.</figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/rr/stage1.png" alt="screenshot of pachinko themed stage in Tiled">
        <figcaption>One problem we quickly identified with our game is the tendency for objects to gravitate towards the bottom of the stage.
        To combat this, one of our stages was designed like a pachinko machine -- here, there are "stage lines" (lines similar to
        the ones drawn by players that stay static in the stage) that flow from the bottom and up each side, flinging objects that
        touch them through a series of distributing pegs. It was extremely difficult to reconcile this design with our eventually
        deterministic physics, which was a higher priority due to our focus on networking. The solution ended up being allowing many
        points of entry into the contraption, which provided enough variation to seem "random" when objects came in with different momentum.</figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/rr/stage3.png" alt="screenshot of vertical bookshelf-themed stage in-game">
        <figcaption>Some of our levels were more vertical. Leaning into this, this level creates a king-of-the-hill type game where players
            scramble to climb upwards towards more defended and object-plentiful positions. In the center of the bottom level is a single bomb
            spawner that lower players can use to take potshots towards those climbing above, higher players can detonate with their objects on impact
            to keep others away, and daring players can use to "bomb-bounce" and quickly gain elevation while leveraging the invincibility each 
            player has during their own turn.
        </figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/rr/stage2.png" alt="Screenshot of divided-halves stage in-game.">
        <figcaption>This stage was unique in the sense that it contained two distinct halves (conveyed to the player though different 
            lighting). Each half is separated by a filter of solid ground that allows crates and bombs to pass through, but not players --
            letting each half attack the other. Players had the option of 1v1ing the other player in their half, or working together to take
            the other half out first. It was also possible to pass between halves through channels on the top and bottom of the stage, in a 
            counter-clockwise direction.
        </figcaption>
    </figure>
</div>

<p>I was also tasked with implementing some of the loaders that built up our levels at runtime from a JSON representation of the design -- specifically
those for the level decor, and invisible walls. 
</p>

<h2>Audio</h2>

<p>
    For this project, I moved from using LMMS to Ableton as my DAW software. I didn't want to default to the fake-chiptune-esque style
    I usually used -- it wouldn't align with the aesthetic we were aiming for -- so using a new tool could help provide a blank slate
    of sorts with different plugins and instruments available.
    It was a pretty intimidating change, but the higher quality default plugins and session workflow provided a lot of benefits when composing for this game.   
</p>

<p>
    The initial plan was to assign each player an instrument, and layer melodic tracks for each over the background music during the respective player's turn. As I started working on more programming tasks, this quickly moved out of scope, and I instead produced three (four, counting the tutorial music) sets of quiet/"drawing" and chaotic/"simulating" 
    phase background tracks, alongside one menu theme. The tracks are organized <a href="/view?project=rr-ost">here</a>.
</p>

<p>
    Alongside composition, I was also in charge of implementing all the audio systems in our game. I hadn't worked with game audio on such a low level before, managing slots
    , effects, and audio graph nodes and such in efficient ways. Getting over the initial hump of C++'s learning curve in general was also a challenging task. It was extremely satisfying when things clicked into place, and we ended up
    with a pretty a smooth aural experience that wasn't going to blow out anyone's speakers.  
</p>
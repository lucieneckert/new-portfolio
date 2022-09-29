<h2 class='project-title'>SPRODKART</h2>
<section class='project-info-summary'>
    <p>August 2022</p>
    <ul class='tools-list'>
        <li>Unity Engine</li>
        <li>C#</li>
        <li>Blender</li>
    </ul>
</section>

<p style="font-weight: bold;">
    🚧 This page is currently under construction!
</p>

<p>SPRODKART (clearly a working title) is an open-ended party racing game (emphasis on local, 4-player couch competitive play) that focuses on providing
    scrappy strategies and chaotic progression.
    Players must balance upgrading vehicles and
    disturbing opponents in preparation for a final race. Most of the game takes places in a large map with many distinct regions;
    each with certain quirks such as a propensity for certain vehicles to spawn or varying stat powerup drop distributions, for example. Within a ten-minute timeframe,
    players need to put together a vehicle build, counter the strategies and builds of others, and hone their navigational skills to survive the specific events, conditions, and final race of each unique match.
</p>

<p>Within this project, each member of our small team works on a wide variety of tasks and features. Personally, I've mainly worked on gameplay and UI programming, 3D modeling, texture work, and misc. organizational and administrative tasks. Some specific features I've worked on so far include the gamemode logic,
    vehicle abilities, entity spawning behavior, player HUD (we love the observer pattern), and dismounted player movement. I'm also starting to maintain the Twitter account.
</p>

<img src="public/project-info-res/sk/city.png" alt="early screenshot of the main city region, with a forest and caves visible in the background" class='project-img' />

<h2>Gameplay</h2>

The main gamemode of SPRODKART consists of two phases, a Prep phase and a Race phase.

<h3>Prep Phase</h3>

<p>During the prep phase, players prepare for the race phase, where the bulk of points can be won. During this phase:</p>

<ul>
    <li>Stat boost power ups can be collected, increasing each specific stat of any vehicle that player rides</li>
    <li>Vehicles can be found, sold, traded (... and destroyed). Players will need to keep an eye on the time and ensure
        they end up with the vehicle they want once the race phase begins.
    </li>
    <li>Points can be accrued. While most points are won during the race phase, players can get a head start by gaining points
        through exploration, selling vehicles, and taking bounties on and tagging/evading other players. It's a challenge to balance
        time between gaining points like this and preparing for the final race.
    </li>
    <li>Random events occur. A thick layer of fog covering the map, increased power up drops for a certain stats, a barrage of orbital lasers and many other scenarios unfold
        a few times each round.
    </li>
</ul>

<h3>Race Phase</h3>

<p>During the race phase, players are teleported to a start line and race between randomly-distributed checkpoints around the open map, competing for points
    based on their placement. Our design goal is to make this phase important, but not the single determining factor of the match's results. We're aiming to have the player that wins (places first overall) in the race phase win the
    entire match 70% of the time, and will specifically study this metric in our technical prototypes.
</p>

<img src="public/project-info-res/sk/cave.png" alt="screenshot of the cave region" class='project-img'>

<h2>Vehicles</h2>

<p>One major theme of SPRODKART is an emphasis on unique and visually striking ("somewhat deranged" shows up in our design document a lot) vehicles that each offer
    different base stats, abilities, and even control schemes. Each is likely to change a lot over the course of development,
    but some early forms are as follows:
</p>

<div class='project-info-gallery'>

    <figure>
        <img src="public/project-info-res/sk/koi.png" alt="screenshot of early koi vehicle">
        <figcaption>The Power Koi vehicle. Heavy and with a high top speed, this vehicle rides the snow like waves and
            comes with considerable offensive capabilities. Create wakes to make your overtakes pack a punch by pushing away and
            eroding opponent's vehicles, and conjure geysers ahead of your path to throw enemies into the air -- or yourself towards
            a high-up shortcut.
        </figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/sk/gslurp.png" alt="screenshot of early grand slurp vehicle">
        <figcaption>The Grand Slurp is the propriety vehicle of the common convenience store chain 21-Eight Sixty Three. Fueled by giant
            cups of free-refilled soda, any semblance of sane handling is sacrificed for incredible top speed and a sustained boost
            ability. Players will want to invest in compensating for its flaws before the final race begins.
        </figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/sk/ppopper.png" alt="screenshot of early grand party popper vehicle">
        <figcaption>The Party Popper doesn't exactly have an engine. While sheer willpower lets it barely accelerate and turn to an extent,
            this vehicle relies on its short-cooldown abilities to move. With both a confetti-laden frontstep and backstep, those who master its movement
            have hair-trigger control over this machine's velocity. Great for dodging and weaving -- and near-limitlessly accelerating in the air
        </figcaption>
    </figure>
    <figure>
        <img src="public/project-info-res/sk/dbug.png" alt="screenshot of early grand dark bug vehicle">
        <figcaption>
            The Dark Bug is a vehicle focused on relentlessly attacking foes. Despite its low top speed, high handling and drift boosts let it
            close in and intercept opponents that get careless. This vehicle can cast a debuff on others within a range,
            decreasing their top speed and leaving them vulnerable to the vehicle's other ability: a short-range but high-damage suplex that throws
            enemies straight towards last place.
        </figcaption>
    </figure>
</div>

<p>Vehicle movement is implement to mirror the patterns commonly found in popular kart-racing games. Our goal with this project is to let
    the complexity arise from vehicle and stat builds, rather than tough controls. The vehicle physics themselves were created with raycasts acting both as suspensions
    and vehicle "wheels," giving the game a somewhat bouncy feel when the spring parameters are tuned correctly. In the vein of other kart-racing games,
    our vehicles drift upon landing on the ground while a button is held, and allows them to build up a boost after a few seconds.
</p>

<div class='project-info-gallery'>
    <figure>
        <video src="public/project-info-res/sk/driftin.mp4" alt="Video of the player drifting in the torus vehicle" controls> </video>
        <figcaption>Footage of our early drifting in the Torus vehicle. Vehicles start with low base stats, so the speed
            and drift boost in this clip are both low. The effects are also... very WIP.
        </figcaption>
    </figure>

</div>

<p>We're going to start maintaining more regular progress updates on our <a href="https://twitter.com/sprodsoft">twitter account</a>, so please stay tuned if you're interested! Currently, we're aiming for an early access release near the end of the year. </p>
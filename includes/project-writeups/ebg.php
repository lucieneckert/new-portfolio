<h1>Enjoyable Block Game</h1>
<section class='project-info-summary'>
    <p>May 2021</p>
    <ul class='tools-list'>
        <li>Godot Engine</li>
        <li>LMMS</li>
        <li>Paint.NET</li>
    </ul>
</section>
<p>
    A game made as a final project for <a href="https://classes.cornell.edu/browse/roster/SP21/class/MUSIC/2701">
        MUSIC 2701: Music and Digital Gameplay</a>. The main focus of
    the
    project was to study ways to represent the push and pull of action
    and
    puzzle gameplay elements through sound design.
</p>
<p>
    Four players would compete in two teams -- one teammate each
    controlling
    either an action-platforming climber or a Tetris-esque
    block-dropping UFO,
    working together to have the climber reach the trophy at the top of
    the
    screen.
</p>

<div class='project-info-gallery'>
    <figure class='big'><img src="../res/project-info-res/ebg/action-screen.png" alt="Screenshot of the game's action phase">
        <figcaption>
            Screenshot of the game's action phase. The two teams (blue
            and red) are competing to
            have their climber reach the trophy. Blue's UFO has placed a
            few blocks to build a way up,
            and the climber has traversed them somewhat. The powerups
            each climber has is also on
            display -- blue's climber must have taken a jump potion to
            make it up there (the initial
            jump height of each player is one block) and the red climber
            has double-jump-enabling wings.
        </figcaption>
    </figure>
    <figure class='big'><img src="../res/project-info-res/ebg/puzzle-screen.png" alt="Screenshot of the game's puzzle phase">
        <figcaption>
            Screenshot of the game's puzzle phase. The climber and UFO
            on each team have the chance
            to select one of three power-ups to enhance their abilities.
            For the UFO, these powerups
            can change the block distribution, movement speed, and
            cooldown time, etc. For the climber,
            powerups may increase speed, jump height, block-breaking
            ability, knockback when attacking
            the other climber, etc.
        </figcaption>
    </figure>
</div>

<p>
    Between rounds (after one team gets the trophy) all players would
    have the chance to select one power-up to change their abilities in
    some way. These powerups would stack between rounds, meaning careful
    players could find ways to create powerful synergies.
</p>


<p>Since this was produced for a class studying the intersection of
    music and gameplay, the main challenge of this project was designing
    a
    sound system that reflected the gameplay in novel ways, and
    building up the code that could create those designed effects.
    Cutting a
    long story short, this ended up revolving around encoding the state
    of the
    gameplay in a "sound vector" with three components of values ranging
    from 0 to 1 -- one describing the relative activity level of the
    puzzle
    players of each team versus the action players of each, one
    describing
    the "phase" of the game (the phases described by the screenshots
    above),
    and one encoding the intensity of the current round (measured by how
    close
    each player is to the trophy). Using this information, the game
    attempts to string
    together chords / melody fragments and layering tracks to create a
    soundtrack reflective of the state of the gameplay.
</p>
<video src="../res/project-info-res/ebg/demo.mp4" controls></video>
<p>More detailed information on this project and the design/development
    process
    can be found in <a href="../res/ebg-rationale.pdf">this
        rationale</a>.</p>
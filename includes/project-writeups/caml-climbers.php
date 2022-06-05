<h1>Caml Climbers</h1>
<section class='project-info-summary'>
    <p>May 2021</p>
    <ul class='tools-list'>
        <li>OCaml</li>
    </ul>
</section>

<p>A Tetris-esque game developed as a final project for CS 3110: Data Structures and Functional Programming.
    I worked on a team of four to develop a robust piece of software using the language OCaml, and we decided to
    emulate the Field Climber mode of Tetris Party for the Wii, with some added features.</p>

<p>Using functional programming to build a game was a new experience to me, and figuring out the flow of the
    game
    without relying on a mutable state was a challenge that put me way out of my comfort zone. I specialized in
    building out
    our board interface and implementation, handling the manipulation of pieces as they fall, updating the cells
    dropped on the board,
    and the hold and next pieces queues -- basically, all the functionality that takes in a board and spits out
    another board as the game runs.
</p>

<p>We ended up finishing our main functionality ahead of schedule, giving us the chance to build out some
    extra features. I was responsible for adding different themes to the game, automatically loading JSON files
    from a directory, each with a clear structure that allows the user to add their own if decided.
</p>

<video controls src="../res/project-info-res/camlclimb/theme-change.mp4"></video>

<p>We also allowed the user to choose various game speeds and keep track of their scores. Things could get
    pretty hectic on the highest difficulty:
</p>

<video controls src="../res/project-info-res/camlclimb/high-speed.mp4"></video>

<p>The visuals are a little rough around the edges, but considering we made the choice to draw everything
    on-screen with primitive shapes to reduce the number of packages we were dependent on, I'm happy
    with how the game turned out!
</p>
<h2 class='project-title'>Random Mystery Dungeon Generator</h2>
<section class='project-info-summary'>
    <p>November 2021</p>
    <ul class='tools-list'>
        <li>Python</li>
    </ul>
</section>

<h2><em>Currently in Progress!</em></h2>

<p>Repo <a href="https://github.com/lucieneckert/RandomMysteryDungeonGen">here</a>.</p>

<p>The goal of this project is to create a system that can produce randomly
    generated images that feel reminiscent of the environments found in the DS
    entries of the <em>Pokemon Mystery Dungeon</em> series, almost like screenshots that never existed. This is an artistic
    project, so the goal is to make something visually (and nostalgically)
    pleasing -- and, if all goes well, hook it up to a Twitter bot that can
    tweet one a few times a day.</p>


<h2>Step 1: Dungeon Snapshot Generation</h2>

<p>The first step of the project was to find a way to produce randomly-generated
    representations of dungeon "snapshots" (basically enough to take up the
    width of a DS screen) that could then be graphically dressed-up to produce
    our final output. The first approach I took was to encode a dungeon in a 2D numpy array, with the following basic scheme:</p>

<pre><code>
            0 0 0 0 0 0 0 0 0 0 
            1 1 1 1 1 1 0 0 0 0 
            0 0 1 1 1 1 0 0 0 0 
            0 0 1 1 1 1 1 1 1 1 
            0 0 0 0 0 0 0 0 0 0 

            0 = wall tile
            1 = floor tile
        </code></pre>

<p>This let me create snapshot representations by initializing a dungeon as an
    all-zero (all walls) array of a given shape, then place rooms (regions that
    aren't all wall) on top of it by adding arrays with some non-zero regions.
    The initial algorithm I used was roughly as follows:
<ol>
    <li>Create a dungeon array of shape (x, y) where all elements are 0</li>
    <li>Choose a random "main room" to generate (based on max size x, y)) and place it on the dungeon at a random but legal location.</li>
    <li>Create hallways to the border of the snapshot 1-3 times by choosing a random spot that isn't a wall and replacing all walls from there until an edge with floor.</li>
    <li>Return the array representation of the dungeon.</li>
</ol>

The system could then produce outputs such as these:
</p>

<div class='project-info-gallery'>
    <pre><code>
[[1. 1. 1. 1. 1. 0. 0. 0. 0. 0.]     
[1. 1. 1. 1. 1. 0. 0. 0. 0. 0.]
[1. 1. 1. 1. 1. 0. 0. 0. 0. 0.]
[1. 1. 1. 1. 1. 0. 0. 0. 0. 0.]
[1. 1. 1. 1. 1. 0. 0. 0. 0. 0.]
[1. 1. 1. 1. 1. 0. 0. 0. 0. 0.]
[0. 0. 0. 0. 0. 0. 0. 0. 0. 0.]
[0. 0. 0. 0. 0. 0. 0. 0. 0. 0.]]
                </code></pre>
    <pre><code>
[[0. 0. 0. 0. 0. 0. 0. 0. 0. 0.]
[0. 0. 0. 0. 0. 1. 0. 0. 0. 0.]
[0. 0. 0. 1. 1. 1. 1. 1. 1. 0.]
[1. 1. 1. 1. 1. 1. 1. 1. 1. 0.]
[0. 0. 0. 1. 1. 1. 1. 1. 1. 0.]
[0. 0. 0. 0. 0. 0. 0. 1. 0. 0.]
[0. 0. 0. 0. 0. 0. 0. 1. 0. 0.]
[0. 0. 0. 0. 0. 0. 0. 1. 0. 0.]]
                </code></pre>
</div>

<p>As an initial approach, these are servicable and reminiscent enough of the dungeon layout generation within the <em>Mystery Dungeon</em> series.</p>

<p><em>Next Steps:</em> Differntiate between inner wall, floor-adjacent, corner, etc. tiles in this representation. Also, consider generating pools of water.</p>

<h2>Step 2: Mapping Tilesets onto Snapshot Representations</h2>

<p>Creating some initial images to better visualize these representations is easy enough. We want every tile to be 32x32, so using PIL to generate images of the proper size from a given array's shape and "pasting" tiles at certain positions, we can already make some images with placeholder graphics:</p>

<div class='project-info-gallery'>
    <figure><img src="public/project-info-res/rmd/initial-0.png" alt=""></figure>
    <figure><img src="public/project-info-res/rmd/initial-1.png" alt=""></figure>
</div>

<p><em>Next Steps:</em> Generate and use more appropriate tilesets, etc.</p>

<h2>Steps 3-n: TBD</h2>

<ol>
    <li>
        Create character sprites to populate the dungeons
    </li>
    <li>
        Create Twitter bot to post output of the system
    </li>
</ol>
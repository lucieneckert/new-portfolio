<h1>Springs With Guns (Working Title)</h1>
<section class='project-info-summary'>
    <p>In Development</p>
    <ul class='tools-list'>
        <li>Godot Engine</li>
        <li>Paint.NET</li>
    </ul>
</section>
<p>
    Currently in the prototyping/early-development phase. An attempt to
    produce a casual platform fighting game with an emphasis on simple controls and a
    reliance on the interaction
    between spring
    physics and gun recoil for movement.
</p>

<p>
    It's taking a while to refine the movement system. Making things "springy" with Godot Engine's
    built-in physics engine wasn't immediately obvious -- especially when it was important for
    the player to be able to manually compress it and use the release as the primary force of
    movement. Here are some iterations the player character's physics went through:
</p>

<div class='project-info-gallery'>
    <figure class='large'><video controls src="../res/project-info-res/swg/initial_0.mp4"></video>
        <figcaption>Initial model of the springy player. Uses a box with spring joints that resists the inwards
            forces of the top and bottom "planes." Fakes the release force by bumping the player upwards.
        </figcaption>
    </figure>
    <figure class='large'><video controls src="../res/project-info-res/swg/initial_1.mp4"></video>
        <figcaption>The next iteration of the springy player. More "realistic" spring-like construction, with more
            accurate compression and less-obvious extra force added to improve the feel of the release. However,
            it's prone to getting tangled up in itself and flying away...
        </figcaption>
    </figure>
    <figure class='large'><video controls src="../res/project-info-res/swg/initial_2.mp4"></video>
        <figcaption>The near-current iteration of the springy player. Higher-resistence overall
            works to combat tangling, while still visually reflecting a "springy" feel. The arrows
            are a debug feature showing where the game expects to add a bit of force to help the
            player move when the spring contraction is released. Still somewhat buggy at that point.
        </figcaption>
    </figure>
    <figure class='large'><video controls src="../res/project-info-res/swg/tangle-and-camera.mp4"></video>
        <figcaption>Even after refining the springy composition of the player, the "tangling-up" problem was still
            present after getting hit by another player's bullet:
        </figcaption>
    </figure>
</div>

<p>
    Currently, the game is playable with two players in a slightly-polished prototype form. The physics
    have hit a nice balance between realistic and game-y, hopefully resulting in a movement system that
    gives off an easy-to-learn, hard to master vibe.
</p>

<video controls src="../res/project-info-res/swg/current.mp4"></video>

<p>
    Next steps for this project are unclear at the moment. Most recently, I've spent some time placing the spring characters
    in new environments to see what types of stage designs would be most worth pursuing:
</p>

<div class='project-info-gallery'>
    <figure class='large'><video controls src="../res/project-info-res/swg/race.mp4"></video>
        <figcaption>
            Adding a "racing" mode to the game, where the springs must navigate large courses, could help place more focus on the unique spring-like movement of
            the characters. However, precise mechanics for such a mode (and how to deal with the dynamic camera)
            have yet to be determined.
        </figcaption>
    </figure>
    <figure class='large'><video controls src="../res/project-info-res/swg/slopes.mp4"></video>
        <figcaption>
            Designing stages with slopes can create some interesting (but often frustrating) movement situations.
            Unrelatedly, I really dig this cloud effect.
        </figcaption>
    </figure>
</div>